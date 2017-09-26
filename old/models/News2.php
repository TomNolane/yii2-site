<?php

namespace app\models;

use yii\db\ActiveRecord;

class News2 extends ActiveRecord
{
	public static function tableName()
	{
		return 'news2';
	}
	
	public function getNews2(){
		return $this->hasMany(News2::className(), [ 'parent' => 'id']);
	}
}