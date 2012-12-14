<?php
/* @var $this ConfigController */
/* @var $model Config */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'config-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>



	<div class="row">
		<?php echo $form->labelEx($model,'setting_name'); ?>
		<?php echo $form->textField($model,'setting_name',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'setting_name'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->