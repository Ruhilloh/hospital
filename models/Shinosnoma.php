<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "qismi_shinosnomavi".
 *
 * @property integer $id_qism
 * @property string $NNN
 * @property string $sol_tav
 * @property string $shahr
 * @property string $deha
 * @property string $kucha
 * @property string $jins
 * @property string $sanai_qabul
 * @property string $vaqt
 * @property string $harorat_badan
 * @property string $rohkhat
 * @property string $qabul_shud
 * @property string $dastras_gardid
 * @property string $bo_tashkhis
 */
class Shinosnoma extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'qismi_shinosnomavi';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['NNN', 'sol_tav', 'shahr', 'deha', 'kucha', 'jins', 'sanai_qabul', 'vaqt', 'qabul_shud', 'dastras_gardid', 'bo_tashkhis'], 'required'],
            [['sol_tav', 'sanai_qabul', 'vaqt'], 'safe'],
            [['shahr', 'deha', 'kucha', 'jins', 'harorat_badan', 'rohkhat', 'qabul_shud', 'dastras_gardid', 'bo_tashkhis'], 'string'],
            [['NNN'], 'string', 'max' => 100],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id_qism' => '№',
            'NNN' => 'Ному насаб',
            'sol_tav' => 'Санаи таваллуд ',
            'shahr' => 'Шаҳр',
            'deha' => 'Деҳа',
            'kucha' => 'Кӯча',
            'jins' => 'Ҷинс',
            'sanai_qabul' => 'Санаи қабул',
            'vaqt' => 'Вақт',
            'harorat_badan' => 'Ҳарорати бадан',
            'rohkhat' => 'Роҳхат',
            'qabul_shud' => 'Қабул шуд',
            'dastras_gardid' => 'Дастрас гардид',
            'bo_tashkhis' => 'Бо ташхиси',
        ];
    }
}
