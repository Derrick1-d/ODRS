<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Panel</title>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">

    <script src="https://maps.googleapis.com/maps/api/js?key={{ env('GOOGLE_MAPS_API_KEY') }}&libraries=places"></script>
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.7.1/dist/leaflet.css" />

    <style>
        /* body {
            display: flex;
        } */
        .table-danger {
    background-color: #f8d7da;
    color: #721c24;
}

.table-success {
    background-color: #d4edda;
    color: #155724;
}

.table-warning {
    background-color: #fff3cd;
    color: #856404;
}

.table-primary {
    background-color: #cce5ff;
    color: #004085;
}
 canvas {
    width: 100% !important;
    height: 400px !important;
}

.icon-white {
    color: white;
}

    </style>
</head>
<body>
    @include('layouts.navbar')

<div class="sidebar">
    <a href="{{ route('admin.dashboard') }}">Dashboard</a>
    <a href="{{ route('admin.teams') }}">Manage Teams</a>
    <a href="{{ route('admin.fire-alerts') }}">Incident Alerts</a>
    <a href="{{ route('admin.reports') }}">Reports</a>
    <a href="{{ route('admin.settings') }}">Website Settings</a>
    <a href="{{ route('admin.profile') }}">Profile</a>
    <a href="{{ route('logout') }}"
       onclick="event.preventDefault();
                 document.getElementById('logout-form').submit();">
        Logout
    </a>
    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
        @csrf
    </form>
</div>

    <div class="content">
        @yield('content')
    </div>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://unpkg.com/leaflet@1.7.1/dist/leaflet.js"></script>

    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
