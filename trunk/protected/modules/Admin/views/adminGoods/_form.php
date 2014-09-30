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
		<?php echo $form->labelEx($model,'name'); ?>
        </th>
        <td >
        <div class="row">
		<?php echo $form->textField($model,'name',array('size'=>160,'maxlength'=>250)); ?>
		<?php echo $form->error($model,'name'); ?>
        </div>
        </td>
	</tr>

	<tr>
          <th width="100" align="right">
		<?php echo $form->labelEx($model,'price'); ?>
        </th>
        <td >
        <div class="row">
		<?php echo $form->textField($model,'price',array('size'=>10,'maxlength'=>10)); ?>
		<?php echo $form->error($model,'price'); ?>
        </div>
        </td>
	</tr>

	<tr>
          <th width="100" align="right">
		<?php echo $form->labelEx($model,'url'); ?>
        </th>
        <td >
        <div class="row">
		<?php echo $form->textArea($model,'url',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'url'); ?>
        </div>
        </td>
	</tr>

	<tr>
          <th width="100" align="right">
		<?php echo $form->labelEx($model,'sold'); ?>
        </th>
        <td >
        <div class="row">
		<?php echo $form->textField($model,'sold'); ?>
		<?php echo $form->error($model,'sold'); ?>
        </div>
        </td>
	</tr>

	<tr>
          <th width="100" align="right">
		<?php echo $form->labelEx($model,'source'); ?>
        </th>
        <td >
        <div class="row">
		<?php echo $form->textField($model,'source'); ?>
		<?php echo $form->error($model,'source'); ?>
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

	<tr>
          <th width="100" align="right">
		<?php echo $form->labelEx($model,'sourceurl'); ?>
        </th>
        <td >
        <div class="row">
		<?php echo $form->textField($model,'sourceurl',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'sourceurl'); ?>
        </div>
        </td>
	</tr>

	<tr>
          <th width="100" align="right">
		<?php echo $form->labelEx($model,'tburl'); ?>
        </th>
        <td >
        <div class="row">
		<?php echo $form->textField($model,'tburl',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'tburl'); ?>
        </div>
        </td>
	</tr>

	<tr>
          <th width="100" align="right">
		<?php echo $form->labelEx($model,'desct'); ?>
        </th>
        <td >
        <div class="row">
		<?php echo $form->textArea($model,'desct',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'desct'); ?>
        </div>
        </td>
	</tr>

	<tr>
          <th width="100" align="right">
		<?php echo $form->labelEx($model,'keywords'); ?>
        </th>
        <td >
        <div class="row">
		<?php echo $form->textField($model,'keywords',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'keywords'); ?>
        </div>
        </td>
	</tr>

	<tr>
          <th width="100" align="right">
		<?php echo $form->labelEx($model,'descr'); ?>
        </th>
        <td >
        <div class="row">
		<?php echo $form->textField($model,'descr',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'descr'); ?>
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