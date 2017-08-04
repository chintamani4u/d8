<?php

namespace Drupal\learnd8\Controller;

use Drupal\Core\Controller\ControllerBase;
use Drupal\Core\Link;
use Drupal\Core\Url;

/**
 * Class LinkController.
 */
class LinkController extends ControllerBase {

  /**
   * Generatelinks.
   *
   * @return string
   *   Return Hello string.
   */
  public function generateLinks() {
    $content = [];

    $content[] = [
    '#type' => 'markup',
    '#markup' => '<h3>Links Test</h3>'
    ];

    //Create url
    $url = Url::fromUri('http://www.umarani.com');
    $text = $this->t('umarani.com');
    $link = new Link($text,$url);
    $content[] = [
        '#type' =>'markup',
        '#markup' => $link->toString()
    ];
      return $content;
  }

}
