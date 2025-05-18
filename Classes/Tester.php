<?php

declare(strict_types=1);

namespace Classes;
use Classes\Abstractemployee;
use Interfaces\ApplicationCreatorInterface;
use Interfaces\WebinarSpeakerInterface;

class Tester extends Abstractemployee implements ApplicationCreatorInterface, WebinarSpeakerInterface
{
    protected string $position = "Главный тестостировщик";
    public function skillsCreator(string $annotation):string
    {
        return "может заниматься разработкой приложения: $annotation";
    }

    public function skillsWebinar(string $annotation):string
    {
        return "может вести вебинар для коллег: $annotation";
    }
}