<?php

use yii\helpers\Html;
use yii\grid\GridView;
use backend\models\User;
/* @var $this yii\web\View */
/* @var $searchModel backend\models\StocksRecordSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Stocks Records';
$this->params['breadcrumbs'][] = $this->title;
?>
<body background="../images/background5.png">
<div class="stocks-record-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Stocks Record', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'description',
           
            ['attribute' => 'user_id',
            'label' => 'Created By',
            'value' => 'user.username',
            'filter' => yii\helpers\ArrayHelper::map(backend\models\User::find()-> all(),'id','username')],

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>
