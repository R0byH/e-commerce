<?php
/* @var $this MembershipTypeController */
/* @var $model MembershipType */

$this->breadcrumbs=array(
	'Membership Types'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List MembershipType', 'url'=>array('index')),
	array('label'=>'Create MembershipType', 'url'=>array('create')),
	array('label'=>'View MembershipType', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage MembershipType', 'url'=>array('admin')),
);
?>

<h1>Update MembershipType <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>