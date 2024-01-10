@props(['disabled' => false])
@props(['label'])

<input {{ $disabled ? 'disabled' : '' }} {!! $attributes->merge(['class' => 'form-control']) !!} placeholder="{{ $label }}">