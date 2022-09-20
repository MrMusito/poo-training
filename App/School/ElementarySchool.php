<?php

namespace App\School;

class Elementary extends School {
    private static array $schoolGrades = ["CP", "CE1", "CE2", "CM1", "CM2"];
    public function __construct(string $schoolName, string $schoolCity, array $schoolGrades = []) {
        parent::__construct($schoolName, $schoolCity);
    }


}