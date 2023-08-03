<?php

declare(strict_types=1);

namespace Yiisoft\Access;

use Stringable;

/**
 * Allow all access.
 */
final class AllowAll implements AccessCheckerInterface
{
    public function userHasPermission(int|string|Stringable|null $userId, string $permissionName, array $parameters = []): bool
    {
        return true;
    }
}
