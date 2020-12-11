<?php

namespace frontend\models;

use Yii;
use common\models\User;
/**
 * This is the model class for table "cart".
 *
 * @property int $cartId
 * @property int $shoeId
 * @property int $userId
 *
 * @property Shoes $shoe
 * @property User $user
 */
class Cart extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'cart';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['shoeId', 'userId'], 'required'],
            [['shoeId', 'userId'], 'integer'],
            [['shoeId'], 'exist', 'skipOnError' => true, 'targetClass' => Shoes::className(), 'targetAttribute' => ['shoeId' => 'shoeId']],
            [['userId'], 'exist', 'skipOnError' => true, 'targetClass' => User::className(), 'targetAttribute' => ['userId' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'cartId' => 'Cart ID',
            'shoeId' => 'Shoe ID',
            'userId' => 'User ID',
        ];
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
     * Gets query for [[User]].
     *
     * @return \yii\db\ActiveQuery|UserQuery
     */
    public function getUser()
    {
        return $this->hasOne(User::className(), ['id' => 'userId']);
    }

    /**
     * {@inheritdoc}
     * @return CartQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new CartQuery(get_called_class());
    }
}
