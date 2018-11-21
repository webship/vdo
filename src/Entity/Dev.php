<?php

namespace Drupal\vdo\Entity;

use Drupal\Core\Config\Entity\ConfigEntityBase;

/**
 * Defines the Dev entity.
 *
 * @ConfigEntityType(
 *   id = "dev",
 *   label = @Translation("Devs"),
 *   handlers = {
 *     "view_builder" = "Drupal\Core\Entity\EntityViewBuilder",
 *     "list_builder" = "Drupal\vdo\DevListBuilder",
 *     "form" = {
 *       "add" = "Drupal\vdo\Form\DevForm",
 *       "edit" = "Drupal\vdo\Form\DevForm",
 *       "delete" = "Drupal\vdo\Form\DevDeleteForm"
 *     },
 *     "route_provider" = {
 *       "html" = "Drupal\vdo\DevHtmlRouteProvider",
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
 *     "canonical" = "/admin/devs/{dev}",
 *     "add-form" = "/admin/devs/add",
 *     "edit-form" = "/admin/devs/{dev}/edit",
 *     "delete-form" = "/admin/devs/{dev}/delete",
 *     "collection" = "/admin/devs"
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
