<?php
namespace School\Student;

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

    // GETTERS AND SETTERS

    public function setBirthdate(DateTime $birhtdate):void {
        $this->birthdate = $birhtdate;
    }
    public function getBirthdate():DateTime {
        return $this->birthdate;
    }

    public function setGrade(string $grade):void {
        $this->grade = $grade;
    }
    public function getGrade():string {
        return $this->grade;
    }
    
    public function setSchool(string $school):void {
        $this->school = $school;
    }
    public function getSchool():string {
        return $this->school;
    }

    // METHODS

    public function getAge():int {
        return $this->birthdate->diff(new DateTime())->format("%y");
    }
    public function getText():string {
        return "Bonjour, je m'appelle ".$this->getfirstname()." j'ai ".$this->getAge()." ans et je vais à l'école ".$this->getSchool()." en class de ".$this->getGrade().".";
    }

}