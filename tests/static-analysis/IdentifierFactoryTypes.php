<?php

declare(strict_types=1);

namespace Identifier\StaticAnalysis;

use Identifier\Identifier;
use Identifier\IdentifierFactory;

final class IdentifierFactoryTypes
{
    public function __construct(private IdentifierFactory $factory)
    {
    }

    public function createsIdentifier(): Identifier
    {
        return $this->factory->create();
    }
}
