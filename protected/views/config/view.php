<?php
/* @var $this ConfigController */
/* @var $model Config */

$this->breadcrumbs=array(
	'Configs'=>array('index'),
	$model->setting_id,
);

$this->menu=array(
	array('label'=>'List Config', 'url'=>array('index')),
	array('label'=>'Create Config Sub', 'url'=>array('createconfigsub')),
	array('label'=>'Create Config Type', 'url'=>array('createconfigtype')),
	array('label'=>'Update Config', 'url'=>array('update', 'id'=>$model->setting_id)),
	array('label'=>'Delete Config', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->setting_id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Config', 'url'=>array('admin')),
);
?>

<h1>View Config #<?php echo $model->setting_id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'setting_id',
		'setting_pid',
		'setting_name',
	),
)); ?>
