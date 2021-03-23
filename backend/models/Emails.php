<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "emails".
 *
 * @property int $id
 * @property string $nombre
 * @property string $apellido
 * @property string $telefono
 * @property string $email
 * @property string $direccion
 * @property int $idLanding
 * @property string $fecha
 * @property string $fnacimiento
 * @property string $opciones
 * @property string $ciudad
 * @property string $codp
 */
class Emails extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'emails';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['nombre', 'apellido', 'telefono', 'email', 'direccion', 'idLanding', 'fecha', 'ciudad', 'codp'], 'required'],
            [['idLanding'], 'integer'],
            [['fecha', 'fnacimiento'], 'safe'],
            [['nombre', 'apellido', 'email', 'direccion', 'opciones'], 'string', 'max' => 500],
            [['telefono', 'ciudad'], 'string', 'max' => 100],
            [['codp'], 'string', 'max' => 20],
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
            'apellido' => 'Apellido',
            'telefono' => 'Telefono',
            'email' => 'Email',
            'direccion' => 'Direccion',
            'idLanding' => 'Id Landing',
            'fecha' => 'Fecha',
            'fnacimiento' => 'Fecha Nacimiento',
            'opciones' => 'Opciones',
            'ciudad' => 'Ciudad',
            'codp' => 'Codigo Postal',
        ];
    }
}
