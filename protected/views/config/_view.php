<?php
/* @var $this ConfigController */
/* @var $data Config */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('setting_id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->setting_id), array('view', 'id'=>$data->setting_id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('setting_pid')); ?>:</b>
	<?php echo CHtml::encode($data->setting_pid); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('setting_name')); ?>:</b>
	<?php echo CHtml::encode($data->setting_name); ?>
	<br />


</div>