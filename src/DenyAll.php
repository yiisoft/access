<?php

declare(strict_types=1);

namespace Yiisoft\Access;

/**
 * Deny all access.
 */
final class DenyAll implements AccessCheckerInterface
{
    public function userHasPermission($userId, $permissionName, array $parameters = []): bool
    {
        return false;
    }
}
