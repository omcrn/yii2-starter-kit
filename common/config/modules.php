<?php
/**
 * User: zura
 * Date: 12/26/16
 * Time: 8:14 PM
 */

return [
    'i18ncontent' => [
        'class' => 'centigen\i18ncontent\Module',
        'userClass' => 'common\models\User', //User model class. If you do not have user model, generate it from user table. Make sure this models extends \yii\db\ActiveRecord class
        'defaultLayout' => '/admin', //Default layout which will be used for rendering i18ncontent pages
        'mediaUrlPrefix' => Yii::getAlias('@storageUrl'), //In texts which may contain <img> or other media object tags (texts which come from WYSIWYG editors)
        // `$mediaUrlPrefix` strings are replaced with `$mediaUrlReplacement` string when calling `Html::encodeMediaItemUrls`
        // and vice versa when calling `Html::decodeMediaItemUrls`
        'mediaUrlReplacement' => '{{media_item_url_prefix}}' //See `$mediaUrlPrefix`
    ],
];