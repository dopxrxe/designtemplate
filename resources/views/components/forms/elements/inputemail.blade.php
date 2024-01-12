@props(['disabled' => false])
@props(['label'])

<input type="email" {{ $disabled ? 'disabled' : '' }} {!! $attributes->merge(['class' => 'form-control']) !!} placeholder="{{ $label }}" aria-describedby="Email Input" maxlength="35">