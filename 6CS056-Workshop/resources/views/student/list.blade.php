<x-layouts.app title="Students">
    <div class="page-header">
        <div>
            <h1 class="page-title">Students</h1>
            <p class="page-subtitle">Manage enrolled student profiles and contact records.</p>
        </div>
        <a href="{{ route('students.create') }}" class="btn btn-primary">+ Create Student</a>
    </div>

    <x-alert />

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
                                    <a href="{{ route('students.show', $student) }}" class="btn btn-secondary btn-sm">View</a>
                                    <a href="{{ route('students.edit', $student) }}" class="btn btn-secondary btn-sm">Edit</a>
                                    <x-delete-form :action="route('students.destroy', $student)" />
                                </div>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="5">
                                <div class="empty-state">
                                    <p>No students found in the system yet.</p>
                                    <a href="{{ route('students.create') }}" class="btn btn-primary">Add Your First Student</a>
                                </div>
                            </td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
</x-layouts.app>
