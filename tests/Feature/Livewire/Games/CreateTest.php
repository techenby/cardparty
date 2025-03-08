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
        ->get(route('games.index'))
        ->assertSeeVolt('games.create');
});

it('can create a game', function () {
    $user = User::factory()->create();

    Volt::actingAs($user)
        ->test('games.create')
        ->call('create')
        ->assertRedirect();

    $this->assertCount(1, $user->games);
    $this->assertTrue((bool) $user->games->first()->pivot->is_owner);
});
