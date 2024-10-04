@extends('layouts.admin')

@section('title', 'View Reports')

@section('content')
    <div class="container mt-5 pt-4">
        <h2>View Reports</h2>
        <form action="{{ route('admin.reports') }}" method="GET" class="mb-4">
            <div class="row">
                <div class="col-md-6 mb-3">
                    <label for="start_date" class="form-label">Start Date</label>
                    <input type="date" class="form-control" id="start_date" name="start_date">
                </div>
                <div class="col-md-6 mb-3">
                    <label for="end_date" class="form-label">End Date</label>
                    <input type="date" class="form-control" id="end_date" name="end_date">
                </div>
            </div>
            <button type="submit" class="btn btn-primary">Filter</button>
        </form>

        <h4 class="mt-5">Incidents</h4>
        <div class="row">
            @foreach($incidents as $incident)
                <div class="col-md-6 col-lg-4 mb-4">
                    <div class="card h-100">
                        <div class="card-header bg-dark text-white">
                            Incident #{{ $incident->id }}
                        </div>
                        <div class="card-body">
                            <h5 class="card-title">{{ $incident->name }}</h5>
                            <p class="card-text">
                                <strong>Mobile Number:</strong> {{ $incident->mobile_number }}<br>
                                <strong>GPS Address:</strong> {{ $incident->gps_address }}<br>
                                <strong>Description:</strong> {{ $incident->description }}<br>
                                <strong>Status:</strong> {{ ucfirst($incident->status) }}<br>
                                <strong>Date:</strong> {{ $incident->created_at->format('Y-m-d') }}
                            </p>
                            <div id="map-{{ $incident->id }}" class="map" style="height: 200px;"></div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection

@section('scripts')
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            @foreach($incidents as $incident)
                var map_{{ $incident->id }} = new google.maps.Map(document.getElementById('map-{{ $incident->id }}'), {
                    center: {lat: {{ $incident->latitude }}, lng: {{ $incident->longitude }}},
                    zoom: 12
                });

                var marker = new google.maps.Marker({
                    position: {lat: {{ $incident->latitude }}, lng: {{ $incident->longitude }}},
                    map: map_{{ $incident->id }},
                    title: '{{ $incident->description }}'
                });
            @endforeach
        });
    </script>
@endsection
