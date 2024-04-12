<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "users".
 *
 * @property int $id
 * @property string $nome
 * @property string $email
 * @property string $password
 * @property int|null $alergia_id
 * @property int|null $doenca_id
 * @property int|null $cirurgia_id
 * @property int|null $ist_id
 * @property string|null $diabetes
 * @property string|null $contato_emergencia1
 * @property string|null $parentesco1
 * @property string|null $contato_emergencia2
 * @property string|null $parentesco2
 * @property int|null $endereco_id
 * @property string|null $tipo_sangue
 * @property int|null $medicamento_id
 * @property string|null $historico_familiar
 *
 * @property Alergias $alergia
 * @property Cirurgias $cirurgia
 * @property Doencas $doenca
 * @property Enderecos $endereco
 * @property Ists $ist
 * @property Medicamentos $medicamento
 */
class Users extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'users';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['nome', 'email', 'password'], 'required'],
            [['alergia_id', 'doenca_id', 'cirurgia_id', 'ist_id', 'endereco_id', 'medicamento_id'], 'default', 'value' => null],
            [['alergia_id', 'doenca_id', 'cirurgia_id', 'ist_id', 'endereco_id', 'medicamento_id'], 'integer'],
            [['nome', 'email', 'password', 'diabetes', 'contato_emergencia1', 'parentesco1', 'contato_emergencia2', 'parentesco2', 'tipo_sangue'], 'string', 'max' => 100],
            [['historico_familiar'], 'string', 'max' => 200],
            [['email'], 'unique'],
            [['alergia_id'], 'exist', 'skipOnError' => true, 'targetClass' => Alergias::class, 'targetAttribute' => ['alergia_id' => 'id']],
            [['cirurgia_id'], 'exist', 'skipOnError' => true, 'targetClass' => Cirurgias::class, 'targetAttribute' => ['cirurgia_id' => 'id']],
            [['doenca_id'], 'exist', 'skipOnError' => true, 'targetClass' => Doencas::class, 'targetAttribute' => ['doenca_id' => 'id']],
            [['endereco_id'], 'exist', 'skipOnError' => true, 'targetClass' => Enderecos::class, 'targetAttribute' => ['endereco_id' => 'id']],
            [['ist_id'], 'exist', 'skipOnError' => true, 'targetClass' => Ists::class, 'targetAttribute' => ['ist_id' => 'id']],
            [['medicamento_id'], 'exist', 'skipOnError' => true, 'targetClass' => Medicamentos::class, 'targetAttribute' => ['medicamento_id' => 'id']],
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
            'email' => 'Email',
            'password' => 'Password',
            'alergia_id' => 'Alergia ID',
            'doenca_id' => 'Doenca ID',
            'cirurgia_id' => 'Cirurgia ID',
            'ist_id' => 'Ist ID',
            'diabetes' => 'Diabetes',
            'contato_emergencia1' => 'Contato Emergencia1',
            'parentesco1' => 'Parentesco1',
            'contato_emergencia2' => 'Contato Emergencia2',
            'parentesco2' => 'Parentesco2',
            'endereco_id' => 'Endereco ID',
            'tipo_sangue' => 'Tipo Sangue',
            'medicamento_id' => 'Medicamento ID',
            'historico_familiar' => 'Historico Familiar',
        ];
    }

    /**
     * Gets query for [[Alergia]].
     *
     * @return \yii\db\ActiveQuery|AlergiasQuery
     */
    public function getAlergia()
    {
        return $this->hasOne(Alergias::class, ['id' => 'alergia_id']);
    }

    /**
     * Gets query for [[Cirurgia]].
     *
     * @return \yii\db\ActiveQuery|CirurgiasQuery
     */
    public function getCirurgia()
    {
        return $this->hasOne(Cirurgias::class, ['id' => 'cirurgia_id']);
    }

    /**
     * Gets query for [[Doenca]].
     *
     * @return \yii\db\ActiveQuery|DoencasQuery
     */
    public function getDoenca()
    {
        return $this->hasOne(Doencas::class, ['id' => 'doenca_id']);
    }

    /**
     * Gets query for [[Endereco]].
     *
     * @return \yii\db\ActiveQuery|EnderecosQuery
     */
    public function getEndereco()
    {
        return $this->hasOne(Enderecos::class, ['id' => 'endereco_id']);
    }

    /**
     * Gets query for [[Ist]].
     *
     * @return \yii\db\ActiveQuery|IstsQuery
     */
    public function getIst()
    {
        return $this->hasOne(Ists::class, ['id' => 'ist_id']);
    }

    /**
     * Gets query for [[Medicamento]].
     *
     * @return \yii\db\ActiveQuery|MedicamentosQuery
     */
    public function getMedicamento()
    {
        return $this->hasOne(Medicamentos::class, ['id' => 'medicamento_id']);
    }

    /**
     * {@inheritdoc}
     * @return UsersQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new UsersQuery(get_called_class());
    }
}
