<?php

/**
 * @file
 * Contains \Drupal\links\Controller\Links.
 */

namespace Drupal\links\Controller;

use Drupal\Core\Url;

class links {

  public function test() {
    $links = array(
      '#markup' => 'testing link',
    );

    for ($i=0; $i <= 1000; $i++) {
      $links[] = array(
        '#prefix' => '<br />',
        '#type' => 'link',
        '#title' => array('#markup' => 'generator ', '#suffix' => $i),
        '#url' => Url::fromRoute('<front>'),
      );
    }

    return $links;
  }
}