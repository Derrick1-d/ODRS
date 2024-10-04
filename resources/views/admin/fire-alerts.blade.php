@extends('layouts.admin')

@section('title', 'Manage Fire Alerts')

@section('content')
    <div class="container mt-3">
        <h2>Manage Incident Alerts</h2>
        @if (session('status'))
            <div class="alert alert-success">
                {{ session('status') }}
            </div>
        @endif

        <div class="card mb-3">
            <div class="card-header">
                <h4 class="mb-0">Fire Alerts</h4>
            </div>
            <div class="card-body table-container">
                <table class="table table-bordered table-sm">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Name</th>
                            <th>Mobile Number</th>
                            <th>GPS Address</th>
                            <th>Description</th>
                            <th>Status</th>
                            <th>Assigned Team</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($incidents as $incident)
                            <tr>
                                <td>{{ $incident->id }}</td>
                                <td>{{ $incident->name }}</td>
                                <td>{{ $incident->mobile_number }}</td>
                                <td>{{ $incident->gps_address }}</td>
                                <td>{{ $incident->description }}</td>
                                <td>{{ ucfirst($incident->status) }}</td>
                                <td>
                                    @if($incident->teams)
                                        @foreach($incident->teams as $team)
                                            {{ $team->team_name }}<br>
                                        @endforeach
                                    @endif
                                </td>
                                <td>
                                    <!-- View Alert Modal Trigger -->
                                    <button class="btn btn-info btn-sm" data-toggle="modal" data-target="#viewAlertModal{{ $incident->id }}">View</button>
                                    <!-- Delete Alert -->
                                    <form action="{{ route('admin.fire-alerts.destroy', $incident->id) }}" method="POST" style="display: inline-block;">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure you want to delete this alert?')">Delete</button>
                                    </form>
                                    <!-- Track Incident -->
                                    <a href="{{ route('admin.fire-alerts.track', $incident->id) }}" class="btn btn-warning btn-sm">Track</a>
                                </td>
                            </tr>

                            <!-- View Alert Modal -->
                            <div class="modal fade" id="viewAlertModal{{ $incident->id }}" tabindex="-1" role="dialog" aria-labelledby="viewAlertModalLabel{{ $incident->id }}" aria-hidden="true">
                                <div class="modal-dialog modal-lg" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="viewAlertModalLabel{{ $incident->id }}">View Alert #{{ $incident->id }}</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            <p><strong>Name:</strong> {{ $incident->name }}</p>
                                            <p><strong>Mobile Number:</strong> {{ $incident->mobile_number }}</p>
                                            <p><strong>GPS Address:</strong> {{ $incident->gps_address }}</p>
                                            <p><strong>Description:</strong> {{ $incident->description }}</p>
                                            <p><strong>Status:</strong> {{ ucfirst($incident->status) }}</p>
                                            <p><strong>Assigned Team:</strong>
                                                @if($incident->teams)
                                                    @foreach($incident->teams as $team)
                                                        {{ $team->team_name }}<br>
                                                    @endforeach
                                                @else
                                                    No Team Assigned
                                                @endif
                                            </p>
                                            <form action="{{ route('admin.fire-alerts.update', $incident->id) }}" method="POST">
                                                @csrf
                                                <div class="form-group">
                                                    <label for="status">Update Status</label>
                                                    <select name="status" class="form-control">
                                                        <option value="new" {{ $incident->status == 'new' ? 'selected' : '' }}>New</option>
                                                        <option value="assigned" {{ $incident->status == 'assigned' ? 'selected' : '' }}>Assigned</option>
                                                        <option value="on_the_way" {{ $incident->status == 'on_the_way' ? 'selected' : '' }}>On the Way</option>
                                                        <option value="in_progress" {{ $incident->status == 'in_progress' ? 'selected' : '' }}>In Progress</option>
                                                        <option value="completed" {{ $incident->status == 'completed' ? 'selected' : '' }}>Completed</option>
                                                    </select>
                                                </div>
                                                <div class="form-group">
                                                    <label for="team_id">Assign Team</label>
                                                    <select name="team_id" class="form-control">
                                                        <option value="" {{ $incident->teams->isEmpty() ? 'selected' : '' }}>No Team Assigned</option>
                                                        @foreach($teams as $team)
                                                            <option value="{{ $team->id }}" {{ $incident->teams->contains($team->id) ? 'selected' : '' }}>{{ $team->team_name }}</option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                                <button type="submit" class="btn btn-primary">Update</button>
                                            </form>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </tbody>
                </table>
                <!-- Pagination Links -->
                {{ $incidents->links('pagination::bootstrap-4') }}
            </div>
        </div>
    </div>

@endsection
