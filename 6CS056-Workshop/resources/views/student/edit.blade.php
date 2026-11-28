<x-layouts.app title="Edit Student" :narrow="true">
    <div class="page-header">
        <div>
            <h1 class="page-title">Edit Student</h1>
            <p class="page-subtitle">Update details for {{ $student->name }}.</p>
        </div>
        <a href="{{ route('students.show', $student) }}" class="btn btn-secondary">&larr; Back</a>
    </div>

    <div class="card">
        <div class="card-body">
            <form action="{{ route('students.update', $student) }}" method="POST">
                @csrf
                @method('PUT')
                <x-students.form :student="$student" />

                <div class="form-actions">
                    <a href="{{ route('students.show', $student) }}" class="btn btn-secondary">Cancel</a>
                    <button type="submit" class="btn btn-primary">Update Student</button>
                </div>
            </form>
        </div>
    </div>
</x-layouts.app>
