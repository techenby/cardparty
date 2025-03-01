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

    <div class="flex mt-8">
        <x-avatar :name="$game->owner()->name" size="size-12" style="heads" />
    </div>

</div>
