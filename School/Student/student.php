<?php
namespace School\Student;

spl_autoload_register();

use School\Person\person;
use DateTime;

final class student extends person {
    public DateTime $birthdate;
    public string $grade;
    public string $school;

    public function __construct(string $firstname, string $lastname, DateTime $birthdate, string $grade, string $school) {
        parent::__contruct($firstname, $lastname);
        $this->birthdate = $birthdate;
        $this->grade = $grade;
        $this->$school = $school;
    }
}