<?php

namespace Atm;

class Atm
{
    public int $amount;
    public static int $balance = 1000;

    public function __construct(int $amount)
    {
        $this->amount = abs($amount);
    }

    public function getBalance()
    {
        if (self::$balance >= abs($this->amount)) {
            return self::$balance - abs($this->amount);
        } else {
            return self::$balance;
        }
    }

    public function getCash()
    {
        if (self::$balance >= abs($this->amount) && $this->amount !== 0) {
            return $this->amount;
        } else {
            echo _('Such amount is not possible for the withdrawal, please try again');
        }
    }
}