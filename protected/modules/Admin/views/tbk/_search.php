
<div class="form" id="tbk-grid-search-form-form">

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
          <th width="100" align="right"><span class="row"><?php echo $form->label($model,'auctionId'); ?>
</span></th>
        <td >
        <div class="row">
		
		
		<?php echo $form->textField($model,'auctionId',array('size'=>20,'maxlength'=>20)); ?>
		</div>
        </td>

	</tr>
	<tr>
          <th width="100" align="right"><span class="row"><?php echo $form->label($model,'auctionType'); ?>
</span></th>
        <td >
        <div class="row">
		
		
		<?php echo $form->textField($model,'auctionType',array('size'=>60,'maxlength'=>255)); ?>
		</div>
        </td>

	</tr>
	<tr>
          <th width="100" align="right"><span class="row"><?php echo $form->label($model,'auctionUrl'); ?>
</span></th>
        <td >
        <div class="row">
		
		
		<?php echo $form->textField($model,'auctionUrl',array('size'=>60,'maxlength'=>255)); ?>
		</div>
        </td>

	</tr>
	<tr>
          <th width="100" align="right"><span class="row"><?php echo $form->label($model,'biz30day'); ?>
</span></th>
        <td >
        <div class="row">
		
		
		<?php echo $form->textField($model,'biz30day'); ?>
		</div>
        </td>

	</tr>
	<tr>
          <th width="100" align="right"><span class="row"><?php echo $form->label($model,'calCommission'); ?>
</span></th>
        <td >
        <div class="row">
		
		
		<?php echo $form->textField($model,'calCommission',array('size'=>10,'maxlength'=>10)); ?>
		</div>
        </td>

	</tr>
	<tr>
          <th width="100" align="right"><span class="row"><?php echo $form->label($model,'commentCount'); ?>
</span></th>
        <td >
        <div class="row">
		
		
		<?php echo $form->textField($model,'commentCount'); ?>
		</div>
        </td>

	</tr>
	<tr>
          <th width="100" align="right"><span class="row"><?php echo $form->label($model,'commission'); ?>
</span></th>
        <td >
        <div class="row">
		
		
		<?php echo $form->textField($model,'commission'); ?>
		</div>
        </td>

	</tr>
	<tr>
          <th width="100" align="right"><span class="row"><?php echo $form->label($model,'commissionMoney'); ?>
</span></th>
        <td >
        <div class="row">
		
		
		<?php echo $form->textField($model,'commissionMoney',array('size'=>60,'maxlength'=>255)); ?>
		</div>
        </td>

	</tr>
	<tr>
          <th width="100" align="right"><span class="row"><?php echo $form->label($model,'commissionRatePercent'); ?>
</span></th>
        <td >
        <div class="row">
		
		
		<?php echo $form->textField($model,'commissionRatePercent'); ?>
		</div>
        </td>

	</tr>
	<tr>
          <th width="100" align="right"><span class="row"><?php echo $form->label($model,'nick'); ?>
</span></th>
        <td >
        <div class="row">
		
		
		<?php echo $form->textField($model,'nick',array('size'=>60,'maxlength'=>255)); ?>
		</div>
        </td>

	</tr>
	<tr>
          <th width="100" align="right"><span class="row"><?php echo $form->label($model,'pictUrl'); ?>
</span></th>
        <td >
        <div class="row">
		
		
		<?php echo $form->textField($model,'pictUrl',array('size'=>60,'maxlength'=>255)); ?>
		</div>
        </td>

	</tr>
	<tr>
          <th width="100" align="right"><span class="row"><?php echo $form->label($model,'reservePrice'); ?>
</span></th>
        <td >
        <div class="row">
		
		
		<?php echo $form->textField($model,'reservePrice',array('size'=>10,'maxlength'=>10)); ?>
		</div>
        </td>

	</tr>
	<tr>
          <th width="100" align="right"><span class="row"><?php echo $form->label($model,'shopUrl'); ?>
</span></th>
        <td >
        <div class="row">
		
		
		<?php echo $form->textField($model,'shopUrl',array('size'=>60,'maxlength'=>255)); ?>
		</div>
        </td>

	</tr>
	<tr>
          <th width="100" align="right"><span class="row"><?php echo $form->label($model,'title'); ?>
</span></th>
        <td >
        <div class="row">
		
		
		<?php echo $form->textField($model,'title',array('size'=>60,'maxlength'=>255)); ?>
		</div>
        </td>

	</tr>
	<tr>
          <th width="100" align="right"><span class="row"><?php echo $form->label($model,'totalFee'); ?>
</span></th>
        <td >
        <div class="row">
		
		
		<?php echo $form->textField($model,'totalFee',array('size'=>10,'maxlength'=>10)); ?>
		</div>
        </td>

	</tr>
	<tr>
          <th width="100" align="right"><span class="row"><?php echo $form->label($model,'totalNum'); ?>
</span></th>
        <td >
        <div class="row">
		
		
		<?php echo $form->textField($model,'totalNum'); ?>
		</div>
        </td>

	</tr>
	<tr>
          <th width="100" align="right"><span class="row"><?php echo $form->label($model,'userId'); ?>
</span></th>
        <td >
        <div class="row">
		
		
		<?php echo $form->textField($model,'userId',array('size'=>60,'maxlength'=>255)); ?>
		</div>
        </td>

	</tr>
	<tr>
          <th width="100" align="right"><span class="row"><?php echo $form->label($model,'userNumber'); ?>
</span></th>
        <td >
        <div class="row">
		
		
		<?php echo $form->textField($model,'userNumber',array('size'=>20,'maxlength'=>20)); ?>
		</div>
        </td>

	</tr>
	<tr>
          <th width="100" align="right"><span class="row"><?php echo $form->label($model,'userType'); ?>
</span></th>
        <td >
        <div class="row">
		
		
		<?php echo $form->textField($model,'userType'); ?>
		</div>
        </td>

	</tr>
	<tr>
          <th width="100" align="right"><span class="row"><?php echo $form->label($model,'zkPrice'); ?>
</span></th>
        <td >
        <div class="row">
		
		
		<?php echo $form->textField($model,'zkPrice',array('size'=>10,'maxlength'=>10)); ?>
		</div>
        </td>

	</tr>
	<tr>
          <th width="100" align="right"><span class="row"><?php echo $form->label($model,'zkRate'); ?>
</span></th>
        <td >
        <div class="row">
		
		
		<?php echo $form->textField($model,'zkRate',array('size'=>10,'maxlength'=>10)); ?>
		</div>
        </td>

	</tr>
	<tr>
          <th width="100" align="right"><span class="row"><?php echo $form->label($model,'zkType'); ?>
</span></th>
        <td >
        <div class="row">
		
		
		<?php echo $form->textField($model,'zkType',array('size'=>60,'maxlength'=>255)); ?>
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