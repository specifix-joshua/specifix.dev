<?php

Class Vote extends BaseModel {

    public static function up() 
    {
        //grab info from table and return plus 1
    }
    
    public static function down() 
    {
        //grab info from table and return minus 1
    }

    public function posts()
    {
        return $this->belongsTo('Post');
    }
}