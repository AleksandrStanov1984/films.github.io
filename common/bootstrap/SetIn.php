<?php






namespace Common\bootstrap;

use Yii;
use yii\base\Application;
use yii\base\BootstrapInterface;

class SetIn implements BootstrapInterface
{
    /**
     * Bootstrap method to be called during application bootstrap stage.
     * @param Application $app the application currently running
     */
    public function bootstrap($app)
    {
        $container = Yii::$container;
    }
}