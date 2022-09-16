<?php

/**
 * This file is part of identifier/identifier
 *
 * identifier/identifier is open source software: you can distribute
 * it and/or modify it under the terms of the MIT License
 * (the "License"). You may not use this file except in
 * compliance with the License.
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or
 * implied. See the License for the specific language governing
 * permissions and limitations under the License.
 *
 * @copyright Copyright (c) Ben Ramsey <ben@benramsey.com>
 * @license https://opensource.org/licenses/MIT MIT License
 */

declare(strict_types=1);

namespace Identifier\Uuid;

/**
 * Describes the interface of a UUID that includes a node identifier
 * (or MAC address)
 */
interface NodeBasedUuidInterface extends TimeBasedUuidInterface
{
    /**
     * Returns a string representation of the node (usually the host MAC
     * address), encoded as hexadecimal characters
     *
     * If the node has the multicast bit set, this indicates it was randomly
     * generated, rather than identifying a host machine.
     *
     * @link https://datatracker.ietf.org/doc/html/rfc4122#section-4.1.6 RFC 4122: Node
     * @link https://datatracker.ietf.org/doc/html/rfc4122#section-4.5 RFC 4122: Node IDs that Do Not Identify the Host
     *
     * @return non-empty-string
     */
    public function getNode(): string;
}