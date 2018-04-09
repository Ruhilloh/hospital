<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "shikoyat".
 *
 * @property integer $id_shikoyat
 * @property string $dard
 * @property string $pahnshavi
 * @property string $mavze
 * @property string $khislat_dard
 * @property string $khislat
 * @property string $digar_shikoyat
 * @property string $dilzani
 * @property string $sulfa
 * @property string $namud_sulfa
 * @property string $balgam
 * @property string $mavzei_dard
 * @property string $vaqti_roh_raftan
 * @property string $metr_roh
 * @property string $kori_jismoni
 * @property string $baromad_ba_zinapoya
 * @property string $digar_sabab
 * @property integer $id_qism
 *
 * @property QismiShinosnomavi $idQism
 */
class shikoyat extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'shikoyat';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['dard', 'pahnshavi', 'mavze', 'khislat_dard', 'khislat', 'digar_shikoyat', 'dilzani', 'sulfa', 'namud_sulfa', 'balgam', 'mavzei_dard', 'vaqti_roh_raftan', 'metr_roh', 'kori_jismoni'], 'required'],
            [['dard', 'pahnshavi', 'mavze', 'khislat_dard', 'khislat', 'digar_shikoyat', 'dilzani', 'sulfa', 'namud_sulfa', 'balgam', 'mavzei_dard', 'vaqti_roh_raftan', 'metr_roh', 'kori_jismoni', 'baromad_ba_zinapoya', 'digar_sabab'], 'string'],
            [['id_qism'], 'integer'],
            [['id_qism'], 'exist', 'skipOnError' => true, 'targetClass' => Shinosnoma::className(), 'targetAttribute' => ['id_qism' => 'id_qism']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id_shikoyat' => 'Id Shikoyat',
            'dard' => 'Dard',
            'pahnshavi' => 'Pahnshavi',
            'mavze' => 'Mavze',
            'khislat_dard' => 'Khislat Dard',
            'khislat' => 'Khislat',
            'digar_shikoyat' => 'Digar Shikoyat',
            'dilzani' => 'Dilzani',
            'sulfa' => 'Sulfa',
            'namud_sulfa' => 'Namud Sulfa',
            'balgam' => 'Balgam',
            'mavzei_dard' => 'Mavzei Dard',
            'vaqti_roh_raftan' => 'Vaqti Roh Raftan',
            'metr_roh' => 'Metr Roh',
            'kori_jismoni' => 'Kori Jismoni',
            'baromad_ba_zinapoya' => 'Baromad Ba Zinapoya',
            'digar_sabab' => 'Digar Sabab',
            'id_qism' => 'Id Qism',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getIdQism()
    {
        return $this->hasOne(Shinosnoma::className(), ['id_qism' => 'id_qism']);
    }
}
