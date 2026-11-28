<x-layouts.app title="Create Student" :narrow="true">
    <div class="page-header">
        <div>
            <h1 class="page-title">Create Student</h1>
            <p class="page-subtitle">Register a new student in the training institute.</p>
        </div>
        <a href="{{ route('students.index') }}" class="btn btn-secondary">&larr; Back to Students</a>
    </div>

    <div class="card">
        <div class="card-body">
            <form action="{{ route('students.store') }}" method="POST">
                @csrf
                <x-students.form :student="new \App\Models\Student()" />

                <div class="form-actions">
                    <a href="{{ route('students.index') }}" class="btn btn-secondary">Cancel</a>
                    <button type="submit" class="btn btn-primary">Create Student</button>
                </div>
            </form>
        </div>
    </div>
</x-layouts.app>