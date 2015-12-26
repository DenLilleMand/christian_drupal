<?php

/**
 * @file
 * Contains \Drupal\person\Entity\Person.
 */

namespace Drupal\person\Entity;

use Drupal\views\EntityViewsData;
use Drupal\views\EntityViewsDataInterface;

/**
 * Provides Views data for A entity to contain contact information for future customers entities.
 */
class PersonViewsData extends EntityViewsData implements EntityViewsDataInterface {
  /**
   * {@inheritdoc}
   */
  public function getViewsData() {
    $data = parent::getViewsData();

    $data['person']['table']['base'] = array(
      'field' => 'id',
      'title' => $this->t('A entity to contain contact information for future customers'),
      'help' => $this->t('The A entity to contain contact information for future customers ID.'),
    );

    return $data;
  }

}
