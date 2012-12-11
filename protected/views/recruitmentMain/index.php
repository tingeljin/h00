<?php
/* @var $this RecruitmentMainController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Recruitment Mains',
);

$this->menu=array(
	array('label'=>'Create RecruitmentMain', 'url'=>array('create')),
	array('label'=>'Manage RecruitmentMain', 'url'=>array('admin')),
);
?>

<h1>Recruitment Mains</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
