<?php

namespace MPhpMaster\LaravelNovaDateField;

/**
 * @deprecated Use \Laravel\Nova\Fields\Date instead.
 */
class Date extends \Laravel\Nova\Fields\Date
{
    public function addRuleAfter($attributeOrValue, $is_creation = false, $is_update = false)
    {
        $var = $is_creation ? 'creationRules' : ($is_update ? 'updateRules' : 'rules');
        $rules = $this->$var ?: [];
        $rules[] = 'after:' . value($attributeOrValue);

        $this->rules(array_unique($rules));

        return $this;
    }

    public function addRuleAfterOrEqual($attributeOrValue, $is_creation = false, $is_update = false)
    {
        $var = $is_creation ? 'creationRules' : ($is_update ? 'updateRules' : 'rules');
        $rules = $this->$var ?: [];
        $rules[] = 'after_or_equal:' . value($attributeOrValue);

        $this->rules(array_unique($rules));

        return $this;
    }

    public function addRuleBefore($attributeOrValue, $is_creation = false, $is_update = false)
    {
        $var = $is_creation ? 'creationRules' : ($is_update ? 'updateRules' : 'rules');
        $rules = $this->$var ?: [];
        $rules[] = 'before:' . value($attributeOrValue);

        $this->rules(array_unique($rules));

        return $this;
    }

    public function addRuleBeforeOrEqual($attributeOrValue, $is_creation = false, $is_update = false)
    {
        $var = $is_creation ? 'creationRules' : ($is_update ? 'updateRules' : 'rules');
        $rules = $this->$var ?: [];
        $rules[] = 'before_or_equal:' . value($attributeOrValue);

        $this->rules(array_unique($rules));

        return $this;
    }

    public function setRuleAfter($attributeOrValue, $is_creation = false, $is_update = false)
    {
        $var = $is_creation ? 'creationRules' : ($is_update ? 'updateRules' : 'rules');
        $this->$var = [];

        return $this->addRuleAfter($attributeOrValue);
    }

    public function setRuleAfterOrEqual($attributeOrValue, $is_creation = false, $is_update = false)
    {
        $var = $is_creation ? 'creationRules' : ($is_update ? 'updateRules' : 'rules');
        $this->$var = [];

        return $this->addRuleAfterOrEqual($attributeOrValue);
    }

    public function setRuleBefore($attributeOrValue, $is_creation = false, $is_update = false)
    {
        $var = $is_creation ? 'creationRules' : ($is_update ? 'updateRules' : 'rules');
        $this->$var = [];

        return $this->addRuleBefore($attributeOrValue);
    }

    public function setRuleBeforeOrEqual($attributeOrValue, $is_creation = false, $is_update = false)
    {
        $var = $is_creation ? 'creationRules' : ($is_update ? 'updateRules' : 'rules');
        $this->$var = [];

        return $this->addRuleBeforeOrEqual($attributeOrValue);
    }

    // region: shorts
    public function afterToday($append_rules = true, $is_creation = false, $is_update = false)
    {
        $method = $append_rules ? 'add' : 'set';

        return $this->{"{$method}RuleAfter"}(today()->endOfDay(), $is_creation, $is_update);
    }

    public function afterYesterday($append_rules = true, $is_creation = false, $is_update = false)
    {
        $method = $append_rules ? 'add' : 'set';

        return $this->{"{$method}RuleAfter"}(today()->subDay()->endOfDay(), $is_creation, $is_update);
    }

    public function afterOrEqualToday($append_rules = true, $is_creation = false, $is_update = false)
    {
        $method = $append_rules ? 'add' : 'set';

        return $this->{"{$method}RuleAfterOrEqual"}(today()->endOfDay(), $is_creation, $is_update);
    }

    public function afterOrEqualYesterday($append_rules = true, $is_creation = false, $is_update = false)
    {
        $method = $append_rules ? 'add' : 'set';

        return $this->{"{$method}RuleAfterOrEqual"}(today()->subDay()->endOfDay(), $is_creation, $is_update);
    }

    public function beforeToday($append_rules = true, $is_creation = false, $is_update = false)
    {
        $method = $append_rules ? 'add' : 'set';

        return $this->{"{$method}RuleBefore"}(today()->startOfDay(), $is_creation, $is_update);
    }

    public function beforeTomorrow($append_rules = true, $is_creation = false, $is_update = false)
    {
        $method = $append_rules ? 'add' : 'set';

        return $this->{"{$method}RuleBefore"}(today()->addDay()->startOfDay(), $is_creation, $is_update);
    }

    public function beforeOrEqualToday($append_rules = true, $is_creation = false, $is_update = false)
    {
        $method = $append_rules ? 'add' : 'set';

        return $this->{"{$method}RuleBeforeOrEqual"}(today()->startOfDay(), $is_creation, $is_update);
    }

    public function beforeOrEqualTomorrow($append_rules = true, $is_creation = false, $is_update = false)
    {
        $method = $append_rules ? 'add' : 'set';

        return $this->{"{$method}RuleBeforeOrEqual"}(today()->addDay()->startOfDay(), $is_creation, $is_update);
    }
    // endregion: shorts
}
