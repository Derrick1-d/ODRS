@extends('layouts.admin')

@section('content')
    <div class="container mt-5">
        <h2>Website Settings</h2>
        @if (session('status'))
            <div class="alert alert-success">
                {{ session('status') }}
            </div>
        @endif
        <form action="{{ route('admin.settings.update') }}" method="POST">
            @csrf
            @foreach($settings as $setting)
                <div class="form-group">
                    <label for="setting_{{ $setting->setting_key }}">{{ ucfirst(str_replace('_', ' ', $setting->setting_key)) }}</label>
                    <input type="text" class="form-control" id="setting_{{ $setting->setting_key }}" name="settings[{{ $setting->setting_key }}]" value="{{ $setting->setting_value }}">
                </div>
            @endforeach
            <button type="submit" class="btn btn-primary">Save Settings</button>
        </form>
    </div>
@endsection

