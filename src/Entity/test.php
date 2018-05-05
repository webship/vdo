<?php

namespace Drupal\vdo\Entity;

use Drupal\Core\Config\Entity\ConfigEntityBase;

/**
 * Defines the Test entity.
 *
 * @ConfigEntityType(
 *   id = "test",
 *   label = @Translation("Test"),
 *   handlers = {
 *     "view_builder" = "Drupal\Core\Entity\EntityViewBuilder",
 *     "list_builder" = "Drupal\vdo\testListBuilder",
 *     "form" = {
 *       "add" = "Drupal\vdo\Form\testForm",
 *       "edit" = "Drupal\vdo\Form\testForm",
 *       "delete" = "Drupal\vdo\Form\testDeleteForm"
 *     },
 *     "route_provider" = {
 *       "html" = "Drupal\vdo\testHtmlRouteProvider",
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
