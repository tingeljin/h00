<?php
/* @var $this ConfigController */
/* @var $model Config */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'setting_id'); ?>
		<?php echo $form->textField($model,'setting_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'setting_pid'); ?>
		<?php echo $form->textField($model,'setting_pid'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'setting_name'); ?>
		<?php echo $form->textField($model,'setting_name',array('size'=>50,'maxlength'=>50)); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->