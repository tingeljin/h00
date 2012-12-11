<?php
/* @var $this RecruitmentContactController */
/* @var $model RecruitmentContact */

$this->breadcrumbs=array(
	'Recruitment Contacts'=>array('index'),
	$model->contact_id=>array('view','id'=>$model->contact_id),
	'Update',
);

$this->menu=array(
	array('label'=>'List RecruitmentContact', 'url'=>array('index')),
	array('label'=>'Create RecruitmentContact', 'url'=>array('create')),
	array('label'=>'View RecruitmentContact', 'url'=>array('view', 'id'=>$model->contact_id)),
	array('label'=>'Manage RecruitmentContact', 'url'=>array('admin')),
);
?>

<h1>Update RecruitmentContact <?php echo $model->contact_id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>