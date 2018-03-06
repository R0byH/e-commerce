<?php
/* @var $this UserRewardPointLogController */
/* @var $model UserRewardPointLog */

$this->breadcrumbs=array(
	'User Reward Point Logs'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List UserRewardPointLog', 'url'=>array('index')),
	array('label'=>'Create UserRewardPointLog', 'url'=>array('create')),
	array('label'=>'View UserRewardPointLog', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage UserRewardPointLog', 'url'=>array('admin')),
);
?>

<h1>Update UserRewardPointLog <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>