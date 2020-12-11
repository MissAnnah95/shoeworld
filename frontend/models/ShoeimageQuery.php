<?php

namespace frontend\models;

/**
 * This is the ActiveQuery class for [[Shoeimage]].
 *
 * @see Shoeimage
 */
class ShoeimageQuery extends \yii\db\ActiveQuery
{
    /*public function active()
    {
        return $this->andWhere('[[status]]=1');
    }*/

    /**
     * {@inheritdoc}
     * @return Shoeimage[]|array
     */
    public function all($db = null)
    {
        return parent::all($db);
    }

    /**
     * {@inheritdoc}
     * @return Shoeimage|array|null
     */
    public function one($db = null)
    {
        return parent::one($db);
    }
}
