<?php

declare(strict_types=1);

namespace Identifier\StaticAnalysis;

use Identifier\BytesIdentifier;
use Identifier\BytesIdentifierFactory;
use Identifier\Exception\InvalidArgument;

final readonly class BytesIdentifierFactoryTypes
{
    public function __construct(private BytesIdentifierFactory $factory)
    {
    }

    public function createsIdentifier(): BytesIdentifier
    {
        return $this->factory->create();
    }

    /**
     * @param non-empty-string $bytes
     *
     * @throws InvalidArgument
     */
    public function createsIdentifierFromBytes(string $bytes): BytesIdentifier
    {
        return $this->factory->createFromBytes($bytes);
    }
}
