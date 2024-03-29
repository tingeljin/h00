<?php
/* @var $this RecruitmentMainController */
/* @var $model RecruitmentMain */

$this->breadcrumbs=array(
	'Recruitment Mains'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'List RecruitmentMain', 'url'=>array('index')),
	array('label'=>'Create RecruitmentMain', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$.fn.yiiGridView.update('recruitment-main-grid', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Manage Recruitment Mains</h1>

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
	'id'=>'recruitment-main-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'recruitment_id',
		'recruitment_name',
		array('name'=>'age','filter'=>Config::model()->getConfigAgeOptions(),'value'=>'$data->configAge->setting_name'),
		'contact_number',
		array('name'=>'user_status','filter'=>Config::model()->getConfigStatusOptions(),'value'=>'$data->configStatus->setting_name'),
		//'educational_level',
		array('name'=>'educational_level','filter'=>Config::model()->getConfigEducationalLevelOptions(),'value'=>'$data->configEducationalLevel->setting_name'),
		//'source_types',
		array('name'=>'source_types','filter'=>Source::model()->getSourceTypesOptions(),'value'=>'$data->sourceName->name'),
		/*
		'graduated_school',
		'hometown',
		'hometown_address',
		'applied_position',
		
		'source',
		'other',
		'create_user_id',
		'collect_time',
		'update_user_id',
		'update_time',
		*/
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
