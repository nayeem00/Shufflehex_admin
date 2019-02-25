<?php

namespace app\models\db;

use Yii;

/**
 * This is the model class for table "product-categories".
 *
 * @property string $id
 * @property string $category
 * @property string $created_at
 * @property string $updated_at
 */
class ProductCategories extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'product_categories';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['category'], 'required'],
            [['created_at', 'updated_at'], 'safe'],
            [['category'], 'string', 'max' => 191],
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
            'created_at' => 'Created At',
            'updated_at' => 'Updated At',
        ];
    }
}
