<?php
/* @var $this PymesController */
/* @var $data Pymes */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('rdate')); ?>:</b>
	<?php echo CHtml::encode($data->rdate); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('udate')); ?>:</b>
	<?php echo CHtml::encode($data->udate); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('status')); ?>:</b>
	<?php echo CHtml::encode($data->status); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('registros_id')); ?>:</b>
	<?php echo CHtml::encode($data->registros_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('consorcios_id')); ?>:</b>
	<?php echo CHtml::encode($data->consorcios_id); ?>
	<br />


</div>