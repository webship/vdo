<?php

namespace Drupal\vdom\Entity;

use Drupal\Core\Config\Entity\ConfigEntityBase;

/**
 * Defines the Product entity.
 *
 * @ConfigEntityType(
 *   id = "product",
 *   label = @Translation("Product"),
 *   handlers = {
 *     "view_builder" = "Drupal\Core\Entity\EntityViewBuilder",
 *     "list_builder" = "Drupal\vdom\ProductListBuilder",
 *     "form" = {
 *       "add" = "Drupal\vdom\Form\ProductForm",
 *       "edit" = "Drupal\vdom\Form\ProductForm",
 *       "delete" = "Drupal\vdom\Form\ProductDeleteForm"
 *     },
 *     "route_provider" = {
 *       "html" = "Drupal\vdom\ProductHtmlRouteProvider",
 *     },
 *   },
 *   config_prefix = "product",
 *   admin_permission = "administer site configuration",
 *   entity_keys = {
 *     "id" = "id",
 *     "label" = "label",
 *     "uuid" = "uuid"
 *   },
 *   links = {
 *     "canonical" = "/admin/structure/product/{product}",
 *     "add-form" = "/admin/structure/product/add",
 *     "edit-form" = "/admin/structure/product/{product}/edit",
 *     "delete-form" = "/admin/structure/product/{product}/delete",
 *     "collection" = "/admin/structure/product"
 *   }
 * )
 */
class Product extends ConfigEntityBase implements ProductInterface {

  /**
   * The Product ID.
   *
   * @var string
   */
  protected $id;

  /**
   * The Product label.
   *
   * @var string
   */
  protected $label;

}
