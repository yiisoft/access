<p align="center">
    <a href="https://github.com/yiisoft" target="_blank">
        <img src="https://yiisoft.github.io/docs/images/yii_logo.svg" height="100px">
    </a>
    <h1 align="center">Yii Access</h1>
    <br>
</p>

This package provides an interface for checking if certain user has certain permission. Optional parameters could be passed
for fine-grained access checks.

[![Latest Stable Version](https://poser.pugx.org/yiisoft/access/v/stable.png)](https://packagist.org/packages/yiisoft/access)
[![Total Downloads](https://poser.pugx.org/yiisoft/access/downloads.png)](https://packagist.org/packages/yiisoft/access)

## Installation

```
composer require yiisoft/access
```

## Usage
 
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
      return $this->accessChecker->userHasPermission($this->getCurrentUser()->getId() ?? '', $permissionName, $parameters);
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
