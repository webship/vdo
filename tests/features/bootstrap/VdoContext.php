<?php

/**
 * @file
 * Contains \VdoContext.
 */

namespace Drupal\vdo\VdoContext;

use Drupal\DrupalExtension\Context\RawDrupalContext;
use Behat\Behat\Context\SnippetAcceptingContext;

/**
 * Defines application features from the specific context.
 */
class VdoContext extends RawDrupalContext implements SnippetAcceptingContext {

  /**
   * Hold all passed parameters.
   *
   * @var array
   */
  protected $parameters = [];

  /**
   * Initializes context.
   *
   * @param array $parameters
   *   The parameters.
   */
  public function __construct(array $parameters) {

    // Set the list of parameters.
    $this->parameters = $parameters;

  }

  /**
   * Clean users.
   */
  public function cleanUsers() {

  }

  /**
   * Maximize the window before scenario.
   *
   * @BeforeScenario @javascript
   */
  public function beforeScenarioMaximizeWindow() {
    $this->getSession()->getDriver()->maximizeWindow();
  }

}
