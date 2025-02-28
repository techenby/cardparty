@props(['name'])

<div class="flex shrink-0 size-8 bg-zinc-200 rounded-sm overflow-hidden dark:bg-zinc-700">
    <img src="https://robohash.org/{{ str($name)->slug() }}.png?set=set3" />
</div>
