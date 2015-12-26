<?php

/**
 * @file
 * Contains contact_lol.page.inc..
 *
 * Page callback for Contact entities.
 */

use Drupal\Core\Render\Element;
use Drupal\Core\Link;
use Drupal\Core\Url;

/**
 * Prepares variables for Contact templates.
 *
 * Default template: contact_lol.html.twig.
 *
 * @param array $variables
 *   An associative array containing:
 *   - elements: An associative array containing the user information and any
 *   - attributes: HTML attributes for the containing element.
 */
function template_preprocess_contact_lol(array &$variables) {
  // Fetch Contact Entity Object.
  $contact_lol = $variables['elements']['#contact_lol'];

  // Helpful $content variable for templates.
  foreach (Element::children($variables['elements']) as $key) {
    $variables['content'][$key] = $variables['elements'][$key];
  }
}
