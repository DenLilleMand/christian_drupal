<?php
/**
 * Created by PhpStorm.
 * User: denlillemand
 * Date: 12/31/15
 * Time: 12:30 AM
 */

/**
 * @file
 * Contains Drupal\person\Form\PersonEditForm
 */

namespace Drupal\person\Form;

use Drupal\Core\Entity\ContentEntityForm;
use Drupal\Core\Entity\ContentEntityFormInterface;
use Drupal\Core\Form\FormStateInterface;

/**
 * Class PersonEditForm
 * @package Drupal\person\Form
 * @ingroup person
 */
class PersonEditForm extends ContentEntityForm implements ContentEntityFormInterface {

    /**
     * {@inheritdoc}
     */
    public function buildForm(array $form, FormStateInterface $form_state) {
        /** @var $entity \Drupal\person\Entity\Person */
        global $base_root, $base_path;
        $form = parent::buildForm($form, $form_state);
        $entity = $this->entity;

        $image = 'contactimage.jpg';
        $image_url = $base_root . $base_path . drupal_get_path('module', 'christian') . '/images/' . $image;
        $form['divider'] = array(
            '#markup' => '<hr class="featurette-divider">'
        );
        $form['row-featurette'] = array(
            '#type' => 'container',
            '#attributes' => array(
                'class' => array('row', 'featurette'),
            ),
        );

        //form
        $form['row-featurette']['form'] = array(
            '#type' => 'container',
            '#attributes' => array(
                'class' => array('col-md-7'),
                'id' => 'contact-form'
            ),
        );

        //number
        $form['row-featurette']['form']['number-fieldset'] = array(
            '#type' => 'fieldset',
            '#attributes' => array(
                'class' => array('form-group')
            ),
        );
        $form['row-featurette']['form']['number-fieldset']['number-label'] = array(
            '#markup' => '<label for="number-field">Telefon nummer</label>',
        );
        $form['row-featurette']['form']['number-fieldset']['number-field'] = array(
            '#type' => 'textfield',
            '#attributes' => array(
                'class' => array('form-control'),
                'id' => 'number-field'
            ),
            '#default_value' => $entity->getPhone()
        );

        //email
        $form['row-featurette']['form']['email-fieldset'] = array(
            '#type' => 'fieldset',
            '#attributes' => array(
                'class' => array('form-group')
            ),
        );

        $form['row-featurette']['form']['email-fieldset']['email-label'] = array(
            '#markup' => '<label for="email-field">Email</label>'
        );

        $form['row-featurette']['form']['email-fieldset']['email-field'] = array(
            '#type' => 'textfield',
            '#attributes' => array(
                'class' => array('form-control'),
                'id' => 'email-field'
            ),
            '#default_value' => $entity->getEmail()
        );

        $form['row-featurette']['form']['description-fieldset'] = array(
            '#type' => 'fieldset',
            '#attributes' => array(
                'class' => array('form-group'),
            ),
        );

        $form['row-featurette']['form']['description-fieldset']['description-label'] = array(
            '#markup' => '<label for="description_field_id">Beskrivelse</label>'
        );

        $form['row-featurette']['form']['description-fieldset']['description-textarea'] = array(
            '#type' => 'textarea',
            '#attributes' => array(
                'class' => array('form-control'),
                'id' => 'description_field_id'
            ),
            '#default_value' => $entity->getDescription()
        );

        $form['row-featurette']['form']['processed-fieldset'] = array(
            '#type' => 'fieldset',
            '#attributes' => array(
                'class' => array('form-group'),
            ),
        );

        $form['row-featurette']['form']['processed-fieldset']['processed-label'] = array(
            '#markup' => '<label for="processed_checkbox_id">Processed</label>'
        );

        $form['row-featurette']['form']['processed-fieldset']['processed-checkbox'] = array(
            '#type' => 'checkbox',
            '#attributes' => array(
                'class' => array('form-control'),
                'id' => 'processed_box_id'
            ),
            '#default_value' => $entity->isProcessed()
        );

        /** $form['row-featurette']['form']['actions'] = array('#type' => 'actions'); */
        $form['actions']['submit'] = array(
            '#type' => 'submit',
            '#value' => $this->t('Update'),
            '#attributes' => array(
                'class' => array('btn', 'btn-success', 'btn-lg')
            ),
            '#name' => '',
        );
        return $form;
    }

    /**
     * {@inheritdoc}
     */
    public function validateForm(array &$form, FormStateInterface $form_state)
    {
        return parent::validateForm($form, $form_state); //TODO: Change the autogenerated stub
    }

    /**
     * {@inheritdoc}
     */
    public function submitForm(array &$form, FormStateInterface $form_state)
    {
        parent::submitForm($form, $form_state); // TODO: Change the autogenerated stub
        /* @var $entity \Drupal\person\Entity\Person */
        $entity = $this->entity;
        $values = $form_state->getValues();
        $entity->setDescription($values['description-textarea']);
        $entity->setPhone($values['number-field']);
        $entity->setEmail($values['email-field']);
        if($values['processed-checkbox']) {
            $entity->process();
        }
        $entity->save();
    }
}

