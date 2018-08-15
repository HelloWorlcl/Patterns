<?php
/**
 * Created by PhpStorm.
 * User: Everest
 * Date: 15.08.2018
 * Time: 23:23
 */

namespace BehavioralPatterns\Command;

class Receiver
{
    /** @var bool */
    protected $doEnableDate = false;

    /** @var string[] */
    protected $output;

    /**
     * @param string $message
     */
    public function write(string $message)
    {
        if ($this->doEnableDate) {
            $message .= ' [' . date('Y-m-d') . ']';
        }

        $this->output[] = $message;
    }

    /**
     * @return string
     */
    public function getOutput(): string
    {
        return join('\n', $this->output);
    }

    public function enableDate()
    {
        $this->doEnableDate = true;
    }

    public function disableDate()
    {
        $this->doEnableDate = false;
    }
}
