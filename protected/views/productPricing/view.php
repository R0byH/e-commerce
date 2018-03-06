<?php
/* @var $this ProductPricingController */
/* @var $model ProductPricing */

$this->breadcrumbs=array(
	'Product Pricings'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List ProductPricing', 'url'=>array('index')),
	array('label'=>'Create ProductPricing', 'url'=>array('create')),
	array('label'=>'Update ProductPricing', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete ProductPricing', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage ProductPricing', 'url'=>array('admin')),
);
?>

<h1>View ProductPricing #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'product_id',
		'base_price',
		'create_date',
		'expiry_date',
		'in_active',
	),
)); ?>
