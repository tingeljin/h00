<?php
/* @var $this RecruitmentContactController */
/* @var $model RecruitmentContact */

$this->breadcrumbs=array(
	'Recruitment Contacts'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'List RecruitmentContact', 'url'=>array('index')),
	array('label'=>'Create RecruitmentContact', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$.fn.yiiGridView.update('recruitment-contact-grid', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Manage Recruitment Contacts</h1>

<p>
You may optionally enter a comparison operator (<b>&lt;</b>, <b>&lt;=</b>, <b>&gt;</b>, <b>&gt;=</b>, <b>&lt;&gt;</b>
or <b>=</b>) at the beginning of each of your search values to specify how the comparison should be done.
</p>

<?php echo CHtml::link('Advanced Search','#',array('class'=>'search-button')); ?>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'recruitment-contact-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'contact_id',
		'recruitment_id',
		'contact_time',
		'contact_schedule',
		'contact_status',
		'communication_stuation',
		/*
		'reasons',
		'appointment_time',
		'interview_departments',
		'interview',
		'contact_user_id',
		*/
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
