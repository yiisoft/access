<?php

declare(strict_types=1);

namespace Yiisoft\Access;

/**
 * Allow all access.
 */
final class AllowAll implements AccessCheckerInterface
{
    public function userHasPermission($userId, string $permissionName, array $parameters = []): bool
    {
        return true;
    }
}
