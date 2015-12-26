<?php

/**
 * @file
 * Contains \Drupal\contact\ContactAccessControlHandler.
 */

namespace Drupal\contact;

use Drupal\Core\Entity\EntityAccessControlHandler;
use Drupal\Core\Session\AccountInterface;
use Drupal\Core\Access\AccessResult;

/**
 * Access controller for the Contact entity.
 *
 * @see \Drupal\contact\Entity\Contact.
 */
class ContactAccessControlHandler extends EntityAccessControlHandler {
  /**
   * {@inheritdoc}
   */
  protected function checkAccess(ContactInterface $entity, $operation, AccountInterface $account) {
    switch ($operation) {
      case 'view':
        if (!$entity->isPublished()) {
          return AccessResult::allowedIfHasPermission($account, 'view unpublished contact entities');
        }
        return AccessResult::allowedIfHasPermission($account, 'view published contact entities');

      case 'update':
        return AccessResult::allowedIfHasPermission($account, 'edit contact entities');

      case 'delete':
        return AccessResult::allowedIfHasPermission($account, 'delete contact entities');
    }

    return AccessResult::allowed();
  }

  /**
   * {@inheritdoc}
   */
  protected function checkCreateAccess(AccountInterface $account, array $context, $entity_bundle = NULL) {
    return AccessResult::allowedIfHasPermission($account, 'add contact entities');
  }

}
