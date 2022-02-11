<?php

declare(strict_types=1);

namespace Yiisoft\Access\Tests\Php81;

enum StringPermission: string
{
    case addPost = 'add_post';
    case deletePost = 'delete_post';
}
