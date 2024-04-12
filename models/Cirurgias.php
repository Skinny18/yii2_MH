<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "cirurgias".
 *
 * @property int $id
 * @property string|null $nome
 *
 * @property Users[] $users
 */
class Cirurgias extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'cirurgias';
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
        return $this->hasMany(Users::class, ['cirurgia_id' => 'id']);
    }

    /**
     * {@inheritdoc}
     * @return CirurgiasQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new CirurgiasQuery(get_called_class());
    }
}
