<?php
/**
 * @package    yii2-adminlte-smallboxindicator-widget
 * @author     Zoltan Szanto <mrbig00@gmail.com>
 * @copyright  2020 Zoltán Szántó
 */

namespace mrbig00\AdminLte3\Widgets;

use yii\base\Widget;

/**
 * Class SmallBoxWidget
 *
 * @package App\Modules\Admin\Widgets
 */
class SmallBoxIndicatorWidget extends Widget
{
    /**
     * @var string Background and text color class
     * @see https://adminlte.io/themes/v3/pages/UI/general.html
     */
    public $colorClass = 'bg-info';

    /**
     * The value of the indicator
     *
     * @var int|string
     */
    public $value = 0;

    /**
     * Description of the indicator
     *
     * @var string
     */
    public $description = "Description";

    public $linkText = 'More info';
    public $linkTarget;

    public $icon = '<i class="ion ion-stats-bars"></i>';

    public function run()
    {
        return
            $this->render(
                "@vendor/mrbig00/yii2-adminlte-smallboxindicator-widget/templates/main",
                [
                    'colorClass' => $this->colorClass,
                    'value' => $this->value,
                    'description' => $this->description,
                    'linkText' => $this->linkText,
                    'linkTarget' => $this->linkTarget,
                    'icon' => $this->icon,
                ]
            );
    }
}
