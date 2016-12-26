<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model centigen\i18ncontent\models\Article */

$this->title = Yii::t('backend', 'Update {modelClass}: ', [
    'modelClass' => 'Article',
]) . ' ' . $model->title;
$this->params['breadcrumbs'][] = ['label' => Yii::t('backend', 'Articles'), 'url' => ['index']];
$this->params['breadcrumbs'][] = Yii::t('backend', 'Update');
?>
<div class="article-update">

    <?php echo $this->render('_form', [
        'model' => $model,
        'categories' => $categories,
    ]) ?>

</div>
