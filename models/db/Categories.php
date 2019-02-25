<?php

namespace app\models\db;

use Yii;

/**
 * This is the model class for table "categories".
 *
 * @property string $id
 * @property string $category
 * @property string $shortcode
 * @property int $is_deleted
 * @property string $created_at
 * @property string $updated_at
 */
class Categories extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'categories';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['category', 'shortcode',], 'required'],
            [['is_deleted'], 'integer'],
            [['created_at', 'updated_at','is_deleted'], 'safe'],
            [['category'], 'string', 'max' => 191],
            [['shortcode'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'category' => 'Category',
            'shortcode' => 'Shortcode',
            'is_deleted' => 'Is Deleted',
            'created_at' => 'Created At',
            'updated_at' => 'Updated At',
        ];
    }
}
