<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "landing".
 *
 * @property int $id
 * @property string $titulo
 * @property string $descripcion
 * @property string $codigo
 * @property string $dominio
 * @property string $color
 */
class Landing extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'landing';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['titulo', 'descripcion', 'codigo', 'dominio', 'color'], 'required'],
            [['codigo'], 'string'],
            [['titulo', 'descripcion', 'dominio', 'color'], 'string', 'max' => 500],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'titulo' => 'Titulo',
            'descripcion' => 'Descripcion',
            'codigo' => 'Codigo',
            'dominio' => 'Dominio',
            'color' => 'Color corporativo',
        ];
    }
}
