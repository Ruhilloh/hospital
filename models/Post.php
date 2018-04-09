<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "News".
 *
 * @property string $id_news
 * @property string $head
 * @property string $body
 * @property string $date
 */
class Post extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'News';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['head', 'body', 'date'], 'required'],
            [['body'], 'string'],
            [['head'], 'string', 'max' => 120],
            [['date'], 'string', 'max' => 10],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id_news' => '№',
            'head' => 'Номи матн',
            'body' => 'Матн',
            'date' => 'Сана',
        ];
    }
}
