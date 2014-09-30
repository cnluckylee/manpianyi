<?php
$this->breadcrumbs=array(
	'Tbks'=>array('index'),
	$model->title,
);

$this->menu=array(
	array('label'=>'List Tbk', 'url'=>array('index')),
	array('label'=>'Create Tbk', 'url'=>array('create')),
	array('label'=>'Update Tbk', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete Tbk', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Tbk', 'url'=>array('admin')),
);
?>

<h1>View Tbk #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'auctionId',
		'auctionType',
		'auctionUrl',
		'biz30day',
		'calCommission',
		'commentCount',
		'commission',
		'commissionMoney',
		'commissionRatePercent',
		'nick',
		'pictUrl',
		'reservePrice',
		'shopUrl',
		'title',
		'totalFee',
		'totalNum',
		'userId',
		'userNumber',
		'userType',
		'zkPrice',
		'zkRate',
		'zkType',
		'addtime',
		'updtime',
	),
)); ?>
