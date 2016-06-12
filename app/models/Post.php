<?php

Class Post extends BaseModel {

    protected $table;

    public static $rules;

    public function user()
    {
        return $this->belongsTo('User');
    }

    public function votes()
    {
        return $this->hasMany('Vote');
    }
    
}