<?php

namespace app\modules\admin\models;

use Yii;

/**
 * This is the model class for table "svaz".
 *
 * @property int $id
 * @property int $id_firm
 * @property int $id_topliva
 *
 * @property Firma $firm
 * @property Avtozapravka $id0
 * @property Toplivo $topliva
 */
class Svaz extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'svaz';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id_firm', 'id_topliva'], 'required'],
            [['id_firm', 'id_topliva'], 'integer'],
            [['id_firm', 'id_topliva'], 'unique', 'targetAttribute' => ['id_firm', 'id_topliva']],
            [['id_topliva'], 'exist', 'skipOnError' => true, 'targetClass' => Toplivo::class, 'targetAttribute' => ['id_topliva' => 'id_topliva']],
            [['id_firm'], 'exist', 'skipOnError' => true, 'targetClass' => Firma::class, 'targetAttribute' => ['id_firm' => 'id']],
            [['id'], 'exist', 'skipOnError' => true, 'targetClass' => Avtozapravka::class, 'targetAttribute' => ['id' => 'id_kolonki']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'id_firm' => 'Id Firm',
            'id_topliva' => 'Id Topliva',
        ];
    }

    /**
     * Gets query for [[Firm]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getFirm()
    {
        return $this->hasOne(Firma::class, ['id' => 'id_firm']);
    }

    /**
     * Gets query for [[Id0]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getId0()
    {
        return $this->hasOne(Avtozapravka::class, ['id_kolonki' => 'id']);
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
