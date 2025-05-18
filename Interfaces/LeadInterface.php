<?php

declare(strict_types=1);

namespace Interfaces;
interface LeadInterface
{
    public function skillsManager(string $annotation): string;
}