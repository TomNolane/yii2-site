<?php

namespace app\models;

use yii\db\ActiveRecord;

class Plan extends ActiveRecord
{
	public static function tableName()
	{
		return 'plan';
	}
	
	public function getPlan(){
		return $this->hasMany(Plan::className(), [ 'parent' => 'id']);
	}
}