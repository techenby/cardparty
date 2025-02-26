<?php

use App\Models\User;
use Livewire\Volt\Volt;

it('can render', function () {
    Volt::test('games.create')
        ->assertSee('Start Game');
});

it('can be seen', function () {
    $user = User::factory()->create();

    $this->actingAs($user)
        ->get(route('dashboard'))
        ->assertSeeVolt('games.create');
});

it('can create a game', function () {
    $user = User::factory()->create();

    Volt::actingAs($user)
        ->test('games.create')
        ->call('create')
        ->assertRedirect();

    $this->assertDatabaseHas('games', [
        'owner_id' => $user->id,
    ]);
});
