<?php

/**
 * CairoPattern.
 * CairoPattern is the abstract base class from which all the other pattern classes derive. It cannot be instantiated directly.
 *
 * @author Kazuaki MABUCHI
 * @copyright [Copyright](http://php.net/manual/cc.license.php) by the PHP Documentation Group is licensed under [CC by 3.0 or later](http://creativecommons.org/licenses/by/3.0/).
 *
 * @see http://php.net/manual/en/class.cairopattern.php
 */
class CairoPattern
{
    /**
     * __construct.
     * The __construct purpose.
     *
     * @see http://php.net/manual/en/cairopattern.construct.php
     */
    public function __construct()
    {
    }

    /**
     * getMatrix.
     * The getMatrix purpose.
     *
     * @see http://php.net/manual/en/cairopattern.getmatrix.php
     */
    public function getMatrix(): void
    {
    }

    /**
     * getType.
     * The getType purpose.
     *
     * @return int
     *
     * @see http://php.net/manual/en/cairopattern.gettype.php
     */
    public function getType(): int
    {
    }

    /**
     * setMatrix.
     * The setMatrix purpose.
     *
     * @param string $matrix
     *
     * @see http://php.net/manual/en/cairopattern.setmatrix.php
     */
    public function setMatrix(string $matrix): void
    {
    }

    /**
     * status.
     * The status purpose.
     *
     * @return int
     *
     * @see http://php.net/manual/en/cairopattern.status.php
     */
    public function status(): int
    {
    }
}
