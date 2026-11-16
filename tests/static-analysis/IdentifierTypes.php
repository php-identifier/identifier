<?php

declare(strict_types=1);

namespace Identifier\StaticAnalysis;

use Identifier\Identifier;

final readonly class IdentifierTypes
{
    public function __construct(private Identifier $identifier)
    {
    }

    /**
     * @return non-empty-string
     */
    public function returnsSortKey(): string
    {
        return $this->identifier->getSortKey();
    }
}
