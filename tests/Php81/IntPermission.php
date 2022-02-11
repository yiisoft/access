<?php

declare(strict_types=1);

namespace Yiisoft\Access\Tests\Php81;

enum IntPermission: int
{
    case addPost = 1;
    case deletePost = 2;
}
