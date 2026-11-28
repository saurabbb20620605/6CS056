@extends('layouts.app')

@section('title', 'Course Details - Institute Portal')

@section('content')
<div class="container-narrow">
    <div class="page-header">
        <div>
            <h1 class="page-title">{{ $course->name }}</h1>
            <p class="page-subtitle">Course Record #{{ $course->id }}</p>
        </div>
        <div class="actions-group">
            <a href="/courses" class="btn btn-secondary">&larr; Back</a>
            <a href="/courses/{{ $course->id }}/edit" class="btn btn-primary">Edit Course</a>
        </div>
    </div>

    @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    <div class="card">
        <div class="card-body">
            <div class="detail-grid">
                <div class="detail-item">
                    <div class="detail-label">Course ID</div>
                    <div class="detail-value">#{{ $course->id }}</div>
                </div>

                <div class="detail-item">
                    <div class="detail-label">Status</div>
                    <div class="detail-value">
                        @if($course->is_active)
                            <span class="badge badge-active">Active</span>
                        @else
                            <span class="badge badge-inactive">Inactive</span>
                        @endif
                    </div>
                </div>

                <div class="detail-item">
                    <div class="detail-label">Duration</div>
                    <div class="detail-value">{{ $course->duration }} {{ Str::plural('week', $course->duration) }}</div>
                </div>

                <div class="detail-item">
                    <div class="detail-label">Course Fee</div>
                    <div class="detail-value">Rs. {{ number_format($course->fee, 2) }}</div>
                </div>

                <div class="detail-item">
                    <div class="detail-label">Difficulty Level</div>
                    <div class="detail-value">
                        <span class="badge badge-{{ strtolower($course->difficulty) }}">
                            {{ $course->difficulty }}
                        </span>
                    </div>
                </div>

                <div class="detail-item full-width">
                    <div class="detail-label">Description</div>
                    <div class="detail-value">{{ $course->description ?? 'No description provided.' }}</div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection