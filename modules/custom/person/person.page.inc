<?php

/**
 * @file
 * Contains person.page.inc..
 *
 * Page callback for A entity to contain contact information for future customers entities.
 */

use Drupal\Core\Render\Element;
use Drupal\Core\Link;
use Drupal\Core\Url;

/**
 * Prepares variables for A entity to contain contact information for future customers templates.
 *
 * Default template: person.html.twig.
 *
 * @param array $variables
 *   An associative array containing:
 *   - elements: An associative array containing the user information and any
 *   - attributes: HTML attributes for the containing element.
 */
function template_preprocess_person(array &$variables) {
  // Fetch Person Entity Object.
  $person = $variables['elements']['#person'];

  // Helpful $content variable for templates.
  foreach (Element::children($variables['elements']) as $key) {
    $variables['content'][$key] = $variables['elements'][$key];
  }
}
