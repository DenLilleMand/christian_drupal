<?php
/**
 * Created by PhpStorm.
 * User: denlillemand
 * Date: 12/19/15
 * Time: 12:22 AM
 */

/**
 * @file
 * Contains Drupal\christian\Form\ContactForm
 */


namespace Drupal\christian\Form;

use Drupal\Core\Form\FormBase;
use Drupal\Core\Form\FormStateInterface;
use Drupal\Core\Form\FormInterface;


class ContactForm extends FormBase implements FormInterface {

    /**
     * Returns a unique string identifying the form.
     *
     * @return string
     *   The unique string identifying the form.
     */
    public function getFormId()
    {
        return "christian_contact_form_id";
    }

    /**
     * @param array $form
     * @param FormStateInterface $form_state
     */
    public function validateForm(array &$form, FormStateInterface $form_state)
    {

    }

    /**
     * Form constructor.
     * Kan se mulige typer osv. for forms: https://api.drupal.org/api/drupal/developer!topics!forms_api_reference.html/8
     *
     * @param array $form
     *   An associative array containing the structure of the form.
     * @param \Drupal\Core\Form\FormStateInterface $form_state
     *   The current state of the form.
     *
     * @return array
     *   The form structure.
     *
     */
    public function buildForm(array $form, FormStateInterface $form_state)
    {
        global $base_root, $base_path;
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
        $form['row-featurette']['form']['actions']['submit'] = array(
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

        return $form;
    }

    /**
     * Form submission handler
     * @param array $form
     *   An associative array containing the structure of the form.
     * @param \Drupal\Core\Form\FormStateInterface $form_state
     *   The current state of the form.
     */
    public function submitForm(array &$form, FormStateInterface $form_state)
    {
        $values = $form_state->getValues();
        $name = $values['first_name'];
        $info = $values['information'];
        drupal_set_message('Tak fordi du udfyldte formen, vi kontaker dig hurtigst muligt');
    }
}