<?php
class URLTest extends PHPUnit_Framework_TestCase {
    /**
     * 
     * @param string $originalString
     * @param string $expectedString
     * 
     * @dataProvider providerTestSluggifyReturnsSluggifiedString
     */
    public function testSluggifyReturnsSluggifiedString($originalString, $expectedString) {
        $url = new URL();
        $result = $url->sluggify($originalString);
        $this->assertEquals($expectedString, $result);
    }
    
    public function providerTestSluggifyReturnsSluggifiedString() {
        return array(
            array('This string will be sluggified', 'this-string-will-be-sluggified'),
            array('THIS STRING WILL BE SLUGGIFIED', 'this-string-will-be-sluggified'),
            array('This1 string2 will3 be 44 sluggified10', 'this1-string2-will3-be-44-sluggified10'),
            array('This! @string#$ %$will ()be "sluggified', 'this-string-will-be-sluggified'),
            array("Tänk efter nu – förr'n vi föser dig bort", 'tank-efter-nu-forrn-vi-foser-dig-bort'),
            array('', ''),
        );
    }
}
