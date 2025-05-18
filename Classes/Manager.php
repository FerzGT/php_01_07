<?php

declare(strict_types=1);

namespace Classes;
use Classes\Abstractemployee;
use Interfaces\LeadInterface;
use Interfaces\WebinarSpeakerInterface;

class Manager extends Abstractemployee implements LeadInterface, WebinarSpeakerInterface
{
    protected string $position = "Менеджер отдела";
    public function skillsManager(string $annotation):string
    {
        return "может управлять или руководить: $annotation";
    }

    public function skillsWebinar(string $annotation):string
    {
        return "может вести вебинар для коллег: $annotation";
    }
}