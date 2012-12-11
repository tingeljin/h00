<?php
/* @var $this RecruitmentMainController */
/* @var $data RecruitmentMain */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('recruitment_id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->recruitment_id), array('view', 'id'=>$data->recruitment_id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('recruitment_name')); ?>:</b>
	<?php echo CHtml::encode($data->recruitment_name); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('age')); ?>:</b>
	<?php echo CHtml::encode($data->getAgeText()); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('contact_number')); ?>:</b>
	<?php echo CHtml::encode($data->contact_number); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('user_status')); ?>:</b>
	<?php echo CHtml::encode($data->user_status); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('educational_level')); ?>:</b>
	<?php echo CHtml::encode($data->getEducationalLevelText()); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('graduated_school')); ?>:</b>
	<?php echo CHtml::encode($data->graduated_school); ?>
	<br />

	
	<b><?php echo CHtml::encode($data->getAttributeLabel('hometown')); ?>:</b>
	<?php echo CHtml::encode($data->hometown); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('hometown_address')); ?>:</b>
	<?php echo CHtml::encode($data->hometown_address); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('applied_position')); ?>:</b>
	<?php echo CHtml::encode($data->applied_position); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('source_types')); ?>:</b>
	<?php echo CHtml::encode($data->getSourceTypesText()); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('source')); ?>:</b>
	<?php echo CHtml::encode($data->source); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('other')); ?>:</b>
	<?php echo CHtml::encode($data->other); ?>
	<br />
<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('create_user_id')); ?>:</b>
	<?php echo CHtml::encode($data->create_user_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('collect_time')); ?>:</b>
	<?php echo CHtml::encode($data->collect_time); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('update_user_id')); ?>:</b>
	<?php echo CHtml::encode($data->update_user_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('update_time')); ?>:</b>
	<?php echo CHtml::encode($data->update_time); ?>
	<br />

	*/ ?>

</div>