<?php
/* @var $this UserController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Users',
);

$this->menu=array(
	array('label'=>'Create User', 'url'=>array('create')),
	array('label'=>'Manage User', 'url'=>array('admin')),
);
?>

<h1>Daftar member yang telah terdaftar</h1>	
<?php 
	$this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'news-grid',
	'dataProvider'=>$dataProvider,
	'summaryText'=>'',
	'columns'=>array(
		'idUser',
		'nama_member',
		'alamat',
		'tanggalLahir',
		'email',
		),
));
?>    
