<?php

Class Answer extends Post {

    protected $table = 'answers';

    public static $rules  = array(
        'content'       => 'required|max:10000'
    );

     public function user()
    {
        return $this->belongsTo('User');
    }

    public function question()
    {
        return $this->belongsTo('Question');
    }
    
}