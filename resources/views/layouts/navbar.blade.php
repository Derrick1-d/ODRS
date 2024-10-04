<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title') - Admin Panel</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">

    <link href="{{ asset('css/admin.css') }}" rel="stylesheet">
</head>
<body>
    <!-- Navbar -->
<nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
    <div class="container-fluid">
        <a class="navbar-brand" href="#">Admin Panel</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            {{-- <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('admin.dashboard') }}">Dashboard</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('admin.teams') }}">Teams</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('admin.fire-alerts') }}">Fire Alerts</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('admin.reports') }}">Reports</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('admin.settings') }}">Settings</a>
                </li>
            </ul> --}}
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('admin.fire-alerts') }}">
                        <i class="fa fa-bell"></i>
                        <span class="badge badge-danger" id="alertCount"></span>
                    </a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        {{ Auth::guard('admin')->user()->name }}
                    </a>
                    <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                        <li><a class="dropdown-item" href="{{ route('admin.profile') }}">Profile</a></li>
                        <li>
                            <a class="dropdown-item" href="{{ route('logout') }}"
                               onclick="event.preventDefault();
                                            document.getElementById('logout-form').submit();">
                                Logout
                            </a>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                @csrf
                            </form>
                        </li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
</nav>

<!-- Include this audio element for alarm sound -->
  <audio id="alarmSound" src="{{ asset('sounds/mixkit-alert-alarm-1005.wav') }}" preload="auto"></audio>

    <!-- Content -->


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>

    <script>
        document.addEventListener('DOMContentLoaded', function () {
            const alertCountElement = document.getElementById('alertCount');
            const alarmSound = document.getElementById('alarmSound');
            let lastAlertCount = 0;

            function fetchNewAlertsCount() {
                fetch('{{ route('admin.new-alerts-count') }}')
                    .then(response => response.json())
                    .then(data => {
                        const newAlertCount = data.count;
                        alertCountElement.textContent = newAlertCount;

                        if (newAlertCount > lastAlertCount) {
                            alarmSound.play();
                        }

                        lastAlertCount = newAlertCount;
                    })
                    .catch(error => console.error('Error fetching new alerts count:', error));
            }

            // Fetch the new alerts count every 30 seconds
            setInterval(fetchNewAlertsCount, 30000);

            // Initial fetch
            fetchNewAlertsCount();
        });
    </script>

</body>

</html>
