<?php

Class Language extends BaseModel {

    protected $table = 'languages';

    public $timestamps = false;

     public function users()
    {
        return $this->belongsToMany('User');
    }

    public function questions()
    {
        return $this->belongsToMany('Question');
    }
    
}