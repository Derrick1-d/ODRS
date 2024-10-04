@extends('layouts.admin')

@section('title', 'Dashboard')

@section('content')
    <div class="container mt-5">
        <h2>Dashboard</h2>

        <!-- Dashboard Cards -->
        <div class="row">
            <!-- Number of Users -->
            <div class="col-md-4">
                <div class="card text-white bg-primary mb-3">
                    <div class="card-header">
                        <i class="fas fa-users fa-3x icon-white"></i> Total Users
                    </div>
                    <div class="card-body d-flex align-items-center">
                        <h5 class="card-title mb-0">{{ $userCount }}</h5>
                    </div>
                </div>
            </div>


            <!-- Number of Fire Alerts -->
            <div class="col-md-4">
                <div class="card text-white bg-danger mb-3">
                    <div class="card-header">
                        <i class="fas fa-bell fa-3x icon-white"></i> Total Fire Alerts
                    </div>
                    <div class="card-body d-flex align-items-center">
                        <h5 class="card-title mb-0">{{ $fireAlertCount }}</h5>
                    </div>
                </div>
            </div>

            <!-- Completed Alerts -->
            <div class="col-md-4">
                <div class="card text-white bg-success mb-3">
                    <div class="card-header">
                        <i class="fas fa-check-circle fa-3x icon-white"></i> Completed Alerts
                    </div>
                    <div class="card-body d-flex align-items-center">
                        <h5 class="card-title mb-0">{{ $completedAlertCount }}</h5>
                    </div>
                </div>
            </div>
        </div>

        <!-- Graphical View for Monthly Report -->
        <div class="row mt-4">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header"><i class="fas fa-chart-line fa-3x icon-white"></i> Monthly Report</div>
                    <div class="card-body">
                        <canvas id="monthlyReportChart"></canvas>
                    </div>
                </div>
            </div>
        </div>


        <!-- Table of Incidents -->
        <div class="mt-5">
            <h3>Recent Incidents</h3>
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>User</th>
                        <th>Mobile Number</th>
                        <th>GPS Address</th>
                        <th>Description</th>
                        <th>Status</th>
                        <th>Date</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($incidents as $incident)
                        <tr class="{{ $incident->status == 'new' ? 'table-danger' : ($incident->status == 'assigned' ? 'table-success' : '') }}">
                            <td>{{ $incident->id }}</td>
                            <td>{{ $incident->name }}</td>
                            <td>{{ $incident->mobile_number }}</td>
                            <td>{{ $incident->gps_address }}</td>
                            <td>{{ $incident->description }}</td>
                            <td>{{ ucfirst($incident->status) }}</td>
                            <td>{{ $incident->created_at->format('Y-m-d') }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection

@section('scripts')
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script>
        const ctx = document.getElementById('monthlyReportChart').getContext('2d');
        const monthlyReportChart = new Chart(ctx, {
            type: 'line',
            data: {
                labels: {!! json_encode($monthlyLabels) !!},
                datasets: [{
                    label: 'Number of Fire Alerts',
                    data: {!! json_encode($monthlyData) !!},
                    backgroundColor: 'rgba(255, 99, 132, 0.2)',
                    borderColor: 'rgba(255, 99, 132, 1)',
                    borderWidth: 1
                }]
            },
            options: {
                scales: {
                    y: {
                        beginAtZero: true
                    }
                }
            }
        });
    </script>
@endsection
