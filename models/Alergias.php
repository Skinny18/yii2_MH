<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "alergias".
 *
 * @property int $id
 * @property string|null $nome
 *
 * @property Users[] $users
 */
class Alergias extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'alergias';
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
        return $this->hasMany(Users::class, ['alergia_id' => 'id']);
    }

    /**
     * {@inheritdoc}
     * @return AlergiasQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new AlergiasQuery(get_called_class());
    }
}
