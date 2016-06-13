<?php

Class Language extends BaseModel {

     public function users()
    {
        return $this->belongsToMany('User');
    }

    public function questions()
    {
        return $this->belongsToMany('Question');
    }
    
}