@props(['name', 'size', 'style'])

@php
    $set = match($style) {
        'robots' => '',
        'monsters' => 'set2',
        'heads' => 'set3',
        'cats' => 'set4',
    }
@endphp

<div @class([
    'bg-zinc-200 rounded-md ' . $size,
    'px-1 pt-2' => $style !== 'heads'
])>
    <img src="https://robohash.org/{{ str($name)->slug() }}.png?set={{ $set }}" alt="{{ $name }}" />
</div>
