<?php

namespace Drupal\vdom\Form;

use Drupal\Core\Entity\EntityForm;
use Drupal\Core\Form\FormStateInterface;

/**
 * Class ProductForm.
 */
class ProductForm extends EntityForm {

  /**
   * {@inheritdoc}
   */
  public function form(array $form, FormStateInterface $form_state) {
    $form = parent::form($form, $form_state);

    $product = $this->entity;
    $form['label'] = [
      '#type' => 'textfield',
      '#title' => $this->t('Label'),
      '#maxlength' => 255,
      '#default_value' => $product->label(),
      '#description' => $this->t("Label for the Product."),
      '#required' => TRUE,
    ];

    $form['id'] = [
      '#type' => 'machine_name',
      '#default_value' => $product->id(),
      '#machine_name' => [
        'exists' => '\Drupal\vdom\Entity\Product::load',
      ],
      '#disabled' => !$product->isNew(),
    ];

    /* You will need additional form elements for your custom properties. */

    return $form;
  }

  /**
   * {@inheritdoc}
   */
  public function save(array $form, FormStateInterface $form_state) {
    $product = $this->entity;
    $status = $product->save();

    switch ($status) {
      case SAVED_NEW:
        drupal_set_message($this->t('Created the %label Product.', [
          '%label' => $product->label(),
        ]));
        break;

      default:
        drupal_set_message($this->t('Saved the %label Product.', [
          '%label' => $product->label(),
        ]));
    }
    $form_state->setRedirectUrl($product->toUrl('collection'));
  }

}
