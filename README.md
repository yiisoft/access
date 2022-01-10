<p align="center">
    <a href="https://github.com/yiisoft" target="_blank">
        <img src="https://yiisoft.github.io/docs/images/yii_logo.svg" height="100px">
    </a>
    <h1 align="center">Yii Access</h1>
    <br>
</p>

[![Latest Stable Version](https://poser.pugx.org/yiisoft/access/v/stable.png)](https://packagist.org/packages/yiisoft/access)
[![Total Downloads](https://poser.pugx.org/yiisoft/access/downloads.png)](https://packagist.org/packages/yiisoft/access)

This package provides an interface for checking if certain user has certain permission. Optional parameters could be passed
for fine-grained access checks.

## Requirements

- PHP 7.4 or higher.

## Installation

The package could be installed with composer:

```shell
composer require yiisoft/access --prefer-dist
```

## General usage
 
An access checker [such as RBAC](https://github.com/yiisoft/rbac) implements the interface. A user identity may use it 
then for checking access:
 
```php
namespace App;

use Yiisoft\Access\AccessCheckerInterface;

class UserService
{
  private AccessCheckerInterface $accessChecker;

  public function __construct(AccessCheckerInterface $accessChecker)
  {
      $this->accessChecker = $accessChecker;
  }

  public function can(string $permissionName, array $parameters = []): bool
  {
      return $this->accessChecker->userHasPermission($this->getCurrentUser()->getId(), $permissionName, $parameters);
  }

  public function getCurrentUser(): User
  {
      // ...
  }
}
```
 
In the handler it may look like the following:
 
```php
public function actionList(UserService $userService)
{
  if (!$userService->can('list_posts')) {
      // access denied
  }

  // list posts
}
```

## License

The Yii Access is free software. It is released under the terms of the BSD License.
Please see [`LICENSE`](./LICENSE.md) for more information.

Maintained by [Yii Software](https://www.yiiframework.com/).

## Support the project

[![Open Collective](https://img.shields.io/badge/Open%20Collective-sponsor-7eadf1?logo=open%20collective&logoColor=7eadf1&labelColor=555555)](https://opencollective.com/yiisoft)

## Follow updates

[![Official website](https://img.shields.io/badge/Powered_by-Yii_Framework-green.svg?style=flat)](https://www.yiiframework.com/)
[![Twitter](https://img.shields.io/badge/twitter-follow-1DA1F2?logo=twitter&logoColor=1DA1F2&labelColor=555555?style=flat)](https://twitter.com/yiiframework)
[![Telegram](https://img.shields.io/badge/telegram-join-1DA1F2?style=flat&logo=telegram)](https://t.me/yii3en)
[![Facebook](https://img.shields.io/badge/facebook-join-1DA1F2?style=flat&logo=facebook&logoColor=ffffff)](https://www.facebook.com/groups/yiitalk)
[![Slack](https://img.shields.io/badge/slack-join-1DA1F2?style=flat&logo=slack)](https://yiiframework.com/go/slack)
