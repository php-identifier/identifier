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

use DateTimeInterface;
use Identifier\Exception\InvalidArgumentException;

/**
 * Describes the interface of a factory used to create time-based UUIDs that
 * include a node identifier (or MAC address)
 */
interface NodeBasedUuidFactoryInterface extends TimeBasedUuidFactoryInterface
{
    public function create(): NodeBasedUuidInterface;

    /**
     * @throws InvalidArgumentException MUST throw if the $identifier is not a
     *     legal value
     */
    public function createFromBytes(string $identifier): NodeBasedUuidInterface;

    /**
     * @throws InvalidArgumentException MUST throw if the $identifier is not a
     *     legal value
     */
    public function createFromHexadecimal(string $identifier): NodeBasedUuidInterface;

    /**
     * @throws InvalidArgumentException MUST throw if the $identifier is not a
     *     legal value
     */
    public function createFromInteger(int | string $identifier): NodeBasedUuidInterface;

    /**
     * @throws InvalidArgumentException MUST throw if the $identifier is not a
     *     legal value
     */
    public function createFromString(string $identifier): NodeBasedUuidInterface;

    /**
     * @param DateTimeInterface $dateTime The date-time to use when creating the identifier
     * @param string | null $node An optional hexadecimal string node to use
     *     when creating the identifier; if not provided, the implementation
     *     may use the host MAC address as the node
     *
     * @throws InvalidArgumentException MUST throw if the $dateTime or $node are
     *     not legal values
     */
    public function createFromDateTime(DateTimeInterface $dateTime, ?string $node = null): NodeBasedUuidInterface;

    /**
     * Creates a new instance of an identifier from the given node
     *
     * @link https://datatracker.ietf.org/doc/html/rfc4122#section-4.1.6 RFC 4122: Node
     * @link https://datatracker.ietf.org/doc/html/rfc4122#section-4.5 RFC 4122: Node IDs that Do Not Identify the Host
     *
     * @param string $node A hexadecimal string representation of the host
     *     machine's node identifier (MAC address); if the given node does not
     *     identify a host, it should set the multicast bit
     * @param DateTimeInterface | null $dateTime An optional date-time to use
     *     when creating the identifier; if not provided, the implementation
     *     should use the current date-time
     *
     * @throws InvalidArgumentException MUST throw if the $node or $dateTime are
     *     not legal values
     */
    public function createFromNode(string $node, ?DateTimeInterface $dateTime = null): NodeBasedUuidInterface;
}
