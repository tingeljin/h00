<?php
/* @var $this SourceController */
/* @var $model Source */

$this->breadcrumbs=array(
	'Sources'=>array('index'),
	$model->name,
);

$this->menu=array(
	array('label'=>'List Source', 'url'=>array('index')),
	array('label'=>'Create Source', 'url'=>array('create')),
	array('label'=>'Create SourceType', 'url'=>array('createsource')),
	array('label'=>'Update Source', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete Source', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Source', 'url'=>array('admin')),
);
?>

<h1>View Source #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'pid',
		'name',
	),
)); ?>
