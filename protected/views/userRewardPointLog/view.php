<?php
/* @var $this UserRewardPointLogController */
/* @var $model UserRewardPointLog */

$this->breadcrumbs=array(
	'User Reward Point Logs'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List UserRewardPointLog', 'url'=>array('index')),
	array('label'=>'Create UserRewardPointLog', 'url'=>array('create')),
	array('label'=>'Update UserRewardPointLog', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete UserRewardPointLog', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage UserRewardPointLog', 'url'=>array('admin')),
);
?>

<h1>View UserRewardPointLog #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'user_id',
		'reward_points',
		'reward_type',
		'operation_type',
		'create_date',
		'expiry_date',
	),
)); ?>
