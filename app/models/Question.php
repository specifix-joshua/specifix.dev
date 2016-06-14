<?php

Class Question extends Post {

    protected $table = 'questions';

    public static $rules  = array(
        'title'         => 'required|max:100',
        'content'       => 'required|max:10000',
        'language'     => 'required'
    );
    
     public function user()
    {
        return $this->belongsTo('User');
    }

     public function answers()
    {
        return $this->hasMany('Answer');
    }

    public function languages()
    {
        return $this->belongsToMany('Language');
    }
}