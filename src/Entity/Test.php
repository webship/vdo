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
 *     "list_builder" = "Drupal\vdo\TestListBuilder",
 *     "form" = {
 *       "add" = "Drupal\vdo\Form\TestForm",
 *       "edit" = "Drupal\vdo\Form\TestForm",
 *       "delete" = "Drupal\vdo\Form\TestDeleteForm"
 *     },
 *     "route_provider" = {
 *       "html" = "Drupal\vdo\TestHtmlRouteProvider",
 *     },
 *   },
 *   config_prefix = "test",
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
 *     "canonical" = "/admin/tests/{test}",
 *     "add-form" = "/admin/tests/add",
 *     "edit-form" = "/admin/tests/{test}/edit",
 *     "delete-form" = "/admin/tests/{test}/delete",
 *     "collection" = "/admin/tests"
 *   }
 * )
 */
class Test extends ConfigEntityBase implements testInterface {

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
