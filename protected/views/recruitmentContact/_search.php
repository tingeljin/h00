<?php
/* @var $this RecruitmentContactController */
/* @var $model RecruitmentContact */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'contact_id'); ?>
		<?php echo $form->textField($model,'contact_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'recruitment_id'); ?>
		<?php echo $form->textField($model,'recruitment_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'contact_time'); ?>
		<?php echo $form->textField($model,'contact_time'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'contact_schedule'); ?>
		<?php echo $form->textField($model,'contact_schedule'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'contact_status'); ?>
		<?php echo $form->textField($model,'contact_status'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'communication_stuation'); ?>
		<?php echo $form->textField($model,'communication_stuation'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'reasons'); ?>
		<?php echo $form->textField($model,'reasons',array('size'=>50,'maxlength'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'appointment_time'); ?>
		<?php echo $form->textField($model,'appointment_time'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'interview_departments'); ?>
		<?php echo $form->textField($model,'interview_departments'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'interview'); ?>
		<?php echo $form->textField($model,'interview'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'contact_user_id'); ?>
		<?php echo $form->textField($model,'contact_user_id'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->