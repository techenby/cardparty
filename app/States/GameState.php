<?php

namespace App\States;

use Carbon\CarbonImmutable;
use Thunk\Verbs\State;

class GameState extends State
{
    public bool $started = false;

    public array $player_ids = [];

    public CarbonImmutable $started_at;
}
