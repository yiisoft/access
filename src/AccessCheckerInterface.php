<?php

declare(strict_types=1);

namespace Yiisoft\Access;

use InvalidArgumentException;

/**
 * The interface defines checking if certain user has certain permission. Optional parameters could be passed
 * for fine-grained access checks.
 */
interface AccessCheckerInterface
{
    /**
     * Checks if the user with the ID given has the specified permission.
     *
     * @param int|string|null $userId The user ID representing the unique identifier of a user. If ID is null,
     * it means user is a guest.
     * @param string $permissionName The name of the permission to be checked against.
     * @param array $parameters Name-value pairs that will be used to determine if access is granted.
     *
     * @throws InvalidArgumentException If any of argument is not of the expected type or does not refer to
     * an existing value.
     *
     * @return bool Whether the user has the specified permission.
     */
    public function userHasPermission($userId, string $permissionName, array $parameters = []): bool;
}
