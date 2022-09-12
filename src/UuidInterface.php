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

namespace Identifier;

use Identifier\Uuid\Variant;
use Identifier\Uuid\Version;

/**
 * Describes the interface of a universally unique identifier (UUID)
 *
 * @link https://datatracker.ietf.org/doc/html/rfc4122 RFC 4122
 */
interface UuidInterface extends BinaryIdentifierInterface
{
    /**
     * Returns the variant of this UUID, describing the layout of the UUID
     *
     * @link https://datatracker.ietf.org/doc/html/rfc4122#section-4.1.1 RFC 4122, § 4.1.1
     */
    public function getVariant(): Variant;

    /**
     * Returns the version of this UUID, describing how the UUID was generated
     *
     * @link https://datatracker.ietf.org/doc/html/rfc4122#section-4.1.3 RFC 4122, § 4.1.3
     */
    public function getVersion(): Version;

    /**
     * Returns a string representation of the identifier encoded as hexadecimal
     * characters
     *
     * @return non-empty-string
     */
    public function toHexadecimal(): string;

    /**
     * Returns the string standard representation of the UUID, as defined by
     * RFC 4122
     *
     * @return non-empty-string
     */
    public function toRfc4122(): string;

    /**
     * Returns the string standard representation of the UUID as a URN
     *
     * @link http://en.wikipedia.org/wiki/Uniform_Resource_Name Uniform Resource Name
     * @link https://datatracker.ietf.org/doc/html/rfc4122#section-3 RFC 4122, § 3: Namespace Registration Template
     *
     * @return non-empty-string
     */
    public function toUrn(): string;
}
