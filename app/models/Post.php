<?php

class Post extends BaseModel
{
	public static $rules = array(
		'title' => 'required|max:250',
		'body' => 'required|max:10000'
	);

	protected $table = 'posts';

	public function user()
	{
	    return $this->belongsTo('User');
	}
}