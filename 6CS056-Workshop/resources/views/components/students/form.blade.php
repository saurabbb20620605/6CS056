@props(['student'])

<div class="form-grid">
    <x-form-input name="name" label="Full Name" placeholder="e.g. Aarav Sharma" :value="$student->name" />
    <x-form-input name="email" label="Email Address" type="email" placeholder="e.g. aarav@example.com" :value="$student->email" />
    <x-form-input name="phone" label="Phone Number" placeholder="e.g. 9841000000" :value="$student->phone" />
    <x-form-input name="date_of_birth" label="Date of Birth" type="date" :value="$student->date_of_birth?->format('Y-m-d')" />
    <x-form-textarea name="address" label="Address" placeholder="Street address, city" :value="$student->address" />
</div>