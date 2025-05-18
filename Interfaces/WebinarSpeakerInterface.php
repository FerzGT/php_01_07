<?php

declare(strict_types=1);

namespace Interfaces;
interface WebinarSpeakerInterface
{
    public function skillsWebinar(string $annotation): string;
}