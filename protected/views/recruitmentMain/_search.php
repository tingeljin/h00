<?php
/* @var $this RecruitmentMainController */
/* @var $model RecruitmentMain */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'recruitment_id'); ?>
		<?php echo $form->textField($model,'recruitment_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'recruitment_name'); ?>
		<?php echo $form->textField($model,'recruitment_name',array('size'=>10,'maxlength'=>10)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'age'); ?>
		<?php echo $form->textField($model,'age'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'contact_number'); ?>
		<?php echo $form->textField($model,'contact_number'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'user_status'); ?>
		<?php echo $form->textField($model,'user_status'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'educational_level'); ?>
		<?php echo $form->textField($model,'educational_level'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'graduated_school'); ?>
		<?php echo $form->textField($model,'graduated_school',array('size'=>50,'maxlength'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'hometown'); ?>
		<?php echo $form->textField($model,'hometown',array('size'=>10,'maxlength'=>10)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'hometown_address'); ?>
		<?php echo $form->textField($model,'hometown_address',array('size'=>50,'maxlength'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'applied_position'); ?>
		<?php echo $form->textField($model,'applied_position'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'source_types'); ?>
		<?php echo $form->textField($model,'source_types'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'source'); ?>
		<?php echo $form->textField($model,'source',array('size'=>50,'maxlength'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'other'); ?>
		<?php echo $form->textField($model,'other',array('size'=>60,'maxlength'=>150)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'create_user_id'); ?>
		<?php echo $form->textField($model,'create_user_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'collect_time'); ?>
		<?php echo $form->textField($model,'collect_time'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'update_user_id'); ?>
		<?php echo $form->textField($model,'update_user_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'update_time'); ?>
		<?php echo $form->textField($model,'update_time'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->