<?php

namespace Drupal\vdom\Entity;

use Drupal\Core\Config\Entity\ConfigEntityBase;

/**
 * Defines the demo entity.
 *
 * @ConfigEntityType(
 *   id = "demo",
 *   label = @Translation("demo"),
 *   handlers = {
 *     "view_builder" = "Drupal\Core\Entity\EntityViewBuilder",
 *     "list_builder" = "Drupal\vdom\DemoListBuilder",
 *     "form" = {
 *       "add" = "Drupal\vdom\Form\DemoForm",
 *       "edit" = "Drupal\vdom\Form\DemoForm",
 *       "delete" = "Drupal\vdom\Form\DemoDeleteForm"
 *     },
 *     "route_provider" = {
 *       "html" = "Drupal\vdom\DemoHtmlRouteProvider",
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
