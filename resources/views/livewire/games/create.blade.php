<?php

use App\Models\Game;
use Livewire\Volt\Component;

new class extends Component {
    public function create()
    {
        $game = Game::create();

        auth()->user()->games()->attach($game->id, ['is_owner' => true]);

        return to_route('games.show', $game);
    }
}; ?>

<flux:button wire:click="create">Start Game</flux:button>
