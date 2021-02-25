<?php
/**
 * Contact plugin for Craft CMS 3.x
 *
 * Demo Plugin
 *
 * @link      https://lujayninfoways.com
 * @copyright Copyright (c) 2021 CP
 */

namespace nystudio107\contact;


use Craft;
use craft\base\Plugin;
use craft\services\Plugins;
use craft\events\PluginEvent;

use yii\base\Event;

/**
 * Class Contact
 *
 * @author    CP
 * @package   Contact
 * @since     1.0.0
 *
 */
class Contact extends Plugin
{
    // Static Properties
    // =========================================================================

    /**
     * @var Contact
     */
    public static $plugin;

    // Public Properties
    // =========================================================================

    /**
     * @var string
     */
    public $schemaVersion = '1.0.0';

    /**
     * @var bool
     */
    public $hasCpSettings = false;

    /**
     * @var bool
     */
    public $hasCpSection = false;

    // Public Methods
    // =========================================================================

    /**
     * @inheritdoc
     */
    public function init()
    {
        parent::init();
        self::$plugin = $this;

        Event::on(
            Plugins::class,
            Plugins::EVENT_AFTER_INSTALL_PLUGIN,
            function (PluginEvent $event) {
                if ($event->plugin === $this) {
                }
            }
        );

        Craft::info(
            Craft::t(
                'contact',
                '{name} plugin loaded',
                ['name' => $this->name]
            ),
            __METHOD__
        );
    }

    // Protected Methods
    // =========================================================================

}
