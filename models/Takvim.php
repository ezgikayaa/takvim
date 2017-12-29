<?php

namespace kouosl\takvim\models;

use Yii;

/**
 * This is the model class for table "takvim".
 *
 * @property integer $takvim_date
 * @property integer $gun
 * @property integer $ay
 * @property integer $yil
 * @property string $saat
 * @property string $takvimtip
 *
 * @property Tatil $tatil
 */
class Takvim extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'takvim';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['takvim_date', 'gun', 'ay', 'yil', 'saat', 'takvimtip'], 'required'],
            [['takvim_date', 'gun', 'ay', 'yil'], 'integer'],
            [['saat'], 'safe'],
            [['takvimtip'], 'string', 'max' => 45],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'takvim_date' => 'Takvim Date',
            'gun' => 'Gun',
            'ay' => 'Ay',
            'yil' => 'Yil',
            'saat' => 'Saat',
            'takvimtip' => 'Takvimtip',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getTatil()
    {
        return $this->hasOne(Tatil::className(), ['tatil_id' => 'takvim_date']);
    }
}
