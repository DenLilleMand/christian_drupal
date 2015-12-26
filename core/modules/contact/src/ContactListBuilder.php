<?php

/**
 * @file
 * Contains \Drupal\contact\ContactListBuilder.
 */

namespace Drupal\contact;

use Drupal\Core\Entity\EntityInterface;
use Drupal\Core\Entity\EntityListBuilder;
use Drupal\Core\Routing\LinkGeneratorTrait;
use Drupal\Core\Url;

/**
 * Defines a class to build a listing of entity for contact information regarding future customer entities.
 *
 * @ingroup contact
 */
class ContactListBuilder extends EntityListBuilder {
  use LinkGeneratorTrait;
  /**
   * {@inheritdoc}
   */
  public function buildHeader() {
    $header['id'] = $this->t('entity for contact information regarding future customer ID');
    $header['name'] = $this->t('Name');
    return $header + parent::buildHeader();
  }

  /**
   * {@inheritdoc}
   */
  public function buildRow(EntityInterface $entity) {
    /* @var $entity \Drupal\contact\Entity\Contact */
    $row['id'] = $entity->id();
    $row['name'] = $this->l(
      $entity->label(),
      new Url(
        'entity.contact.edit_form', array(
          'contact' => $entity->id(),
        )
      )
    );
    return $row + parent::buildRow($entity);
  }

}
