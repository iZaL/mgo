<?php namespace Acme\Product;

use Acme\Core\BasePresenter;
use Product;

class Presenter extends BasePresenter {

    /**
     * @param Product $model
     */
    public function __construct(Product $model) {
        $this->resource = $model;
    }

}
