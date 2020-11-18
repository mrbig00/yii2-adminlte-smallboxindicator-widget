<?php
/**
 * @package    yii2-adminlte-smallboxindicator-widget
 * @author     Zoltan Szanto <mrbig00@gmail.com>
 * @copyright  2020 Zoltán Szántó
 *
 * @var $this                 View
 * @var $colorClass           string
 * @var $value                int|string
 * @var $description          string
 * @var $linkText             string
 * @var $linkTarget           string
 * @var $icon                 string
 */

use yii\web\View;

?>

<div class="small-box <?= $colorClass ?>">
    <div class="inner">
        <h3><?= $value ?></h3>

        <p><?= $description ?></p>
    </div>
    <div class="icon">
        <?= $icon ?>
    </div>
    <a href="<?= $linkTarget ?>" class="small-box-footer">
        <?= $linkText ?> <i class="fas fa-arrow-circle-right"></i>
    </a>
</div>
