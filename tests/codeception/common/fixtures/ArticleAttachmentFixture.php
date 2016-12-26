<?php
namespace tests\codeception\common\fixtures;

use yii\test\ActiveFixture;

/**
 * @author Eugene Terentev <eugene@terentev.net>
 */
class ArticleAttachmentFixture extends ActiveFixture
{
    public $modelClass = 'centigen\i18ncontent\models\ArticleAttachment';
    public $depends = [
        'tests\codeception\common\fixtures\ArticleFixture'
    ];
}
