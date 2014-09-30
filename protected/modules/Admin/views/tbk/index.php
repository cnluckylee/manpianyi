
<?php
Yii::app()->clientScript->registerScript('search', "
var searchFromHtml = '';
var searchFromDialog = null;
var getSearchFromHtml = function() {
	if(searchFromHtml== '') {
		searchFromHtml = $('.search-form').html();
		$('.search-form').remove();
	}
	
	return searchFromHtml;	
}
var searchFromDialog = art.dialog({
	title: '高级搜索',
	okValue: '搜索',
	visible: false,
	padding: '5px 5px',
	ok:function(){
		$.fn.yiiGridView.update('admin-role-grid', {
			data: $('#tbk-grid-search-form form').serialize()
		});
		this.hidden();
		return false;
	},
	content:getSearchFromHtml()
});
$('.search-button').click(function(){
	searchFromDialog.visible();
	return false;
});

");
?>
<div class="topBut">
<a class="button" href="javascript:void(0)" buttype="link" url="<?php echo $this->createUrl('create');?>"><span>添加</span></a>
<a class="button search-button" href="javascript:void(0)" ><span>高级搜索</span></a>
</div>

<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<?php $this->widget('admin.widgets.grid.AdminGridView', array(
	'id'=>'tbk-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		array(

						'name' => 'id',

						//'htmlOptions' => array(
								//'width' => '60',
						//),
				),

			array(

						'name' => 'auctionId',

						//'htmlOptions' => array(
								//'width' => '60',
						//),
				),

			array(

						'name' => 'auctionType',

						//'htmlOptions' => array(
								//'width' => '60',
						//),
				),

			array(

						'name' => 'auctionUrl',

						//'htmlOptions' => array(
								//'width' => '60',
						//),
				),

			array(

						'name' => 'biz30day',

						//'htmlOptions' => array(
								//'width' => '60',
						//),
				),

			array(

						'name' => 'calCommission',

						//'htmlOptions' => array(
								//'width' => '60',
						//),
				),

			/*
		array(

						'name' => 'commentCount',

						//'htmlOptions' => array(
								//'width' => '60',
						//),
				),

			array(

						'name' => 'commission',

						//'htmlOptions' => array(
								//'width' => '60',
						//),
				),

			array(

						'name' => 'commissionMoney',

						//'htmlOptions' => array(
								//'width' => '60',
						//),
				),

			array(

						'name' => 'commissionRatePercent',

						//'htmlOptions' => array(
								//'width' => '60',
						//),
				),

			array(

						'name' => 'nick',

						//'htmlOptions' => array(
								//'width' => '60',
						//),
				),

			array(

						'name' => 'pictUrl',

						//'htmlOptions' => array(
								//'width' => '60',
						//),
				),

			array(

						'name' => 'reservePrice',

						//'htmlOptions' => array(
								//'width' => '60',
						//),
				),

			array(

						'name' => 'shopUrl',

						//'htmlOptions' => array(
								//'width' => '60',
						//),
				),

			array(

						'name' => 'title',

						//'htmlOptions' => array(
								//'width' => '60',
						//),
				),

			array(

						'name' => 'totalFee',

						//'htmlOptions' => array(
								//'width' => '60',
						//),
				),

			array(

						'name' => 'totalNum',

						//'htmlOptions' => array(
								//'width' => '60',
						//),
				),

			array(

						'name' => 'userId',

						//'htmlOptions' => array(
								//'width' => '60',
						//),
				),

			array(

						'name' => 'userNumber',

						//'htmlOptions' => array(
								//'width' => '60',
						//),
				),

			array(

						'name' => 'userType',

						//'htmlOptions' => array(
								//'width' => '60',
						//),
				),

			array(

						'name' => 'zkPrice',

						//'htmlOptions' => array(
								//'width' => '60',
						//),
				),

			array(

						'name' => 'zkRate',

						//'htmlOptions' => array(
								//'width' => '60',
						//),
				),

			array(

						'name' => 'zkType',

						//'htmlOptions' => array(
								//'width' => '60',
						//),
				),

			array(

						'name' => 'addtime',

						//'htmlOptions' => array(
								//'width' => '60',
						//),
				),

			array(

						'name' => 'updtime',

						//'htmlOptions' => array(
								//'width' => '60',
						//),
				),

			*/
		array(
			'class'=>'CButtonColumn',
			'class' => 'CButtonColumn',
			'template' => '{update} {delete}',
		),
	),
)); ?>
