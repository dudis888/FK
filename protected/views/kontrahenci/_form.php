<?php
/* @var $this KontrahenciController */
/* @var $model Kontrahenci */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'kontrahenci-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'symbol'); ?>
		<?php echo $form->textField($model,'symbol',array('size'=>10,'maxlength'=>10)); ?>
		<?php echo $form->error($model,'symbol'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'nazwa'); ?>
		<?php echo $form->textField($model,'nazwa',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'nazwa'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'nip'); ?>
		<?php echo $form->textField($model,'nip',array('size'=>13,'maxlength'=>13)); ?>
		<?php echo $form->error($model,'nip'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'adres'); ?>
		<?php echo $form->textField($model,'adres',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'adres'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'miejscowosc'); ?>
		<?php echo $form->textField($model,'miejscowosc',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'miejscowosc'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->