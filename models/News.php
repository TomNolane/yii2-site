<?php

namespace app\models;

use yii\db\ActiveRecord;

class News extends ActiveRecord
{
	public static function tableName()
	{
		return 'news';
	}
	
	public function getNews(){
		return $this->hasMany(News::className(), [ 'parent' => 'id']);
	}
}