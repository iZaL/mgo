<?php namespace Acme\User\Validators;

use Acme\Core\BaseValidator;
use Auth;
use User;

class AdminCreateValidator extends BaseValidator {

    /**
     * Validation rules
     *
     * @var array
     */

    protected $rules = array(
        'phone'    => 'sometimes',
        'mobile'   => 'numeric|sometimes',
        'username' => 'required|unique:users,username',
        'email'    => 'required|email|unique:users,email,:id',
        'password' => 'required|alpha_num|between:6,12|confirmed',
        'name_ar'  => 'min:3',
        'name_en'  => 'min:3',
    );

    /**
     * Get the prepared input data.
     *
     * @return array
     */
    public function getInputData()
    {
        return array_only($this->inputData, [
            'name_ar', 'name_en', 'password', 'password_confirmation', 'country_id', 'twitter', 'phone', 'mobile','active','username','email'
        ]);
    }


}
