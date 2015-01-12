<?php

use Acme\Blog\BlogPresenter;
use Acme\Core\LocaleTrait;
use McCool\LaravelAutoPresenter\PresenterInterface;

class Product extends BaseModel implements PresenterInterface {

    use LocaleTrait;

    protected $guarded = [];

    protected $table = "products";

    protected $localeStrings = ['name', 'description'];

    public function comments()
    {
        return $this->morphMany('Comment', 'commentable');
    }

    public function category()
    {
        return $this->belongsTo('Category', 'category_id');
    }

    public function photos()
    {
        return $this->morphMany('Photo', 'imageable');
    }

    public function tags()
    {
        return $this->morphToMany('Tag', 'taggable');
    }

    public function categories()
    {
        return $this->hasMany('Category', 'category_id');
    }

    public function getPresenter()
    {
        return 'Acme\Product\Presenter';
    }

    public function latest($count)
    {
        return $this->orderBy('created_at', 'DESC')->remember(10)->limit($count)->get();
    }

    public function beforeDelete()
    {
        // Delete the comments
        $this->comments()->delete();
    }
}
