@props([
    'text',
    'type' => 'button',
    'color' => 'primary',
])
<button type="{{ $type }}" class="btn btn-{{ $color }}">{{ $text }}</button>
