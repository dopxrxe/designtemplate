@props(['disabled' => false])
@props(['label'])

<input {{ $disabled ? 'disabled' : '' }} {!! $attributes->merge(['class' => '']) !!} placeholder="{{ $label }}" type="tel" pattern="[0-9]{4}[0-9]{4}[0-9]{4}" maxlength="12">