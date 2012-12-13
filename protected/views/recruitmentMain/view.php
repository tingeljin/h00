<?php
/* @var $this RecruitmentMainController */
/* @var $model RecruitmentMain */

$this->breadcrumbs=array(
	'Recruitment Mains'=>array('index'),
	$model->recruitment_id,
);

$this->menu=array(
	array('label'=>'List RecruitmentMain', 'url'=>array('index')),
	array('label'=>'Create RecruitmentMain', 'url'=>array('create')),
	array('label'=>'Update RecruitmentMain', 'url'=>array('update', 'id'=>$model->recruitment_id)),
	array('label'=>'Delete RecruitmentMain', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->recruitment_id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage RecruitmentMain', 'url'=>array('admin')),
);
?>

<h1>View RecruitmentMain #<?php echo $model->recruitment_id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'recruitment_id',
		'recruitment_name',
		array('name'=>'age','value'=>CHtml::encode($model->getAgeText())),
		'contact_number',
		'user_status',
		array('name'=>'educational_level','value'=>CHtml::encode($model->getEducationalLevelText())),
		'graduated_school',
		'hometown',
		'hometown_address',
		'applied_position',
		//'source_types',
		array('name'=>'source_types','value'=>$model->sourceType->name),
		'source',
		'other',
		'create_user_id',
		'collect_time',
		'update_user_id',
		'update_time',
	),
)); ?>
