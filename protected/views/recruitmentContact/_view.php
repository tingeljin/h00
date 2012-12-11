<?php
/* @var $this RecruitmentContactController */
/* @var $data RecruitmentContact */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('contact_id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->contact_id), array('view', 'id'=>$data->contact_id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('recruitment_id')); ?>:</b>
	<?php echo CHtml::encode($data->recruitment_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('contact_time')); ?>:</b>
	<?php echo CHtml::encode($data->contact_time); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('contact_schedule')); ?>:</b>
	<?php echo CHtml::encode($data->contact_schedule); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('contact_status')); ?>:</b>
	<?php echo CHtml::encode($data->contact_status); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('communication_stuation')); ?>:</b>
	<?php echo CHtml::encode($data->communication_stuation); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('reasons')); ?>:</b>
	<?php echo CHtml::encode($data->reasons); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('appointment_time')); ?>:</b>
	<?php echo CHtml::encode($data->appointment_time); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('interview_departments')); ?>:</b>
	<?php echo CHtml::encode($data->interview_departments); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('interview')); ?>:</b>
	<?php echo CHtml::encode($data->interview); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('contact_user_id')); ?>:</b>
	<?php echo CHtml::encode($data->contact_user_id); ?>
	<br />

	*/ ?>

</div>