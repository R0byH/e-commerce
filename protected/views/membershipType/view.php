<?php
/* @var $this MembershipTypeController */
/* @var $model MembershipType */

$this->breadcrumbs=array(
	'Membership Types'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List MembershipType', 'url'=>array('index')),
	array('label'=>'Create MembershipType', 'url'=>array('create')),
	array('label'=>'Update MembershipType', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete MembershipType', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage MembershipType', 'url'=>array('admin')),
);
?>

<h1>View MembershipType #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'membership_type',
		'discount_value',
		'discount_unit',
		'create_date',
		'valid_until',
		'is_free_shipping_active',
	),
)); ?>
