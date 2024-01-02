<?php

namespace app\modules\admin\models;

use Yii;

/**
 * This is the model class for table "toplivo".
 *
 * @property int $id_topliva
 * @property string $vid_topliva
 * @property string $ed_izmirenia
 * @property int $cena
 *
 * @property Firma[] $firms
 * @property Prodigy[] $prodigies
 * @property Svaz[] $svazs
 */
class Toplivo extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'toplivo';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['vid_topliva', 'ed_izmirenia', 'cena'], 'required'],
            [['cena'], 'integer'],
            [['vid_topliva', 'ed_izmirenia'], 'string', 'max' => 45],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id_topliva' => 'Id Topliva',
            'vid_topliva' => 'Vid Topliva',
            'ed_izmirenia' => 'Ed Izmirenia',
            'cena' => 'Cena',
        ];
    }

    /**
     * Gets query for [[Firms]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getFirms()
    {
        return $this->hasMany(Firma::class, ['id' => 'id_firm'])->viaTable('svaz', ['id_topliva' => 'id_topliva']);
    }

    /**
     * Gets query for [[Prodigies]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getProdigies()
    {
        return $this->hasMany(Prodigy::class, ['id_topliva' => 'id_topliva']);
    }

    /**
     * Gets query for [[Svazs]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getSvazs()
    {
        return $this->hasMany(Svaz::class, ['id_topliva' => 'id_topliva']);
    }
}
