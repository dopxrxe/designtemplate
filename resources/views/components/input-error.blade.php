@props(['messages'])

@if ($messages)
    <ul {{ $attributes->merge(['class' => 'text-sm fw-light text-danger gap-y-1 list-unstyled mt-2']) }}>
        @foreach ((array) $messages as $message)
            <li>{{ $message }}</li>
        @endforeach
    </ul>
@endif
