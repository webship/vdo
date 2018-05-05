<?php

namespace Drupal\vdo\Entity;

use Drupal\Core\Config\Entity\ConfigEntityBase;

/**
 * Defines the demo entity.
 *
 * @ConfigEntityType(
 *   id = "demo",
 *   label = @Translation("demo"),
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
 *   admin_permission = "administer site configuration",
 *   entity_keys = {
 *     "id" = "id",
 *     "label" = "label",
 *     "uuid" = "uuid"
 *   },
 *   links = {
 *     "canonical" = "/admin/structure/demo/{demo}",
 *     "add-form" = "/admin/structure/demo/add",
 *     "edit-form" = "/admin/structure/demo/{demo}/edit",
 *     "delete-form" = "/admin/structure/demo/{demo}/delete",
 *     "collection" = "/admin/structure/demo"
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
