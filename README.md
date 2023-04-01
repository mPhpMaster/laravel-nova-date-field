# Laravel Nova - Date Field

Extending `Laravel\Nova\Fields\Date` adding helpers methods.

## Installation

```bash
composer require mphpmaster/laravel-nova-date-field
```

## Usage

```php
public function fields(Request $request)
{
    return [
        Date::make('start_date')->addRuleBeforeOrEqual('end_date');
        Date::make('end_date')->addRuleAfterOrEqual('start_date');
    ];
}
```

## Date Field Methods And Arguments:
### Method `addRuleAfter`:
* `$attributeOrValue`: <small>Model attribute, or any date like today() or 01-01-2023</small>. 
* `$is_creation = false`: <small>Use `creationRules` method</small>.
* `$is_update = false`: <small>Use `updateRules` method</small>.

### Method `addRuleAfterOrEqual`:
* `$attributeOrValue`: <small>Model attribute, or any date like today() or 01-01-2023</small>. 
* `$is_creation = false`: <small>Use `creationRules` method</small>.
* `$is_update = false`: <small>Use `updateRules` method</small>.

### Method `addRuleBefore`:
* `$attributeOrValue`: <small>Model attribute, or any date like today() or 01-01-2023</small>. 
* `$is_creation = false`: <small>Use `creationRules` method</small>.
* `$is_update = false`: <small>Use `updateRules` method</small>.

### Method `addRuleBeforeOrEqual`:
* `$attributeOrValue`: <small>Model attribute, or any date like today() or 01-01-2023</small>. 
* `$is_creation = false`: <small>Use `creationRules` method</small>.
* `$is_update = false`: <small>Use `updateRules` method</small>.

### Method `setRuleAfter`:
* `$attributeOrValue`: <small>Model attribute, or any date like today() or 01-01-2023</small>. 
* `$is_creation = false`: <small>Use `creationRules` method</small>.
* `$is_update = false`: <small>Use `updateRules` method</small>.

### Method `setRuleAfterOrEqual`:
* `$attributeOrValue`: <small>Model attribute, or any date like today() or 01-01-2023</small>. 
* `$is_creation = false`: <small>Use `creationRules` method</small>.
* `$is_update = false`: <small>Use `updateRules` method</small>.

### Method `setRuleBefore`:
* `$attributeOrValue`: <small>Model attribute, or any date like today() or 01-01-2023</small>. 
* `$is_creation = false`: <small>Use `creationRules` method</small>.
* `$is_update = false`: <small>Use `updateRules` method</small>.

### Method `setRuleBeforeOrEqual`:
* `$attributeOrValue`: <small>Model attribute, or any date like today() or 01-01-2023</small>. 
* `$is_creation = false`: <small>Use `creationRules` method</small>.
* `$is_update = false`: <small>Use `updateRules` method</small>.

### Method `afterToday`:
* `$append_rules = true`: <small>To append or override existing rules</small>.
* `$is_creation = false`: <small>Use `creationRules` method</small>.
* `$is_update = false`: <small>Use `updateRules` method</small>.

### Method `afterYesterday`:
* `$append_rules = true`: <small>To append or override existing rules</small>.
* `$is_creation = false`: <small>Use `creationRules` method</small>.
* `$is_update = false`: <small>Use `updateRules` method</small>.

### Method `afterOrEqualToday`:
* `$append_rules = true`: <small>To append or override existing rules</small>.
* `$is_creation = false`: <small>Use `creationRules` method</small>.
* `$is_update = false`: <small>Use `updateRules` method</small>.

### Method `afterOrEqualYesterday`:
* `$append_rules = true`: <small>To append or override existing rules</small>.
* `$is_creation = false`: <small>Use `creationRules` method</small>.
* `$is_update = false`: <small>Use `updateRules` method</small>.

### Method `beforeToday`:
* `$append_rules = true`: <small>To append or override existing rules</small>.
* `$is_creation = false`: <small>Use `creationRules` method</small>.
* `$is_update = false`: <small>Use `updateRules` method</small>.

### Method `beforeTomorrow`:
* `$append_rules = true`: <small>To append or override existing rules</small>.
* `$is_creation = false`: <small>Use `creationRules` method</small>.
* `$is_update = false`: <small>Use `updateRules` method</small>.

### Method `beforeOrEqualToday`:
* `$append_rules = true`: <small>To append or override existing rules</small>.
* `$is_creation = false`: <small>Use `creationRules` method</small>.
* `$is_update = false`: <small>Use `updateRules` method</small>.

### Method `beforeOrEqualTomorrow`:
* `$append_rules = true`: <small>To append or override existing rules</small>.
* `$is_creation = false`: <small>Use `creationRules` method</small>.
* `$is_update = false`: <small>Use `updateRules` method</small>.

> **Note**: if both `$is_creation` and `$is_update` is `false` it will use `rules` method.


## License

This helper is released under the MIT License (MIT). Please see the included [license file](LICENSE) for more information.
