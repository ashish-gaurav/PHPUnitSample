<?php
class BadCodeTest extends PHPUnit_Framework_TestCase {
    public function testAuthorizeExitsWhenPasswordNotSet() {
        $user = array('username' => 'jsmolka');
        $password = 'foo';
        
        $badCode = $this->getMockBuilder('BadCode')
                ->setConstructorArgs(array($user))
                ->setMethods(array('callExit'))
                ->getMock();
        
        $badCode->expects($this->once())
                ->method('callExit');
                
        $this->expectOutputString("YOU SHALL NOT PASS");
        
        $badCode->authorize($password);
    }
}
