<?php

namespace App\Rules;

use Illuminate\Contracts\Validation\Rule;

class DayInWeek implements Rule
{
    const Day = [
        'T2' => 2,
        'T3' => 3,
        'T4' => 4,
        'T5' => 5,
        'T6' => 6,
        'T7' => 7,
        'CN' => 8,
    ];
    /**
     * Create a new rule instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Determine if the validation rule passes.
     *
     * @param  string  $attribute
     * @param  mixed  $value
     * @return bool
     */
    public function passes($attribute, $value)
    {
        return in_array($value, self::Day);
    }

    /**
     * Get the validation error message.
     *
     * @return string
     */
    public function message()
    {
        return trans('validation.not_in');
    }
}
