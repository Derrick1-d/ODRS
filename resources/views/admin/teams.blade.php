@extends('layouts.admin')

@section('content')
    <div class="container mt-5">
        <h2>Manage Incident Teams</h2>
        @if (session('status'))
            <div class="alert alert-success">
                {{ session('status') }}
            </div>
        @endif
        <div class="d-flex justify-content-between mt-4 flex-wrap">
            <div id="buttonsWrapper" class="mb-2">

        <!-- Button to Open Add Team Modal -->
        <button type="button" class="btn btn-primary mb-3" data-toggle="modal" data-target="#addTeamModal">
            Add Team
        </button>
            </div>

            <div id="buttonsWrapper" class="mb-2">

        <!-- Search Bar -->
        <div class="form-group">
            <input type="text" class="form-control" id="search" placeholder="Search teams">
        </div>

            </div>
        </div>
        <!-- Team List Table -->
        <h4>Existing Teams</h4>
        <div id="team-list">
            @include('admin.partials.team-list', ['teams' => $teams])
        </div>
    </div>

    <!-- Add Team Modal -->
    <div class="modal fade" id="addTeamModal" tabindex="-1" role="dialog" aria-labelledby="addTeamModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="addTeamModalLabel">Add New Team</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form action="{{ route('admin.teams.save') }}" method="POST">
                    @csrf
                    <input type="hidden" name="id" value="">
                    <div class="modal-body">
                        <div class="form-group">
                            <label for="team_name">Team Name</label>
                            <input type="text" class="form-control" id="team_name" name="team_name" required>
                        </div>
                        <div class="form-group">
                            <label for="members">Team Members (Enter as JSON)</label>
                            <textarea class="form-control" id="members" name="members" required></textarea>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Save Team</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <script>
        $(document).ready(function() {
            $('#search').on('keyup', function() {
                let query = $(this).val();
                $.ajax({
                    url: "{{ route('admin.teams.search') }}",
                    type: "GET",
                    data: {'search': query},
                    success: function(data) {
                        $('#team-list').html(data);
                    }
                });
            });
        });
    </script>
@endsection
