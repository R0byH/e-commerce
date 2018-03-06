<?php
/* @var $this ProductCategoryDiscountController */
/* @var $model ProductCategoryDiscount */

$this->breadcrumbs=array(
	'Product Category Discounts'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List ProductCategoryDiscount', 'url'=>array('index')),
	array('label'=>'Create ProductCategoryDiscount', 'url'=>array('create')),
	array('label'=>'Update ProductCategoryDiscount', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete ProductCategoryDiscount', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage ProductCategoryDiscount', 'url'=>array('admin')),
);
?>

<h1>View ProductCategoryDiscount #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		array(
			'name'=>'product_category_id',
			'header'=>'Product Category',
			'value'=>ProductCategory::Model()->FindByPk($model->product_category_id)->category_name,
		),
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
