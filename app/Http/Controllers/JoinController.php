<?php

namespace App\Http\Controllers;

use App\Models\Game;

class JoinController extends Controller
{
    public function __invoke(Game $game)
    {
        if (! $game->whereRelation('users', 'id', auth()->id())->exists()) {
            $game->users()->attach(auth()->user());
        }

        return to_route('games.show', $game);
    }
}
