<?php

namespace Drupal\vdo\Form;

use Drupal\Core\Entity\EntityForm;
use Drupal\Core\Form\FormStateInterface;

/**
 * Class testForm.
 */
class testForm extends EntityForm {

  /**
   * {@inheritdoc}
   */
  public function form(array $form, FormStateInterface $form_state) {
    $form = parent::form($form, $form_state);

    $test = $this->entity;
    $form['label'] = [
      '#type' => 'textfield',
      '#title' => $this->t('Label'),
      '#maxlength' => 255,
      '#default_value' => $test->label(),
      '#description' => $this->t("Label for the Test."),
      '#required' => TRUE,
    ];

    $form['id'] = [
      '#type' => 'machine_name',
      '#default_value' => $test->id(),
      '#machine_name' => [
        'exists' => '\Drupal\vdo\Entity\test::load',
      ],
      '#disabled' => !$test->isNew(),
    ];

    /* You will need additional form elements for your custom properties. */

    return $form;
  }

  /**
   * {@inheritdoc}
   */
  public function save(array $form, FormStateInterface $form_state) {
    $test = $this->entity;
    $status = $test->save();

    switch ($status) {
      case SAVED_NEW:
        drupal_set_message($this->t('Created the %label Test.', [
          '%label' => $test->label(),
        ]));
        break;

      default:
        drupal_set_message($this->t('Saved the %label Test.', [
          '%label' => $test->label(),
        ]));
    }
    $form_state->setRedirectUrl($test->toUrl('collection'));
  }

}
