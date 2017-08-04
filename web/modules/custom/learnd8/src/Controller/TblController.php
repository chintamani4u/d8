<?php

namespace Drupal\learnd8\Controller;

use Drupal\Core\Controller\ControllerBase;

/**
 * Class TblController.
 */
class TblController extends ControllerBase {

  /**
   * Hello.
   *
   * @return string
   *   Return Hello string.
   */
  public function generateTbl() {
    //header
      $header = [
        ['data' => t('Car')],
        ['data' => t('Manufacturer')],
      ];

    //rows
      $rows[] = '';

      $rows[] =[
          t('Celerio'),
          t('Maruti Suzuki'),
      ];



    //table
      $content[] =[
        '#theme' => 'table',
        '#header' => $header,
        '#rows' => $rows,
      ];

      return $content;
  }

}
