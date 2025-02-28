<?php

use App\Models\Game;
use Livewire\Volt\Volt;

it('can render', function () {
    $game = Game::factory()->create();

    $component = Volt::test('games.show', ['game' => $game]);

    $component->assertSee('');
});
