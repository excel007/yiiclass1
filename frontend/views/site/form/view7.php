<?php
use yii\helpers\Html;
use yii\bootstrap\Alert;

echo '<br/>'.$model->getAttributeLabel('brandname').' : '.$model->brandname;
echo '<br/>'.$model->getAttributeLabel('seriesname').' : '.$model->seriesname;
//var_dump($model->color);
echo Html::encode("{$model->getAttributeLabel('province')} {$model->province}");
echo '<br/>'.$model->getAttributeLabel('year').' : '.$model->year;
echo '<br/>'.$model->getAttributeLabel('cc').' : '.$model->cc;
echo '<br/>'.$model->getAttributeLabel('price').' : '.$model->price;
echo '<br/>'.$model->getAttributeLabel('note').' : '.$model->note;