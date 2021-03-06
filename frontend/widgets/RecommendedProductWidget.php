<?php

namespace frontend\widgets;
use common\models\Product;
use yii\base\Widget;
use yii\data\ActiveDataProvider;

class RecommendedProductWidget extends Widget
{
    public $id;

    public function run(){
        $product =  new ActiveDataProvider([
            'query' => Product::find()->where(['category_id' => $this->id])->andWhere(['status' => true])->orderBy('created_at DESC'),
            'pagination' => false,
        ]);

        return $this->render('list-view-productRecommended', ['product' => $product]);
    }

}