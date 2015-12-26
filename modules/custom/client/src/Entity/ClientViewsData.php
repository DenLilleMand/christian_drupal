<?php

/**
 * @file
 * Contains \Drupal\client\Entity\Client.
 */

namespace Drupal\client\Entity;

use Drupal\views\EntityViewsData;
use Drupal\views\EntityViewsDataInterface;

/**
 * Provides Views data for Client entities.
 */
class ClientViewsData extends EntityViewsData implements EntityViewsDataInterface {
  /**
   * {@inheritdoc}
   */
  public function getViewsData() {
    $data = parent::getViewsData();

    $data['client']['table']['base'] = array(
      'field' => 'id',
      'title' => $this->t('Client'),
      'help' => $this->t('The Client ID.'),
    );

    return $data;
  }

}
