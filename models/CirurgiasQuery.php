<?php

namespace app\models;

/**
 * This is the ActiveQuery class for [[Cirurgias]].
 *
 * @see Cirurgias
 */
class CirurgiasQuery extends \yii\db\ActiveQuery
{
    /*public function active()
    {
        return $this->andWhere('[[status]]=1');
    }*/

    /**
     * {@inheritdoc}
     * @return Cirurgias[]|array
     */
    public function all($db = null)
    {
        return parent::all($db);
    }

    /**
     * {@inheritdoc}
     * @return Cirurgias|array|null
     */
    public function one($db = null)
    {
        return parent::one($db);
    }
}
