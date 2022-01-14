<?php

declare(strict_types=1);

namespace Yiisoft\Access\Tests;

use PHPUnit\Framework\TestCase;
use Yiisoft\Access\AllowAll;

final class AllowAllTest extends TestCase
{
    public function testBase(): void
    {
        $accessChecker = new AllowAll();

        $this->assertTrue($accessChecker->userHasPermission(null, 'test'));
    }
}
