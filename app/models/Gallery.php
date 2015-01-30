<?php

use Acme\Core\LocaleTrait;

class Gallery extends BaseModel {

    use LocaleTrait;

    protected $guarded = [];

    protected $table = "galleries";

    protected $localeStrings = ['title', 'description'];

    public function category()
    {
        return $this->belongsTo('Category', 'category_id')->where('type', '=', 'Gallery');
    }

    public function photos()
    {
        return $this->morphMany('Photo', 'imageable');
    }

    public function videos()
    {
        return $this->morphMany('Video', 'videoable');
    }

    public function comments()
    {
        return $this->morphMany('Comment', 'commentable');
    }

}
