<?php

namespace Theta\ThemeSnippet;

/**
 * Advanced ContactForm7 functions.
 *
 * @package Theta\ThemeSnippet
 * @author Jeremy SPAETH
 * @license GPL-2.0-or-later
 * @see https://contactform7.com/docs/
 * @since 0.2
 */
class ContactForm7
{
	public function __construct()
	{
		// Remove <p> Tag From Contact Form 7
		add_filter('wpcf7_autop_or_not', '__return_false');
		add_action('wp_enqueue_scripts', array($this, 'cf7Script'));
	}

	public function cf7Script()
	{
		wp_enqueue_script('tts-cf7', plugin_dir_url(__DIR__).'assets/js/contact-form-7.js', '', '1.0', true);
	}
}
