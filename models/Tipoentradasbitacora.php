<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "tipoentradasbitacora".
 *
 * @property string $id
 * @property string $tipoentradabitacora
 *
 * @property Entradasbitacora[] $entradasbitacoras
 */
class Tipoentradasbitacora extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'tipoentradasbitacora';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['tipoentradabitacora'], 'string', 'max' => 2000]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'Id',
            'tipoentradabitacora' => 'Tipoentradabitacora',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getEntradasbitacoras()
    {
        return $this->hasMany(Entradasbitacora::className(), ['tipoentradabitacora_id' => 'id']);
    }
}
