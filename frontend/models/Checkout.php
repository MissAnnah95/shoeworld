<?php

namespace frontend\models;


use Yii;
use common\models\User;
/**
 * This is the model class for table "checkout".
 *
 * @property int $checkoutId
 * @property int $userId
 * @property int $shoeId
 * @property string $name
 * @property string $email
 * @property int $phoneNo
 * @property string $location
 *
 * @property Shoes $shoe
 * @property User $user
 */
class Checkout extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'checkout';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['userId', 'shoeId', 'name', 'email', 'phoneNo', 'location'], 'required'],
            [['userId', 'shoeId', 'phoneNo'], 'integer'],
            [['name', 'email', 'location'], 'string', 'max' => 200],
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
            'checkoutId' => 'Checkout ID',
            'userId' => 'User ID',
            'shoeId' => 'Shoe ID',
            'name' => 'Name',
            'email' => 'Email',
            'phoneNo' => 'Phone No',
            'location' => 'Location',
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
     * @return CheckoutQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new CheckoutQuery(get_called_class());
    }
}
