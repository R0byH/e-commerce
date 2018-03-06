<?php
/* @var $this UserRewardPointLogController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'User Reward Point Logs',
);

$this->menu=array(
	array('label'=>'Create UserRewardPointLog', 'url'=>array('create')),
	array('label'=>'Manage UserRewardPointLog', 'url'=>array('admin')),
);
?>

<h1>User Reward Point Logs</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
