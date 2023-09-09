<?php

/**
 * Plugin Name: DDEV Manager
 * Description: This plugin allows you to use relative urls in your WordPress site when sharing externally, it's installed when initiating ddev share and deleted when share stops.
 * Author:      Biati Digital https://www.biati.com.mx
 * License:     GNU General Public License v3 or later
 * License URI: http://www.gnu.org/licenses/gpl-3.0.html
 */

namespace DDEV_Manager\Share;

defined('ABSPATH') or die();

$ddev_hostname = isset($_SERVER['DDEV_HOSTNAME']) ? $_SERVER['DDEV_HOSTNAME'] : '';
$server = isset($_SERVER['SERVER_NAME']) ? $_SERVER['SERVER_NAME'] : '';
$external_urls = ['ngrok-free.app'];

if (empty($server) || empty($ddev_hostname)) {
    return;
}

define('DDEV_LOCAL_URL', $ddev_hostname);

$is_sharing = array_filter($external_urls, function ($external_service) use ($server) {
    return str_contains($server, $external_service);
});

if (!empty($is_sharing)) {
    add_action('init', function () {
        ob_start();
    }, 0);

    add_action('shutdown', function () {
        $out = '';
        $levels = ob_get_level();
        for ($i = 0; $i < $levels; $i++) {
            $out .= ob_get_clean();
        }
        echo apply_filters('wp_output', $out);
    }, 0);

    add_filter('wp_output', function ($output) {
        $output = str_replace([
            'https://' . DDEV_LOCAL_URL,
            'https://www.' . DDEV_LOCAL_URL,
            'http://' . DDEV_LOCAL_URL,
            'http://www.' . DDEV_LOCAL_URL
        ], '', $output);

        return $output;
    }, 99);
}
