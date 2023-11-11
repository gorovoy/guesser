<?php

namespace App\Services;

class RandomBooleanGeneratorService
{
    public function generate(): bool
    {
        return (bool) random_int(0, 1);
    }
}