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
		<?php echo $form->labelEx($model,'setting_id'); ?>
		<?php echo $form->textField($model,'setting_id'); ?>
		<?php echo $form->error($model,'setting_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'age_config'); ?>
		<?php echo $form->textField($model,'age_config',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'age_config'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'recruitment_status'); ?>
		<?php echo $form->textField($model,'recruitment_status',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'recruitment_status'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->