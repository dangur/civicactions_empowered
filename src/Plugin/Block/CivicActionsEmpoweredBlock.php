<?php

namespace Drupal\civicactions_empowered\Plugin\Block;

use Drupal\Core\Block\BlockBase;

/**
 * Provides a 'CivicActionsEmpoweredBlock' block.
 *
 * @Block(
 *  id = "civic_actions_empowered_block",
 *  admin_label = @Translation("CivicActions Empowered block"),
 * )
 */
class CivicActionsEmpoweredBlock extends BlockBase {

  /**
   * {@inheritdoc}
   */
  public function defaultConfiguration() {
    return ['label_display' => FALSE];
  }

  /**
   * {@inheritdoc}
   */
  public function build() {
    $build = [];
    $build['civic_actions_empowered_block']['#markup'] = '<a href="https://civicactions.com">CivicActions</a> Empowered';

    return $build;
  }

}
