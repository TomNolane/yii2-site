<?php

namespace app\models;

use yii\db\ActiveRecord;

class News3 extends ActiveRecord
{
	public static function tableName()
	{
		return 'news3';
	}
	
	public function getNews3(){
		return $this->hasMany(News3::className(), [ 'parent' => 'id']);
	}
}