<?php

use yii\helpers\Html;
use yii\widgets\LinkPager;

?>
    <h1>Countries</h1>
    <ul>
        <?php foreach ($countries as $country): ?>
            <li>
                <?= Html::encode("{$country->code} ({$country->name})") ?>:
                <?= $country->population ?>
            </li>
        <?php endforeach; ?>
    </ul>
    The controller ID is: <?= $this->context->id ?>


  <p>
      server port <?= Yii::$app->request->serverPort; ?>
  </p>

<?= LinkPager::widget(['pagination' => $pagination]) ?>

<?= \app\components\HelloWidget::widget(['message' => 'Hello, Good Morning!!']);
