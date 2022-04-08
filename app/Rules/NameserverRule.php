<?php

namespace App\Rules;

use App\Models\Domain;
use Illuminate\Contracts\Validation\Rule;

class NameserverRule implements Rule
{
    /**
     * Create a new rule instance.
     *
     * @return void
     */
    public function __construct($valid)
    {
        $this->valid = $valid;
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

        if($this->valid=='check_newhost'){
            $domain=Domain::where([ ['domain' , $value], ])->count();
            return $domain === 0;
        }
    }

    /**
     * Get the validation error message.
     *
     * @return string
     */
    public function message()
    {

        if($this->valid=='check_newhost'){
            return 'لطفا برای :attribute از نام دامنه استفاده ننمایید';

        }

    }
}
