@extends('layouts.app')

@section('content')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Track Incident</title>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>
<body>
    <div class="container mt-5">
        <h2>Your Reported Incidents</h2>
        <table class="table">
            <thead>
                <tr>
                    <th>Name</th>
                    {{-- <th>Mobile Number</th> --}}
                    {{-- <th>GPS Address</th> --}}
                    {{-- <th>Description</th> --}}
                    <th>Status</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach($incidents as $incident)
                    <tr>
                        <td>{{ $incident->name }}</td>
                        {{-- <td>{{ $incident->mobile_number }}</td> --}}
                        {{-- <td>{{ $incident->gps_address }}</td> --}}
                        {{-- <td>{{ $incident->description }}</td> --}}
                        <td>{{ ucfirst($incident->status) }}</td>
                        <td>
                            <button type="button" class="btn btn-primary view-details" data-id="{{ $incident->id }}" data-toggle="modal" data-target="#incidentModal">
                                View Details
                            </button>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>

    <!-- Modal -->
    <div class="modal fade" id="incidentModal" tabindex="-1" role="dialog" aria-labelledby="incidentModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="incidentModalLabel">Incident Details</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <!-- Incident details will be loaded here -->
                    <p id="incident-details"></p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>

    <script>
        $(document).ready(function() {
            $('.view-details').on('click', function() {
                var incidentId = $(this).data('id');

                $.ajax({
                    url: '/incidents/' + incidentId,
                    method: 'GET',
                    success: function(data) {
                        $('#incident-details').html(`
                            <p><strong>Name:</strong> ${data.name}</p>
                            <p><strong>Mobile Number:</strong> ${data.mobile_number}</p>
                            <p><strong>GPS Address:</strong> ${data.gps_address}</p>
                            <p><strong>Description:</strong> ${data.description}</p>
                            <p><strong>Status:</strong> ${data.status}</p>
                        `);
                    },
                    error: function() {
                        $('#incident-details').html('<p>An error occurred while fetching the incident details.</p>');
                    }
                });
            });
        });
    </script>
</body>
</html>
@endsection
