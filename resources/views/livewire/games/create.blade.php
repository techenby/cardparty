<?php

use App\Models\Game;
use Livewire\Volt\Component;

new class extends Component {
    public function create()
    {
        $game = auth()->user()->games()->create();

        return to_route('games.show', $game);
    }
}; ?>

<flux:button wire:click="create">Start Game</flux:button>
