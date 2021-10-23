<?php
use yii\widgets\ActiveForm;
use yii\helpers\Html;
?>

<?php $widg = ActiveForm::begin() ?>
<?php echo $widg->field($model, 'title') ?>
<?php echo $widg->field($model, 'type') ?>
<?php echo $widg->field($model, 'country') ?>
<?php echo $widg->field($model, 'price') ?>
<?php echo Html::submitButton('Save', ['class' => 'btn btn-primary'])?>
<?php ActiveForm::end()?>
