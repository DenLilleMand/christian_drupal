<?php

/**
 * @file
 * Contains \Drupal\person\Entity\Person.
 */

namespace Drupal\person\Entity;

use Drupal\Core\Cache\RefinableCacheableDependencyInterface;
use Drupal\Core\Entity\EntityChangedInterface;
use Drupal\Core\Entity\EntityStorageInterface;
use Drupal\Core\Field\BaseFieldDefinition;
use Drupal\Core\Entity\ContentEntityBase;
use Drupal\Core\Entity\EntityChangedTrait;
use Drupal\Core\Entity\EntityTypeInterface;
use Drupal\person\PersonInterface;
use Drupal\user\UserInterface;

/**
 * Defines the A entity to contain contact information for future customers entity.
 *
 * @ingroup person
 *
 * @ContentEntityType(
 *   id = "person",
 *   label = @Translation("A entity to contain contact information for future customers"),
 *   handlers = {
 *     "view_builder" = "Drupal\Core\Entity\EntityViewBuilder",
 *     "list_builder" = "Drupal\person\PersonListBuilder",
 *     "views_data" = "Drupal\person\Entity\PersonViewsData",
 *     "form" = {
 *       "default" = "Drupal\person\Form\PersonForm",
 *       "add" = "Drupal\person\Form\PersonForm",
 *       "edit" = "Drupal\person\Form\PersonEditForm",
 *       "delete" = "Drupal\person\Form\PersonDeleteForm",
 *     },
 *     "access" = "Drupal\person\PersonAccessControlHandler",
 *   },
 *   base_table = "person",
 *   admin_permission = "administer Person entities",
 *   entity_keys = {
 *     "id" = "id",
 *     "label" = "name",
 *     "uuid" = "uuid",
 *     "uid" = "user_id",
 *     "email" = "email",
 *     "phone" = "phone",
 *     "description" = "description",
 *     "langcode" = "langcode",
 *     "processed" = "processed"
 *   },
 *   links = {
 *     "canonical" = "/admin/person/{person}",
 *     "edit-form" = "/admin/person/{person}/edit",
 *     "delete-form" = "/admin/person/{person}/delete"
 *   },
 *   field_ui_base_route = "person.settings"
 * )
 */
class Person extends ContentEntityBase implements PersonInterface
{
    use EntityChangedTrait;

    /**
     * {@inheritdoc}
     */
    public static function preCreate(EntityStorageInterface $storage_controller, array &$values)
    {
        parent::preCreate($storage_controller, $values);
        $values += array(
            'user_id' => \Drupal::currentUser()->id(),
        );
    }


    /**
     * {@inheritdoc}
     */
    public function getEmail()
    {
        return $this->get('email')->value;
    }


    /**
     * {@inheritdoc}
     */
    public function setEmail($email)
    {
        $this->set('email', $email);
        return $this;
    }


    /**
     * {@inheritdoc}
     */
    public function setPhone($phone)
    {
        $this->set('phone', $phone);
        return $this;
    }


    /**
     * {@inheritdoc}
     */
    public function getPhone()
    {
        return $this->get('phone')->value;
    }

    /**
     * {@inheritdoc}
     */
    public function getDescription()
    {
        return $this->get('description')->value;
    }

    /**
     * {@inheritdoc}
     */
    public function setDescription($description)
    {
        $this->set('description', $description);
        return $this;
    }

    /**
     * {@inheritdoc}
     */
    public function getName()
    {
        return $this->get('name')->value;
    }

    /**
     * {@inheritdoc}
     */
    public function setName($name)
    {
        $this->set('name', $name);
        return $this;
    }

    /**
     * {@inheritdoc}
     */
    public function getCreatedTime()
    {
        return $this->get('created')->value;
    }

    /**
     * {@inheritdoc}
     */
    public function setCreatedTime($timestamp)
    {
        $this->set('created', $timestamp);
        return $this;
    }

    /**
     * {@inheritdoc}
     */
    public function getOwner()
    {
        return $this->get('user_id')->entity;
    }

    /**
     * {@inheritdoc}
     */
    public function getOwnerId()
    {
        return $this->get('user_id')->target_id;
    }

    /**
     * {@inheritdoc}
     */
    public function setOwnerId($uid)
    {
        $this->set('user_id', $uid);
        return $this;
    }

    /**
     * {@inheritdoc}
     */
    public function setOwner(UserInterface $account)
    {
        $this->set('user_id', $account->id());
        return $this;
    }

    /**
     * {@inheritdoc}
     */
    public function isPublished()
    {
        return (bool)$this->getEntityKey('status');
    }

    /**
     * {@inheritdoc}
     */
    public function setPublished($published)
    {
        $this->set('status', $published ? NODE_PUBLISHED : NODE_NOT_PUBLISHED);
        return $this;
    }

