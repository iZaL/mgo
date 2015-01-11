<?php namespace Acme\User\Validators;

use Acme\Core\BaseValidator;

class CreateValidator extends BaseValidator {

    /**
     * Validation rules
     *
     * @var array
     */
    protected $rules = array(
        'email'    => 'required|email|unique:users,email',
        'password' => 'required|alpha_num|between:6,12|confirmed',
        'name_ar'  => 'required|min:3',
        'name_en'  => 'required|min:3',
        'mobile'   => 'required',
        'username' => 'required',
    );

}
