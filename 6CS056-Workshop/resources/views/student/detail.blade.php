<x-layouts.app title="Student Details" :narrow="true">
    <div class="page-header">
        <div>
            <h1 class="page-title">{{ $student->name }}</h1>
            <p class="page-subtitle">Student Record #{{ $student->id }}</p>
        </div>
        <div class="actions-group">
            <a href="{{ route('students.index') }}" class="btn btn-secondary">&larr; Back</a>
            <a href="{{ route('students.edit', $student) }}" class="btn btn-primary">Edit Student</a>
        </div>
    </div>

    <x-alert />

    <div class="card">
        <div class="card-body">
            <div class="detail-grid">
                <div class="detail-item">
                    <div class="detail-label">Student ID</div>
                    <div class="detail-value">#{{ $student->id }}</div>
                </div>

                <div class="detail-item">
                    <div class="detail-label">Full Name</div>
                    <div class="detail-value">{{ $student->name }}</div>
                </div>

                <div class="detail-item">
                    <div class="detail-label">Email Address</div>
                    <div class="detail-value">{{ $student->email }}</div>
                </div>

                <div class="detail-item">
                    <div class="detail-label">Phone Number</div>
                    <div class="detail-value">{{ $student->phone }}</div>
                </div>

                <div class="detail-item">
                    <div class="detail-label">Date of Birth</div>
                    <div class="detail-value">{{ $student->date_of_birth?->format('d M Y') ?? 'Not provided' }}</div>
                </div>

                <div class="detail-item">
                    <div class="detail-label">Age</div>
                    <div class="detail-value">{{ $student->age !== null ? $student->age . ' years' : 'Not available' }}</div>
                </div>

                <div class="detail-item full-width">
                    <div class="detail-label">Address</div>
                    <div class="detail-value">{{ $student->address ?? 'Not provided' }}</div>
                </div>
            </div>
        </div>
    </div>
</x-layouts.app>