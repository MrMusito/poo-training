<?php
namespace School\Teacher;

spl_autoload_register();

use School\Person\person;

final class teacher extends person {
    private array $subjects;
    private string $school;

    public function __construct(string $firstname, string $lastname, array $subjects = [], string $school = "") {
        parent::__contruct($firstname, $lastname);
        $this->subjects = $subjects;
        $this->school = $school;
    }
}