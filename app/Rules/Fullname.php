<?php

namespace App\Rules;

use Closure;
use Illuminate\Contracts\Validation\ValidationRule;

class Fullname implements ValidationRule
{
    /**
     * Run the validation rule.
     *
     * @param  \Closure(string, ?string=): \Illuminate\Translation\PotentiallyTranslatedString  $fail
     */
    public function validate(string $attribute, mixed $value, Closure $fail): void
    {
        if (preg_match('/^[a-zA-Z\s]+$/', $value) === 0) {
            $fail('The :attribute may only contain letters');

            return;
        }

        if (str_word_count($value) < 2) {
            $fail('The :attribute must contain a firstname and lastname.');

            return;
        }
    }
}
