<?php

namespace app\models;

use yii\db\ActiveRecord;

class News4 extends ActiveRecord
{
	public static function tableName()
	{
		return 'news4';
	}
	
	public function getNews4(){
		return $this->hasMany(News4::className(), [ 'parent' => 'id']);
	}
}