<?php

namespace App\School;

class MiddleSchool extends School {
    public function __construct(string $schoolName, string $schoolCity, array $schoolLevels = []) {
        parent::__construct($schoolName, $schoolCity, $schoolLevels);
    }
}