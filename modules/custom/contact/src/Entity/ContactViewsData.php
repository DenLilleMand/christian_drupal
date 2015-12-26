<?php

/**
 * @file
 * Contains \Drupal\contact\Entity\Contact.
 */

namespace Drupal\contact\Entity;

use Drupal\views\EntityViewsData;
use Drupal\views\EntityViewsDataInterface;

/**
 * Provides Views data for Contact entities.
 */
class ContactViewsData extends EntityViewsData implements EntityViewsDataInterface {
  /**
   * {@inheritdoc}
   */
  public function getViewsData() {
    $data = parent::getViewsData();

    $data['contact_lol']['table']['base'] = array(
      'field' => 'id',
      'title' => $this->t('Contact'),
      'help' => $this->t('The Contact ID.'),
    );

    return $data;
  }

}
