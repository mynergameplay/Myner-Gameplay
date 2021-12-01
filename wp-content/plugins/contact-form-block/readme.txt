=== Contact Form Block ===
Contributors: TigrouMeow
Tags: contact, form, gutenberg, block, mail, captcha, meowapps
Donate link: https://meowapps.com/donation/
Requires at least: 5.0
Tested up to: 5.8.1
Requires PHP: 5.6
Stable tag: 0.2.6

Tired of those heavy and old contact forms? Try this one. Simple, yet modern, pretty and extremely optimized. No JS or CSS files are loaded.

== Description ==

Simple, yet pretty and perfect for most of us. You will love this contact form! Through its Gutenberg block (or shortcode), you can add it anywhere and make it yours in a few clicks. Lightweight, clean UI, no need to set up anything special or download more plugins. It doesn't use any JS or CSS files (except if you active ReCAPTCHA). You can find more information on this plugin on [Meow Apps: Contact Form Block](https://meowapps.com/plugin/contact-form-block/).

**Why another Contact Form?** I have tried many plugins in the past, and I found them all too heavy and complicated. Most of the time, I just wanted a simple **contact** form. Why would I need to create a new form in a list of forms, manually decide the fields and make sure everything is well set-up? And why do I need more plugins in order to add ReCAPTCHA support, or even pay for such a basic option? 

== Usage ==

The Contact Form Block has been designed to be used within the Gutenberg Editor. You can modify the labels of the main fields (Name, E-mail, and Message) and the overall design. A header can also be added, with an image and some text. The text and color of the submit button can also be customized. There are 3 basic ***themes*** available: None, Default and Meow Apps. None will add no styles to your contact form, Default will make it work on any theme, and Meow Apps will look a bit more solid.

The shortcode [contact-form-block] can also be used, just as it is! That shortcode can be used anywhere, in your widgets for example. Have a look at the [tutorial](https://meowapps.com/contact-form-block-faq-customization/) to learn how to use it.

For the ReCAPTCHA and the other various settings, please visit the Contact Form page under the Meow Apps menu in your WordPress Admin.

== Notes ==

* The default behavior of this contact form is to send an e-mail to the admin of the WordPress install. That can be easily modified through the available WordPress filters.
* ReCAPTCHA v3 is currently used as an Anti-Spam. If you are interested, you can also develope your own 'human check'. Have a look at [this](https://meowapps.com/contact-form-block-faq-customization/#Anti-Spam_Ask_a_question).

== Best Practices ==

This contact form follows the best practices, in order to guarantee a maximum conversion rate.

* Vertical layout (multi-columns result in a loss)
* Labels above the fields (instead of placeholders or tricks)
* Explicit and colorful submit button (labelled 'Send' instead of 'Submit', by default)
* A limited number of fields (after 3 fields, the conversion rate goes down)
* No captcha (don't worry about spams, this contact form includes ReCAPTCHA_v3, which is invisible)
* Use a header (with a small image), that will motivate the user to contact you

=== Limitations ===

This Contact Form's goal is to remain simple and fast. New fields and features can be added through its filters and actions, but I will not make the core more complex and heavy.

Languages: English.

== Installation ==

1. Upload `contact-form-block` to the `/wp-content/plugins/` directory
2. Activate the plugin through the 'Plugins' menu in WordPress

== Upgrade Notice ==

Replace all the files. Nothing else to do.

== Changelog ==

= 0.2.6 (2021/09/23) =
* Updated: Common 3.6.

= 0.2.5 =
* Updated: Admin and UI refreshed.
* Info: There are many (complex) contact forms for WordPress. It is difficult for this one to get visibility. If you would like to help, and enjoy this plugin, remember to [write a little review for it](https://wordpress.org/support/plugin/contact-form-block/reviews/?rate=5#new-post). Thank you :)

= 0.2.3 =
* Update: Changed the form button from an input to a button element.

= 0.2.2 =
* Update: New admin.
* Fix: Was showing a license issue.

= 0.2.1 =
* Update: Added the IDs on the fields.

= 0.2.0 =
* Update: New dynamic UI for settings.

= 0.1.7 =
* Fix: Accessibility issue with label 'for' not matching input 'name'.

= 0.1.6 =
* Fix: Avoid a potential warning.
* Fix: Open a new page when Google link is clicked.

= 0.1.5 =
* Fix: There was a little notice in the logs in come cases.

= 0.1.4 =
* Fix: Translation in French was not working for ReCAPTCHA_v3.
* Update: Added some code example for a human-check question addon (in the addons directory).

= 0.1.3 =
* Fix: The phone field was not returned properly to the form.

= 0.1.2 =
* Fix: A variable used for CSS was wrong.
* Fix: The text on the button can now be changed.
* Update: More i18n support was added.
* Update: It doesn't use the standard post handler anymore (admin-post.php) since it wasn't working with security plugins which modify the url of the wp-admin. Now using a custom handler. If you prefer the previous behavior, please change the $use_admin_post variable to true in the core.

= 0.0.9 =
* Fix: Warnings with the latest version of WordPress.

= 0.0.8 =
* Add: New phone field (which is also a good example if you would like to add your own fields).

= 0.0.7 =
* Fix: Remove the useless header_image_url variable.

= 0.0.6 =
* Add: Redirect URL.

= 0.0.4 =
* Add: Google ReCAPTCHA_v3.

= 0.0.3 =
* Add: Use the e-mail of the sender for the Reply-To.

= 0.0.2 =
* Fix: Issue when resetting the button colors.

= 0.0.1 =
* First release.

== Screenshots ==

1. Contact Form Block.
