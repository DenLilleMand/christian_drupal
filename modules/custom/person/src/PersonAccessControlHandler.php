<?php

/**
 * @file
 * Contains \Drupal\person\PersonAccessControlHandler.
 */

namespace Drupal\person;

use Drupal\Core\Entity\EntityAccessControlHandler;
use Drupal\Core\Entity\EntityInterface;
use Drupal\Core\Session\AccountInterface;
use Drupal\Core\Access\AccessResult;

/**
 * Access controller for the A entity to contain contact information for future customers entity.
 *
 * @see \Drupal\person\Entity\Person.
 */
class PersonAccessControlHandler extends EntityAccessControlHandler
{
    /**
     * {@inheritdoc}
     */
    protected function checkAccess(EntityInterface $entity, $operation, AccountInterface $account)
    {
        /* @var $entity \Drupal\person\Entity\Person */
        switch ($operation) {
            case 'view':
                if (!$entity->isPublished()) {
                    return AccessResult::allowedIfHasPermission($account, 'view unpublished a entity to contain contact information for future customers entities');
                } else {
                    return AccessResult::allowedIfHasPermission($account, 'view published a entity to contain contact information for future customers entities');
                }
            case 'update':
                return AccessResult::allowedIfHasPermission($account, 'edit a entity to contain contact information for future customers entities');

            case 'delete':
                return AccessResult::allowedIfHasPermission($account, 'delete a entity to contain contact information for future customers entities');
        }
        return AccessResult::allowed();
    }


    /**
     * {@inheritdoc}
     */
    protected function checkCreateAccess(AccountInterface $account, array $context, $entity_bundle = NULL)
    {
        return AccessResult::allowedIfHasPermission($account, 'add a entity to contain contact information for future customers entities');
    }

}
