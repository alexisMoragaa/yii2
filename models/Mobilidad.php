<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "mobilidad".
 *
 * @property int $id
 * @property string $nombre
 * @property string $obra
 * @property int $telefono
 * @property int $evaluacion
 * @property string $cargo
 * @property string $email
 * @property string $disponibilidad
 * @property string $recomendacion
 * @property int $Estado
 */
class Mobilidad extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'mobilidad';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'nombre', 'obra', 'telefono', 'cargo', 'email'], 'required'],
            [['id', 'telefono', 'evaluacion', 'Estado'], 'integer'],
            [['nombre', 'obra', 'cargo', 'email', 'disponibilidad'], 'string', 'max' => 200],
            [['recomendacion'], 'string', 'max' => 500],
            [['id'], 'unique'],
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
            'obra' => 'Obra',
            'telefono' => 'Telefono',
            'evaluacion' => 'Evaluacion',
            'cargo' => 'Cargo',
            'email' => 'Email',
            'disponibilidad' => 'Disponibilidad',
            'recomendacion' => 'Recomendacion',
            'Estado' => 'Estado',
        ];
    }
}
