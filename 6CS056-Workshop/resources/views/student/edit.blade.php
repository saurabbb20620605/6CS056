@extends('layouts.app')

@section('title', 'Edit Student - Institute Portal')

@section('content')
<div class="container-narrow">
    <div class="page-header">
        <div>
            <h1 class="page-title">Edit Student</h1>
            <p class="page-subtitle">Update details for {{ $student->name }}.</p>
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
            <form action="/students/{{ $student->id }}" method="POST">
                @csrf
                @method('PUT')

                <div class="form-grid">
                    <div class="form-group">
                        <label for="name">Full Name</label>
                        <input type="text" id="name" name="name" value="{{ old('name', $student->name) }}">
                    </div>

                    <div class="form-group">
                        <label for="email">Email Address</label>
                        <input type="email" id="email" name="email" value="{{ old('email', $student->email) }}">
                    </div>

                    <div class="form-group">
                        <label for="phone">Phone Number</label>
                        <input type="text" id="phone" name="phone" value="{{ old('phone', $student->phone) }}">
                    </div>

                    <div class="form-group">
                        <label for="date_of_birth">Date of Birth</label>
                        <input type="date" id="date_of_birth" name="date_of_birth" value="{{ old('date_of_birth', $student->date_of_birth) }}">
                    </div>

                    <div class="form-group full-width">
                        <label for="address">Address</label>
                        <textarea id="address" name="address">{{ old('address', $student->address) }}</textarea>
                    </div>
                </div>

                <div class="form-actions">
                    <a href="/students" class="btn btn-secondary">Cancel</a>
                    <button type="submit" class="btn btn-primary">Update Student</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection