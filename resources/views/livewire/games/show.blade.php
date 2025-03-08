<?php

use App\Models\Game;
use Illuminate\Support\Facades\URL;
use Livewire\Attributes\Computed;
use Livewire\Volt\Component;

new class extends Component {
    public Game $game;
}; ?>

<div wire:poll.visible">
    <x-app-header title="Assemble Players">
        <flux:button wire:click="begin" :disabled="$game->users->count() < 3">Begin Game</flux:button>
    </x-app-header>

    <div class="mt-8">
        <flux:input icon="link" :value="route('games.join', $game)" class="max-w-md" readonly copyable/>

        <div class="flex gap-4 mt-8">
            @foreach ($game->users as $user)
                <div :wire:key="$user->id">
                    <x-avatar :name="$user->name" size="size-12" style="heads"/>
                    <p class="text-center mt-1">{{ $user->firstName() }}</p>
                </div>
            @endforeach
        </div>
    </div>
</div>
