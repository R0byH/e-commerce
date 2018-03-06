<?php
/* @var $this ProductCategoryDiscountController */
/* @var $model ProductCategoryDiscount */

$this->breadcrumbs=array(
	'Product Category Discounts'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List ProductCategoryDiscount', 'url'=>array('index')),
	array('label'=>'Create ProductCategoryDiscount', 'url'=>array('create')),
	array('label'=>'View ProductCategoryDiscount', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage ProductCategoryDiscount', 'url'=>array('admin')),
);
?>

<h1>Update ProductCategoryDiscount <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>