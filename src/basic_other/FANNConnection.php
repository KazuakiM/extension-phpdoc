<?php

/**
 * FANNConnection.
 * FANNConnection is used for the neural network connection. The objects of this class are used in fann_get_connection_array() and fann_set_weight_array().
 *
 * @property $from_neuron
 * @property $to_neuron
 * @property $weight
 *
 * @author Kazuaki MABUCHI
 * @copyright [Copyright](http://php.net/manual/cc.license.php) by the PHP Documentation Group is licensed under [CC by 3.0 or later](http://creativecommons.org/licenses/by/3.0/).
 *
 * @see http://php.net/manual/en/class.fannconnection.php
 */
class FANNConnection
{
    public $from_neuron;
    public $to_neuron;
    public $weight;

    /**
     * __construct.
     * The connection constructor.
     *
     * @param int   $from_neuron
     * @param int   $to_neuron
     * @param float $weight
     *
     * @see http://php.net/manual/en/fannconnection.construct.php
     */
    public function __construct(int $from_neuron, int $to_neuron, float $weight)
    {
    }

    /**
     * getFromNeuron.
     * Returns the postions of starting neuron.
     *
     * @return int
     *
     * @see http://php.net/manual/en/fannconnection.getfromneuron.php
     */
    public function getFromNeuron(): int
    {
    }

    /**
     * getToNeuron.
     * Returns the postions of terminating neuron.
     *
     * @return int
     *
     * @see http://php.net/manual/en/fannconnection.gettoneuron.php
     */
    public function getToNeuron(): int
    {
    }

    /**
     * getWeight.
     * Returns the connection weight.
     *
     * @see http://php.net/manual/en/fannconnection.getweight.php
     */
    public function getWeight(): void
    {
    }

    /**
     * setWeight.
     * Sets the connections weight.
     *
     * @param float $weight
     *
     * @return bool
     *
     * @see http://php.net/manual/en/fannconnection.setweight.php
     */
    public function setWeight(float $weight): bool
    {
    }
}
