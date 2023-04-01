<?php

namespace MPhpMaster\LaravelNovaDateField;

/**
 *
 */
class DateMixin
{
    /**
     * @return \Closure
     */
    public function addRuleAfter()
    {
        return function($value, $is_creation = false, $is_update = false) {
            $var = $is_creation ? 'creationRules' : ($is_update ? 'updateRules' : 'rules');
            $rules = $this->$var ?: [];
            $rules[] = 'after:' . value($value);

            $this->rules(array_unique($rules));

            return $this;
        };
    }

    /**
     * @return \Closure
     */
    public function addRuleAfterOrEqual()
    {
        return function($value, $is_creation = false, $is_update = false) {
            $var = $is_creation ? 'creationRules' : ($is_update ? 'updateRules' : 'rules');
            $rules = $this->$var ?: [];
            $rules[] = 'after_or_equal:' . value($value);

            $this->rules(array_unique($rules));

            return $this;
        };
    }

    /**
     * @return \Closure
     */
    public function addRuleBefore()
    {
        return function($value, $is_creation = false, $is_update = false) {
            $var = $is_creation ? 'creationRules' : ($is_update ? 'updateRules' : 'rules');
            $rules = $this->$var ?: [];
            $rules[] = 'before:' . value($value);

            $this->rules(array_unique($rules));

            return $this;
        };
    }

    /**
     * @return \Closure
     */
    public function addRuleBeforeOrEqual()
    {
        return function($value, $is_creation = false, $is_update = false) {
            $var = $is_creation ? 'creationRules' : ($is_update ? 'updateRules' : 'rules');
            $rules = $this->$var ?: [];
            $rules[] = 'before_or_equal:' . value($value);

            $this->rules(array_unique($rules));

            return $this;
        };
    }

    /**
     * @return \Closure
     */
    public function setRuleAfter()
    {
        return function($value, $is_creation = false, $is_update = false) {
            $var = $is_creation ? 'creationRules' : ($is_update ? 'updateRules' : 'rules');
            $this->$var = [];

            return $this->addRuleAfter($value);
        };
    }

    /**
     * @return \Closure
     */
    public function setRuleAfterOrEqual()
    {
        return function($value, $is_creation = false, $is_update = false) {
            $var = $is_creation ? 'creationRules' : ($is_update ? 'updateRules' : 'rules');
            $this->$var = [];

            return $this->addRuleAfterOrEqual($value);
        };
    }

    /**
     * @return \Closure
     */
    public function setRuleBefore()
    {
        return function($value, $is_creation = false, $is_update = false) {
            $var = $is_creation ? 'creationRules' : ($is_update ? 'updateRules' : 'rules');
            $this->$var = [];

            return $this->addRuleBefore($value);
        };
    }

    /**
     * @return \Closure
     */
    public function setRuleBeforeOrEqual()
    {
        return function($value, $is_creation = false, $is_update = false) {
            $var = $is_creation ? 'creationRules' : ($is_update ? 'updateRules' : 'rules');
            $this->$var = [];

            return $this->addRuleBeforeOrEqual($value);
        };
    }

    // region: shorts

    /**
     * @return \Closure
     */
    public function afterToday()
    {
        return function($append_rules = true, $is_creation = false, $is_update = false) {
            $method = $append_rules ? 'add' : 'set';

            return $this->{"{$method}RuleAfter"}(today()->endOfDay(), $is_creation, $is_update);
        };
    }

    /**
     * @return \Closure
     */
    public function afterYesterday()
    {
        return function($append_rules = true, $is_creation = false, $is_update = false) {
            $method = $append_rules ? 'add' : 'set';

            return $this->{"{$method}RuleAfter"}(today()->subDay()->endOfDay(), $is_creation, $is_update);
        };
    }

    /**
     * @return \Closure
     */
    public function afterOrEqualToday()
    {
        return function($append_rules = true, $is_creation = false, $is_update = false) {
            $method = $append_rules ? 'add' : 'set';

            return $this->{"{$method}RuleAfterOrEqual"}(today()->endOfDay(), $is_creation, $is_update);
        };
    }

    /**
     * @return \Closure
     */
    public function afterOrEqualYesterday()
    {
        return function($append_rules = true, $is_creation = false, $is_update = false) {
            $method = $append_rules ? 'add' : 'set';

            return $this->{"{$method}RuleAfterOrEqual"}(today()->subDay()->endOfDay(), $is_creation, $is_update);
        };
    }

    /**
     * @return \Closure
     */
    public function beforeToday()
    {
        return function($append_rules = true, $is_creation = false, $is_update = false) {
            $method = $append_rules ? 'add' : 'set';

            return $this->{"{$method}RuleBefore"}(today()->startOfDay(), $is_creation, $is_update);
        };
    }

    /**
     * @return \Closure
     */
    public function beforeTomorrow()
    {
        return function($append_rules = true, $is_creation = false, $is_update = false) {
            $method = $append_rules ? 'add' : 'set';

            return $this->{"{$method}RuleBefore"}(today()->addDay()->startOfDay(), $is_creation, $is_update);
        };
    }

    /**
     * @return \Closure
     */
    public function beforeOrEqualToday()
    {
        return function($append_rules = true, $is_creation = false, $is_update = false) {
            $method = $append_rules ? 'add' : 'set';

            return $this->{"{$method}RuleBeforeOrEqual"}(today()->startOfDay(), $is_creation, $is_update);
        };
    }

    /**
     * @return \Closure
     */
    public function beforeOrEqualTomorrow()
    {
        return function($append_rules = true, $is_creation = false, $is_update = false) {
            $method = $append_rules ? 'add' : 'set';

            return $this->{"{$method}RuleBeforeOrEqual"}(today()->addDay()->startOfDay(), $is_creation, $is_update);
        };
    }
    // endregion: shorts
}
