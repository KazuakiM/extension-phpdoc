<?php

/**
 * CairoHintMetrics.
 * Specifies whether to hint font metrics; hinting font metrics means quantizing them so that they are integer values in device space. Doing this improves the consistency of letter and line spacing, however it also means that text will be laid out differently at different zoom factors.
 *
 * @copyright [Copyright](http://php.net/manual/cc.license.php) by the PHP Documentation Group is licensed under [CC by 3.0 or later](http://creativecommons.org/licenses/by/3.0/).
 *
 * @see http://php.net/manual/en/class.cairohintmetrics.php
 */
class CairoHintMetrics
{
    const METRICS_DEFAULT = 0;
    const METRICS_OFF = 1;
    const METRICS_ON = 2;
}
