<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "medicamentos".
 *
 * @property int $id
 * @property string|null $nome
 *
 * @property Users[] $users
 */
class Medicamentos extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'medicamentos';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['nome'], 'string', 'max' => 100],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'nome' => 'Nome',
        ];
    }

    /**
     * Gets query for [[Users]].
     *
     * @return \yii\db\ActiveQuery|UsersQuery
     */
    public function getUsers()
    {
        return $this->hasMany(Users::class, ['medicamento_id' => 'id']);
    }

    /**
     * {@inheritdoc}
     * @return MedicamentosQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new MedicamentosQuery(get_called_class());
    }
}
