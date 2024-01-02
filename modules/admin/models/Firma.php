<?php

namespace app\modules\admin\models;

use Yii;

/**
 * This is the model class for table "firma".
 *
 * @property int $id
 * @property string $name_firm
 * @property string $ur_adress
 * @property string $phone
 *
 * @property Svaz[] $svazs
 * @property Toplivo[] $toplivas
 */
class Firma extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'firma';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['name_firm', 'ur_adress', 'phone'], 'required'],
            [['name_firm', 'ur_adress', 'phone'], 'string', 'max' => 45],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name_firm' => 'Name Firm',
            'ur_adress' => 'Ur Adress',
            'phone' => 'Phone',
        ];
    }

    /**
     * Gets query for [[Svazs]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getSvazs()
    {
        return $this->hasMany(Svaz::class, ['id_firm' => 'id']);
    }

    /**
     * Gets query for [[Toplivas]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getToplivas()
    {
        return $this->hasMany(Toplivo::class, ['id_topliva' => 'id_topliva'])->viaTable('svaz', ['id_firm' => 'id']);
    }
}
