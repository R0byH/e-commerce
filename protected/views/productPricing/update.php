<?php
/* @var $this ProductPricingController */
/* @var $model ProductPricing */

$this->breadcrumbs=array(
	'Product Pricings'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List ProductPricing', 'url'=>array('index')),
	array('label'=>'Create ProductPricing', 'url'=>array('create')),
	array('label'=>'View ProductPricing', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage ProductPricing', 'url'=>array('admin')),
);
?>

<h1>Update ProductPricing <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>