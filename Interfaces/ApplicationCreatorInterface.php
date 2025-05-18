<?php

declare(strict_types=1);

namespace Interfaces;
interface ApplicationCreatorInterface
{
    public function skillsCreator(string $annotation): string;
}