<?php

/**
 * Lapack.
 * LAPACK is written in Fortran 90 and provides routines for solving systems of simultaneous linear equations, least-squares solutions of linear systems of equations, eigenvalue problems, and singular value problems. This extension wraps the LAPACKE C bindings to allow access to several processes exposed by the library. Most functions work with arrays of arrays, representing rectangular matrices in row major order - so a two by two matrix [1 2; 3 4] would be array(array(1, 2), array(3, 4)).
 * All of the functions are called statically, for example $eig = Lapack::eigenvalues($a);.
 *
 * @author Kazuaki MABUCHI
 * @copyright [Copyright](http://php.net/manual/cc.license.php) by the PHP Documentation Group is licensed under [CC by 3.0 or later](http://creativecommons.org/licenses/by/3.0/).
 *
 * @see http://php.net/manual/en/class.lapack.php
 */
class Lapack
{
    /**
     * eigenValues.
     * This function returns the eigenvalues for a given square matrix.
     *
     * @param array $a
     * @param array $left  (optional)
     * @param array $right (optional)
     *
     * @return array
     *
     * @see http://php.net/manual/en/lapack.eigenvalues.php
     */
    public static function eigenValues(array $a, array $left, array $right): array
    {
    }

    /**
     * identity.
     * Return an identity matrix.
     *
     * @param int $n
     *
     * @return array
     *
     * @see http://php.net/manual/en/lapack.identity.php
     */
    public static function identity(int $n): array
    {
    }

    /**
     * leastSquaresByFactorisation.
     * Calculate the linear least squares solution of a matrix using QR factorisation.
     *
     * @param array $a
     * @param array $b
     *
     * @return array
     *
     * @see http://php.net/manual/en/lapack.leastsquaresbyfactorisation.php
     */
    public static function leastSquaresByFactorisation(array $a, array $b): array
    {
    }

    /**
     * leastSquaresBySVD.
     * Solve the linear least squares problem, using SVD.
     *
     * @param array $a
     * @param array $b
     *
     * @return array
     *
     * @see http://php.net/manual/en/lapack.leastsquaresbysvd.php
     */
    public static function leastSquaresBySVD(array $a, array $b): array
    {
    }

    /**
     * pseudoInverse.
     * Calculate the inverse of a matrix.
     *
     * @param array $a
     *
     * @return array
     *
     * @see http://php.net/manual/en/lapack.pseudoinverse.php
     */
    public static function pseudoInverse(array $a): array
    {
    }

    /**
     * singularValues.
     * Calculated the singular values of a matrix.
     *
     * @param array $a
     *
     * @return array
     *
     * @see http://php.net/manual/en/lapack.singularvalues.php
     */
    public static function singularValues(array $a): array
    {
    }

    /**
     * solveLinearEquation.
     * Solve a system of linear equations.
     *
     * @param array $a
     * @param array $b
     *
     * @return array
     *
     * @see http://php.net/manual/en/lapack.solvelinearequation.php
     */
    public static function solveLinearEquation(array $a, array $b): array
    {
    }
}
