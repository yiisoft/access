<?php
namespace Yiisoft\Access;

/**
 * For more details and usage information on AccessCheckerInterface, see
 * the [guide article on security authorization](guide:security-authorization).
 */
interface AccessCheckerInterface
{
    /**
     * Checks if the user has the specified permission.
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
