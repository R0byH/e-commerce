<?php
/* @var $this ProductDiscountController */
/* @var $model ProductDiscount */

$this->breadcrumbs=array(
	'Product Discounts'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'List ProductDiscount', 'url'=>array('index')),
	array('label'=>'Create ProductDiscount', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#product-discount-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Manage Product Discounts</h1>

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
	'id'=>'product-discount-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		//'id',
		array(
			'name'=>'product_id',
			'header'=>'Product',
			'value'=>'Product::Model()->FindByPk($data->id)->product_name',
		),
		'discount_value',
		'discount_unit',
		//'create_date',
		'valid_from',		
		'valid_until',
		'coupon_code',
		/*'minimum_order_value',
		'maximum_discount_amount',
		'is_redeem_allowed',
		*/
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
