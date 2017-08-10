<?php

/**
 * CairoOperator.
 * This is used to set the compositing operator for all cairo drawing operations.
 * The default operator is CairoOperator::OVER
 * The operators marked as unbounded modify their destination even outside of the mask layer (that is, their effect is not bound by the mask layer). However, their effect can still be limited by way of clipping.
 * To keep things simple, the operator descriptions here document the behavior for when both source and destination are either fully transparent or fully opaque. The actual implementation works for translucent layers too. For a more detailed explanation of the effects of each operator, including the mathematical definitions, see http://cairographics.org/operators/.
 *
 * @copyright [Copyright](http://php.net/manual/cc.license.php) by the PHP Documentation Group is licensed under [CC by 3.0 or later](http://creativecommons.org/licenses/by/3.0/).
 *
 * @see http://php.net/manual/en/class.cairooperator.php
 */
class CairoOperator
{
    const CLEAR = 0;
    const SOURCE = 1;
    const OVER = 2;
    const IN = 3;
    const OUT = 4;
    const ATOP = 5;
    const DEST = 6;
    const DEST_OVER = 7;
    const DEST_IN = 8;
    const DEST_OUT = 9;
    const DEST_ATOP = 10;
    const XOR = 11;
    const ADD = 12;
    const SATURATE = 13;
}
