<?php
/* @var $this ConfigController */
/* @var $model Config */

$this->breadcrumbs=array(
	'Configs'=>array('index'),
	'CreateConfigType',
);

$this->menu=array(
	array('label'=>'List Config', 'url'=>array('index')),
	array('label'=>'Manage Config', 'url'=>array('admin')),
);
?>

<h1>Create Config</h1>

<?php echo $this->renderPartial('_formtype', array('model'=>$model)); ?>