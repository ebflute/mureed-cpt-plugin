# mureed-cpt-plugin
=== Mureed CPT Plugin ===
Contributors:        ebflute
Donate link:         https://shumdesign.com
Tags:                custom post type, taxonomy, sufi, mureed, disciples
Requires at least:   5.2
Tested up to:        6.5
Requires PHP:        7.2
Stable tag:          1.0.0
License:             GPLv2 or later
License URI:         https://www.gnu.org/licenses/gpl-2.0.html

Registers a Custom Post Type called "Mureeds" and a hierarchical taxonomy called "Orders (Tariqa)" to help organize Sufi lineages and followers.

== Description ==

This plugin adds a Custom Post Type (CPT) called **Mureeds**, used for managing individuals associated with Sufi paths.  
It also registers a hierarchical taxonomy called **Orders (Tariqa)** to classify each Mureed by spiritual lineage.

**Features:**

* Registers a `mureed` CPT with full REST API support.
* Adds a hierarchical `sufi_order` taxonomy labeled “Orders (Tariqa).”
* Designed for use in Sufi community websites, archives, or lineage projects.
* Lightweight and follows WordPress coding standards.

== Installation ==

1. Upload the plugin folder to the `/wp-content/plugins/` directory.
2. Activate the plugin through the ‘Plugins’ screen in WordPress.
3. After activation, go to **Mureeds** in your WordPress admin menu to begin adding entries.

== Frequently Asked Questions ==

= Can I rename “Orders (Tariqa)” to something else? =  
Yes. You can change the labels in the plugin file, or extend the taxonomy with a custom plugin.

= Does this plugin work with block themes or Full Site Editing? =  
Yes. The CPT and taxonomy are registered with full `show_in_rest` support for use in the block editor.

== Screenshots ==

1. Mureeds post type visible in admin menu.
2. “Orders” taxonomy shown in sidebar taxonomy meta box.

== Changelog ==

= 1.0.0 =
* Initial release of the plugin with CPT and taxonomy registration.

== Upgrade Notice ==

= 1.0.0 =
First stable version of the plugin.

== License ==

This plugin is licensed under the GPL v2 or later.  
See: https://www.gnu.org/licenses/gpl-2.0.html
