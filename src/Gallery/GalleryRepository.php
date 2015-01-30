<?php namespace Acme\Gallery;

use Acme\Core\BaseRepository;
use Acme\Core\CrudableTrait;
use DB;
use Illuminate\Support\MessageBag;
use Gallery;

class GalleryRepository extends BaseRepository {

    use CrudableTrait;

    /**
     * @var \Illuminate\Database\Eloquent\Model
     */
    public $model;

    /**
     * Construct
     * @param Gallery $model
     */
    public function __construct(Gallery $model)
    {
        parent::__construct(new MessageBag);

        $this->model = $model;
    }


    /**
     * @return array|null|static[]
     * Fetch Posts For Sliders
     */
    public function getImageSlider()
    {
        return $this->model->with(['photos'])->has('photos')->latest()->first();
    }
}