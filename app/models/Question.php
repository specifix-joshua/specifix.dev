<?php

Class Question extends Post {

    protected $table = 'questions';

    public static $rules  = array(
        'title'      => 'required|max:100',
        'content'       => 'required|max:10000'
    );
    
}