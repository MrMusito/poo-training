<?php

namespace App\School;

class Elementary extends School {
    public function __construct(string $schoolName, string $schoolCity, array $schoolLevels = []) {
        parent::__construct($schoolName, $schoolCity, $schoolLevels);
    }
}