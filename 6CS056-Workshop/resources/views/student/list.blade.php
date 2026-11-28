@extends('layouts.app')

@section('title', 'Students - Institute Portal')

@section('content')
<div class="container">
    <div class="page-header">
        <div>
            <h1 class="page-title">Students</h1>
            <p class="page-subtitle">Manage enrolled student profiles and contact records.</p>
        </div>
        <a href="/students/create" class="btn btn-primary">+ Create Student</a>
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
                        <th>Name</th>
                        <th>Email</th>
                        <th>Phone</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse($students as $student)
                        <tr>
                            <td><span class="id-pill">#{{ $student->id }}</span></td>
                            <td><strong>{{ $student->name }}</strong></td>
                            <td>{{ $student->email }}</td>
                            <td>{{ $student->phone }}</td>
                            <td>
                                <div class="actions-group">
                                    <a href="/students/{{ $student->id }}" class="btn btn-secondary btn-sm">View</a>
                                    <a href="/students/{{ $student->id }}/edit" class="btn btn-secondary btn-sm">Edit</a>
                                    <form action="/students/{{ $student->id }}" method="POST" style="display:inline;" onsubmit="return confirm('Delete {{ $student->name }}?');">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                                    </form>
                                </div>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="5">
                                <div class="empty-state">
                                    <p>No students found in the system yet.</p>
                                    <a href="/students/create" class="btn btn-primary">Add Your First Student</a>
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