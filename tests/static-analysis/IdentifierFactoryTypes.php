<?php

declare(strict_types=1);

namespace Identifier\StaticAnalysis;

use Identifier\IdentifierFactoryInterface;
use Identifier\IdentifierInterface;

final class IdentifierFactoryTypes
{
    public function __construct(private readonly IdentifierFactoryInterface $factory)
    {
    }

    public function createsIdentifier(): IdentifierInterface
    {
        return $this->factory->create();
    }
}
