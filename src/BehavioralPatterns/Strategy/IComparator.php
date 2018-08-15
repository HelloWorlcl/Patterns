<?php
/**
 * Created by PhpStorm.
 * User: Everest
 * Date: 12.08.2018
 * Time: 0:18
 */

namespace BehavioralPatterns\Strategy;

interface IComparator
{
    /**
     * @param $a
     * @param $b
     *
     * @return int
     */
    public function compare($a, $b): int;
}