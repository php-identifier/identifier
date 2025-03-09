<?php

declare(strict_types=1);

namespace Identifier;

/**
 * Creates identifiers that may be represented as integers
 */
interface IntegerIdentifierFactory extends IdentifierFactory
{
    public function create(): IntegerIdentifier;

    /**
     * Creates a new instance of an identifier from the given integer representation
     *
     * @param int | numeric-string $identifier
     *
     * @throws Exception\InvalidArgument MUST throw if the identifier is not a legal value
     * @throws Exception\OutOfRange MUST throw if the implementation does not support integers outside the range of
     *     `PHP_INT_MIN` and `PHP_INT_MAX` and the identifier evaluates to an integer outside this range
     */
    public function createFromInteger(int | string $identifier): IntegerIdentifier;
}
