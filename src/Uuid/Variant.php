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
 * The variant number describes the layout of the UUID
 *
 * @link https://datatracker.ietf.org/doc/html/rfc4122#section-4.1.1 RFC 4122, § 4.1.1
 */
enum Variant: int
{
    /**
     * Reserved, NCS backward compatibility
     */
    case ReservedNcs = 0;

    /**
     * The UUID layout specified in RFC 4122
     */
    case Rfc4122 = 2;

    /**
     * Reserved, Microsoft Corporation backward compatibility
     */
    case ReservedMicrosoft = 6;

    /**
     * Reserved for future definition
     */
    case ReservedFuture = 7;
}
