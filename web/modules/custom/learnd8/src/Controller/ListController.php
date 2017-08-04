<?php

namespace Drupal\learnd8\Controller;

use Drupal\Core\Controller\ControllerBase;

/**
 * Class ListController.
 */
class ListController extends ControllerBase {

  /**
   * Generatelist.
   *
   * @return string
   *   Return Hello string.
   */
  public function generateList() {

      $bikes = [
          'Activa',
          'Pulser',
          'Avenger',
          'Platina',
          'Splendor',
      ];

      $autombiles = [
       [
          '#markup' => 'Bikes',
          'children' => $bikes,
      ],
       'Skoda',
       'Safari',
       'Nexon',
      ];


      // Create the item list as a render array.
      $content[] = [
          '#theme' => 'item_list',
          '#items' => $autombiles,
          '#title' => t('Some Fruits - Apples are nested items'),
          '#list_type' => 'ol',
          '#attributes' => [
              'class' => ['class-1', 'class-2']
          ]
      ];

      return $content;
  }

}
