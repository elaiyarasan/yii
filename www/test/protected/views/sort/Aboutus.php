<?php

Yii::app()->clientScript->registerScriptFile(Yii::app()->baseUrl.'/js/jquery.js');
 Yii::app()->clientScript->registerScriptFile(Yii::app()->baseUrl . '/js/mail.js');
  Yii::app()->clientScript->registerCssFile(Yii::app()->baseUrl . '/css/hondsontable.css');
  Yii::app()->clientScript->registerScriptFile(Yii::app()->baseUrl . '/js/hondsontable.js');

  ?>
<!-- <script src="https://cdn.jsdelivr.net/npm/handsontable@7.0.0/dist/handsontable.full.min.js"></script> -->
<!-- <link href="https://cdn.jsdelivr.net/npm/handsontable@7.0.0/dist/handsontable.full.min.css" rel="stylesheet" media="screen"> -->
<div id="example"></div>
<button onclick="clie()">load</button>
<script>
  data='';
    $(document).ready(function(){
        var Url="http://localhost/test/index.php/sort/time";
            var ma={
        'mail':'admin@gmail.com',
    }

$.ajax({
        url:'http://localhost/test/index.php/sort/ema',
        type:'POST',
        data:ma,
        dataType: "json",
        success:ge
    });
    });
function ge(data){
    char=[];

   char.push(['','tamil','english','maths','science','social']);
for(i=0;i<data.length;i++){
    char.push([data[i].id,data[i].tamil,data[i].english,data[i].maths,data[i].science,data[i].social]);
}
    var data = char;

var container = document.getElementById('example');
var hot = new Handsontable(container, {
  data: data,
  rowHeaders: true,
  colHeaders: true,
  filters: true,
  dropdownMenu: true
});
    console.log(data);   
   // l= JSON.stringify($(".htCore").data("handsontable").getSourceData());
$('#example').handsontable(hot);
 var result = $('#example').data('handsontable').getData();
 console.log(result);
        }
        function clie(hot){
        $('#example').handsontable(hot);
 var result = $('#example').data('handsontable').getData();
}
    </script>

  <script src="https://code.highcharts.com/highcharts.js"></script>
<script src="https://code.highcharts.com/modules/data.js"></script>
<script src="https://code.highcharts.com/modules/drilldown.js"></script>
<h2>Hi this is the first page created by you!...</h2>

<?php echo CHtml::button('Show', array("onclick"=>"js:dat();")); ?>
<div id="container" style="min-width: 310px; height: 400px; max-width: 600px; margin: 0 auto;display:none"></div>

<?php
$this->beginWidget('zii.widgets.jui.CJuiDialog', array(
    'id' => 'popup',
    // additional javascript options for the dialog plugin
    'options' => array(
        'title' => 'SSLC MARKS',
        'autoOpen' => false,
        'width' => '500px',
        'height' => '300',
        'resizable' => false,
        'modal' => true
    ),
));


$this->endWidget();
?>








<script>  


var $container = $("#example1");
var $console = $("#example1console");
var $parent = $container.parent();
var autosaveNotification;
$container.handsontable({
  startRows: 8,
  startCols: 6,
  rowHeaders: true,
  colHeaders: true,
  minSpareRows: 1,
  contextMenu: true,
  onChange: function (change, source) {
    if (source === 'loadData') {
      return; //don't save this change
    }
    if ($parent.find('input[name=autosave]').is(':checked')) {
      clearTimeout(autosaveNotification);
      $.ajax({
        url: "json/save.json",
        dataType: "json",
        type: "POST",
        data: change, //contains changed cells' data
        complete: function (data) {
          $console.text('Autosaved (' + change.length + ' cell' + (change.length > 1 ? 's' : '') + ')');
          autosaveNotification = setTimeout(function () {
            $console.text('Changes will be autosaved');
          }, 1000);
        }
      });
    }
  }
});
var handsontable = $container.data('handsontable');

$parent.find('button[name=load]').click(function () {
  $.ajax({
    url: "json/load.json",
    dataType: 'json',
    type: 'GET',
    success: function (res) {
      handsontable.loadData(res.data);
      $console.text('Data loaded');
    }
  });
});

$parent.find('button[name=save]').click(function () {
  $.ajax({
    url: "json/save.json",
    data: {"data": handsontable.getData()}, //returns all cells' data
    dataType: 'json',
    type: 'POST',
    success: function (res) {
      if (res.result === 'ok') {
        $console.text('Data saved');
      }
      else {
        $console.text('Save error');
      }
    },
    error: function () {
      $console.text('Save error. POST method is not allowed on GitHub Pages. Run this example on your own server to see the success message.');
    }
  });
});

$parent.find('input[name=autosave]').click(function () {
  if ($(this).is(':checked')) {
    $console.text('Changes will be autosaved');
  }
  else {
    $console.text('Changes will not be autosaved');
  }
});
</script>