<?php
namespace School\Person;

abstract class person {
    private string $firstname;
    private string $lastname;

    public function __contruct(string $firstname, string $lastname) {
        $this->firstname = $firstname;
        $this->lastname = $lastname;
    }

    // SETTERS AND GETTERS

    public function setFirstname(string $firstname):void {
        $this->firsname = $firstname;
    }
    public function getFirstname():string {
        return $this->firsname;
    }
}