<?php
/* @var $this RecruitmentMainController */
/* @var $model RecruitmentMain */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'recruitment-main-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'recruitment_name'); ?>
		<?php echo $form->textField($model,'recruitment_name',array('size'=>10,'maxlength'=>10)); ?>
		<?php echo $form->error($model,'recruitment_name'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'age'); ?>
		<?php echo $form->dropDownList($model,'age',$model->getAgeOptions(),array('empty'=>'-请选择-')); ?>
		<?php echo $form->error($model,'age'); ?>
		
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'contact_number'); ?>
		<?php echo $form->textField($model,'contact_number'); ?>
		<?php echo $form->error($model,'contact_number'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'user_status'); ?>
		<?php echo $form->textField($model,'user_status'); ?>
		<?php echo $form->error($model,'user_status'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'educational_level'); ?>
		<?php echo $form->dropDownList($model,'educational_level',$model->getEducationalLevelOptions()); ?>
		<?php echo $form->error($model,'educational_level'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'graduated_school'); ?>
		<?php echo $form->textField($model,'graduated_school',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'graduated_school'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'hometown'); ?>
		<?php echo $form->textField($model,'hometown',array('size'=>10,'maxlength'=>10)); ?>
		<?php echo $form->error($model,'hometown'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'hometown_address'); ?>
		<?php echo $form->textField($model,'hometown_address',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'hometown_address'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'applied_position'); ?>
		<?php echo $form->textField($model,'applied_position'); ?>
		<?php echo $form->error($model,'applied_position'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'source_types'); ?>
		<?php echo $form->dropDownList($model,'source_types',Source::model()->getSourceTypesOptions()); ?>
		<?php echo $form->error($model,'source_types'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'source'); ?>
		<?php echo $form->textField($model,'source',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'source'); ?>
	</div>
	
	<div class="row">
		<?php echo $form->labelEx($model,'channel'); ?>
		<?php echo $form->textField($model,'channel',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'channel'); ?>
	</div>
	
	<div class="row">
		<?php echo $form->labelEx($model,'other'); ?>
		<?php echo $form->textField($model,'other',array('size'=>60,'maxlength'=>150)); ?>
		<?php echo $form->error($model,'other'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->