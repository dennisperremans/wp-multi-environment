<?php
/**
 * Setup environments
 *
 * @package    Multi-Environment Config
 * @version    1.0.0
 * @author     Perremans  <perremans.be>
 */


/**
 * Define array of environment URLs
 *
 * Array of:
 * environment names =>
 *      domain  => The domain name
 *                 This can also be an array of multiple domains
 *                 You can also use a wildcard * to indicate all sub-domains at a domain, which is useful when using
 *                 WordPress Multisite. If you use wildcards, set the domain should to a single string, not an array
 *      path    => If WordPress is installed to a sub-folder set it here
 *      ssl     => Whether SSL should be used on this domain
 *
 * If you don't use any environments, remove them
 */
$env = [
    'production'  => [
        'domain' => 'productionurlhere',
        'path'   => '',
        'ssl'    => true,
    ],
    'staging'     => [
        'domain' => 'stagingurlhere',
        'path'   => '',
        'ssl'    => true,
    ],
    'development' => [
        'domain' => 'localurlhere',
        'path'   => '',
        'ssl'    => false,
    ],
];
