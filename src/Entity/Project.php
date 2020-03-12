<?php

namespace Drupal\vdo\Entity;

use Drupal\Core\Config\Entity\ConfigEntityBase;

/**
 * Defines the Project entity.
 *
 * @ConfigEntityType(
 *   id = "project",
 *   label = @Translation("Projects"),
 *   handlers = {
 *     "view_builder" = "Drupal\Core\Entity\EntityViewBuilder",
 *     "list_builder" = "Drupal\vdo\ProjectListBuilder",
 *     "form" = {
 *       "add" = "Drupal\vdo\Form\ProjectForm",
 *       "edit" = "Drupal\vdo\Form\ProjectForm",
 *       "delete" = "Drupal\vdo\Form\ProjectDeleteForm"
 *     },
 *     "route_provider" = {
 *       "html" = "Drupal\vdo\ProjectHtmlRouteProvider",
 *     },
 *   },
 *   config_prefix = "project",
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
 *     "canonical" = "/admin/projects/{project}",
 *     "add-form" = "/admin/projects/add",
 *     "edit-form" = "/admin/projects/{project}/edit",
 *     "delete-form" = "/admin/projects/{project}/delete",
 *     "collection" = "/admin/projects"
 *   }
 * )
 */
class Project extends ConfigEntityBase implements ProjectInterface {

  /**
   * The Project ID.
   *
   * @var string
   */
  protected $id;

  /**
   * The Project label.
   *
   * @var string
   */
  protected $label;

}
