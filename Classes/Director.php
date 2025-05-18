<?php

declare(strict_types=1);


namespace Classes;
use Classes\Abstractemployee;
use Interfaces\LeadInterface;

class Director extends Abstractemployee implements LeadInterface
{
    protected string $position = "Директор";
    public function skillsManager(string $annotation): string
    {
        return "может управлять или руководить: $annotation";
    }
}