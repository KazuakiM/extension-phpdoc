<?php

/**
 * UI\Draw\Pen.
 * The Pen is passed to the Area Draw event handler, it is used for clipping, filling, stroking, and writing to Draw Paths.
 *
 * @author Kazuaki MABUCHI
 * @copyright [Copyright](http://php.net/manual/cc.license.php) by the PHP Documentation Group is licensed under [CC by 3.0 or later](http://creativecommons.org/licenses/by/3.0/).
 *
 * @see http://php.net/manual/en/class.ui-draw-pen.php
 */

namespace UI\Draw;

final class Pen
{
    /**
     * clip.
     * Clip a Path.
     *
     * @param UI\Draw\Path $path
     *
     * @see http://php.net/manual/en/ui-draw-pen.clip.php
     */
    public function clip(UI\Draw\Path $path): void
    {
    }

    /**
     * fill.
     * Fill a Path.
     *
     * @param UI\Draw\Path                    $path
     * @param UI\Draw\Brush|UI\Draw\Color|int $with
     *
     * @see http://php.net/manual/en/ui-draw-pen.fill.php
     */
    public function fill(UI\Draw\Path $path, mixed $with): void
    {
    }

    /**
     * restore.
     * Restore.
     *
     *
     * @see http://php.net/manual/en/ui-draw-pen.restore.php
     */
    public function restore(): void
    {
    }

    /**
     * save.
     * Save.
     *
     *
     * @see http://php.net/manual/en/ui-draw-pen.save.php
     */
    public function save(): void
    {
    }

    /**
     * stroke.
     * Stroke a Path.
     *
     * @param UI\Draw\Path                    $path
     * @param UI\Draw\Brush|UI\Draw\Color|int $with
     * @param UI\Draw\Stroke                  $stroke
     *
     * @see http://php.net/manual/en/ui-draw-pen.stroke.php
     */
    public function stroke(UI\Draw\Path $path, mixed $with, UI\Draw\Stroke $stroke): void
    {
    }

    /**
     * transform.
     * Matrix Transform.
     *
     * @param UI\Draw\Matrix $matrix
     *
     * @see http://php.net/manual/en/ui-draw-pen.transform.php
     */
    public function transform(UI\Draw\Matrix $matrix): void
    {
    }

    /**
     * write.
     * Draw Text at Point.
     *
     * @param UI\Point            $point
     * @param UI\Draw\Text\Layout $layout
     *
     * @see http://php.net/manual/en/ui-draw-pen.write.php
     */
    public function write(UI\Point $point, UI\Draw\Text\Layout $layout): void
    {
    }
}
