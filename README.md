# Disable Search Engine Indexing

**Disable Search Engine Indexing** is a simple WordPress plugin that permanently disables search engine indexing for your website by modifying the "Search Engine Visibility" option in the WordPress settings. This plugin is particularly useful for development environments where you do not want search engines to index your site.

## Description

The plugin does the following:
- Disables search engine indexing by setting the "Search Engine Visibility" option to "Discourage search engines from indexing this site".
- Provides a custom notice in the WordPress admin to inform users that indexing is disabled by this plugin.

## Warning

🚨 **This plugin is intended for use in development environments only and should not be used in a production environment.** The plugin forces the site to be invisible to search engines by permanently disabling indexing. Make sure to deactivate and remove this plugin when moving to a production environment.

## Installation

1. Download the plugin files and upload the `disable-search-engine-indexing` folder to your WordPress site's `/wp-content/plugins/` directory.
2. Activate the plugin through the **Plugins** menu in WordPress.

## Usage

Once activated, the plugin will automatically:
- Set the "Search Engine Visibility" option to "Discourage search engines from indexing this site".
- Display a custom notice under the option in the WordPress settings to inform users that search engine indexing is disabled by this plugin.

### Translations

The plugin supports translations. Currently, it is available in:
- English (en_US)
- Czech (cs_CZ)

## License

This plugin is open-source and licensed under the [GPL-2.0 License](https://www.gnu.org/licenses/gpl-2.0.html).
