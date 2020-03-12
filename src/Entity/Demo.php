<?php

namespace Drupal\vdo\Entity;

use Drupal\Core\Config\Entity\ConfigEntityBase;

/**
 * Defines the demo entity.
 *
 * @ConfigEntityType(
 *   id = "demo",
 *   label = @Translation("Demos"),
 *   handlers = {
 *     "view_builder" = "Drupal\Core\Entity\EntityViewBuilder",
 *     "list_builder" = "Drupal\vdo\DemoListBuilder",
 *     "form" = {
 *       "add" = "Drupal\vdo\Form\DemoForm",
 *       "edit" = "Drupal\vdo\Form\DemoForm",
 *       "delete" = "Drupal\vdo\Form\DemoDeleteForm"
 *     },
 *     "route_provider" = {
 *       "html" = "Drupal\vdo\DemoHtmlRouteProvider",
 *     },
 *   },
 *   config_prefix = "demo",
 *   config_export = {
 *     "id" = "id",
 *     "label" = "label",
 *     "uuid" = "uuid"
 *   },
 *   admin_permission = "administer site configuration",
 *   entity_keys = {
 *     "id" = "id",
 *     "label" = "label",
 *     "uuid" = "uuid"
 *   },
 *   links = {
 *     "canonical" = "/admin/demos/{demo}",
 *     "add-form" = "/admin/demos/add",
 *     "edit-form" = "/admin/demos/{demo}/edit",
 *     "delete-form" = "/admin/demos/{demo}/delete",
 *     "collection" = "/admin/demos"
 *   }
 * )
 */
class Demo extends ConfigEntityBase implements DemoInterface {

  /**
   * The demo ID.
   *
   * @var string
   */
  protected $id;

  /**
   * The demo label.
   *
   * @var string
   */
  protected $label;

}
