<?php

/**
 * @file
 * Contains \Drupal\person\Form\PersonForm.
 */

namespace Drupal\person\Form;

use Drupal\Core\Entity\ContentEntityForm;
use Drupal\Core\Form\FormStateInterface;
use Drupal\Core\Language\Language;
use Drupal\Core\Entity\ContentEntityFormInterface;

/**
 * Form controller for A entity to contain contact information for future customers edit forms.
 *
 * @ingroup person
 */
class PersonForm extends ContentEntityForm implements ContentEntityFormInterface
{

    /**
     * {@inheritdoc}
     */
    public function buildForm(array $form, FormStateInterface $form_state)
    {
        /* @var $entity \Drupal\person\Entity\Person */
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
        $form['row-featurette']['form']['header'] = array(
            '#markup' => '<h2>Lad os kontakte dig</h2>'
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
        );
        $form['row-featurette']['form']['description-fieldset']['description-field'] = array(
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
        );

        $form['row-featurette']['form']['actions'] = array('#type' => 'actions');
        $form['actions']['submit'] = array(
            '#type' => 'submit',
            '#value' => $this->t('Send'),
            '#attributes' => array(
                'class' => array('btn', 'btn-success', 'btn-lg')
            ),
            '#name' => '',
        );

        //image
        $form['row-featurette']['image'] = array(
            '#type' => 'container',
            '#attributes' => array(
                'class' => array('col-md-5'),
                'id' => 'contact-form-image'
            ),
        );

        $form['row-featurette']['image']['contact-image'] = array(
            '#markup' => '<img id="contact-image" class="featurette-image img-fluid center-block" src=' . $image_url .' alt="Kontakt billed">'
        );

        $form['langcode'] = array(
            '#title' => $this->t('Language'),
            '#type' => 'language_select',
            '#default_value' => $entity->langcode->value,
            '#languages' => Language::STATE_ALL,
        );
        return $form;
    }

    public function validateForm(array &$form, FormStateInterface $form_state)
    {
        return parent::validateForm($form, $form_state);
    }

    public function submitForm(array &$form, FormStateInterface $form_state)
    {
        /* @var $entity \Drupal\person\Entity\Person */
        $entity = $this->entity;
        $values = $form_state->getValues();
        $entity->setDescription($values['description-textarea']);
        $entity->setPhone($values['number-field']);
        $entity->setEmail($values['email-field']);
        $status = $entity->save();
        if($status) {
            drupal_set_message($this->t('Tak fordi du udfyldte oplysningerne, vi vil kontakte dig hurtigst muligt'));
        } else {
           //@TODO: validate formen ordentligt saadan at der kommer røde streger rundt om felterne, maaske skal det gøres i validateForm metoden istedet :)
        }

        //Redirect for edit(not that sexy for users rofl):
        // $form_state->setRedirect('entity.person.edit_form', ['person' => $entity->id()]);
    }
}
