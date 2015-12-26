<?php

/**
 * @file
 * Contains \Drupal\contact\Entity\Contact.
 */

namespace Drupal\contact\Entity;

use Drupal\views\EntityViewsData;
use Drupal\views\EntityViewsDataInterface;

/**
 * Provides Views data for entity for contact information regarding future customer entities.
 */
class ContactViewsData extends EntityViewsData implements EntityViewsDataInterface {
  /**
   * {@inheritdoc}
   */
  public function getViewsData() {
    $data = parent::getViewsData();

    $data['contact']['table']['base'] = array(
      'field' => 'id',
      'title' => $this->t('entity for contact information regarding future customer'),
      'help' => $this->t('The entity for contact information regarding future customer ID.'),
    );

    return $data;
  }

}
