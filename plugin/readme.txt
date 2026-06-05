# CookieTractor #
* Contributors: cookietractor
* Tags: cookie banner,cookie consent, GDPR, cookie policy, cmp
* Requires at least: 5.7
* Tested up to: 7.0
* Stable tag: 1.1.5
* Requires PHP: 7.2
* License: GPLv2 or later
* License URI: http://www.gnu.org/licenses/gpl-2.0.html

CookieTractor – The User-Friendly Cookie Banner

## Description ##

CookieTractor is the user-friendly cookie consent solution for WordPress websites.

The platform helps website owners manage cookies and consent in support of GDPR, ePrivacy requirements, and Google Consent Mode. By connecting your WordPress website to CookieTractor, you can manage consent, cookie information, and visitor choices through a dedicated consent management platform.

CookieTractor is a Google Certified CMP Partner and is developed and operated within the European Union.

Visit our [website](https://www.cookietractor.com?utm_source=wordpress&utm_medium=plugin&utm_campaign=plugin_directory)

## Consent Management for WordPress ##

A cookie banner is only one part of consent management.

Website owners also need to provide information about cookies, respect visitor choices, keep cookie information up to date, and make it easy for visitors to review or change their consent settings.

CookieTractor brings these parts together in a single solution designed for WordPress.

The solution includes a customizable cookie banner, consent management tools, cookie documentation, script control, and support for ongoing maintenance as websites evolve over time.

## Google Consent Mode v2 ##
CookieTractor is a Google Certified CMP Partner and supports Google Consent Mode v2.

Whether you use Google Tag Manager, Google Tag Gateway, or direct Google tag implementations, CookieTractor helps manage consent signals for Google's services.

## Cookie Scanning and Cookie Documentation ##
Websites change over time. New plugins, embedded content, analytics tools, and marketing platforms can introduce new cookies and tracking technologies.

CookieTractor regularly scans your website and helps keep your cookie list up to date. Visitors can review detailed cookie information directly in the consent dialog, while website owners can supplement the cookie list with their own descriptions when needed.

## WP Consent API Integration ##
CookieTractor integrates with the [WP Consent API](https://wordpress.org/plugins/wp-consent-api/).

When visitors update their consent choices, compatible WordPress plugins can use that information through a standardized consent framework. This helps create a more consistent consent experience across your website and reduces the need for custom integrations.

## Built with Accessibility in Mind ##
The cookie banner is often one of the first interfaces a visitor encounters on a website.

CookieTractor is designed to support keyboard navigation, screen readers, and modern accessibility requirements. Clear information, understandable choices, and equal access are important parts of a good consent experience.

The goal is to help visitors make informed choices and make it easy to review or change those choices over time.

## Multilingual Websites ##
CookieTractor supports multilingual websites and includes translations for dozens of languages.

Visitors can interact with the consent dialog in their preferred language, helping create a consistent experience across international websites.

## Links ##
Documentation, setup guides, and technical references are available at: [https://www.cookietractor.com/documentation](https://www.cookietractor.com/documentation?utm_source=wordpress&utm_medium=plugin&utm_campaign=plugin_directory)

Learn more about CookieTractor: [https://www.cookietractor.com](https://www.cookietractor.com?utm_source=wordpress&utm_medium=plugin&utm_campaign=plugin_directory)

## Shortcodes ##

`[cookietractor_popup text="Open cookie settings"]`
Opens the cookie popup for visitors to change there consent.

`[cookietractor_declaration]`
Renders our cookie declaration table on your page

== External services ==
This plugin might connect to the CookieTractor API to fetch consent, cookie and status information. It also include frontend-scripts from the following domains to render the cookie consent screen and optionally the cookie declaration:

* cdn.cookietractor.com
* cdn-eu.cookietractor.com

This service is provided by [CookieTractor](https://www.cookietractor.com?utm_source=wordpress&utm_medium=plugin&utm_campaign=plugin_directory): [terms of use](https://www.cookietractor.com/terms-of-use?utm_source=wordpress&utm_medium=plugin&utm_campaign=plugin_directory)

## Screenshots ##

1. Banner example
2. Consent overview
3. Cookies list
4. Edit banner content
5. Adjust banner design
6. Website settings
7. Instructions for installation

## Changelog ##
Here you can see the changes made in each release of the plugin.

### 1.1.5 ###
Fixed issue with the "Use Website Language"-feature, ensure plugin works on WP 7.0.0

### 1.1.4 ###
Tested on WordPress 6.9, updated "Tested up to" in readme.

### 1.1.3 ###
Updates to readme

### 1.1.2 ###
Updates to the readme, include more files in release

### 1.1.1 ###
Updates to the readme

### 1.1.0 ###
Added support for [WP Consent API](https://wordpress.org/plugins/wp-consent-api). Just install `WP Consent API` into your website to activate the integration.

### 1.0.3 ###
Fixed an issue where the script was only loading on the front page instead of across all pages.

### 1.0.2 ###
Readme updates

### 1.0.1 ###
Readme updates

### 1.0.0 ###
Release date: April 23 2025
Initial release that supports adding the header scripts to your WordPress site based on settings. Also included shortcodes for opening the popup and rendering cookie declaration.
