
<h2>This is Dashboard</h2>
<?php

 Yii::app()->clientScript->registerScriptFile(Yii::app()->baseUrl . '/js/order.js');
  Yii::app()->clientScript->registerScriptFile(Yii::app()->baseUrl.'/js/jquery.js');

echo CHtml::radioButton('type', '', array("onclick"=>"alerta(this.value,'ch')",'value'=>'PLANT','style' => "margin-bottom:4px", 'id' => "pla",));
 echo CHtml::radioButton('type', '', array("onclick"=>"alerta(this.value,'ch')",'value'=>'NEWL','style' => "margin-bottom:4px", 'id' => "onepla",));

?>
<div id="source" style="display:none;">
   <?php
   echo 'k';
//     Yii::app()->clientScript->registerScriptFile(Yii::app()->baseUrl . '/js/order.js');
// echo CHtml::radioButton('po', '', array("onclick"=>"dob(this.value,'ePO')",'value'=>'radio','style' => "margin-bottom:4px", 'id' => "pla",));
//  echo CHtml::radioButton('po', '', array("onclick"=>"dob(this.value,'ePO')",'value'=>'dobdob','style' => "margin-bottom:4px", 'id' => "onepla",));
//  echo CHtml::radioButton('po', '', array("onclick"=>"dob(this.value,'ePO')",'value'=>'dob','style' => "margin-bottom:4px", 'id' => "onepla",));
 ?>
</div>