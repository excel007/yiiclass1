<?php
    use yii\widgets\ActiveForm;
    use yii\helpers\Html;
    use yii\helpers\ArrayHelper;
?>
 
<?php $form = ActiveForm::begin([
    'id' => 'active-form', // ชื่อฟอร์ม
    'options' => [
        'class' => 'form-horizontal', // class bootstarap
        'enctype' => 'multipart/form-data' // upload file only
    ],
]); ?>

<?php
$list = ['CM' => 'Chiang Mai', 'CR' => 'Chiang Rai', 'KL' => 'Kalasin'];

    echo $form->field($model, 'brandname')->textInput();
    echo $form->field($model, 'seriesname')->textInput();
    echo $form->field($model, 'price')->textInput();
    echo $form->field($model, 'year')->textInput();
	echo $form->field($model, 'cc')->textInput();
    echo $form->field($model, 'province')->dropDownList($list);
    echo $form->field($model, 'color')->checkboxList(['red' => 'RED', 'green' => 'Green', 'blue' => 'Blue']);    
    echo $form->field($model, 'note')->textarea()->hint('ระบุรายละเอียดเพิ่มเติม');
    echo Html::submitButton('Submit', ['class'=> 'btn btn-primary']);
?>
<?php ActiveForm::end();?>