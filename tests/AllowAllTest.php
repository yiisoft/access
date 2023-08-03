<?php

declare(strict_types=1);

namespace Yiisoft\Access\Tests;

use PHPUnit\Framework\TestCase;
use Yiisoft\Access\AllowAll;
use Yiisoft\Access\Tests\Support\StringableObject;

final class AllowAllTest extends TestCase
{
    public function dataBase(): array
    {
        return [
            [null],
            [7],
            ['hello'],
            [new StringableObject('test')],
        ];
    }

    /**
     * @dataProvider dataBase
     */
    public function testBase(mixed $userId): void
    {
        $accessChecker = new AllowAll();

        $this->assertTrue($accessChecker->userHasPermission($userId, 'test'));
    }
}
