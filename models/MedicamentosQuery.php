<?php

namespace app\models;

/**
 * This is the ActiveQuery class for [[Medicamentos]].
 *
 * @see Medicamentos
 */
class MedicamentosQuery extends \yii\db\ActiveQuery
{
    /*public function active()
    {
        return $this->andWhere('[[status]]=1');
    }*/

    /**
     * {@inheritdoc}
     * @return Medicamentos[]|array
     */
    public function all($db = null)
    {
        return parent::all($db);
    }

    /**
     * {@inheritdoc}
     * @return Medicamentos|array|null
     */
    public function one($db = null)
    {
        return parent::one($db);
    }
}
