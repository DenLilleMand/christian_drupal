<?php

/**
 * @file
 * Contains \Drupal\contact\ContactInterface.
 */

namespace Drupal\contact;

use Drupal\Core\Entity\ContentEntityInterface;
use Drupal\Core\Entity\EntityChangedInterface;
use Drupal\Core\Entity\EntityTypeInterface;
use Drupal\user\EntityOwnerInterface;

/**
 * Provides an interface for defining entity for contact information regarding future customer entities.
 *
 * @ingroup contact
 */
interface ContactInterface extends ContentEntityInterface, EntityChangedInterface, EntityOwnerInterface {
  // Add get/set methods for your configuration properties here.

  /**
   * Gets the entity for contact information regarding future customer name.
   *
   * @return string
   *   Name of the entity for contact information regarding future customer.
   */
  public function getName();

  /**
   * Sets the entity for contact information regarding future customer name.
   *
   * @param string $name
   *   The entity for contact information regarding future customer name.
   *
   * @return \Drupal\contact\ContactInterface
   *   The called entity for contact information regarding future customer entity.
   */
  public function setName($name);

  /**
   * Gets the entity for contact information regarding future customer creation timestamp.
   *
   * @return int
   *   Creation timestamp of the entity for contact information regarding future customer.
   */
  public function getCreatedTime();

  /**
   * Sets the entity for contact information regarding future customer creation timestamp.
   *
   * @param int $timestamp
   *   The entity for contact information regarding future customer creation timestamp.
   *
   * @return \Drupal\contact\ContactInterface
   *   The called entity for contact information regarding future customer entity.
   */
  public function setCreatedTime($timestamp);

  /**
   * Returns the entity for contact information regarding future customer published status indicator.
   *
   * Unpublished entity for contact information regarding future customer are only visible to restricted users.
   *
   * @return bool
   *   TRUE if the entity for contact information regarding future customer is published.
   */
  public function isPublished();

  /**
   * Sets the published status of a entity for contact information regarding future customer.
   *
   * @param bool $published
   *   TRUE to set this entity for contact information regarding future customer to published, FALSE to set it to unpublished.
   *
   * @return \Drupal\contact\ContactInterface
   *   The called entity for contact information regarding future customer entity.
   */
  public function setPublished($published);

}
