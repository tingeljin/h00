<?php
/* @var $this RecruitmentContactController */
/* @var $model RecruitmentContact */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'recruitment-contact-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'recruitment_id'); ?>
		<?php echo $form->textField($model,'recruitment_id'); ?>
		<?php echo $form->error($model,'recruitment_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'contact_time'); ?>
		<?php echo $form->textField($model,'contact_time'); ?>
		<?php echo $form->error($model,'contact_time'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'contact_schedule'); ?>
		<?php echo $form->textField($model,'contact_schedule'); ?>
		<?php echo $form->error($model,'contact_schedule'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'contact_status'); ?>
		<?php echo $form->textField($model,'contact_status'); ?>
		<?php echo $form->error($model,'contact_status'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'communication_stuation'); ?>
		<?php echo $form->textField($model,'communication_stuation'); ?>
		<?php echo $form->error($model,'communication_stuation'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'reasons'); ?>
		<?php echo $form->textField($model,'reasons',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'reasons'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'appointment_time'); ?>
		<?php echo $form->textField($model,'appointment_time'); ?>
		<?php echo $form->error($model,'appointment_time'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'interview_departments'); ?>
		<?php echo $form->textField($model,'interview_departments'); ?>
		<?php echo $form->error($model,'interview_departments'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'interview'); ?>
		<?php echo $form->textField($model,'interview'); ?>
		<?php echo $form->error($model,'interview'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'contact_user_id'); ?>
		<?php echo $form->textField($model,'contact_user_id'); ?>
		<?php echo $form->error($model,'contact_user_id'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->