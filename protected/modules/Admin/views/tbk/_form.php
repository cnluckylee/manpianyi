<div class="form">
<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'tbk-form',
	'enableAjaxValidation'=>true,
)); ?>
<table width="100%" class="table_form table">
      <thead>
        <tr class="title">
          <th colspan="2"> <?php echo $formTatle;?> </th>
        </tr>
      </thead>
      <tbody>
	<tr>
          <th width="100" align="right">
		<?php echo $form->labelEx($model,'auctionId'); ?>
        </th>
        <td >
        <div class="row">
		<?php echo $form->textField($model,'auctionId',array('size'=>20,'maxlength'=>20)); ?>
		<?php echo $form->error($model,'auctionId'); ?>
        </div>
        </td>
	</tr>

	<tr>
          <th width="100" align="right">
		<?php echo $form->labelEx($model,'auctionType'); ?>
        </th>
        <td >
        <div class="row">
		<?php echo $form->textField($model,'auctionType',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'auctionType'); ?>
        </div>
        </td>
	</tr>

	<tr>
          <th width="100" align="right">
		<?php echo $form->labelEx($model,'auctionUrl'); ?>
        </th>
        <td >
        <div class="row">
		<?php echo $form->textField($model,'auctionUrl',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'auctionUrl'); ?>
        </div>
        </td>
	</tr>

	<tr>
          <th width="100" align="right">
		<?php echo $form->labelEx($model,'biz30day'); ?>
        </th>
        <td >
        <div class="row">
		<?php echo $form->textField($model,'biz30day'); ?>
		<?php echo $form->error($model,'biz30day'); ?>
        </div>
        </td>
	</tr>

	<tr>
          <th width="100" align="right">
		<?php echo $form->labelEx($model,'calCommission'); ?>
        </th>
        <td >
        <div class="row">
		<?php echo $form->textField($model,'calCommission',array('size'=>10,'maxlength'=>10)); ?>
		<?php echo $form->error($model,'calCommission'); ?>
        </div>
        </td>
	</tr>

	<tr>
          <th width="100" align="right">
		<?php echo $form->labelEx($model,'commentCount'); ?>
        </th>
        <td >
        <div class="row">
		<?php echo $form->textField($model,'commentCount'); ?>
		<?php echo $form->error($model,'commentCount'); ?>
        </div>
        </td>
	</tr>

	<tr>
          <th width="100" align="right">
		<?php echo $form->labelEx($model,'commission'); ?>
        </th>
        <td >
        <div class="row">
		<?php echo $form->textField($model,'commission'); ?>
		<?php echo $form->error($model,'commission'); ?>
        </div>
        </td>
	</tr>

	<tr>
          <th width="100" align="right">
		<?php echo $form->labelEx($model,'commissionMoney'); ?>
        </th>
        <td >
        <div class="row">
		<?php echo $form->textField($model,'commissionMoney',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'commissionMoney'); ?>
        </div>
        </td>
	</tr>

	<tr>
          <th width="100" align="right">
		<?php echo $form->labelEx($model,'commissionRatePercent'); ?>
        </th>
        <td >
        <div class="row">
		<?php echo $form->textField($model,'commissionRatePercent'); ?>
		<?php echo $form->error($model,'commissionRatePercent'); ?>
        </div>
        </td>
	</tr>

	<tr>
          <th width="100" align="right">
		<?php echo $form->labelEx($model,'nick'); ?>
        </th>
        <td >
        <div class="row">
		<?php echo $form->textField($model,'nick',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'nick'); ?>
        </div>
        </td>
	</tr>

	<tr>
          <th width="100" align="right">
		<?php echo $form->labelEx($model,'pictUrl'); ?>
        </th>
        <td >
        <div class="row">
		<?php echo $form->textField($model,'pictUrl',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'pictUrl'); ?>
        </div>
        </td>
	</tr>

	<tr>
          <th width="100" align="right">
		<?php echo $form->labelEx($model,'reservePrice'); ?>
        </th>
        <td >
        <div class="row">
		<?php echo $form->textField($model,'reservePrice',array('size'=>10,'maxlength'=>10)); ?>
		<?php echo $form->error($model,'reservePrice'); ?>
        </div>
        </td>
	</tr>

	<tr>
          <th width="100" align="right">
		<?php echo $form->labelEx($model,'shopUrl'); ?>
        </th>
        <td >
        <div class="row">
		<?php echo $form->textField($model,'shopUrl',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'shopUrl'); ?>
        </div>
        </td>
	</tr>

	<tr>
          <th width="100" align="right">
		<?php echo $form->labelEx($model,'title'); ?>
        </th>
        <td >
        <div class="row">
		<?php echo $form->textField($model,'title',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'title'); ?>
        </div>
        </td>
	</tr>

	<tr>
          <th width="100" align="right">
		<?php echo $form->labelEx($model,'totalFee'); ?>
        </th>
        <td >
        <div class="row">
		<?php echo $form->textField($model,'totalFee',array('size'=>10,'maxlength'=>10)); ?>
		<?php echo $form->error($model,'totalFee'); ?>
        </div>
        </td>
	</tr>

	<tr>
          <th width="100" align="right">
		<?php echo $form->labelEx($model,'totalNum'); ?>
        </th>
        <td >
        <div class="row">
		<?php echo $form->textField($model,'totalNum'); ?>
		<?php echo $form->error($model,'totalNum'); ?>
        </div>
        </td>
	</tr>

	<tr>
          <th width="100" align="right">
		<?php echo $form->labelEx($model,'userId'); ?>
        </th>
        <td >
        <div class="row">
		<?php echo $form->textField($model,'userId',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'userId'); ?>
        </div>
        </td>
	</tr>

	<tr>
          <th width="100" align="right">
		<?php echo $form->labelEx($model,'userNumber'); ?>
        </th>
        <td >
        <div class="row">
		<?php echo $form->textField($model,'userNumber',array('size'=>20,'maxlength'=>20)); ?>
		<?php echo $form->error($model,'userNumber'); ?>
        </div>
        </td>
	</tr>

	<tr>
          <th width="100" align="right">
		<?php echo $form->labelEx($model,'userType'); ?>
        </th>
        <td >
        <div class="row">
		<?php echo $form->textField($model,'userType'); ?>
		<?php echo $form->error($model,'userType'); ?>
        </div>
        </td>
	</tr>

	<tr>
          <th width="100" align="right">
		<?php echo $form->labelEx($model,'zkPrice'); ?>
        </th>
        <td >
        <div class="row">
		<?php echo $form->textField($model,'zkPrice',array('size'=>10,'maxlength'=>10)); ?>
		<?php echo $form->error($model,'zkPrice'); ?>
        </div>
        </td>
	</tr>

	<tr>
          <th width="100" align="right">
		<?php echo $form->labelEx($model,'zkRate'); ?>
        </th>
        <td >
        <div class="row">
		<?php echo $form->textField($model,'zkRate',array('size'=>10,'maxlength'=>10)); ?>
		<?php echo $form->error($model,'zkRate'); ?>
        </div>
        </td>
	</tr>

	<tr>
          <th width="100" align="right">
		<?php echo $form->labelEx($model,'zkType'); ?>
        </th>
        <td >
        <div class="row">
		<?php echo $form->textField($model,'zkType',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'zkType'); ?>
        </div>
        </td>
	</tr>

	<tr>
          <th width="100" align="right">
		<?php echo $form->labelEx($model,'addtime'); ?>
        </th>
        <td >
        <div class="row">
		<?php echo $form->textField($model,'addtime'); ?>
		<?php echo $form->error($model,'addtime'); ?>
        </div>
        </td>
	</tr>

	<tr>
          <th width="100" align="right">
		<?php echo $form->labelEx($model,'updtime'); ?>
        </th>
        <td >
        <div class="row">
		<?php echo $form->textField($model,'updtime'); ?>
		<?php echo $form->error($model,'updtime'); ?>
        </div>
        </td>
	</tr>

</tbody>
      <tfoot>
        <tr class="title">
          <td colspan="2"><a buttype="submit" href="javascript:void(0)" class="button"><span>提交</span></a><a url="<?php echo $this->createUrl('index');?>" buttype="link" href="javascript:void(0)" class="button"><span>返回</span></a></td>
        </tr>
      </tfoot>
    </table>
	

<?php $this->endWidget(); ?>

</div>