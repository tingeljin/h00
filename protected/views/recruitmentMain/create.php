<?php
/* @var $this RecruitmentMainController */
/* @var $model RecruitmentMain */

$this->breadcrumbs=array(
	'Recruitment Mains'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List RecruitmentMain', 'url'=>array('index')),
	array('label'=>'Manage RecruitmentMain', 'url'=>array('admin')),
);
?>

<h1>Create RecruitmentMain</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>