@props(['title'])

<header class="flex items-end">
    <flux:heading size="xl" level="1">{{ __($title) }}</flux:heading>
    <flux:spacer />
    {{ $slot }}
</header>
