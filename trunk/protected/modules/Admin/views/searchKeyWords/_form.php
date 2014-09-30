<div class="form">
<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'goods-form',
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
		<?php echo $form->labelEx($model,'keywords'); ?>
        </th>
        <td >
        <div class="row">
		<?php echo $form->textField($model,'keywords',array('size'=>160,'maxlength'=>250)); ?>
		<?php echo $form->error($model,'keywords'); ?>
        </div>
        </td>
	</tr>

	<tr>
          <th width="100" align="right">
		<?php echo $form->labelEx($model,'searchcount'); ?>
        </th>
        <td >
        <div class="row">
		<?php echo $form->textField($model,'searchcount',array('size'=>10,'maxlength'=>10)); ?>
		<?php echo $form->error($model,'searchcount'); ?>
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