<?php

declare(strict_types=1);

namespace Yiisoft\Access\Tests\Unit;

use PHPUnit\Framework\TestCase;
use Yiisoft\Access\DenyAll;

final class DenyAllTest extends TestCase
{
    public function testBase(): void
    {
        $accessChecker = new DenyAll();

        $this->assertFalse($accessChecker->userHasPermission(null, 'test'));
    }
}
