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

	}
}
