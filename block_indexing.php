<?php
/**
 * Plugin Name: Disable Search Engine Indexing
 * Description: Tento plugin trvale vypne indexaci webu pomocí jednoduchého filtru.
 * Version: 1.0.0
 * Author: Nimixx
 * Text Domain: disable-search-engine-indexing
 * Domain Path: /languages
 */

// Načtení překladů pluginu
function dsei_load_textdomain() {
    // Načítá překladové soubory pro plugin
    load_plugin_textdomain('disable-search-engine-indexing', false, dirname(plugin_basename(__FILE__)) . '/languages');
}
add_action('plugins_loaded', 'dsei_load_textdomain');

// Úprava textu ve WordPress administraci
function custom_search_engine_visibility_text($translated_text, $text, $domain) {
    // Zajištění, že se filtr aplikuje pouze na správný text v administraci
    if ($text === 'It is up to search engines to honor this request.' && $domain === 'default') {
        return __('Indexace je trvale vypnutá pomocí utility pluginu Disable Search Engine Indexing.', 'disable-search-engine-indexing');
    }

    return $translated_text;
}
add_filter('gettext', 'custom_search_engine_visibility_text', 10, 3);

// Nastavení indexace na vypnuto při inicializaci WordPressu
function disable_search_engine_indexing() {
    // Zkontroluje a nastaví možnost "Viditelnost pro vyhledávače" na vypnuto (0)
    if (get_option('blog_public') != 0) {
        update_option('blog_public', 0);
    }
}
add_action('init', 'disable_search_engine_indexing');
