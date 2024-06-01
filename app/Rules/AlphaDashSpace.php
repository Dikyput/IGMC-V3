<?php

namespace App\Rules;

use Illuminate\Contracts\Validation\Rule;

class AlphaDashSpace implements Rule
{
    /**
     * Determine if the validation rule passes.
     *
     * @param  string  $attribute
     * @param  mixed  $value
     * @return bool
     */
    public function passes($attribute, $value)
    {
        // Cek apakah hanya angka
        if (ctype_digit($value)) {
            return false;
        }

        // Cek apakah ada emoji
        if (preg_match('/[\x{1F600}-\x{1F64F}\x{1F300}-\x{1F5FF}\x{1F680}-\x{1F6FF}\x{1F700}-\x{1F77F}]/u', $value)) {
            return false;
        }

        return true;
    }

    /**
     * Get the validation error message.
     *
     * @return string
     */
    public function message()
    {
        return 'The :attribute must not be only numbers and should not contain emojis.';
    }
}
