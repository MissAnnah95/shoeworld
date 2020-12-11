<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "shoeimage".
 *
 * @property int $ImageId
 * @property int|null $shoeId
 * @property string $imagePath
 *
 * @property Cart $cart
 * @property Shoes $shoe
 */
class Shoeimage extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'shoeimage';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['shoeId'], 'integer'],
            [['imagePath'], 'required'],
            [['imagePath'], 'string', 'max' => 255],
            [['shoeId'], 'unique'],
            [['shoeId'], 'exist', 'skipOnError' => true, 'targetClass' => Shoes::className(), 'targetAttribute' => ['shoeId' => 'shoeId']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'ImageId' => 'Image ID',
            'shoeId' => 'Shoe ID',
            'imagePath' => 'Image Path',
        ];
    }

    /**
     * Gets query for [[Cart]].
     *
     * @return \yii\db\ActiveQuery|yii\db\ActiveQuery
     */
    public function getCart()
    {
        return $this->hasOne(Cart::className(), ['imagePath' => 'ImageId']);
    }

    /**
     * Gets query for [[Shoe]].
     *
     * @return \yii\db\ActiveQuery|ShoesQuery
     */
    public function getShoe()
    {
        return $this->hasOne(Shoes::className(), ['shoeId' => 'shoeId']);
    }

    /**
     * {@inheritdoc}
     * @return ShoeimageQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new ShoeimageQuery(get_called_class());
    }
}