    /**
     * {@inheritdoc}
     */
    public static function baseFieldDefinitions(EntityTypeInterface $entity_type)
    {
        $fields['id'] = BaseFieldDefinition::create('integer')
            ->setLabel(t('ID'))
            ->setDescription(t('The ID of the A entity to contain contact information for future customers entity.'))
            ->setReadOnly(TRUE);
        $fields['uuid'] = BaseFieldDefinition::create('uuid')
            ->setLabel(t('UUID'))
            ->setDescription(t('The UUID of the A entity to contain contact information for future customers entity.'))
            ->setReadOnly(TRUE);

        $fields['user_id'] = BaseFieldDefinition::create('entity_reference')
            ->setLabel(t('Authored by'))
            ->setDescription(t('The user ID of author of the A entity to contain contact information for future customers entity.'))
            ->setRevisionable(TRUE)
            ->setSetting('target_type', 'user')
            ->setSetting('handler', 'default')
            ->setDefaultValueCallback('Drupal\node\Entity\Node::getCurrentUserId')
            ->setTranslatable(TRUE)
            ->setDisplayOptions('view', array(
                'label' => 'hidden',
                'type' => 'author',
                'weight' => 0,
            ))
            ->setDisplayOptions('form', array(
                'type' => 'entity_reference_autocomplete',
                'weight' => 5,
                'settings' => array(
                    'match_operator' => 'CONTAINS',
                    'size' => '60',
                    'autocomplete_type' => 'tags',
                    'placeholder' => '',
                ),
            ))
            ->setDisplayConfigurable('form', TRUE)
            ->setDisplayConfigurable('view', TRUE);

        $fields['name'] = BaseFieldDefinition::create('string')
            ->setLabel(t('Name'))
            ->setDescription(t('The name of the A entity to contain contact information for future customers entity.'))
            ->setSettings(array(
                'max_length' => 50,
                'text_processing' => 0,
            ))
            ->setDefaultValue('')
            ->setDisplayOptions('view', array(
                'label' => 'above',
                'type' => 'string',
                'weight' => -4,
            ))
            ->setDisplayOptions('form', array(
                'type' => 'string_textfield',
                'weight' => -4,
            ))
            ->setDisplayConfigurable('form', TRUE)
            ->setDisplayConfigurable('view', TRUE);

        $fields['status'] = BaseFieldDefinition::create('boolean')
            ->setLabel(t('Publishing status'))
            ->setDescription(t('A boolean indicating whether the A entity to contain contact information for future customers is published.'))
            ->setDefaultValue(TRUE);

        $fields['processed'] = BaseFieldDefinition::create('boolean')
            ->setLabel(t('Processed'))
            ->setDescription(t('A boolean describeing if a customer has been contacted or not.'))
            ->setDefaultValue(FALSE);

        $fields['langcode'] = BaseFieldDefinition::create('language')
            ->setLabel(t('Language code'))
            ->setDescription(t('The language code for the A entity to contain contact information for future customers entity.'));

        $fields['created'] = BaseFieldDefinition::create('created')
            ->setLabel(t('Created'))
            ->setDescription(t('The time that the entity was created.'));

        $fields['changed'] = BaseFieldDefinition::create('changed')
            ->setLabel(t('Changed'))
            ->setDescription(t('The time that the entity was last edited.'));

        $fields['phone'] = BaseFieldDefinition::create('string')
            ->setLabel(t('Phone'))
            ->setDescription(t('The phonenumber of future customers'))
            ->setDefaultValue('');

        $fields['email'] = BaseFieldDefinition::create('string')
            ->setLabel(t('Email'))
            ->setDescription(t('The email of future customers'))
            ->setDefaultValue('');

        $fields['description'] = BaseFieldDefinition::create('string')
            ->setLabel(t('Description'))
            ->setDescription(t('A description of whatever task the future customer wants to be contacted about'))
            ->setDefaultValue('');
        return $fields;
    }

    /**
     * Gets the timestamp of the last entity change for the current translation.
     *
     * @return int
     *   The timestamp of the last entity save operation.
     */
    public function getChangedTime()
    {
        // TODO: Implement getChangedTime() method.
    }

    /**
     * Sets the timestamp of the last entity change for the current translation.
     *
     * @param int $timestamp
     *   The timestamp of the last entity save operation.
     *
     * @return $this
     */
    public function setChangedTime($timestamp)
    {
        // TODO: Implement setChangedTime() method.
    }

    /**
     * Gets the timestamp of the last entity change across all translations.
     *
     * @return int
     *   The timestamp of the last entity save operation across all
     *   translations.
     */
    public function getChangedTimeAcrossTranslations()
    {
        // TODO: Implement getChangedTimeAcrossTranslations() method.
    }

    /**
     * Returns if we've contacted the specific customer.
     * @return bool processed
     */
    public function isProcessed()
    {
        return (bool)$this->getEntityKey('processed');
    }

    /**
     * return \Drupal\person\PersonInterface
     * A entity to contain contact information for future customers.
     * @return $this
     */
    public function process()
    {
        $this->set('processed', true);
        return $this;
    }

    /**
     * Adds cache contexts.
     *
     * @param string[] $cache_contexts
     *   The cache contexts to be added.
     *
     * @return $this
     */
    public function addCacheContexts(array $cache_contexts)
    {
        // TODO: Implement addCacheContexts() method.
    }

    /**
     * Adds cache tags.
     *
     * @param string[] $cache_tags
     *   The cache tags to be added.
     *
     * @return $this
     */
    public function addCacheTags(array $cache_tags)
    {
        // TODO: Implement addCacheTags() method.
    }

    /**
     * Merges the maximum age (in seconds) with the existing maximum age.
     *
     * The max age will be set to the given value if it is lower than the existing
     * value.
     *
     * @param int $max_age
     *   The max age to associate.
     *
     * @return $this
     *
     * @throws \InvalidArgumentException
     *   Thrown if a non-integer value is supplied.
     */
    public function mergeCacheMaxAge($max_age)
    {
        // TODO: Implement mergeCacheMaxAge() method.
    }

    /**
     * Adds a dependency on an object: merges its cacheability metadata.
     *
     * @param \Drupal\Core\Cache\CacheableDependencyInterface|object $other_object
     *   The dependency. If the object implements CacheableDependencyInterface,
     *   then its cacheability metadata will be used. Otherwise, the passed in
     *   object must be assumed to be uncacheable, so max-age 0 is set.
     *
     * @return $this
     *
     * @see \Drupal\Core\Cache\CacheableMetadata::createFromObject()
     */
    public function addCacheableDependency($other_object)
    {
        // TODO: Implement addCacheableDependency() method.
    }
}
