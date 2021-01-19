<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "libreria".
 *
 * @property int $id
 * @property string $nombre
 * @property int $idLanding
 */
class Libreria extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'libreria';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['nombre', 'idLanding'], 'required'],
            [['idLanding'], 'integer'],
            [['nombre'], 'string', 'max' => 500],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'nombre' => 'Nombre',
            'idLanding' => 'Id Landing',
        ];
    }
}
