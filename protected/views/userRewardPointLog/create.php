<?php
/* @var $this UserRewardPointLogController */
/* @var $model UserRewardPointLog */

$this->breadcrumbs=array(
	'User Reward Point Logs'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List UserRewardPointLog', 'url'=>array('index')),
	array('label'=>'Manage UserRewardPointLog', 'url'=>array('admin')),
);
?>

<h1>Create UserRewardPointLog</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>