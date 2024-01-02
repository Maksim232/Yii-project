<?php

namespace app\modules\admin\models;

use Yii;

/**
 * This is the model class for table "prodigy".
 *
 * @property int $id
 * @property string $date_prodag
 * @property int $card_chet_klient
 * @property int $id_avtozapravki
 * @property int $id_topliva
 * @property int $kolichestvo
 *
 * @property Klients $cardChetKlient
 * @property Toplivo $topliva
 */
class Prodigy extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'prodigy';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['date_prodag', 'card_chet_klient', 'id_avtozapravki', 'id_topliva', 'kolichestvo'], 'required'],
            [['card_chet_klient', 'id_avtozapravki', 'id_topliva', 'kolichestvo'], 'integer'],
            [['date_prodag'], 'string', 'max' => 45],
            [['card_chet_klient'], 'unique'],
            [['card_chet_klient'], 'exist', 'skipOnError' => true, 'targetClass' => Klients::class, 'targetAttribute' => ['card_chet_klient' => 'id']],
            [['id_topliva'], 'exist', 'skipOnError' => true, 'targetClass' => Toplivo::class, 'targetAttribute' => ['id_topliva' => 'id_topliva']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'date_prodag' => 'Date Prodag',
            'card_chet_klient' => 'Card Chet Klient',
            'id_avtozapravki' => 'Id Avtozapravki',
            'id_topliva' => 'Id Topliva',
            'kolichestvo' => 'Kolichestvo',
        ];
    }

    /**
     * Gets query for [[CardChetKlient]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getCardChetKlient()
    {
        return $this->hasOne(Klients::class, ['id' => 'card_chet_klient']);
    }

    /**
     * Gets query for [[Topliva]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getTopliva()
    {
        return $this->hasOne(Toplivo::class, ['id_topliva' => 'id_topliva']);
    }
}
