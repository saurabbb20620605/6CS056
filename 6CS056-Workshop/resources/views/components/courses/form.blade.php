@props(['course'])

<div class="form-grid">
    <x-form-input name="name" label="Course Name" placeholder="e.g. Full Stack Web Development" :value="$course->name" :full="true" />
    <x-form-input name="duration" label="Duration (Weeks)" type="number" min="1" placeholder="e.g. 12" :value="$course->duration" />
    <x-form-input name="fee" label="Course Fee" type="number" step="0.01" min="0" placeholder="e.g. 15000.00" :value="$course->fee" />

    <div class="form-group">
        <label for="difficulty">Difficulty Level</label>
        <select id="difficulty" name="difficulty" class="{{ $errors->has('difficulty') ? 'input-invalid' : '' }}">
            @foreach(['Easy', 'Medium', 'Hard'] as $level)
                <option value="{{ $level }}" @selected(old('difficulty', $course->difficulty ?? 'Medium') === $level)>
                    {{ $level }}
                </option>
            @endforeach
        </select>
        @error('difficulty')
            <p class="field-error">{{ $message }}</p>
        @enderror
    </div>

    <div class="form-group">
        <label>Enrollment Status</label>
        <input type="hidden" name="is_active" value="0">
        <label class="checkbox-row" for="is_active">
            <input type="checkbox" id="is_active" name="is_active" value="1"
                   @checked(old('is_active', $course->is_active ?? true))>
            <span>Active (Open for Enrollment)</span>
        </label>
        @error('is_active')
            <p class="field-error">{{ $message }}</p>
        @enderror
    </div>

    <x-form-textarea name="description" label="Description" placeholder="Syllabus overview, prerequisites, and outcomes" :value="$course->description" />
</div>