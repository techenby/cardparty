<?php

use App\Models\Game;
use App\Models\User;

test('can join a game', function () {
    $user = User::factory()->create(['name' => 'Law']);
    $game = Game::factory()->create();

    $this->actingAs($user)
        ->get(route('games.join', $game))
        ->assertRedirect(route('games.show', $game));
});

test('user will not get re-added to game', function () {
    $game = Game::factory()
        ->hasAttached(
            User::factory()->state(['name' => 'Law']),
            ['is_owner' => true]
        )
        ->create();

    $this->actingAs($game->owner())
        ->get(route('games.join', $game))
        ->assertRedirect(route('games.show', $game));

    $this->assertCount(1, $game->fresh()->users);
});
