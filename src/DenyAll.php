<?php

declare(strict_types=1);

namespace Yiisoft\Access;

use Stringable;

/**
 * Deny all access.
 */
final class DenyAll implements AccessCheckerInterface
{
    public function userHasPermission(int|string|Stringable|null $userId, string $permissionName, array $parameters = []): bool
    {
        return false;
    }
}
