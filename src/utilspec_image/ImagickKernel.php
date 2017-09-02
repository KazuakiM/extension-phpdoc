<?php

/**
 * ImagickKernel.
 *
 * @author Kazuaki MABUCHI
 * @copyright [Copyright](http://php.net/manual/cc.license.php) by the PHP Documentation Group is licensed under [CC by 3.0 or later](http://creativecommons.org/licenses/by/3.0/).
 *
 * @see http://php.net/manual/en/class.imagickkernel.php
 */
class ImagickKernel
{
    /**
     * addKernel.
     * Description.
     *
     * @param ImagickKernel $ImagickKernel
     *
     * @see http://php.net/manual/en/imagickkernel.addkernel.php
     */
    public function addKernel(ImagickKernel $ImagickKernel): void
    {
    }

    /**
     * addUnityKernel.
     * Description.
     *
     * @see http://php.net/manual/en/imagickkernel.addunitykernel.php
     */
    public function addUnityKernel(): void
    {
    }

    /**
     * fromBuiltin.
     * Description.
     *
     * @param string $kernelType
     * @param string $kernelString
     *
     * @return ImagickKernel
     *
     * @see http://php.net/manual/en/imagickkernel.frombuiltin.php
     */
    public static function fromBuiltin(string $kernelType, string $kernelString): ImagickKernel
    {
    }

    /**
     * fromMatrix.
     * Description.
     *
     * @param array $matrix
     * @param array $origin (optional)
     *
     * @return ImagickKernel
     *
     * @see http://php.net/manual/en/imagickkernel.frommatrix.php
     */
    public static function fromMatrix(array $matrix, array $origin): ImagickKernel
    {
    }

    /**
     * getMatrix.
     * Description.
     *
     * @return array
     *
     * @see http://php.net/manual/en/imagickkernel.getmatrix.php
     */
    public function getMatrix(): array
    {
    }

    /**
     * scale.
     * Description.
     *
     * @see http://php.net/manual/en/imagickkernel.scale.php
     */
    public function scale(): void
    {
    }

    /**
     * separate.
     * Description.
     *
     * @return array
     *
     * @see http://php.net/manual/en/imagickkernel.separate.php
     */
    public function separate(): array
    {
    }
}
