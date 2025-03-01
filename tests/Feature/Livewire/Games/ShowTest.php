<?php

use App\Models\Game;
use App\Models\User;
use Livewire\Volt\Volt;

it('can render', function () {
    $game = Game::factory()
        ->hasAttached(
            User::factory(),
            ['is_owner' => true]
        )
        ->create();

    $component = Volt::test('games.show', ['game' => $game]);

    $component->assertSee('');
});
