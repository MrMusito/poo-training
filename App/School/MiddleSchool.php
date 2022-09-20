<?php

namespace App\School;

class MiddleSchool extends School {
    private static array $schoolGrades = ["CP", "CE1", "CE2", "CM1", "CM2"];
    public function __construct(string $schoolName, string $schoolCity, array $schoolLevels = []) {
        parent::__construct($schoolName, $schoolCity, $schoolLevels);
    }
}