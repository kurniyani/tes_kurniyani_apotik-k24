
		<div class="row">
          <div class="col-lg-12">
		  <?php if($model->isNewRecord){ ?>
            <h3>Create New Member</h3>
		  <?php }else{ ?>
		    <h3>Edit Member</h3>
		  <?php } ?>
            <hr />
          </div>
        </div><!-- /.row -->	

	<div class="row" style="padding-left:15px;">
	<?php $form=$this->beginWidget('CActiveForm', array(
		'id'=>'member',
		'enableAjaxValidation'=>false,
	)); ?>
		<?php if($model->hasErrors()){ ?>
		<div class="alert alert-danger fade in">
		  <button type="button" class="close" data-dismiss="alert"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
		  <?php echo $form->errorSummary($model); ?>
		</div>
		<?php } ?>
		<div class="form-group">
			<?php echo $form->labelEx($model,'nama'); ?>
			<?php echo $form->textField($model,'nama',array('size'=>50,'maxlength'=>25,'class'=>'form-control', 'style'=>'max-width:30%;')); ?>
			<?php echo $form->error($model,'nama'); ?>
		</div>
		
		<div class="form-group">
			<?php echo $form->labelEx($model,'alamat'); ?>
			<?php echo $form->textField($model,'alamat',array('size'=>50,'maxlength'=>50,'class'=>'form-control', 'style'=>'max-width:30%;')); ?>
			<?php echo $form->error($model,'alamat'); ?>
		</div>
		<div class="form-group">
			<?php
			echo $form->labelEx($model,'tanggal_lahir');
				 $this->widget('zii.widgets.jui.CJuiDatePicker', array(
					'model'=>$model,
					'attribute'=>'tanggal_lahir',
							 'value'=>$model->tanggal_lahir,
					//additional javascript options for the date picker plugin
					'options'=>array(
						'dateFormat'=>'yy-mm-dd',
						'showAnim'=>'fold',
									'debug'=>true,
						'datepickerOptions'=>array('changeMonth'=>true, 'changeYear'=>true),
					),
					'htmlOptions'=>array('style'=>'max-width:30%;','class'=>'form-control'),
				 ));
				
			echo $form->error($model,'tanggal_lahir');
			?>
		</div>
		<div class="form-group">
			<?php echo $form->labelEx($model,'email'); ?>
			<?php echo $form->textField($model,'email',array('size'=>50,'maxlength'=>50,'class'=>'form-control', 'style'=>'max-width:30%;')); ?>
			<?php echo $form->error($model,'email'); ?>
		</div>
		<div class="form-group">
			<?php echo $form->labelEx($model,'no_telp'); ?>
			<?php echo $form->textField($model,'no_telp',array('size'=>50,'maxlength'=>50,'class'=>'form-control', 'style'=>'max-width:30%;')); ?>
			<?php echo $form->error($model,'no_telp'); ?>
		</div>
		<div class="form-group">
			<?php echo $form->hiddenField($model,'id',array('class'=>'form-control', 'id'=>'idmember')); ?>
		</div>
		<div class="form-group">

				<?php echo CHtml::ResetButton($model->isNewRecord ? 'Cancel' : 'Cancel',array('class'=>'btn btn-danger','style'=>'padding:10px 30px')); ?>
				<?php echo CHtml::submitButton($model->isNewRecord ? 'Save' : 'Save',array('class'=>'btn btn-info','style'=>'padding:10px 30px')); ?>

		</div>
		

	</div><!-- form -->
	<?php $this->endWidget(); ?>    


              
              	
		         
		<!--/col-span-6-->