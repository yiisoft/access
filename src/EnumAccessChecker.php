<?php

declare(strict_types=1);

namespace Yiisoft\Access;

use BackedEnum;
use InvalidArgumentException;

/**
 * Access checker interface wrapper for check permission in the form of enumerations instance.
 */
final class EnumAccessChecker
{
    private AccessCheckerInterface $accessChecker;

    public function __construct(AccessCheckerInterface $accessChecker)
    {
        $this->accessChecker = $accessChecker;
    }

    /**
     * Checks if the user with the ID given has the specified permission.
     *
     * @param int|string|null $userId The user ID representing the unique identifier of a user. If ID is `null`,
     * it means user is a guest.
     * @param BackedEnum $permission The permission enumeration instance to be checked against.
     * @param array $parameters Name-value pairs that will be used to determine if access is granted.
     *
     * @throws InvalidArgumentException If any of argument is not of the expected type or does not refer to
     * an existing value.
     *
     * @return bool Whether the user has the specified permission.
     */
    public function userHasPermission(int|string|null $userId, BackedEnum $permission, array $parameters = []): bool
    {
        return $this->accessChecker->userHasPermission($userId, (string) $permission->value, $parameters);
    }
}
