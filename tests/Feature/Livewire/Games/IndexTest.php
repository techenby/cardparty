<?php

use App\Models\Game;
use App\Models\User;
use Livewire\Volt\Volt;

it('can render', function () {
    Volt::actingAs(User::factory()->create())
        ->test('games.index')
        ->assertSee('Games');
});

it('can be seen', function () {
    $user = User::factory()->create();

    $this->actingAs($user)
        ->get(route('games.index'))
        ->assertSee('Games');
});

it('can show users games', function () {
    $user = User::factory()
        ->hasAttached(
            Game::factory(),
            ['is_owner' => true]
        )
        ->create(['name' => 'Monkey D. Luffy']);

    Volt::actingAs($user)
        ->test('games.index')
        ->assertSee('Progressive Rummy')
        ->assertSee('Monkey D. Luffy');
});
