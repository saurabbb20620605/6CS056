@extends('layouts.app')

@section('title', 'Edit Course - Institute Portal')

@section('content')
<div class="container-narrow">
    <div class="page-header">
        <div>
            <h1 class="page-title">Edit Course</h1>
            <p class="page-subtitle">Update details for {{ $course->name }}.</p>
        </div>
        <a href="/courses" class="btn btn-secondary">&larr; Back to Courses</a>
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
            <form action="/courses/{{ $course->id }}" method="POST">
                @csrf
                @method('PUT')

                <div class="form-grid">
                    <div class="form-group full-width">
                        <label for="name">Course Name</label>
                        <input type="text" id="name" name="name" value="{{ old('name', $course->name) }}">
                    </div>

                    <div class="form-group">
                        <label for="duration">Duration (Weeks)</label>
                        <input type="number" id="duration" name="duration" min="1" value="{{ old('duration', $course->duration) }}">
                    </div>

                    <div class="form-group">
                        <label for="fee">Course Fee</label>
                        <input type="number" id="fee" name="fee" step="0.01" min="0" value="{{ old('fee', $course->fee) }}">
                    </div>

                    <div class="form-group">
                        <label for="difficulty">Difficulty Level</label>
                        <select id="difficulty" name="difficulty">
                            <option value="Easy" {{ old('difficulty', $course->difficulty) == 'Easy' ? 'selected' : '' }}>Easy</option>
                            <option value="Medium" {{ old('difficulty', $course->difficulty) == 'Medium' ? 'selected' : '' }}>Medium</option>
                            <option value="Hard" {{ old('difficulty', $course->difficulty) == 'Hard' ? 'selected' : '' }}>Hard</option>
                        </select>
                    </div>

                    <div class="form-group">
                        <label>Enrollment Status</label>
                        <label class="checkbox-row" for="is_active">
                            <input type="checkbox" id="is_active" name="is_active" value="1" {{ old('is_active', $course->is_active) ? 'checked' : '' }}>
                            <span>Active (Open for Enrollment)</span>
                        </label>
                    </div>

                    <div class="form-group full-width">
                        <label for="description">Description</label>
                        <textarea id="description" name="description">{{ old('description', $course->description) }}</textarea>
                    </div>
                </div>

                <div class="form-actions">
                    <a href="/courses" class="btn btn-secondary">Cancel</a>
                    <button type="submit" class="btn btn-primary">Update Course</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection