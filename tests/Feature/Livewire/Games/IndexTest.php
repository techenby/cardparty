<?php

use Livewire\Volt\Volt;

it('can render', function () {
    $component = Volt::test('games.index');

    $component->assertSee('');
});
