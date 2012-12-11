<?php
/* @var $this ConfigController */
/* @var $data Config */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('setting_id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->setting_id), array('view', 'id'=>$data->setting_id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('age_config')); ?>:</b>
	<?php echo CHtml::encode($data->age_config); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('recruitment_status')); ?>:</b>
	<?php echo CHtml::encode($data->recruitment_status); ?>
	<br />


</div>