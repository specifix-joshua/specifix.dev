<?php

use Illuminate\Auth\UserTrait;
use Illuminate\Auth\UserInterface;
use Illuminate\Auth\Reminders\RemindableTrait;
use Illuminate\Auth\Reminders\RemindableInterface;

class User extends Eloquent implements UserInterface, RemindableInterface {

	use UserTrait, RemindableTrait;

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'users';
	
	public static $rules = array (
		'username' => 'max:20|unique:users',
		'email' => 'required|max:254|unique:users|email',
		'password' => 'required',
		'first_name' => 'required',
		'last_name' => 'required'
		);



	/**
	 * The attributes excluded from the model's JSON form.
	 *
	 * @var array
	 */
	protected $hidden = array('password', 'remember_token');

	public function questions()
	{
	    return $this->hasMany('Question');
	}

	public function answers()
	{
	    return $this->hasMany('Answer');
	}

	public function setPasswordAttribute($value)
	{
    	$this->attributes['password'] = Hash::make($value);
	}
	
	public function languages()
	{
		return $this->belongsToMany('Language');
	}

	public function notifications()
	{
    	return $this->hasMany('Notification');
	}

	public function newNotification()
	{
	    $notification = new Notification;
	    $notification->user()->associate($this);
	 
	    return $notification;
	}
}
