<?php

namespace kouosl\takvim\models;

use Yii;

/**
 * This is the model class for table "tatil".
 *
 * @property integer $tatil_id
 * @property string $tatil_adi
 * @property string $tatil_tipi
 *
 * @property Takvim $tatil
 */
class Tatil extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'tatil';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['tatil_id', 'tatil_adi', 'tatil_tipi'], 'required'],
            [['tatil_id'], 'integer'],
            [['tatil_adi', 'tatil_tipi'], 'string', 'max' => 45],
            [['tatil_id'], 'exist', 'skipOnError' => true, 'targetClass' => Takvim::className(), 'targetAttribute' => ['tatil_id' => 'takvim_date']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'tatil_id' => 'Tatil ID',
            'tatil_adi' => 'Tatil Adi',
            'tatil_tipi' => 'Tatil Tipi',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getTatil()
    {
        return $this->hasOne(Takvim::className(), ['takvim_date' => 'tatil_id']);
    }
}
