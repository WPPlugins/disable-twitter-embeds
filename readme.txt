=== Disable Twitter Embeds ===
Contributors: mattwiebe
Tags: twitter, embed, oembed
Requires at least: 3.4
Tested up to: 3.4
Stable tag: 1.0

Disable the native Twitter embeds introduced in WordPress 3.4.

== Description ==

WordPress 3.4 introduced native Twitter embeds. You may not want to use these for privacy--or other--reasons, while still allowing for other embeds. This plugin disables only Twitter embeds.

== Installation ==

1. Upload the `disable-twitter-embeds` folder to your `/wp-content/plugins/` directory

2. Activate the "Disable Twitter Embeds" plugin in your WordPress administration interface

3. That's it.

== Frequently Asked Questions ==

= Why does my post still show a Twitter embed after activating this plugin? =

If you saved a post containing a Twitter embed before activating this plugin, you simply need to re-save it to make it go away.

= How do I disable Markdown processing? =

In most cases this should be unnecessary, since Markdown ignores existing HTML. But if Markdown for some reason disturbs your HTML when making an edit to a non-Markdown post, either check the "Disable Markdown formatting" checkbox, or put a `<!--no-markdown-->` HTML comment in your post somewhere (useful when using a mobile or 3rd party blogging app).

== Changelog ==

= 1.0 =

* Initial release.