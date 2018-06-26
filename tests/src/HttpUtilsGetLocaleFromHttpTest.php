<?php namespace Ophp\Http;

/**
 * Generated by PHPUnit_SkeletonGenerator on 2015-02-13 at 15:37:12.
 */
class HttpUtilsGetLocaleFromHttp extends \PHPUnit_Framework_TestCase
{

    /**
     * @covers Ophp\Http\HttpUtils::getLocaleFromHttp
     * @group specification
     */
    public function testHeaderIsEmpty()
    {
        $header = '';
        $this->assertSame( '', \Ophp\Http\HttpUtils::getLocaleFromHttp( $header ) );
    }

    /**
     * @covers Ophp\Http\HttpUtils::getLocaleFromHttp
     * @group specification
     */
    public function testHeaderIsNotValid()
    {
        $header = 'Accept-Language: ';
        $this->assertSame( '', \Ophp\Http\HttpUtils::getLocaleFromHttp( $header ) );
    }

    /**
     * @covers Ophp\Http\HttpUtils::getLocaleFromHttp
     * @group specification
     */
    public function testGetLocaleFromHttp()
    {
        $header = 'Accept-Language: en, en-US, en-cockney, i-cherokee, x-pig-latin';
        $this->assertSame( 'en_US', \Ophp\Http\HttpUtils::getLocaleFromHttp( $header ) );
    }

}
