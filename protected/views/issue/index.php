<?php
/* @var $this IssueController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Issues',
);

$this->menu=array(
    array('label'=>'List Projects', 'url'=>array('project/index')),
);
?>

<h1>Issues for <?php echo $projectName ?> </h1>

<?php 


$this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
