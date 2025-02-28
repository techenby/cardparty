<?php

use App\Models\Game;
use Illuminate\Support\Facades\URL;
use Livewire\Attributes\Computed;
use Livewire\Volt\Component;

new class extends Component {
    public Game $game;
}; ?>

<div>
    <flux:input icon="link" :value="route('games.show', $game)" class="max-w-md" readonly copyable/>

    <x-avatar :name="$game->owner->name" />

</div>
