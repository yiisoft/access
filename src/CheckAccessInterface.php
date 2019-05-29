<?php
namespace Yiisoft\Access;

/**
 * For more details and usage information on CheckAccessInterface, see
 * the [guide article on security authorization](guide:security-authorization).
 */
interface CheckAccessInterface
{
    /**
     * Checks if the user has the specified permission.
     *
     * @param mixed $userId the user ID representing the unique identifier of a user.
     * @param string $permissionName the name of the permission to be checked against
     * @param array $parameters name-value pairs that will be passed to the rules associated
     * with the roles and permissions assigned to the user.
     *
     * @return bool whether the user has the specified permission.
     *@throws \InvalidArgumentException if $permissionName does not refer to an existing permission
     *
     */
    public function checkAccess($userId, string $permissionName, array $parameters = []): bool;
}
