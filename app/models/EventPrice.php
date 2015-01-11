<?php

class EventPrice extends BaseModel {

    protected $guarded = ['id'];


    protected $table = 'event_prices';

    public function events()
    {
        return $this->belongsToMany('EventModel');
    }

    public function countries()
    {
        return $this->belongsToMany('Country');
    }

    public function scopeOfType($query, $type)
    {
        return $query->whereType($type);
    }

}
