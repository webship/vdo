<?php

namespace Drupal\vdo\Entity;

use Drupal\Core\Config\Entity\ConfigEntityBase;

/**
 * Defines the Test entity.
 *
 * @ConfigEntityType(
 *   id = "test",
 *   label = @Translation("Tests"),
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
 *     "canonical" = "/admin/tests/{test}",
 *     "add-form" = "/admin/tests/add",
 *     "edit-form" = "/admin/tests/{test}/edit",
 *     "delete-form" = "/admin/tests/{test}/delete",
 *     "collection" = "/admin/tests"
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
