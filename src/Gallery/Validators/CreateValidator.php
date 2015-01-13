<?php namespace Acme\Gallery\Validators;


use Acme\Core\BaseValidator;

class CreateValidator extends BaseValidator {

    /**
     * Validation rules
     *
     * @var array
     */
    protected $rules = array(
        'category_id' => 'required',
    );

    public function getInputData()
    {
        return array_only($this->inputData, [
            'event_id','category_id','title_ar','title_en','description_ar','description_en'
        ]);
    }

    /**
     * Remove Password field if empty
     */
    public function beforeValidation()
    {
        if ( empty($this->inputData['event_id']) )
            unset($this->inputData['event_id']);
        if ( empty($this->inputData['category_id']) )
            unset($this->inputData['category_id']);

    }

}
