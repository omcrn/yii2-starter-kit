<?php
/* @var $this yii\web\View */
/* @var $model centigen\i18ncontent\models\Article */
/* @var $categories centigen\i18ncontent\models\ArticleCategory[] */

$this->title = Yii::t('backend', 'Create {modelClass}', [
    'modelClass' => 'Article',
]);
$this->params['breadcrumbs'][] = ['label' => Yii::t('backend', 'Articles'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="article-create">

    <?php echo $this->render('_form', [
        'model' => $model,
        'categories' => $categories
    ]) ?>

</div>
