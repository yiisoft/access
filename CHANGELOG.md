# Yii Access

## 1.1.0 under development

- New #15: Add `DenyAll` and `AllowAll` access checkers (vjik)
- Chg #9: Type of `$userId` in the method `AccessCheckerInterface::userHasPermission()` is now specified (roxblnfk)
- Chg #13: Allowed passing a null value for `$userId` in `AccessCheckerInterface::userHasPermission()` method 
  to check the permission of the guest user (rustamwin)

## 1.0.0 August 24, 2020

- Initial release.
