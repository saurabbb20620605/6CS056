@extends('layouts.app')

@section('title', 'Create Student - Institute Portal')

@section('content')
<div class="container-narrow">
    <div class="page-header">
        <div>
            <h1 class="page-title">Create Student</h1>
            <p class="page-subtitle">Register a new student in the training institute.</p>
        </div>
        <a href="/students" class="btn btn-secondary">&larr; Back to Students</a>
    </div>

    @if($errors->any())
        <div class="alert alert-danger">
            <h4>Please fix the following errors:</h4>
            <ul>
                @foreach($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <div class="card">
        <div class="card-body">
            <form action="/students" method="POST">
                @csrf
                <div class="form-grid">
                    <div class="form-group">
                        <label for="name">Full Name</label>
                        <input type="text" id="name" name="name" placeholder="e.g. Aarav Sharma" value="{{ old('name') }}">
                    </div>

                    <div class="form-group">
                        <label for="email">Email Address</label>
                        <input type="email" id="email" name="email" placeholder="e.g. aarav@example.com" value="{{ old('email') }}">
                    </div>

                    <div class="form-group">
                        <label for="phone">Phone Number</label>
                        <input type="text" id="phone" name="phone" placeholder="e.g. 9841000000" value="{{ old('phone') }}">
                    </div>

                    <div class="form-group">
                        <label for="date_of_birth">Date of Birth</label>
                        <input type="date" id="date_of_birth" name="date_of_birth" value="{{ old('date_of_birth') }}">
                    </div>

                    <div class="form-group full-width">
                        <label for="address">Address</label>
                        <textarea id="address" name="address" placeholder="Street address, city">{{ old('address') }}</textarea>
                    </div>
                </div>

                <div class="form-actions">
                    <a href="/students" class="btn btn-secondary">Cancel</a>
                    <button type="submit" class="btn btn-primary">Create Student</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection