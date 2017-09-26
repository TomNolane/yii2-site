<?php

namespace app\models;

use yii\db\ActiveRecord;

class BreakNews extends ActiveRecord
{
	public static function tableName()
	{
		return 'break_news';
	}
	
	public function getBreakNews(){
		return $this->hasMany(BreakNews::className(), [ 'parent' => 'id']);
	}
}