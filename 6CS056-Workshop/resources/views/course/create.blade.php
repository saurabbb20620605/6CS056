<x-layouts.app title="Create Course" :narrow="true">
    <div class="page-header">
        <div>
            <h1 class="page-title">Create Course</h1>
            <p class="page-subtitle">Add a new training course to the institute catalog.</p>
        </div>
        <a href="{{ route('courses.index') }}" class="btn btn-secondary">&larr; Back to Courses</a>
    </div>

    <div class="card">
        <div class="card-body">
            <form action="{{ route('courses.store') }}" method="POST">
                @csrf
                <x-courses.form :course="new \App\Models\Course(['is_active' => true])" />

                <div class="form-actions">
                    <a href="{{ route('courses.index') }}" class="btn btn-secondary">Cancel</a>
                    <button type="submit" class="btn btn-primary">Create Course</button>
                </div>
            </form>
        </div>
    </div>
</x-layouts.app>