@extends('layouts.app')
@section('content')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    {{-- <meta name="csrf-token" content="{{ csrf_token() }}"> --}}
    <title>Report Incident</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>
<body>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-dark overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-white text-center">
                    {{ __("You're logged in!") }}
                    <h2>Report Incident</h2>
                    <p>Click on red button to fast report</p>
                </div>
            </div>
        </div>
    </div>

    <div class="container mt-5 text-white">
        <div class="text-center mt-5">
            <button id="sendAlertButton" class="btn btn-danger btn-lg">Send Emergency Alert</button>
        </div>
    </div>

    <script>
        function getUserLocationAndSendAlert() {
            if (navigator.geolocation) {
                navigator.geolocation.getCurrentPosition(function(position) {
                    if (position && position.coords) {
                        const latitude = position.coords.latitude;
                        const longitude = position.coords.longitude;

                        // Send the location data to the server
                        fetch('/send-alert', {
                            method: 'POST',
                            headers: {
                                'Content-Type': 'application/json',
                                'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content')
                            },
                            body: JSON.stringify({
                                latitude: latitude,
                                longitude: longitude
                            })
                        })
                        .then(response => response.json())
                        .then(data => {
                            alert(data.message);
                        })
                        .catch(error => {
                            console.error('Error:', error);
                            alert('Error sending alert.');
                        });
                    } else {
                console.error('Position object is undefined or invalid.');
                alert('Unable to retrieve location.');
            }
        }, function(error) {
            console.error('Error getting location:', error);
            alert('Error getting location.');
        });
    } else {
        alert("Geolocation is not supported by this browser.");
    }
        }

        document.getElementById('sendAlertButton').addEventListener('click', getUserLocationAndSendAlert);
    </script>
</body>
</html>
@endsection
