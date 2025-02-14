<?php

use Livewire\Volt\Component;

new class extends Component {
    public function start()
    {

    }
}; ?>

<flux:main class="flex items-center justify-center">
    <flux:card class="min-w-md">
        <flux:button wire:click="start">Start Game</flux:button>
    </flux:card>
</flux:main>
