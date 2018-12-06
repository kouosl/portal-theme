<?php

namespace kouosl\theme;

use Yii;

class Module extends \yii\base\Module
{
    public function init()
    {
        parent::init();
        $this->registerTranslations();
    }
    
    public function registerTranslations()
    {
        Yii::$app->i18n->translations['theme/*'] = [
            'class' => 'yii\i18n\PhpMessageSource',
            'sourceLanguage' => 'en-US',
            'basePath' => '@kouosl/theme/messages',
            'fileMap' => [
                'theme/theme' => 'theme.php',
            ],
        ];
    }
}
