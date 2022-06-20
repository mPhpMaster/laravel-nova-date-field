<?php

namespace MPhpMaster\LaravelNovaDateField;

class Date extends \Laravel\Nova\Fields\Date
{
    public function addRuleAfter($value, $is_creation = false, $is_update = false)
    {
        $var = $is_creation ? 'creationRules' : ($is_update ? 'updateRules' : 'rules');
        $rules = $this->$var ?: [];
        $rules[] = 'after:' . value($value);

        $this->rules(array_unique($rules));

        return $this;
    }

    public function addRuleAfterOrEqual($value, $is_creation = false, $is_update = false)
    {
        $var = $is_creation ? 'creationRules' : ($is_update ? 'updateRules' : 'rules');
        $rules = $this->$var ?: [];
        $rules[] = 'after_or_equal:' . value($value);

        $this->rules(array_unique($rules));

        return $this;
    }

    public function addRuleBefore($value, $is_creation = false, $is_update = false)
    {
        $var = $is_creation ? 'creationRules' : ($is_update ? 'updateRules' : 'rules');
        $rules = $this->$var ?: [];
        $rules[] = 'before:' . value($value);

        $this->rules(array_unique($rules));

        return $this;
    }

    public function addRuleBeforeOrEqual($value, $is_creation = false, $is_update = false)
    {
        $var = $is_creation ? 'creationRules' : ($is_update ? 'updateRules' : 'rules');
        $rules = $this->$var ?: [];
        $rules[] = 'before_or_equal:' . value($value);

        $this->rules(array_unique($rules));

        return $this;
    }

    public function setRuleAfter($value, $is_creation = false, $is_update = false)
    {
        $var = $is_creation ? 'creationRules' : ($is_update ? 'updateRules' : 'rules');
        $this->$var = [];

        return $this->addRuleAfter($value);
    }

    public function setRuleAfterOrEqual($value, $is_creation = false, $is_update = false)
    {
        $var = $is_creation ? 'creationRules' : ($is_update ? 'updateRules' : 'rules');
        $this->$var = [];

        return $this->addRuleAfterOrEqual($value);
    }

    public function setRuleBefore($value, $is_creation = false, $is_update = false)
    {
        $var = $is_creation ? 'creationRules' : ($is_update ? 'updateRules' : 'rules');
        $this->$var = [];

        return $this->addRuleBefore($value);
    }

    public function setRuleBeforeOrEqual($value, $is_creation = false, $is_update = false)
    {
        $var = $is_creation ? 'creationRules' : ($is_update ? 'updateRules' : 'rules');
        $this->$var = [];

        return $this->addRuleBeforeOrEqual($value);
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
