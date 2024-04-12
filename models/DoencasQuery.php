<?php

namespace app\models;

/**
 * This is the ActiveQuery class for [[Doencas]].
 *
 * @see Doencas
 */
class DoencasQuery extends \yii\db\ActiveQuery
{
    /*public function active()
    {
        return $this->andWhere('[[status]]=1');
    }*/

    /**
     * {@inheritdoc}
     * @return Doencas[]|array
     */
    public function all($db = null)
    {
        return parent::all($db);
    }

    /**
     * {@inheritdoc}
     * @return Doencas|array|null
     */
    public function one($db = null)
    {
        return parent::one($db);
    }
}
