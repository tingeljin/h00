<?php
/* @var $this SourceController */
/* @var $model Source */

$this->breadcrumbs=array(
	'Sources'=>array('index'),
	$model->name=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Source', 'url'=>array('index')),
	array('label'=>'Create Source', 'url'=>array('create')),
	array('label'=>'View Source', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage Source', 'url'=>array('admin')),
);
?>

<h1>Update Source <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>