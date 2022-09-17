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
        $this->firstname = $firstname;
    }
    public function getFirstname():string {
        return $this->firstname;
    }
    public function setLastname(string $lastname):void {
        $this->lastname = $lastname;
    }
    public function getLastname():string {
        return $this->lastname;
    }
}
