<?php

/**
 * SWFDisplayItem.
 * SWFDisplayItem.
 *
 * @copyright Copyright(http://php.net/manual/cc.license.php) by the PHP Documentation Group is licensed under CC by 3.0 or later(http://creativecommons.org/licenses/by/3.0/).
 *
 * @see http://php.net/manual/en/class.swfdisplayitem.php
 */
class SWFDisplayItem
{
    /**
     * addAction.
     * Adds this SWFAction to the given SWFSprite instance.
     *
     * @param SWFAction $action
     * @param int       $flags
     *
     * @see http://php.net/manual/en/swfdisplayitem.addaction.php
     */
    public function addAction(SWFAction $action, int $flags): void
    {
    }

    /**
     * addColor.
     * Adds the given color to this item's color transform.
     *
     * @param int $red
     * @param int $green
     * @param int $blue
     * @param int $a     (optional)
     *
     * @see http://php.net/manual/en/swfdisplayitem.addcolor.php
     */
    public function addColor(int $red, int $green, int $blue, int $a): void
    {
    }

    /**
     * endMask.
     * Another way of defining a MASK layer.
     *
     *
     * @see http://php.net/manual/en/swfdisplayitem.endmask.php
     */
    public function endMask(): void
    {
    }

    /**
     * getRot.
     * Description.
     *
     * @return float
     *
     * @see http://php.net/manual/en/swfdisplayitem.getrot.php
     */
    public function getRot(): float
    {
    }

    /**
     * getX.
     * Description.
     *
     * @return float
     *
     * @see http://php.net/manual/en/swfdisplayitem.getx.php
     */
    public function getX(): float
    {
    }

    /**
     * getXScale.
     * Description.
     *
     * @return float
     *
     * @see http://php.net/manual/en/swfdisplayitem.getxscale.php
     */
    public function getXScale(): float
    {
    }

    /**
     * getXSkew.
     * Description.
     *
     * @return float
     *
     * @see http://php.net/manual/en/swfdisplayitem.getxskew.php
     */
    public function getXSkew(): float
    {
    }

    /**
     * getY.
     * Description.
     *
     * @return float
     *
     * @see http://php.net/manual/en/swfdisplayitem.gety.php
     */
    public function getY(): float
    {
    }

    /**
     * getYScale.
     * Description.
     *
     * @return float
     *
     * @see http://php.net/manual/en/swfdisplayitem.getyscale.php
     */
    public function getYScale(): float
    {
    }

    /**
     * getYSkew.
     * Description.
     *
     * @return float
     *
     * @see http://php.net/manual/en/swfdisplayitem.getyskew.php
     */
    public function getYSkew(): float
    {
    }

    /**
     * move.
     * Moves object in relative coordinates.
     *
     * @param float $dx
     * @param float $dy
     *
     * @see http://php.net/manual/en/swfdisplayitem.move.php
     */
    public function move(float $dx, float $dy): void
    {
    }

    /**
     * moveTo.
     * Moves object in global coordinates.
     *
     * @param float $x
     * @param float $y
     *
     * @see http://php.net/manual/en/swfdisplayitem.moveto.php
     */
    public function moveTo(float $x, float $y): void
    {
    }

    /**
     * multColor.
     * Multiplies the item's color transform.
     *
     * @param float $red
     * @param float $green
     * @param float $blue
     * @param float $a     (optional)
     *
     * @see http://php.net/manual/en/swfdisplayitem.multcolor.php
     */
    public function multColor(float $red, float $green, float $blue, float $a): void
    {
    }

    /**
     * remove.
     * Removes the object from the movie.
     *
     *
     * @see http://php.net/manual/en/swfdisplayitem.remove.php
     */
    public function remove(): void
    {
    }

    /**
     * rotate.
     * Rotates in relative coordinates.
     *
     * @param float $angle
     *
     * @see http://php.net/manual/en/swfdisplayitem.rotate.php
     */
    public function rotate(float $angle): void
    {
    }

    /**
     * rotateTo.
     * Rotates the object in global coordinates.
     *
     * @param float $angle
     *
     * @see http://php.net/manual/en/swfdisplayitem.rotateto.php
     */
    public function rotateTo(float $angle): void
    {
    }

    /**
     * scale.
     * Scales the object in relative coordinates.
     *
     * @param float $dx
     * @param float $dy
     *
     * @see http://php.net/manual/en/swfdisplayitem.scale.php
     */
    public function scale(float $dx, float $dy): void
    {
    }

    /**
     * scaleTo.
     * Scales the object in global coordinates.
     *
     * @param float $x
     * @param float $y (optional)
     *
     * @see http://php.net/manual/en/swfdisplayitem.scaleto.php
     */
    public function scaleTo(float $x, float $y): void
    {
    }

    /**
     * setDepth.
     * Sets z-order.
     *
     * @param int $depth
     *
     * @see http://php.net/manual/en/swfdisplayitem.setdepth.php
     */
    public function setDepth(int $depth): void
    {
    }

    /**
     * setMaskLevel.
     * Defines a MASK layer at level.
     *
     * @param int $level
     *
     * @see http://php.net/manual/en/swfdisplayitem.setmasklevel.php
     */
    public function setMaskLevel(int $level): void
    {
    }

    /**
     * setMatrix.
     * Sets the item's transform matrix.
     *
     * @param float $a
     * @param float $b
     * @param float $c
     * @param float $d
     * @param float $x
     * @param float $y
     *
     * @see http://php.net/manual/en/swfdisplayitem.setmatrix.php
     */
    public function setMatrix(float $a, float $b, float $c, float $d, float $x, float $y): void
    {
    }

    /**
     * setName.
     * Sets the object's name.
     *
     * @param string $name
     *
     * @see http://php.net/manual/en/swfdisplayitem.setname.php
     */
    public function setName(string $name): void
    {
    }

    /**
     * setRatio.
     * Sets the object's ratio.
     *
     * @param float $ratio
     *
     * @see http://php.net/manual/en/swfdisplayitem.setratio.php
     */
    public function setRatio(float $ratio): void
    {
    }

    /**
     * skewX.
     * Sets the X-skew.
     *
     * @param float $ddegrees
     *
     * @see http://php.net/manual/en/swfdisplayitem.skewx.php
     */
    public function skewX(float $ddegrees): void
    {
    }

    /**
     * skewXTo.
     * Sets the X-skew.
     *
     * @param float $degrees
     *
     * @see http://php.net/manual/en/swfdisplayitem.skewxto.php
     */
    public function skewXTo(float $degrees): void
    {
    }

    /**
     * skewY.
     * Sets the Y-skew.
     *
     * @param float $ddegrees
     *
     * @see http://php.net/manual/en/swfdisplayitem.skewy.php
     */
    public function skewY(float $ddegrees): void
    {
    }

    /**
     * skewYTo.
     * Sets the Y-skew.
     *
     * @param float $degrees
     *
     * @see http://php.net/manual/en/swfdisplayitem.skewyto.php
     */
    public function skewYTo(float $degrees): void
    {
    }
}
