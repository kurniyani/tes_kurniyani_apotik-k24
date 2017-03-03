
		<div class="row">
          <div class="col-lg-12">
		  <?php if($model->isNewRecord){ ?>
            <h3>Create New Login User</h3>
		  <?php }else{ ?>
		    <h3>Edit Login User</h3>
		  <?php } ?>
            <hr />
          </div>
        </div><!-- /.row -->	

	<div class="row" style="padding-left:15px;">
	<?php $form=$this->beginWidget('CActiveForm', array(
		'id'=>'login_user',
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
			<?php echo $form->textField($model,'nama',array('size'=>50,'maxlength'=>10,'class'=>'form-control', 'style'=>'max-width:30%;')); ?>
			<?php echo $form->error($model,'nama'); ?>
		</div>
		
		<div class="form-group">
			<?php echo $form->labelEx($model,'password'); ?>
			<?php echo $form->passwordField($model,'password',array('size'=>50,'maxlength'=>50,'class'=>'form-control', 'style'=>'max-width:30%;')); ?>
			<?php echo $form->error($model,'password'); ?>
		</div>

		<div class="form-group">
			<?php echo $form->hiddenField($model,'id',array('class'=>'form-control', 'id'=>'iduser')); ?>
		</div>
		<div class="form-group">

				<?php echo CHtml::ResetButton($model->isNewRecord ? 'Cancel' : 'Cancel',array('class'=>'btn btn-danger','style'=>'padding:10px 30px')); ?>
				<?php echo CHtml::submitButton($model->isNewRecord ? 'Save' : 'Save',array('class'=>'btn btn-info','style'=>'padding:10px 30px')); ?>

		</div>
		

	</div><!-- form -->
	<?php $this->endWidget(); ?>    


              
              	
		         
		<!--/col-span-6-->