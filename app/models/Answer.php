<?php

Class Answer extends Post {

    protected $table = 'answers';

    public static $rules  = array(
        'content'       => 'required|max:10000'
    );
    
}