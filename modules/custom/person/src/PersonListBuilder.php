<?php

/**
 * @file
 * Contains \Drupal\person\PersonListBuilder.
 */

namespace Drupal\person;

use Drupal\Core\Entity\EntityInterface;
use Drupal\Core\Entity\EntityListBuilder;
use Drupal\Core\Routing\LinkGeneratorTrait;
use Drupal\Core\Url;

/**
 * Defines a class to build a listing of A entity to contain contact information for future customers entities.
 *
 * @ingroup person
 */
class PersonListBuilder extends EntityListBuilder {
  use LinkGeneratorTrait;
  /**
   * {@inheritdoc}
   */
  public function buildHeader() {
    $header['id'] = $this->t('A entity to contain contact information for future customers ID');
    $header['name'] = $this->t('Name');
    return $header + parent::buildHeader();
  }

  /**
   * {@inheritdoc}
   */
  public function buildRow(EntityInterface $entity) {
    /* @var $entity \Drupal\person\Entity\Person */
    $row['id'] = $entity->id();
    $row['name'] = $this->l(
      $entity->label(),
      new Url(
        'entity.person.edit_form', array(
          'person' => $entity->id(),
        )
      )
    );
    return $row + parent::buildRow($entity);
  }

}
