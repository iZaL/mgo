<?php namespace Acme\Blog\Validators;

use Acme\Core\BaseValidator;

class CreateValidator extends BaseValidator {

    /**
     * Validation rules
     *
     * @var array
     */
    protected $rules = array(
        'title_ar'       => 'required',
        'description_ar' => 'required',
        'category_id'    => 'required',
    );

    public function getInputData()
    {
        return array_only($this->inputData, [
            'category_id', 'title_ar','title_en','description_ar','description_en'
        ]);
    }
}
