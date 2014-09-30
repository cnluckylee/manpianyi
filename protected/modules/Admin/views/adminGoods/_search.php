
<div class="form" id="goods-grid-search-form-form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>
<table width="100%" class="table_form table">
      <thead>
        <tr class="title">
          <th colspan="3"> 高级搜索 </th>
        </tr>
      </thead>
      <tbody>
		  	<tr>
          <th width="100" align="right"><span class="row"><?php echo $form->label($model,'id'); ?>
</span></th>
        <td >
        <div class="row">
		
		
		<?php echo $form->textField($model,'id'); ?>
		</div>
        </td>

	</tr>
	<tr>
          <th width="100" align="right"><span class="row"><?php echo $form->label($model,'name'); ?>
</span></th>
        <td >
        <div class="row">
		
		
		<?php echo $form->textField($model,'name',array('size'=>60,'maxlength'=>200)); ?>
		</div>
        </td>

	</tr>
	<tr>
          <th width="100" align="right"><span class="row"><?php echo $form->label($model,'price'); ?>
</span></th>
        <td >
        <div class="row">
		
		
		<?php echo $form->textField($model,'price',array('size'=>10,'maxlength'=>10)); ?>
		</div>
        </td>

	</tr>
	<tr>
          <th width="100" align="right"><span class="row"><?php echo $form->label($model,'url'); ?>
</span></th>
        <td >
        <div class="row">
		
		
		<?php echo $form->textField($model,'url',array('size'=>60,'maxlength'=>255)); ?>
		</div>
        </td>

	</tr>
	<tr>
          <th width="100" align="right"><span class="row"><?php echo $form->label($model,'sold'); ?>
</span></th>
        <td >
        <div class="row">
		
		
		<?php echo $form->textField($model,'sold'); ?>
		</div>
        </td>

	</tr>
	<tr>
          <th width="100" align="right"><span class="row"><?php echo $form->label($model,'source'); ?>
</span></th>
        <td >
        <div class="row">
		
		
		<?php echo $form->textField($model,'source'); ?>
		</div>
        </td>

	</tr>
	<tr>
          <th width="100" align="right"><span class="row"><?php echo $form->label($model,'addtime'); ?>
</span></th>
        <td >
        <div class="row">
		
		
		<?php echo $form->textField($model,'addtime'); ?>
		</div>
        </td>

	</tr>
	<tr>
          <th width="100" align="right"><span class="row"><?php echo $form->label($model,'updtime'); ?>
</span></th>
        <td >
        <div class="row">
		
		
		<?php echo $form->textField($model,'updtime'); ?>
		</div>
        </td>

	</tr>
	<tr>
          <th width="100" align="right"><span class="row"><?php echo $form->label($model,'sourceurl'); ?>
</span></th>
        <td >
        <div class="row">
		
		
		<?php echo $form->textField($model,'sourceurl',array('size'=>60,'maxlength'=>255)); ?>
		</div>
        </td>

	</tr>
	<tr>
          <th width="100" align="right"><span class="row"><?php echo $form->label($model,'tburl'); ?>
</span></th>
        <td >
        <div class="row">
		
		
		<?php echo $form->textField($model,'tburl',array('size'=>60,'maxlength'=>255)); ?>
		</div>
        </td>

	</tr>
	<tr>
          <th width="100" align="right"><span class="row"><?php echo $form->label($model,'desct'); ?>
</span></th>
        <td >
        <div class="row">
		
		
		<?php echo $form->textArea($model,'desct',array('rows'=>6, 'cols'=>50)); ?>
		</div>
        </td>

	</tr>
	<tr>
          <th width="100" align="right"><span class="row"><?php echo $form->label($model,'keywords'); ?>
</span></th>
        <td >
        <div class="row">
		
		
		<?php echo $form->textField($model,'keywords',array('size'=>60,'maxlength'=>255)); ?>
		</div>
        </td>

	</tr>
	<tr>
          <th width="100" align="right"><span class="row"><?php echo $form->label($model,'descr'); ?>
</span></th>
        <td >
        <div class="row">
		
		
		<?php echo $form->textField($model,'descr',array('size'=>60,'maxlength'=>255)); ?>
		</div>
        </td>

	</tr>
	

    </tbody>
      <tfoot>
        <tr class="title">
          <td colspan="3">条件操作符 (<b>&lt;</b>, <b>&lt;=</b>, <b>&gt;</b>, <b>&gt;=</b>, <b>&lt;&gt;</b>
	或 <b>=</b>) 。</td>
        </tr>
      </tfoot>
    </table>
	

<?php $this->endWidget(); ?>

</div><!-- search-form -->