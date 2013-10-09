<?php
/* @var $this CandidateController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
        'Candidate Management',
);

$this->menu=array(
        array('label'=>'Create Candidate', 'url'=>array('demographics')),
);


Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
        $('.search-form').toggle();
        return false;
});
$('.search-form form').submit(function(){
        $('#users-grid').yiiGridView('update', {
                data: $(this).serialize()
        });
        return false;
});
");
?>

<h1>Candidates</h1>


<p>
You may optionally enter a comparison operator (<b>&lt;</b>, <b>&lt;=</b>, <b>&gt;</b>, <b>&gt;=</b>, <b>&lt;&gt;</b>
or <b>=</b>) at the beginning of each of your search values to specify how the comparison should be done.
</p>

<?php echo CHtml::link('Advanced Search','#',array('class'=>'search-button')); ?>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
        'model'=>$model,
	));
?>
</div><!-- search-form -->

<?php $this->widget('bootstrap.widgets.TbGridView', array(
        'id'=>'candidateDemographics-grid',
        'dataProvider'=>$model->search(),
        'filter'=>$model,
        'columns'=>array(
                'id',
                'name',
                'gender',
                array(
'class'=>'CButtonColumn',
    'template'=>'{update} {view} {delete}',
    'buttons'=>array (
        'update'=> array(
            'label'=>'',
            'imageUrl'=>'',
            'options'=>array( 'class'=>'icon-edit' ),
        ),
        'view'=>array(
            'label'=>'',
            'imageUrl'=>'',
            'options'=>array( 'class'=>'icon-search' ),
        ),
        'delete'=>array(
            'label'=>'',
            'imageUrl'=>'',
            'options'=>array( 'class'=>'icon-remove' ),
        ),
    ),
                ),
        ),
)); ?>


<?php $this->widget('bootstrap.widgets.TbListView', array(
        'dataProvider'=>$dataProvider,
        'itemView'=>'_view',
)); ?>

