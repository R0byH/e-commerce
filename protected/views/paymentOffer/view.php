<?php
/* @var $this PaymentOfferController */
/* @var $model PaymentOffer */

$this->breadcrumbs=array(
	'Payment Offers'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List PaymentOffer', 'url'=>array('index')),
	array('label'=>'Create PaymentOffer', 'url'=>array('create')),
	array('label'=>'Update PaymentOffer', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete PaymentOffer', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage PaymentOffer', 'url'=>array('admin')),
);
?>

<h1>View PaymentOffer #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'institute_type',
		'institute_name',
		'card_type',
		'coupon_code',
		'discount_value',
		'discount_unit',
		'create_date',
		'valid_from',
		'valid_until',
		'maximum_discount_amount',
		'product_id',
		'product_category_id',
	),
)); ?>
