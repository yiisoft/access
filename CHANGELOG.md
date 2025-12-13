# Yii Access Change Log

## 2.0.1 under development

- Chg #53, #57: Change PHP constraint in composer.json to `8.0 - 8.5` (@vjik)

## 2.0.0 August 07, 2023

- Chg #37: Raise minimum PHP version to 8.0, add type for `$userId` parameter of
  `AccessCheckerInterface::userHasPermission()` method (@vjik)

## 1.1.1 April 05, 2022

- Bug #18: Add missing `\Stringable` to `$userId` of `AccessCheckerInterface::userHasPermission()` (@samdark)

## 1.1.0 January 14, 2022

- New #15: Add `DenyAll` and `AllowAll` access checkers (@vjik)

## 1.0.0 August 24, 2020

- Initial release.
