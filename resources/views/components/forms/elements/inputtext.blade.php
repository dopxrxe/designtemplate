@props(['disabled' => false])
@props(['label'])

<input type="text" maxlength="35" {{ $disabled ? 'disabled' : '' }} {!! $attributes->merge(['class' => 'form-control']) !!} placeholder="{{ $label }}">