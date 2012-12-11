<?php
/* @var $this RecruitmentContactController */
/* @var $model RecruitmentContact */

$this->breadcrumbs=array(
	'Recruitment Contacts'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List RecruitmentContact', 'url'=>array('index')),
	array('label'=>'Manage RecruitmentContact', 'url'=>array('admin')),
);
?>

<h1>Create RecruitmentContact</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>