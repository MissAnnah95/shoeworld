<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "shoes".
 *
 * @property int $shoeId
 * @property int $categoryId
 * @property string $shoeName
 * @property int $price
 * @property string $createdat
 * @property string $description
 *
 * @property Cart $cart
 * @property Shoeimage $shoeimage
 */
class Shoes extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'shoes';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['categoryId', 'shoeName', 'price', 'description'], 'required'],
            [['categoryId', 'price'], 'integer'],
            [['createdat'], 'safe'],
            [['description'], 'string'],
            [['shoeName'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'shoeId' => 'Shoe ID',
            'categoryId' => 'Category ID',
            'shoeName' => 'Shoe Name',
            'price' => 'Price',
            'createdat' => 'Createdat',
            'description' => 'Description',
        ];
    }

    /**
     * Gets query for [[Cart]].
     *
     * @return \yii\db\ActiveQuery|yii\db\ActiveQuery
     */
    public function getCart()
    {
        return $this->hasOne(Cart::className(), ['shoeId' => 'shoeId']);
    }

    /**
     * Gets query for [[Shoeimage]].
     *
     * @return \yii\db\ActiveQuery|yii\db\ActiveQuery
     */
    public function getShoeimage()
    {
        return $this->hasOne(Shoeimage::className(), ['shoeId' => 'shoeId']);
    }

    /**
     * {@inheritdoc}
     * @return ShoesQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new ShoesQuery(get_called_class());
    }
}
