@props(['name', 'label', 'type' => 'text', 'value' => '', 'full' => false])

<div class="form-group {{ $full ? 'full-width' : '' }}">
    <label for="{{ $name }}">{{ $label }}</label>
    <input
        type="{{ $type }}"
        id="{{ $name }}"
        name="{{ $name }}"
        value="{{ old($name, $value) }}"
        {{ $attributes->class(['input-invalid' => $errors->has($name)]) }}
    >
    @error($name)
        <p class="field-error">{{ $message }}</p>
    @enderror
</div>