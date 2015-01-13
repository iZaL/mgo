<?php namespace Acme\Product\Validators;

use Acme\Core\BaseValidator;

class UpdateValidator extends BaseValidator {

    protected $rules = array(
        'name_ar'        => 'required',
        'description_ar' => 'required',
        'category_id'    => 'required'
    );

    public function getInputData()
    {
        return array_only($this->inputData, [
            'category_id', 'name_ar', 'name_en', 'description_ar', 'description_en', 'price'
        ]);
    }
}

