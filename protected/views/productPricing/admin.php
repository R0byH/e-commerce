<?php
/* @var $this ProductPricingController */
/* @var $model ProductPricing */

$this->breadcrumbs=array(
	'Product Pricings'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'List ProductPricing', 'url'=>array('index')),
	array('label'=>'Create ProductPricing', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#product-pricing-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Manage Product Pricings</h1>

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
	'id'=>'product-pricing-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		//'id',
		//'product_id',
		array(
			'name'=>'product_id',
			'header'=>'Product',
			'value'=>'Product::Model()->FindByPk($data->id)->product_name',
		),
		'base_price',
		'create_date',
		'expiry_date',
		//'in_active',
		array(
			'name'=>'in_active',
			'header'=>'In Active',
			'value'=>'$data->in_active==0?"False":"True"',
		),
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
