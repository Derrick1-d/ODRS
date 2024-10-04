@extends('layouts.app')

@section('content')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Report Incident</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5 ">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">
                        <h2 class="h5">Report Fire Incident</h2>
                    </div>
                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success">
                                {{ session('status') }}
                            </div>
                        @endif
                        @if ($errors->any())
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif
                        <form action="{{ route('report.submit') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group">
                                <label for="name">Name</label>
                                <input type="text" class="form-control form-control-sm" id="name" name="name" placeholder="Enter your name" required>
                            </div>
                            <div class="form-group">
                                <label for="mobile_number">Mobile Number</label>
                                <input type="text" class="form-control form-control-sm" id="mobile_number" name="mobile_number" placeholder="Enter your mobile number">
                            </div>
                            <div class="form-group">
                                <label for="gps_address">GPS Address</label>
                                <input type="text" class="form-control form-control-sm" id="gps_address" name="gps_address" placeholder="Enter GPS address" required>
                            </div>
                            <div class="form-group">
                                <label for="description">Description</label>
                                <textarea class="form-control form-control-sm" id="description" name="description" rows="3" placeholder="Describe the incident" ></textarea>
                            </div>
                            <div class="form-group">
                                <label for="media">Upload Media</label>
                                <input type="file" class="form-control-file form-control-sm" id="media" name="media">
                            </div>
                            <button type="submit" class="btn btn-primary btn-sm">Submit</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <div class="text-center mt-5">
            <button id="alertButton" class="btn btn-danger btn-lg">Send Emergency Alert</button>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
@endsection
