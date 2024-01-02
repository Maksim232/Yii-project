<?php

namespace app\modules\admin\models;

use Yii;

/**
 * This is the model class for table "klients".
 *
 * @property int $id
 * @property string $fio
 * @property string $adress
 * @property string $phonenumder
 *
 * @property Prodigy $prodigy
 */
class Klients extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'klients';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['fio', 'adress', 'phonenumder'], 'required'],
            [['fio', 'adress', 'phonenumder'], 'string', 'max' => 45],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'fio' => 'Fio',
            'adress' => 'Adress',
            'phonenumder' => 'Phonenumder',
        ];
    }

    /**
     * Gets query for [[Prodigy]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getProdigy()
    {
        return $this->hasOne(Prodigy::class, ['card_chet_klient' => 'id']);
    }
}
