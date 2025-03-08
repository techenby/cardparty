<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="dark">
<head>
    @include('partials.head')
</head>
<body class="min-h-screen bg-white dark:bg-zinc-950">
<div class="relative">
    <div class="overflow-hidden h-screen">
        <div
            class="bg-i-like-cards absolute inset-2 rounded-4xl ring-1 ring-black/5 ring-inset inset-shadow-sm inset-shadow-teal-500/50"></div>
        <div class="relative px-6 lg:px-8 mt-8">
            <div class="mx-auto max-w-2xl lg:max-w-7xl">
                <div class="ml-2 mr-5 flex items-center space-x-2 lg:ml-0" wire:navigate>
                    <x-app-logo/>
                </div>
                <div class="pt-16 pb-24 sm:pt-24 sm:pb-32 md:pt-32 md:pb-48">
                    <h1 class="font-mono text-6xl/[0.9] font-medium tracking-tight text-balance text-gray-950 dark:text-white sm:text-8xl/[0.8] md:text-9xl/[0.8]">
                        Shall we play a game?
                    </h1>

                    <div class="mt-12">
                        <flux:button variant="ghost" :href="route('login')">Login</flux:button>
                        <flux:button variant="primary" :href="route('register')">Register</flux:button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</body>
</html>
