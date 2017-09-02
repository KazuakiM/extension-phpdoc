<?php

/**
 * SWFMorph.
 * The methods here are sort of weird. It would make more sense to just have newSWFMorph(shape1, shape2);, but as things are now, shape2 needs to know that it's the second part of a morph. (This, because it starts writing its output as soon as it gets drawing commands- if it kept its own description of its shapes and wrote on completion this and some other things would be much easier.).
 *
 * @author Kazuaki MABUCHI
 * @copyright [Copyright](http://php.net/manual/cc.license.php) by the PHP Documentation Group is licensed under [CC by 3.0 or later](http://creativecommons.org/licenses/by/3.0/).
 *
 * @see http://php.net/manual/en/class.swfmorph.php
 */
class SWFMorph
{
    /**
     * __construct.
     * Creates a new SWFMorph object.
     *
     * @see http://php.net/manual/en/swfmorph.construct.php
     */
    public function __construct()
    {
    }

    /**
     * getShape1.
     * Gets a handle to the starting shape.
     *
     * @return SWFShape
     *
     * @see http://php.net/manual/en/swfmorph.getshape1.php
     */
    public function getShape1(): SWFShape
    {
    }

    /**
     * getShape2.
     * Gets a handle to the ending shape.
     *
     * @return SWFShape
     *
     * @see http://php.net/manual/en/swfmorph.getshape2.php
     */
    public function getShape2(): SWFShape
    {
    }
}
