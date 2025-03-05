<?php

use App\Events\GameStarted;
use App\Events\PlayerJoinedGame;
use App\Models\Game;
use Livewire\Volt\Component;

new class extends Component {
    public function create()
    {
        $game = GameStarted::commit();

//        PlayerJoinedGame::fire(
//            game_id: $game->id,
//            player_id: auth()->id(),
//        ));

        return to_route('games.show', $game);
    }
}; ?>

<flux:button wire:click="create">Start Game</flux:button>
