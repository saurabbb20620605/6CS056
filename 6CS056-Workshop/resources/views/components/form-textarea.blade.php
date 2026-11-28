@props(['name', 'label', 'value' => '', 'full' => true])

<div class="form-group {{ $full ? 'full-width' : '' }}">
    <label for="{{ $name }}">{{ $label }}</label>
    <textarea
        id="{{ $name }}"
        name="{{ $name }}"
        {{ $attributes->class(['input-invalid' => $errors->has($name)]) }}
    >{{ old($name, $value) }}</textarea>
    @error($name)
        <p class="field-error">{{ $message }}</p>
    @enderror
</div>