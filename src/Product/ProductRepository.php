<?php namespace Acme\Product;

use Acme\Core\BaseRepository;
use Acme\Core\CrudableTrait;
use Illuminate\Support\MessageBag;
use Product;

class ProductRepository extends BaseRepository {

    use CrudableTrait;
    /**
     * @var \Illuminate\Database\Eloquent\Model
     */
    public $model;

    /**
     * @param Product $model
     */
    public function __construct(Product $model)
    {
        parent::__construct(new MessageBag);

        $this->model = $model;
    }

}