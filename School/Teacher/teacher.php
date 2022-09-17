<?php

namespace School\Teacher;

use School\Person\person;

final class teacher extends person
{
    private array $subjects;
    private string $school;

    public function __construct(string $firstname, string $lastname, array $subjects = [], string $school = "")
    {
        parent::__contruct($firstname, $lastname);
        $this->subjects = $subjects;
        $this->school = $school;
    }

    // GETTERS AND SETTERS

    public function setSchool(string $school): void {
        $this->school = $school;
    }
    public function getSchool(): string {
        return $this->school;
    }
    public function setSubjects(array $subjects): void {
        $this->subjects = $subjects;
    }
    public function getSubjects(): array {
        return $this->subjects;
    }

    // METHODS

    public function addSubject(string $subject):void {
        if(in_array($subject, $this->subjects)) return;
        $this->subjects[] = $subject;
    }
    public function removeSubject(string $subject):void {
        $this->subjects = array_filter($this->subjects, fn ($s) => $s !== $subject);
    }

    public function getSubjectToString():string {
        return implode(', ', $this->getSubjects());
    }

    public function introduceMyself():string {
        $replace = [
            "firstname" => $this->getFirstname(),
            "lastname" => $this->getLastname(),
            "school" => $this->getSchool(),
            "subjects" => $this->getSubjectToString()
        ];
        $template = "Greetings my name is ##firstname## ##lastname## and I teach at the ##school## where I teach the following subjects: ##subjects##";
        return str_replace(array_map(fn ($v) => "##$v##", array_keys($replace)), array_values($replace), $template);
    }
}
