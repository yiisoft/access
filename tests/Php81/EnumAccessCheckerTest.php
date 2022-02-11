<?php

declare(strict_types=1);

namespace Yiisoft\Access\Tests\Php81;

use PHPUnit\Framework\TestCase;
use Yiisoft\Access\AccessCheckerInterface;
use Yiisoft\Access\EnumAccessChecker;

final class EnumAccessCheckerTest extends TestCase
{
    public function testBase(): void
    {
        $accessChecker = new class () implements AccessCheckerInterface {
            private array $data = [];

            public function userHasPermission($userId, string $permissionName, array $parameters = []): bool
            {
                $this->data[] = [$userId, $permissionName, $parameters];
                return true;
            }

            public function getData(): array
            {
                return $this->data;
            }
        };

        $enumAccessChecker = new EnumAccessChecker($accessChecker);

        $this->assertTrue(
            $enumAccessChecker->userHasPermission(
                'user-name',
                StringPermission::addPost,
                ['n' => 42]
            )
        );

        $this->assertTrue(
            $enumAccessChecker->userHasPermission(
                null,
                IntPermission::deletePost,
                []
            )
        );

        $this->assertSame(
            [
                ['user-name', 'add_post', ['n' => 42]],
                [null, '2', []],
            ],
            $accessChecker->getData(),
        );
    }
}
