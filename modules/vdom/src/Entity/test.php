<?php

namespace Drupal\vdom\Entity;

use Drupal\Core\Config\Entity\ConfigEntityBase;

/**
 * Defines the Test entity.
 *
 * @ConfigEntityType(
 *   id = "test",
 *   label = @Translation("Test"),
 *   handlers = {
 *     "view_builder" = "Drupal\Core\Entity\EntityViewBuilder",
 *     "list_builder" = "Drupal\vdom\testListBuilder",
 *     "form" = {
 *       "add" = "Drupal\vdom\Form\testForm",
 *       "edit" = "Drupal\vdom\Form\testForm",
 *       "delete" = "Drupal\vdom\Form\testDeleteForm"
 *     },
 *     "route_provider" = {
 *       "html" = "Drupal\vdom\testHtmlRouteProvider",
 *     },
 *   },
 *   config_prefix = "test",
 *   admin_permission = "administer site configuration",
 *   entity_keys = {
 *     "id" = "id",
 *     "label" = "label",
 *     "uuid" = "uuid"
 *   },
 *   links = {
 *     "canonical" = "/admin/structure/test/{test}",
 *     "add-form" = "/admin/structure/test/add",
 *     "edit-form" = "/admin/structure/test/{test}/edit",
 *     "delete-form" = "/admin/structure/test/{test}/delete",
 *     "collection" = "/admin/structure/test"
 *   }
 * )
 */
class test extends ConfigEntityBase implements testInterface {

  /**
   * The Test ID.
   *
   * @var string
   */
  protected $id;

  /**
   * The Test label.
   *
   * @var string
   */
  protected $label;

}
