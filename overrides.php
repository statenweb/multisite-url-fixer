<?php
/**
 * Overrides Configuration File
 *
 * This file contains a list of URLs or patterns that are excluded from any URL rewriting.
 * It supports exact matches, wildcard strings, and regular expressions.
 *
 * Usage:
 * - Copy this file to `overrides.php` in the same directory (`cp overrides.example.php overrides.php`).
 * - Add URLs or patterns you want to exclude from rewriting in the `$rewrite_overrides` array.
 * - Patterns are evaluated sequentially, so ensure specific patterns are listed before general ones.
 * - The simplest way to determine if you need to override a rewrite is to check your wp_debug.log
 *
 * Examples:
 * 1. Exact Match:
 *    'https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js'
 *
 * 2. Wildcard Match:
 *    'example_wildcard*' (Matches any URL beginning with `example_wildcard`)
 *    'www.example.com/specific/*' (Matches all URLs under `specific` on `www.example.com`)
 *
 * 3. Regular Expression:
 *    '/^https:\/\/cdn\.(example|anotherexample)\.com\/.+$/' (Matches URLs from specific CDNs)
 *    '!example.com' (Negation: URLs containing 'example.com' will not be rewritten)
 *
 * Note:
 * - Use wildcards sparingly to avoid unintended matches.
 * - Regular expressions are more powerful but require valid syntax.
 */

# Example:
// return [
//     // Add your overrides below:
//     'https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js', // Exact match
//     '*/example_wildcard', // Wildcard match
//     '/^https:\/\/cdn\.(example|anotherexample)\.com\/.+$/', // Regular expression
//     'www.example.com/specific/*', // Wildcard for a specific directory
//     '!example.com', // Negation
// ];
