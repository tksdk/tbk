<?php 
class ClientTest extends \Codeception\Test\Unit
{
    /**
     * @var \UnitTester
     */
    protected $tester;
    
    protected function _before()
    {
    }

    protected function _after()
    {
    }

    // tests
    public function testSomeFeature()
    {
        $this->assertObjectHasAttribute('appkey', new TopClient('1'));
        $this->assertObjectHasAttribute('secretKey', new TopClient('', '2'));
    }
}