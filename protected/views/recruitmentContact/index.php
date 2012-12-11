<?php
/* @var $this RecruitmentContactController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Recruitment Contacts',
);

$this->menu=array(
	array('label'=>'Create RecruitmentContact', 'url'=>array('create')),
	array('label'=>'Manage RecruitmentContact', 'url'=>array('admin')),
);
?>

<h1>Recruitment Contacts</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
