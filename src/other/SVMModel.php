<?php

/**
 * SVMModel.
 *
 * The SVMModel is the end result of the training process. It can be used to classify previously unseen data.
 *
 * @see http://php.net/manual/en/class.svmmodel.php
 */
class SVMModel
{
    /**
     * __construct.
     *
     * Construct a new SVMModel
     *
     * @param string $filename (optional)
     *
     * @see http://php.net/manual/en/svmmodel.construct.php
     */
    public function __construct(string $filename)
    {
    }

    /**
     * checkProbabilityModel.
     *
     * Returns true if the model has probability information
     *
     * @return bool
     *
     * @see http://php.net/manual/en/svmmodel.checkprobabilitymodel.php
     */
    public function checkProbabilityModel(): bool
    {
    }

    /**
     * getLabels.
     *
     * Get the labels the model was trained on
     *
     * @return array
     *
     * @see http://php.net/manual/en/svmmodel.getlabels.php
     */
    public function getLabels(): array
    {
    }

    /**
     * getNrClass.
     *
     * Returns the number of classes the model was trained with
     *
     * @return int
     *
     * @see http://php.net/manual/en/svmmodel.getnrclass.php
     */
    public function getNrClass(): int
    {
    }

    /**
     * getSvmType.
     *
     * Get the SVM type the model was trained with
     *
     * @return int
     *
     * @see http://php.net/manual/en/svmmodel.getsvmtype.php
     */
    public function getSvmType(): int
    {
    }

    /**
     * getSvrProbability.
     *
     * Get the sigma value for regression types
     *
     * @return float
     *
     * @see http://php.net/manual/en/svmmodel.getsvrprobability.php
     */
    public function getSvrProbability(): float
    {
    }

    /**
     * load.
     *
     * Load a saved SVM Model
     *
     * @param string $filename
     *
     * @return bool
     *
     * @see http://php.net/manual/en/svmmodel.load.php
     */
    public function load(string $filename): bool
    {
    }

    /**
     * predict_probability.
     *
     * Return class probabilities for previous unseen data
     *
     * @param array $data
     *
     * @return float
     *
     * @see http://php.net/manual/en/svmmodel.predict-probability.php
     */
    public function predict_probability(array $data): float
    {
    }

    /**
     * predict.
     *
     * Predict a value for previously unseen data
     *
     * @param array $data
     *
     * @return float
     *
     * @see http://php.net/manual/en/svmmodel.predict.php
     */
    public function predict(array $data): float
    {
    }

    /**
     * save.
     *
     * Save a model to a file
     *
     * @param string $filename
     *
     * @return bool
     *
     * @see http://php.net/manual/en/svmmodel.save.php
     */
    public function save(string $filename): bool
    {
    }
}
