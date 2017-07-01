<?php

namespace Drupal\vdom\Entity;

use Drupal\Core\Config\Entity\ConfigEntityBase;

/**
 * Defines the Dev entity.
 *
 * @ConfigEntityType(
 *   id = "dev",
 *   label = @Translation("Dev"),
 *   handlers = {
 *     "view_builder" = "Drupal\Core\Entity\EntityViewBuilder",
 *     "list_builder" = "Drupal\vdom\DevListBuilder",
 *     "form" = {
 *       "add" = "Drupal\vdom\Form\DevForm",
 *       "edit" = "Drupal\vdom\Form\DevForm",
 *       "delete" = "Drupal\vdom\Form\DevDeleteForm"
 *     },
 *     "route_provider" = {
 *       "html" = "Drupal\vdom\DevHtmlRouteProvider",
 *     },
 *   },
 *   config_prefix = "dev",
 *   admin_permission = "administer site configuration",
 *   entity_keys = {
 *     "id" = "id",
 *     "label" = "label",
 *     "uuid" = "uuid"
 *   },
 *   links = {
 *     "canonical" = "/admin/structure/dev/{dev}",
 *     "add-form" = "/admin/structure/dev/add",
 *     "edit-form" = "/admin/structure/dev/{dev}/edit",
 *     "delete-form" = "/admin/structure/dev/{dev}/delete",
 *     "collection" = "/admin/structure/dev"
 *   }
 * )
 */
class Dev extends ConfigEntityBase implements DevInterface {

  /**
   * The Dev ID.
   *
   * @var string
   */
  protected $id;

  /**
   * The Dev label.
   *
   * @var string
   */
  protected $label;

}
