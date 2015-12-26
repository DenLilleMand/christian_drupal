<?php

/**
 * @file
 * Contains \Drupal\person\PersonInterface.
 */

namespace Drupal\person;

use Drupal\Core\Entity\ContentEntityInterface;
use Drupal\Core\Entity\EntityChangedInterface;
use Drupal\Core\Entity\EntityTypeInterface;
use Drupal\user\EntityOwnerInterface;

/**
 * Provides an interface for defining A entity to contain contact information for future customers entities.
 *
 * @ingroup person
 */
interface PersonInterface extends ContentEntityInterface, EntityChangedInterface, EntityOwnerInterface
{
    // Add get/set methods for your configuration properties here.

    /**
     * Gets the A entity to contain contact information for future customers name.
     *
     * @return string
     *   Name of the A entity to contain contact information for future customers.
     */
    public function getName();

    /**
     * Sets the A entity to contain contact information for future customers name.
     *
     * @param string $name
     *   The A entity to contain contact information for future customers name.
     *
     * @return \Drupal\person\PersonInterface
     *   The called A entity to contain contact information for future customers entity.
     */
    public function setName($name);

    /**
     * Gets the A entity to contain contact information for future customers creation timestamp.
     *
     * @return int
     *   Creation timestamp of the A entity to contain contact information for future customers.
     */
    public function getCreatedTime();

    /**
     * Sets the A entity to contain contact information for future customers creation timestamp.
     *
     * @param int $timestamp
     *   The A entity to contain contact information for future customers creation timestamp.
     *
     * @return \Drupal\person\PersonInterface
     *   The called A entity to contain contact information for future customers entity.
     */
    public function setCreatedTime($timestamp);

    /**
     * Returns the A entity to contain contact information for future customers published status indicator.
     *
     * Unpublished A entity to contain contact information for future customers are only visible to restricted users.
     *
     * @return bool
     *   TRUE if the A entity to contain contact information for future customers is published.
     */
    public function isPublished();

    /**
     * Sets the published status of a A entity to contain contact information for future customers.
     *
     * @param bool $published
     *   TRUE to set this A entity to contain contact information for future customers to published, FALSE to set it to unpublished.
     *
     * @return \Drupal\person\PersonInterface
     *   The called A entity to contain contact information for future customers entity.
     */
    public function setPublished($published);

    /**
     * Sets the description of the person entity, it contains the task the future customer wants done.
     *
     * @param string $description
     * @return \Drupal\person\PersonInterface
     *   The called A entity to contain contact information for future customers entity.
     */
    public function setDescription($description);

    /**
     * Gets the description of the person entity, it contains the task the future customer wants done.
     *
     * @return string description
     */
    public function getDescription();

    /**
     * Sets the email of the person entity, its the email in the contact information the customer added.
     *
     * @param string $email
     * @return \Drupal\person\PersonInterface
     *   The called A entity to contain contact information for future customers entity.
     */
    public function setEmail($email);

    /**
     * Gets the email of the person entity, its the email in the contact information the customer added.
     *
     * @return string email
     */
    public function getEmail();

    /**
     * @param $phone
     * @return \Drupal\person\PersonInterface
     *   The called A entity to contain contact information for future customers entity.
     */
    public function setPhone($phone);

    /**
     * Gets the phone of the person entity, its the phonenumber in the contact information the customer added.
     *
     * @return string phone
     */
    public function getPhone();
}
