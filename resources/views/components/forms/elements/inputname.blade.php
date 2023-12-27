@props(['disabled' => false])
@props(['label'])

<input {{ $disabled ? 'disabled' : '' }} {!! $attributes->merge(['class' => 'form-control form-control-sm border border-0 shadow-none border-bottom rounded-0']) !!} placeholder="{{ $label }}">