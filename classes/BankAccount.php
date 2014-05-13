<?php
class BankAccount {
    private $balance;
    
    public function getBalance() {
        return $this->balance;
    }
    
    public function setBalance($amount) {
        if ($this->balance > 0) {
            $this->balance = $amount;
        }
    }
    
    public function __construct() {
        $this->balance = 0;
    }
    
    public function withdrawMoney($amount) {
        if (is_numeric($amount)
            && $amount >= 0
            && $this->balance >= $amount) {
            $this->balance -= $amount;
        }
    }
}

