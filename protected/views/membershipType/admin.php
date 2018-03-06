<?php
/* @var $this MembershipTypeController */
/* @var $model MembershipType */

$this->breadcrumbs=array(
	'Membership Types'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'List MembershipType', 'url'=>array('index')),
	array('label'=>'Create MembershipType', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#membership-type-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Manage Membership Types</h1>

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
	'id'=>'membership-type-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'id',
		'membership_type',
		'discount_value',
		'discount_unit',
		'create_date',
		'valid_until',
		/*
		'is_free_shipping_active',
		*/
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
