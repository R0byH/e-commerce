<?php
/* @var $this ProductCategoryDiscountController */
/* @var $model ProductCategoryDiscount */

$this->breadcrumbs=array(
	'Product Category Discounts'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'List ProductCategoryDiscount', 'url'=>array('index')),
	array('label'=>'Create ProductCategoryDiscount', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#product-category-discount-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Manage Product Category Discounts</h1>

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
	'id'=>'product-category-discount-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		//'id',
		//'product_category_id',
		array(
			'name'=>'product_category_id',
			'header'=>'Product Category',
			'value'=>'ProductCategory::Model()->FindByPk($data->id)->category_name',
		),
		'discount_value',
		'discount_unit',
		'create_date',
		'valid_from',
		/*
		'valid_until',
		'coupon_code',
		'minimum_order_value',
		'maximum_discount_amount',
		'is_redeem_allowed',
		*/
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
