<?php

Class Vote extends BaseModel {

    public function setCountAttribute($value)
    {
        if ($value > 1) {
            $value = 1;
        } elseif ($value < 1) {
            $value = -1;
        }
        $this->attributes['count'] = $value;
    }

    public function question()
    {
        return $this->belongsTo('Question');
    }

    public function answer()
    {
        return $this->belongsTo('Answer');
    }
}