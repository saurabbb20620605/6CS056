@extends('layouts.app')

@section('title', 'Create Course - Institute Portal')

@section('content')
<div class="container-narrow">
    <div class="page-header">
        <div>
            <h1 class="page-title">Create Course</h1>
            <p class="page-subtitle">Add a new training course to the institute catalog.</p>
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
            <form action="/courses" method="POST">
                @csrf
                <div class="form-grid">
                    <div class="form-group full-width">
                        <label for="name">Course Name</label>
                        <input type="text" id="name" name="name" placeholder="e.g. Full Stack Web Development" value="{{ old('name') }}">
                    </div>

                    <div class="form-group">
                        <label for="duration">Duration (Weeks)</label>
                        <input type="number" id="duration" name="duration" min="1" placeholder="e.g. 12" value="{{ old('duration') }}">
                    </div>

                    <div class="form-group">
                        <label for="fee">Course Fee</label>
                        <input type="number" id="fee" name="fee" step="0.01" min="0" placeholder="e.g. 15000.00" value="{{ old('fee') }}">
                    </div>

                    <div class="form-group">
                        <label for="difficulty">Difficulty Level</label>
                        <select id="difficulty" name="difficulty">
                            <option value="Easy" {{ old('difficulty') == 'Easy' ? 'selected' : '' }}>Easy</option>
                            <option value="Medium" {{ old('difficulty', 'Medium') == 'Medium' ? 'selected' : '' }}>Medium</option>
                            <option value="Hard" {{ old('difficulty') == 'Hard' ? 'selected' : '' }}>Hard</option>
                        </select>
                    </div>

                    <div class="form-group">
                        <label>Enrollment Status</label>
                        <label class="checkbox-row" for="is_active">
                            <input type="checkbox" id="is_active" name="is_active" value="1" {{ old('is_active', '1') ? 'checked' : '' }}>
                            <span>Active (Open for Enrollment)</span>
                        </label>
                    </div>

                    <div class="form-group full-width">
                        <label for="description">Description</label>
                        <textarea id="description" name="description" placeholder="Syllabus overview, prerequisites, and outcomes">{{ old('description') }}</textarea>
                    </div>
                </div>

                <div class="form-actions">
                    <a href="/courses" class="btn btn-secondary">Cancel</a>
                    <button type="submit" class="btn btn-primary">Create Course</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection