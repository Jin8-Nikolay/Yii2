<?php

use yii\helpers\Html;
use yii\widgets\DetailView;


$this->title = $model->name;
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Users'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>


    <p>
        <?= Html::a(Yii::t('app', 'Update'), ['update', 'id' => $model->id], ['class' => 'btn ink-reaction btn-flat btn-primary']) ?>
        <?= Html::a(Yii::t('app', 'Delete'), ['delete', 'id' => $model->id], [
            'class' => 'btn ink-reaction btn-flat btn-danger',
            'data' => [
                'confirm' => Yii::t('app', 'Are you sure you want to delete this item?'),
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'options' => [
            'class' => 'table table-banded',
        ],
        'formatter' => ['class' => 'yii\i18n\Formatter', 'nullDisplay' => ''],
        'attributes' => [
            'id',
            'username',
            'name',
            'surname',
            'patronymic',
            'phone',
            'email:email',
            'status',
            'role',
            'auth_key',
            'password_hash',
            'password_reset_token',
            'verification_token',
            'created_at',
            'updated_at',
            'last_visit',
        ],
    ]) ?>


