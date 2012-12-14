<?php
/* @var $this ConfigController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Configs',
);

$this->menu=array(
	array('label'=>'Create Config Sub', 'url'=>array('createconfigsub')),
	array('label'=>'Create Config Type', 'url'=>array('createconfigtype')),
	array('label'=>'Manage Config', 'url'=>array('admin')),
);
?>

<h1>Configs</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
