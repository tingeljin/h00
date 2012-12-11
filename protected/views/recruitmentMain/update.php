<?php
/* @var $this RecruitmentMainController */
/* @var $model RecruitmentMain */

$this->breadcrumbs=array(
	'Recruitment Mains'=>array('index'),
	$model->recruitment_id=>array('view','id'=>$model->recruitment_id),
	'Update',
);

$this->menu=array(
	array('label'=>'List RecruitmentMain', 'url'=>array('index')),
	array('label'=>'Create RecruitmentMain', 'url'=>array('create')),
	array('label'=>'View RecruitmentMain', 'url'=>array('view', 'id'=>$model->recruitment_id)),
	array('label'=>'Manage RecruitmentMain', 'url'=>array('admin')),
);
?>

<h1>Update RecruitmentMain <?php echo $model->recruitment_id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>