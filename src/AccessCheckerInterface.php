<?php

declare(strict_types=1);

namespace Yiisoft\Access;

/**
 * The interface defines checking if  certain user has certain permission. Optional parameters could be passed
 * for fine grained access checks.
 */
interface AccessCheckerInterface
{
    /**
     * Checks if the user with the ID given has the specified permission.
     *
     * @param mixed $userId the user ID representing the unique identifier of a user.
     * @param string $permissionName the name of the permission to be checked against.
     * @param array $parameters name-value pairs that will used to determine if access is granted.
     *
     * @return bool whether the user has the specified permission.
     * @throws \InvalidArgumentException if any of argument is not of the expected type or does not refer to an existing value
     */
    public function userHasPermission($userId, string $permissionName, array $parameters = []): bool;
}
