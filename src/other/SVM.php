<?php

/**
 * SVM.
 *
 *
 *
 * @see http://php.net/manual/en/class.svm.php
 */
class SVM
{
    const C_SVC = 0;
    const NU_SVC = 1;
    const ONE_CLASS = 2;
    const EPSILON_SVR = 3;
    const NU_SVR = 4;
    const KERNEL_LINEAR = 0;
    const KERNEL_POLY = 1;
    const KERNEL_RBF = 2;
    const KERNEL_SIGMOID = 3;
    const KERNEL_PRECOMPUTED = 4;
    const OPT_TYPE = 101;
    const OPT_KERNEL_TYPE = 102;
    const OPT_DEGREE = 103;
    const OPT_SHRINKING = 104;
    const OPT_PROPABILITY = 105;
    const OPT_GAMMA = 201;
    const OPT_NU = 202;
    const OPT_EPS = 203;
    const OPT_P = 204;
    const OPT_COEF_ZERO = 205;
    const OPT_C = 206;
    const OPT_CACHE_SIZE = 207;

    /**
     * __construct.
     *
     * Construct a new SVM object
     *
     * @see http://php.net/manual/en/svm.construct.php
     */
    public function __construct()
    {
    }

    /**
     * crossvalidate.
     *
     * Test training params on subsets of the training data.
     *
     * @param array $problem
     * @param int   $number_of_folds
     *
     * @return float
     *
     * @see http://php.net/manual/en/svm.crossvalidate.php
     */
    public function crossvalidate(array $problem, int $number_of_folds): float
    {
    }

    /**
     * getOptions.
     *
     * Return the current training parameters
     *
     * @return array
     *
     * @see http://php.net/manual/en/svm.getoptions.php
     */
    public function getOptions(): array
    {
    }

    /**
     * setOptions.
     *
     * Set training parameters
     *
     * @param array $params
     *
     * @return bool
     *
     * @see http://php.net/manual/en/svm.setoptions.php
     */
    public function setOptions(array $params): bool
    {
    }

    /**
     * train.
     *
     * Create a SVMModel based on training data
     *
     * @param array $problem
     * @param array $weights (optional)
     *
     * @return SVMModel
     *
     * @see http://php.net/manual/en/svm.train.php
     */
    public function train(array $problem, array $weights): SVMModel
    {
    }
}
