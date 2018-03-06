<?php
/* @var $this ProductDiscountController */
/* @var $model ProductDiscount */

$this->breadcrumbs=array(
	'Product Discounts'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List ProductDiscount', 'url'=>array('index')),
	array('label'=>'Create ProductDiscount', 'url'=>array('create')),
	array('label'=>'Update ProductDiscount', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete ProductDiscount', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage ProductDiscount', 'url'=>array('admin')),
);
?>

<h1>View ProductDiscount #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'product_id',
		'discount_value',
		'discount_unit',
		'create_date',
		'valid_from',
		'valid_until',
		'coupon_code',
		'minimum_order_value',
		'maximum_discount_amount',
		'is_redeem_allowed',
	),
)); ?>
