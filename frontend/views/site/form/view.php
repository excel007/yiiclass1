<?php
use yii\helpers\Html;
use yii\bootstrap\Alert;

echo Alert::widget([
    'options' => [
        'class' => 'alert-info',
    ],
    'body' => 'Fullname : '.$model->fname.' '.$model->lname,
]);

echo '<br/>Fullname : '.$model->fname.' '.$model->lname;
echo '<br/>Province : '.$model->province;
echo '<br/>Note : '.$model->note;