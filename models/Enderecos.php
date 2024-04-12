<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "enderecos".
 *
 * @property int $id
 * @property string|null $endereco
 * @property string|null $bairro
 * @property string|null $cidade
 * @property int|null $cep
 * @property string|null $estado
 *
 * @property Users[] $users
 */
class Enderecos extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'enderecos';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['cep'], 'default', 'value' => null],
            [['cep'], 'integer'],
            [['endereco', 'bairro', 'cidade', 'estado'], 'string', 'max' => 100],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'endereco' => 'Endereco',
            'bairro' => 'Bairro',
            'cidade' => 'Cidade',
            'cep' => 'Cep',
            'estado' => 'Estado',
        ];
    }

    /**
     * Gets query for [[Users]].
     *
     * @return \yii\db\ActiveQuery|UsersQuery
     */
    public function getUsers()
    {
        return $this->hasMany(Users::class, ['endereco_id' => 'id']);
    }

    /**
     * {@inheritdoc}
     * @return EnderecosQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new EnderecosQuery(get_called_class());
    }
}
