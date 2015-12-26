<?php

/**
 * @file
 * Contains \Drupal\client\ClientInterface.
 */

namespace Drupal\client;

use Drupal\Core\Entity\ContentEntityInterface;
use Drupal\Core\Entity\EntityChangedInterface;
use Drupal\Core\Entity\EntityTypeInterface;
use Drupal\user\EntityOwnerInterface;

/**
 * Provides an interface for defining Client entities.
 *
 * @ingroup client
 */
interface ClientInterface extends ContentEntityInterface, EntityChangedInterface, EntityOwnerInterface {
  // Add get/set methods for your configuration properties here.

  /**
   * Gets the Client name.
   *
   * @return string
   *   Name of the Client.
   */
  public function getName();

  /**
   * Sets the Client name.
   *
   * @param string $name
   *   The Client name.
   *
   * @return \Drupal\client\ClientInterface
   *   The called Client entity.
   */
  public function setName($name);

  /**
   * Gets the Client creation timestamp.
   *
   * @return int
   *   Creation timestamp of the Client.
   */
  public function getCreatedTime();

  /**
   * Sets the Client creation timestamp.
   *
   * @param int $timestamp
   *   The Client creation timestamp.
   *
   * @return \Drupal\client\ClientInterface
   *   The called Client entity.
   */
  public function setCreatedTime($timestamp);

  /**
   * Returns the Client published status indicator.
   *
   * Unpublished Client are only visible to restricted users.
   *
   * @return bool
   *   TRUE if the Client is published.
   */
  public function isPublished();

  /**
   * Sets the published status of a Client.
   *
   * @param bool $published
   *   TRUE to set this Client to published, FALSE to set it to unpublished.
   *
   * @return \Drupal\client\ClientInterface
   *   The called Client entity.
   */
  public function setPublished($published);

}
