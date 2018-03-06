<?php
/* @var $this PaymentOfferController */
/* @var $model PaymentOffer */

$this->breadcrumbs=array(
	'Payment Offers'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'List PaymentOffer', 'url'=>array('index')),
	array('label'=>'Create PaymentOffer', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#payment-offer-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Manage Payment Offers</h1>

<p>
You may optionally enter a comparison operator (<b>&lt;</b>, <b>&lt;=</b>, <b>&gt;</b>, <b>&gt;=</b>, <b>&lt;&gt;</b>
or <b>=</b>) at the beginning of each of your search values to specify how the comparison should be done.
</p>

<?php echo CHtml::link('Advanced Search','#',array('class'=>'search-button')); ?>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'payment-offer-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'id',
		'institute_type',
		'institute_name',
		'card_type',
		'coupon_code',
		'discount_value',
		/*
		'discount_unit',
		'create_date',
		'valid_from',
		'valid_until',
		'maximum_discount_amount',
		'product_id',
		'product_category_id',
		*/
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
