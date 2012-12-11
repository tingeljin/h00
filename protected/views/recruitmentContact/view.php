<?php
/* @var $this RecruitmentContactController */
/* @var $model RecruitmentContact */

$this->breadcrumbs=array(
	'Recruitment Contacts'=>array('index'),
	$model->contact_id,
);

$this->menu=array(
	array('label'=>'List RecruitmentContact', 'url'=>array('index')),
	array('label'=>'Create RecruitmentContact', 'url'=>array('create')),
	array('label'=>'Update RecruitmentContact', 'url'=>array('update', 'id'=>$model->contact_id)),
	array('label'=>'Delete RecruitmentContact', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->contact_id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage RecruitmentContact', 'url'=>array('admin')),
);
?>

<h1>View RecruitmentContact #<?php echo $model->contact_id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'contact_id',
		'recruitment_id',
		'contact_time',
		'contact_schedule',
		'contact_status',
		'communication_stuation',
		'reasons',
		'appointment_time',
		'interview_departments',
		'interview',
		'contact_user_id',
	),
)); ?>
