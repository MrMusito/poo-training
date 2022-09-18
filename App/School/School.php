<?php

namespace App\School;

class School {
    private string $schoolName;
    private string $schoolCity;
    private array $schoolGrades;

    public function __construct(string $schoolName, string $schoolCity, array $schoolGrades = []) {
        $this->schoolName = $schoolName;
        $this->schoolCity = $schoolCity;
        $this->schoolGrades = $schoolGrades;
    }

    // GETTERS AND SETTERS

    public function setSchoolName(string $schoolName): void {
        $this->schoolName = $schoolName;
    }
    public function getSchoolName(): string {
        return $this->schoolName;
    }

    public function setSchoolCity(string $schoolCity): void {
        $this->schoolCity = $schoolCity;
    }
    public function getSchoolCity(): string {
        return $this->schoolCity;
    }

    public function setSchoolGrades(array $schoolGrades): void {
        $this->schoolGrades = $schoolGrades;
    }
    public function getSchoolGrades(): array {
        return $this->schoolGrades;
    }

    // METHODS

    public function addGrade(string $Grade):void {
        if(in_array($Grade, $this->schoolGrades)) return;
        $this->schoolGrades[] = $Grade;
    }

    public function removeGrade(string $Grade):void {
        $this->schoolGrades = array_filter($this->schoolGrades, fn ($s) => $s !== $Grade);
    }

    public function getGradeToString():string {
        return implode(', ', $this->getSchoolGrades());
    }
}