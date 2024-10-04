<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\FireIncident;
use App\Models\Team;
use App\Models\TeamAssignment;
use App\Models\WebsiteSetting;
use Illuminate\Support\Facades\Hash;

class AdminController extends Controller
{
    public function dashboard()
    {
        $userCount = User::count();
        $fireAlertCount = FireIncident::count();
        $completedAlertCount = FireIncident::where('status', 'completed')->count();

        // Monthly Report Data
        $monthlyLabels = ['January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December'];
        $monthlyData = [];

        foreach ($monthlyLabels as $month) {
            $monthlyData[] = FireIncident::whereMonth('created_at', date('m', strtotime($month)))->count();
        }

        $incidents = FireIncident::latest()->limit(10)->get();

        return view('admin.dashboard', compact('userCount', 'fireAlertCount', 'completedAlertCount', 'monthlyLabels', 'monthlyData', 'incidents'));
    }

    public function searchTeams(Request $request)
    {
        $search = $request->input('search');
        $teams = Team::query()
            ->when($search, function($query, $search) {
                $query->where('team_name', 'like', "%{$search}%")
                      ->orWhere('members', 'like', "%{$search}%");
            })
            ->get();

        return view('admin.partials.team-list', compact('teams'))->render();
    }
    public function manageTeams()
    {
        $teams = Team::all();
        return view('admin.teams', compact('teams'));
    }

    public function saveTeam(Request $request)
    {
        $request->validate([
            'team_name' => 'required|string|max:255',
            'members' => 'required|string', // Expecting JSON string
        ]);

        $team = Team::updateOrCreate(
            ['id' => $request->id],
            [
                'team_name' => $request->team_name,
                'members' => $request->members, // Save as JSON string
            ]
        );

        return redirect()->route('admin.teams')->with('status', 'Team saved successfully!');
    }

    public function deleteTeam($id)
    {
        Team::find($id)->delete();
        return redirect()->route('admin.teams')->with('status', 'Team deleted successfully!');
    }

    public function manageFireAlerts()
    {
        $incidents = FireIncident::orderBy('created_at', 'desc')->paginate(10); // Adjust the number per page as needed
        $teams = Team::all(); // Get all teams for the assignment dropdown
        return view('admin.fire-alerts', compact('incidents', 'teams'));
    }

    public function updateFireAlert(Request $request, $id)
    {
        $request->validate([
            'status' => 'required|string',
            'team_id' => 'nullable|exists:teams,id',
        ]);

        $incident = FireIncident::find($id);
        $incident->status = $request->status;
        $incident->remarks = $request->remarks;

        // Detach existing teams and attach the new team
        if ($request->team_id) {
            $incident->teams()->sync([$request->team_id]);
        } else {
            $incident->teams()->detach();
        }

        $incident->save();

        return redirect()->route('admin.fire-alerts')->with('status', 'Fire alert updated successfully!');
    }

    public function assignTeam(Request $request, $incidentId)
    {
        $request->validate([
            'team_id' => 'required|exists:teams,id',
        ]);

        TeamAssignment::create([
            'team_id' => $request->team_id,
            'fire_incident_id' => $incidentId,
        ]);

        return redirect()->route('admin.fire-alerts')->with('status', 'Team assigned successfully!');
    }

    public function viewReports(Request $request)
    {
        $startDate = $request->input('start_date');
        $endDate = $request->input('end_date');
        $query = FireIncident::query();

        if ($startDate) {
            $query->whereDate('created_at', '>=', $startDate);
        }

        if ($endDate) {
            $query->whereDate('created_at', '<=', $endDate);
        }

        $incidents = $query->get();
        return view('admin.reports', compact('incidents'));
    }

    public function websiteSettings()
    {
        $settings = WebsiteSetting::all();
        return view('admin.settings', compact('settings'));
    }

    public function updateSettings(Request $request)
    {
        $request->validate([
            'settings' => 'required|array',
        ]);

        foreach ($request->settings as $key => $value) {
            WebsiteSetting::updateOrCreate(
                ['setting_key' => $key],
                ['setting_value' => $value]
            );
        }

        return redirect()->route('admin.settings')->with('status', 'Settings updated successfully!');
    }

    public function manageProfile()
    {
        return view('admin.profile');
    }

    public function updateProfile(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users,email,' . auth()->id(),
            'password' => 'nullable|string|min:8|confirmed',
        ]);

        $user = auth()->user();
        $user->name = $request->name;
        $user->email = $request->email;

        if ($request->filled('password')) {
            $user->password = Hash::make($request->password);
        }

        $user->save();

        return redirect()->route('admin.profile')->with('status', 'Profile updated successfully!');
    }

    public function updateStatus(Request $request, $id)
    {
        $request->validate([
            'status' => 'required|string|max:50',
            'remarks' => 'nullable|string|max:255',
        ]);

        $incident = FireIncident::find($id);
        $incident->status = $request->status;
        $incident->remarks = $request->remarks;
        $incident->save();

        return redirect()->route('admin.fire-alerts')->with('status', 'Fire alert updated successfully!');
    }

    public function getNewAlertsCount()
    {
        $newAlertsCount = FireIncident::where('status', 'new')->count();
        return response()->json(['count' => $newAlertsCount]);
    }

    public function destroy($id)
    {
        $incident = FireIncident::findOrFail($id);
        $incident->delete();

        return redirect()->route('admin.fire-alerts')->with('status', 'Fire alert deleted successfully!');
    }

    public function track($id)
    {
        $incident = FireIncident::findOrFail($id);
        // Logic to track the incident using GPS coordinates and redirect to a map view
        return redirect()->route('admin.fire-alerts.map', $incident->id);
    }

   public function showMap($id)
{
    $incident = FireIncident::findOrFail($id);

    if ($incident->gps_address) {
        $mapUrl = $this->generateMapUrl($incident->gps_address);
        return redirect()->away($mapUrl);  // Redirects to the map URL in a new tab
    } else {
        return view('admin.fire-alerts.map', ['incident' => $incident, 'mapUrl' => null]);
    }
}

protected function generateMapUrl($gpsAddress)
{
    return 'https://www.google.com/maps?q=' . urlencode($gpsAddress);
}


}
