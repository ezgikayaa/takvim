<?php

namespace kouosl\takvim\models;

use Yii;

/**
 * This is the model class for table "takvim".
 *
 * @property integer $takvim_date
 * @property integer $g羹n
 * @property integer $ay
 * @property integer $y覺l
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
            [['takvim_date', 'g羹n', 'ay', 'y覺l', 'saat', 'takvimtip'], 'required'],
            [['takvim_date', 'g羹n', 'ay', 'y覺l', 'saat'], 'integer'],
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
            'g羹n' => 'G蒱n',
            'ay' => 'Ay',
            'y覺l' => 'Y銆l',
            'saat' => 'Saat',
            'takvimtip' => 'Takvimtip',
        ];
    }
}
