<?php

declare(strict_types=1);

namespace Classes;
abstract class Abstractemployee
{
    protected string $name;
    protected string $surname;

    protected int $salary;

    protected string $position;

    public function __construct(string $name, string $surname, int $salary)
    {
        $this->name = $name;
        $this->surname = $surname;
        $this->salary = $salary;
    }

    public function getName(): string
    {
        return "$this->name $this->surname";
    }

    public function getSalary(): int
    {
        return $this->salary;
    }

    public function getPosition(): string
    {
        return $this->position;
    }

    //abstract public function skills();
}