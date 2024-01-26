<?php

namespace App\Enum;

use Livewire\Attributes\Url;


class Roles
{
    const ADMIN = (1 << 0);
    const EDITOR = (1 << 1);
}
