<?php

use Livewire\Attributes\Computed;
use Livewire\Volt\Component;

new class extends Component {
    #[Computed]
    public function games()
    {
        return auth()->user()->games()->with('users')->get();
    }
}; ?>

<div>
    <x-app-header title="Games">
        <livewire:games.create/>
    </x-app-header>

    <ul role="list" class="mt-8 divide-y divide-gray-100 dark:divide-white/10 overflow-hidden bg-white dark:bg-white/10 ring-1 shadow-xs ring-gray-900/5 dark:ring-white/25 sm:rounded-xl">
        @foreach ($this->games as $game)
        <li :wire:key="$game->id" class="relative flex justify-between gap-x-6 px-4 py-5 hover:bg-gray-50 dark:hover:bg-gray-700 sm:px-6">
            <div class="flex min-w-0 gap-x-4">
                <div class="min-w-0 flex-auto">
                    <p class="text-sm/6 font-semibold text-gray-900 dark:text-white">
                        <a href="{{ route('games.show', $game) }}">
                            <span class="absolute inset-x-0 -top-px bottom-0"></span>
                            Progressive Rummy
                        </a>
                    </p>
                    <div class="mt-1 flex items-center gap-x-2 text-xs/5 text-gray-500 dark:text-gray-400">
                        <p>{{ $game->owner()->name }}</p>
                        <svg viewBox="0 0 2 2" class="size-0.5 fill-current">
                            <circle cx="1" cy="1" r="1" />
                        </svg>
                        <p><time datetime="{{ $game->created_at }}">{{ $game->created_at->diffForHumans() }}</time></p>
                    </div>
                </div>
            </div>
            <div class="flex shrink-0 items-center gap-x-4">
                <dl class="flex w-full flex-none justify-between gap-x-8 sm:w-auto">
                    <div class="flex w-16 gap-x-2.5">
                        <dt>
                            <span class="sr-only">Number of Players</span>
                            <flux:icon.users />
                        </dt>
                        <dd class="text-sm/6 text-gray-900 dark:text-gray-100">{{ $game->users->count() }}</dd>
                    </div>
                </dl>
                <svg class="size-5 flex-none text-gray-400" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true" data-slot="icon">
                    <path fill-rule="evenodd" d="M8.22 5.22a.75.75 0 0 1 1.06 0l4.25 4.25a.75.75 0 0 1 0 1.06l-4.25 4.25a.75.75 0 0 1-1.06-1.06L11.94 10 8.22 6.28a.75.75 0 0 1 0-1.06Z" clip-rule="evenodd" />
                </svg>
            </div>
        </li>
        @endforeach
    </ul>

</div>
