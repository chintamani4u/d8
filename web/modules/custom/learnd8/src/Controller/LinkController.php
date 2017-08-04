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
    '#markup' => '<h3>Simple Link fromUri</h3>'
    ];

    //Create url
    $url = Url::fromUri('http://www.umarani.com');
    $text = $this->t('umarani.com');
    $link = new Link($text,$url);
    $content[] = [
        '#type' =>'markup',
        '#markup' => $link->toString()
    ];

    $content[] = [
        '#type' => 'markup',
        '#markup' => '<h3>Link fromroute</h3>'
    ];

    $url = Url::fromRoute('<front>');
    $text = $this->t('Home');
    $link = Link::fromTextAndUrl($text,$url);

    $content[] = [
        '#type' => 'markup',
        '#markup' => $link,
    ];
      return $content;
  }

}
