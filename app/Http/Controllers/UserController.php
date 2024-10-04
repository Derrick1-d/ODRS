<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Log;
use Illuminate\Http\Request;
use App\Models\FireIncident;

class UserController extends Controller
{


    public function showReportForm()
    {
        return view('report');
    }

    public function submitReport(Request $request)
    {
        // $request->validate([
        //     'name' => 'required|string|max:255',
        //     'mobile_number' => 'required|string|max:15',
        //     'gps_address' => 'required|string',
        //     'description' => 'required|string',
        //     'media' => 'nullable|file|mimes:jpeg,png,jpg,gif,mp4,mov,avi|max:2048',
        // ]);

        $userId = auth()->id();

        if (!$userId) {
            return redirect()->route('report.form')->withErrors(['error' => 'User is not authenticated. Please log in.']);
        }

        $incident = new FireIncident();
        $incident->user_id = $userId;
        $incident->name = $request->name;
        $incident->mobile_number = $request->mobile_number;
        $incident->gps_address = $request->gps_address;
        $incident->description = $request->description ?? 'No description provided';

        if ($request->hasFile('media')) {
            $incident->media_path = $request->file('media')->store('media');
        }

        $incident->save();

        return redirect()->route('report.form')->with('status', 'Incident reported successfully!');
    }

    public function trackIncident()
    {
        $incidents = FireIncident::where('user_id', auth()->id())->get();
        return view('track', compact('incidents'));
    }

    public function getIncident($id)
{
    $incident = FireIncident::findOrFail($id);
    return response()->json($incident);
}

public function sendAlert(Request $request)
{
    try {
        $request->validate([
            'latitude' => 'required|numeric',
            'longitude' => 'required|numeric',
            'gps_address' => 'nullable|string',
        ]);

        $userId = auth()->id();

        if (!$userId) {
            return response()->json(['error' => 'User is not authenticated.'], 401);
        }

        $incident = new FireIncident();
        $incident->user_id = $userId;
        $incident->latitude = $request->latitude;
        $incident->longitude = $request->longitude;
        $incident->gps_address = $request->gps_address;
        $incident->status = 'new';
        $incident->save();

        return response()->json(['message' => 'Alert sent successfully!']);
    } catch (\Exception $e) {
        \Log::error('Error sending alert: '.$e->getMessage());
        return response()->json(['error' => 'Internal server error.'], 500);
    }
}

}
