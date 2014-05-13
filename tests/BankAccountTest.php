<?php
class BankAccountTest extends PHPUnit_Framework_TestCase {
    public function testBalanceIsInitiallyZero() {
        $ba = new BankAccount();
        $this->assertEquals(0, $ba->getBalance());
    }
    
    public function testBalanceCannotBecomeNEgative() {
        $ba = new BankAccount();
        $ba->withdrawMoney(1);
        $this->assertEquals(0, $ba->getBalance());
        
        $ba = new BankAccount();
        $ba->setBalance(-1);
        $this->assertEquals(0, $ba->getBalance());
    }
}

