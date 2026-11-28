<x-layouts.app title="Edit Course" :narrow="true">
    <div class="page-header">
        <div>
            <h1 class="page-title">Edit Course</h1>
            <p class="page-subtitle">Update details for {{ $course->name }}.</p>
        </div>
        <a href="{{ route('courses.show', $course) }}" class="btn btn-secondary">&larr; Back</a>
    </div>

    <div class="card">
        <div class="card-body">
            <form action="{{ route('courses.update', $course) }}" method="POST">
                @csrf
                @method('PUT')
                <x-courses.form :course="$course" />

                <div class="form-actions">
                    <a href="{{ route('courses.show', $course) }}" class="btn btn-secondary">Cancel</a>
                    <button type="submit" class="btn btn-primary">Update Course</button>
                </div>
            </form>
        </div>
    </div>
</x-layouts.app>