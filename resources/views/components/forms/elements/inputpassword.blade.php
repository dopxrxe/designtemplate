@props(['disabled' => false])
@props(['value'])
<div class="form-floating mb-3">
    <input {{ $disabled ? 'disabled' : '' }} {!! $attributes->merge(['class' => 'form-control form-control-sm border border-0 shadow-none border-bottom rounded-0']) !!} placeholder="******">
    <label for="{{ $value ?? $slot }}">{{ $value ?? $slot }}</label>
</div>