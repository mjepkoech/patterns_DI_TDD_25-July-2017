<?php
use PHPUnit\Framework\TestCase;
 
class UserTest extends TestCase {
 
    private $user;
 
    function setUp() {
        $this->user = new User();
    }
 
    function testDontExceed() {
       $name = 'millicent';
       $maxlength = 10;
       $this->assertEquals($name, $this->user->add($name, $length));
    }
 
}
 
?>
