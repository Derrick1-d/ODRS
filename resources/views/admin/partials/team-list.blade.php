<!-- resources/views/admin/partials/team-list.blade.php -->
<table class="table">
    <thead>
        <tr>
            <th>ID</th>
            <th>Team Name</th>
            <th>Members</th>
            <th>Actions</th>
        </tr>
    </thead>
    <tbody>
        @foreach($teams as $team)
            <tr>
                <td>{{ $team->id }}</td>
                <td>{{ $team->team_name }}</td>
                <td>
                    @foreach(json_decode($team->members, true) ?? [] as $member)
                        {{ $member['name'] ?? '' }} - {{ $member['role'] ?? '' }}<br>
                    @endforeach
                </td>
                <td>
                    <!-- Edit Button -->
                    <button type="button" class="btn btn-warning btn-sm" data-toggle="modal" data-target="#editTeamModal{{ $team->id }}">
                        Edit
                    </button>

                    <!-- Delete Button -->
                    <form action="{{ route('admin.teams.delete', $team->id) }}" method="POST" style="display:inline;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                    </form>
                </td>
            </tr>

            <!-- Edit Team Modal -->
            <div class="modal fade" id="editTeamModal{{ $team->id }}" tabindex="-1" role="dialog" aria-labelledby="editTeamModalLabel{{ $team->id }}" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="editTeamModalLabel{{ $team->id }}">Edit Team</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <form action="{{ route('admin.teams.save') }}" method="POST">
                            @csrf
                            <input type="hidden" name="id" value="{{ $team->id }}">
                            <div class="modal-body">
                                <div class="form-group">
                                    <label for="team_name">Team Name</label>
                                    <input type="text" class="form-control" id="team_name" name="team_name" value="{{ $team->team_name }}" required>
                                </div>
                                <div class="form-group">
                                    <label for="members">Team Members (Enter as JSON)</label>
                                    <textarea class="form-control" id="members" name="members" required>{{ $team->members }}</textarea>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                <button type="submit" class="btn btn-primary">Save changes</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        @endforeach
    </tbody>
</table>
