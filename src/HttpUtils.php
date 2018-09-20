<?php
/**
 * This file is a part of the Oseille framework
 *
 * @package Oseille\Http
 * @license MIT <https://github.com/Oseille/Http/blob/master/LICENSE>
 */
namespace Oseille\Http;

/**
 * Utility class for handling $_SERVER data.
 */
abstract class HttpUtils
{
    /** User agent section
     * ******************* */

    /**
     * Tries to find out if the user agent is MSIE.
     *
     * @param string $agent The string containing the "HTTP USER AGENT" header.
     * @return boolean
     */
    public static function isMSIE($agent)
    {
        // Initialize
        $aVersion = [];

        // Filters the agent
        $sUserAgent = is_string($agent) ? trim($agent) : '';

        // Looks for MSIE or Trident. Opera pretends to be MSIE.
        if (stripos($sUserAgent, 'Opera') === false) {
            // Looks for MSIE
            preg_match('/MSIE\s(\d*)/i', $sUserAgent, $aVersion);

            // Looks for Trident
            if (! isset($aVersion[1])) {
                preg_match('/Trident\/(\d*)/i', $sUserAgent, $aVersion);
            }
        }

        return isset($aVersion[1]) && (strlen($aVersion[1]) > 0);
    }

    /** Accept-Language section
     * ************************ */

    /**
     * Searches the language tag list for the best match to the language
     * Throws an exception if a parameter is not valid.
     *
     * @param string $locale  The string containing the language tag according
     *                        to format in RFC 1766.
     * @param array  $allowed List of allowed locales. $allowed[0] is the
     *                        default.
     * @return string
     */
    public static function getBestAllowedLocale($locale, array $allowed)
    {
        // Filters parameter
        $sLocale = (is_string($locale)) ? trim($locale) : '';
        $aAllowedLocales = array_filter(array_values($allowed), 'is_string');

        // Searches the allowed language list for the best match to the language.
        // If $sLocale is empty locale_lookup returns default server locale.
        // We do not want that.
        $sBestMatch = (strlen($sLocale) > 0) ? locale_lookup($aAllowedLocales, $sLocale, true) : '';

        // No best local found. Tries do find out the first best one based on
        // the two first carateres.
        if (strlen($sBestMatch) == 0) {
            $sPrimaryTag = substr($sLocale, 0, 2);

            foreach ($aAllowedLocales as $sValue) {
                if (stripos($sValue, $sPrimaryTag) === 0) {
                    $sBestMatch = $sValue;
                    break;
                }
            }

            // No best local found. Use default.
            if ((strlen($sBestMatch) == 0) && isset($aAllowedLocales[0])) {
                $sBestMatch = $aAllowedLocales[0];
            }
        }

        return strtr($sBestMatch, '-', '_');
    }

    /**
     * Gets the locale from HTTP "Accept-Language" header.
     *
     * @param string $header  The string containing the "Accept-Language"
     *        header according to format in RFC 2616.
     * @return string
     */
    public static function getLocaleFromHttp($header)
    {
        $sHttpLanguage = (is_string($header)) ? trim($header) : '';

        $sBestAvailableLocale = locale_accept_from_http($sHttpLanguage);

        if ((false === $sBestAvailableLocale) || (strlen($sBestAvailableLocale) == 0)) {
            $sBestAvailableLocale = '';
        }

        return $sBestAvailableLocale;
    }

    /**
     * Tries to find out best available locale based on HTTP "Accept-Language"
     * header.
     *
     * @param string $header  The string containing the "Accept-Language"
     *        header according to format in RFC 2616.
     * @param array  $allowed [OPTIONAL] List of allowed locales. $allowed[0]
     *        is the default.
     * @return string
     */
    public static function getLocale($header, array $allowed = [])
    {
        // Filters the array
        $aAllowedLocales = array_filter(array_values($allowed), 'is_string');

        // Find out the locale from the http header
        $sLocale = \Oseille\Http\HttpUtils::getLocaleFromHttp($header);

        // Checkes allowed or default if any
        if (isset($aAllowedLocales[0])) {
            $sLocale = \Oseille\Http\HttpUtils::getBestAllowedLocale($sLocale, $aAllowedLocales);
        }

        return strtr($sLocale, '-', '_');
    }
}
