<?php namespace OseilleTest\Http;

/**
 * Generated by PHPUnit_SkeletonGenerator on 2015-02-13 at 15:37:12.
 */
class HttpUtilsGetLocaleTest extends \PHPUnit_Framework_TestCase
{

    /**
     * @covers Oseille\Http\HttpUtils
     * @group specification
     */
    public function testGetLocaleFromHttp()
    {
        $header  = 'Accept-Language: da, en-gb;q=0.8, en;q=0.7';
        $allowed = [ 1.2, true, [ ], new \stdClass() ];
        $this->assertSame('en_GB', \Oseille\Http\HttpUtils::getLocale($header, $allowed));
    }

    /**
     * @covers Oseille\Http\HttpUtils
     * @group specification
     */
    public function testGetLocaleFromDefault()
    {
        $header  = 'Accept-Language: q=0.8;q=0.7';
        $allowed = [ 'de-DE', 'fr-FR', 'en-US' ];
        $this->assertSame('de_DE', \Oseille\Http\HttpUtils::getLocale($header, $allowed));
    }

    /**
     * @covers Oseille\Http\HttpUtils
     * @group specification
     */
    public function testGetLocale()
    {
        $header  = 'Accept-Language: en, en-US, en-cockney, i-cherokee, x-pig-latin';
        $allowed = [ 'de-DE', 'en-US' ];
        $this->assertSame('en_us', \Oseille\Http\HttpUtils::getLocale($header, $allowed));
    }

    /**
     * @covers Oseille\Http\HttpUtils
     * @group specification
     */
    public function testGetBestLocale()
    {
        $header  = 'Accept-Language: fr-BE, fr-CH';
        $allowed = [ 'de-DE', 'fr-FR', 'en-US' ];
        $this->assertSame('fr_FR', \Oseille\Http\HttpUtils::getLocale($header, $allowed));
    }
}
