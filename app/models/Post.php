<?php


Class Post extends BaseModel {

    protected $table;

    public static $rules;

    public function votes()
    {
        return $this->hasMany('Vote');
    }
}