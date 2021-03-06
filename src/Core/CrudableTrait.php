<?php
namespace Acme\Core;

use Illuminate\Database\Eloquent\Model;

trait CrudableTrait {

    /**
     * @return validator class
     * Initialize Validator Class for Creating Form
     */
    public function getCreateForm()
    {
        $classPath = $this->initValidatorClass();
        $validator = $classPath.'CreateValidator';
        return new $validator;
    }

    /**
     * @param $id
     * @return validator class
     * Initialize Validator Class for Updating Form
     */
    public function getEditForm($id)
    {
        $classPath = $this->initValidatorClass();
        $validator = $classPath.'UpdateValidator';
        return new $validator($id);
    }

    /**
     * Create a new entity
     *
     * @param array $input
     * @internal param array $data
     * @return \Illuminate\Database\Eloquent\Model
     */
    public function create(array $input)
    {
        return $this->model->create($input);
    }

    /**
     * Update an existing entity
     *
     * @param $id
     * @param array $input
     * @internal param array $data
     * @return \Illuminate\Database\Eloquent\Model
     */
    public function update($id, array $input)
    {
        $record = $this->findById($id);

        $record->fill($input);

        if ( $this->save($record) ) return true;

        $this->addError('Could Not Update');

        return false;
    }

    /**
     * Delete an existing entity
     *
     * @param Model $model
     * @internal param int $id
     * @return boolean
     */
    public function delete(Model $model)
    {
        return $model->delete();
    }


} 