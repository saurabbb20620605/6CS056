@extends('layouts.app')

@section('title', 'Courses - Institute Portal')

@section('content')
<div class="container">
    <div class="page-header">
        <div>
            <h1 class="page-title">Courses</h1>
            <p class="page-subtitle">Manage training programs, duration, fees, and enrollment status.</p>
        </div>
        <a href="/courses/create" class="btn btn-primary">+ Create Course</a>
    </div>

    @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    <div class="card">
        <div class="table-wrapper">
            <table>
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Course Name</th>
                        <th>Duration</th>
                        <th>Fee</th>
                        <th>Difficulty</th>
                        <th>Status</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse($courses as $course)
                        <tr>
                            <td><span class="id-pill">#{{ $course->id }}</span></td>
                            <td><strong>{{ $course->name }}</strong></td>
                            <td>{{ $course->duration }} {{ Str::plural('week', $course->duration) }}</td>
                            <td>Rs. {{ number_format($course->fee, 2) }}</td>
                            <td>
                                <span class="badge badge-{{ strtolower($course->difficulty) }}">
                                    {{ $course->difficulty }}
                                </span>
                            </td>
                            <td>
                                @if($course->is_active)
                                    <span class="badge badge-active">Active</span>
                                @else
                                    <span class="badge badge-inactive">Inactive</span>
                                @endif
                            </td>
                            <td>
                                <div class="actions-group">
                                    <a href="/courses/{{ $course->id }}" class="btn btn-secondary btn-sm">View</a>
                                    <a href="/courses/{{ $course->id }}/edit" class="btn btn-secondary btn-sm">Edit</a>
                                    <form action="/courses/{{ $course->id }}" method="POST" style="display:inline;" onsubmit="return confirm('Delete {{ $course->name }}?');">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                                    </form>
                                </div>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="7">
                                <div class="empty-state">
                                    <p>No courses available in the catalog yet.</p>
                                    <a href="/courses/create" class="btn btn-primary">Create Your First Course</a>
                                </div>
                            </td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection