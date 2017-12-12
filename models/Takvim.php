<?php

namespace kouosl\takvim\models;

use Yii;

/**
 * This is the model class for table "takvim".
 *
 * @property integer $takvim_date
 * @property integer $gün
 * @property integer $ay
 * @property integer $yıl
 * @property integer $saat
 * @property string $takvimtip
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
            [['takvim_date', 'gün', 'ay', 'yıl', 'saat', 'takvimtip'], 'required'],
            [['takvim_date', 'gün', 'ay', 'yıl', 'saat'], 'integer'],
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
            'gün' => 'G�n',
            'ay' => 'Ay',
            'yıl' => 'Y�l',
            'saat' => 'Saat',
            'takvimtip' => 'Takvimtip',
        ];
    }
}
