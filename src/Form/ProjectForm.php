<?php

namespace Drupal\vdo\Form;

use Drupal\Core\Entity\EntityForm;
use Drupal\Core\Form\FormStateInterface;

/**
 * Class ProjectForm.
 */
class ProjectForm extends EntityForm {

  /**
   * {@inheritdoc}
   */
  public function form(array $form, FormStateInterface $form_state) {
    $form = parent::form($form, $form_state);

    $project = $this->entity;
    $form['label'] = [
      '#type' => 'textfield',
      '#title' => $this->t('Label'),
      '#maxlength' => 255,
      '#default_value' => $project->label(),
      '#description' => $this->t("Label for the Project."),
      '#required' => TRUE,
    ];

    $form['id'] = [
      '#type' => 'machine_name',
      '#default_value' => $project->id(),
      '#machine_name' => [
        'exists' => '\Drupal\vdo\Entity\Project::load',
      ],
      '#disabled' => !$project->isNew(),
    ];

    /* You will need additional form elements for your custom properties. */

    return $form;
  }

  /**
   * {@inheritdoc}
   */
  public function save(array $form, FormStateInterface $form_state) {
    $project = $this->entity;
    $status = $project->save();

    switch ($status) {
      case SAVED_NEW:
        drupal_set_message($this->t('Created the %label Project.', [
          '%label' => $project->label(),
        ]));
        break;

      default:
        drupal_set_message($this->t('Saved the %label Project.', [
          '%label' => $project->label(),
        ]));
    }
    $form_state->setRedirectUrl($project->toUrl('collection'));
  }

}
