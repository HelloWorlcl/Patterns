<?php
/**
 * Created by PhpStorm.
 * User: Everest
 * Date: 12.08.2018
 * Time: 0:18
 */

namespace BehavioralPatterns\Strategy;

class DateComparator implements IComparator
{
    /**
     * @param $a
     * @param $b
     *
     * @return int
     */
    public function compare($a, $b): int
    {
        $date1 = new \DateTime($a['date']);
        $date2 = new \DateTime($b['date']);

        return $date1 <=> $date2;
    }
}