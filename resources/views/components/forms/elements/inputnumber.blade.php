@props(['disabled' => false])
@props(['label'])

<input type="number" {{ $disabled ? 'disabled' : '' }} {!! $attributes->merge(['class' => 'form-control']) !!} placeholder="{{ $label }}">