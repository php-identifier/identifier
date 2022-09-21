<?php

/**
 * This file is part of identifier/identifier
 *
 * identifier/identifier is open source software: you can distribute
 * it and/or modify it under the terms of the MIT License
 * (the "License"). You may not use this file except in
 * compliance with the License.
 *
 * @copyright Copyright (c) Ben Ramsey <ben@benramsey.com>
 * @license https://opensource.org/licenses/MIT MIT License
 */

declare(strict_types=1);

namespace Identifier\Uuid;

use Identifier\Binary\BinaryIdentifierFactoryInterface;

/**
 * Describes the interface of a factory used to create universally unique
 * identifiers (UUIDs)
 *
 * @link https://datatracker.ietf.org/doc/html/rfc4122 RFC 4122
 */
interface UuidFactoryInterface extends BinaryIdentifierFactoryInterface
{
    public function create(): UuidInterface;

    public function createFromBytes(string $identifier): UuidInterface;

    public function createFromHexadecimal(string $identifier): UuidInterface;

    public function createFromInteger(int | string $identifier): UuidInterface;

    public function createFromString(string $identifier): UuidInterface;
}
