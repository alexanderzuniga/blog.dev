<?php

class Post extends BaseModel {

    protected $table = 'posts';

    protected $imgDir = 'img-upload';

    static public $rules = [
    	'title' => 'required|max:100',
    	'body' => 'required|max:500'
    ];

    public function user()
    {
        return $this->belongsTo('User');
    }

    public function addUploadedImage($image)
    {
    	$systemPath = public_path() . '/' . $this->imgDir . '/';
    	$imageName = $this->id . '-' . $image->getClientOriginalName();
    	$image->move($systemPath, $imageName);
    	$this->img_path = '/' . $this->imgDir . '/' . $imageName;
    }
}