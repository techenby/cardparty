<?php

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
