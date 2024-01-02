<?php

namespace app\modules\admin\models;

use Yii;

/**
 * This is the model class for table "avtozapravka".
 *
 * @property int $id_kolonki
 * @property int $id_avtozapravki
 * @property string $name_firm
 * @property string $adress
 * @property string $vid_topliva
 * @property string $cena
 *
 * @property Svaz $svaz
 */
class Avtozapravka extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'avtozapravka';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id_avtozapravki', 'name_firm', 'adress', 'vid_topliva', 'cena'], 'required'],
            [['id_avtozapravki'], 'integer'],
            [['name_firm', 'adress', 'vid_topliva', 'cena'], 'string', 'max' => 45],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id_kolonki' => 'Id Kolonki',
            'id_avtozapravki' => 'Id Avtozapravki',
            'name_firm' => 'Name Firm',
            'adress' => 'Adress',
            'vid_topliva' => 'Vid Topliva',
            'cena' => 'Cena',
        ];
    }

    /**
     * Gets query for [[Svaz]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getSvaz()
    {
        return $this->hasOne(Svaz::class, ['id' => 'id_kolonki']);
    }
}
