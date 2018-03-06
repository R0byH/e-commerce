<?php
/* @var $this UserRewardPointLogController */
/* @var $model UserRewardPointLog */

$this->breadcrumbs=array(
	'User Reward Point Logs'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'List UserRewardPointLog', 'url'=>array('index')),
	array('label'=>'Create UserRewardPointLog', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#user-reward-point-log-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Manage User Reward Point Logs</h1>

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
	'id'=>'user-reward-point-log-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'id',
		'user_id',
		'reward_points',
		'reward_type',
		'operation_type',
		'create_date',
		/*
		'expiry_date',
		*/
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
