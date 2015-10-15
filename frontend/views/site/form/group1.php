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
$list = ['kk' => 'Khon Kean', 'kr' => 'Korat', 'ph' => 'Phuket'];

    echo $form->field($model, 'fname')->textInput();
    echo $form->field($model, 'lname')->textInput();
    echo $form->field($model, 'age')->textInput();
    echo $form->field($model, 'province')->dropDownList($list);
    echo $form->field($model, 'items')->checkboxList(['a' => 'DBMS', 'b' => 'Fundamental of CS', 'c' => 'Internet Programming']);    
    echo $form->field($model, 'note')->textarea()->hint('ระบุรายละเอียดเพิ่มเติม');
    echo Html::submitButton('Submit', ['class'=> 'btn btn-primary']);
?>
<?php ActiveForm::end();?>