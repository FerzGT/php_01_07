<?php

declare(strict_types=1);

namespace Classes;
use Classes\Abstractemployee;
use Interfaces\WebinarSpeakerInterface;

class Worker extends Abstractemployee implements WebinarSpeakerInterface
{
    protected string $position = "Сотрудник";

    public function skillsWebinar(string $annotation):string
    {
        return "может вести вебинар для коллег: $annotation";
    }
}