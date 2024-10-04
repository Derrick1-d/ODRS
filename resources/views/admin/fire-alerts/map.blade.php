@extends('layouts.admin')

@section('title', 'Track Fire Incident')

@section('content')
    <div class="container mt-3">
        <h2>Track Fire Incident</h2>
        @if ($incident->gps_address)
            <div id="map" style="height: 450px;"></div>
            <script>
                var map = L.map('map').setView([{{ $incident->latitude }}, {{ $incident->longitude }}], 13);

                L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
                    maxZoom: 18,
                    attribution: '© OpenStreetMap'
                }).addTo(map);

                L.marker([{{ $incident->latitude }}, {{ $incident->longitude }}]).addTo(map)
                    .bindPopup('Incident Location')
                    .openPopup();
            </script>
        @else
            <div class="alert alert-danger">
                Location not found.
            </div>
        @endif
    </div>
@endsection
