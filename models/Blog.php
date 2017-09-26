<?php

namespace app\models;

use yii\db\ActiveRecord;

class Blog extends ActiveRecord
{
	public static function tableName()
	{
		return 'blog';
	}
	
	public function getBlog(){
		return $this->hasMany(Blog::className(), [ 'parent' => 'id']);
	}
}