<?php

/**
 * @file
 * Contains \Drupal\oxide\OxideServiceProvider.
 */

namespace Drupal\oxide;

use Drupal\Core\DependencyInjection\ContainerBuilder;
use Drupal\Core\DependencyInjection\ServiceModifierInterface;

/**
 * Tbd.
 */
class OxideServiceProvider implements ServiceModifierInterface {

  /**
   * {@inheritdoc}
   */
  public function alter(ContainerBuilder $container) {
    if ($container->has('twig.loader.filesystem') && is_a($container->getDefinition('twig.loader.filesystem')->getClass(), 'Drupal\Core\Template\Loader\FilesystemLoader', TRUE)) {
      $container->getDefinition('twig.loader.filesystem')->setTags([
        'twig.loader' => [
          ['priority' => 90 ]
        ]
      ]);
    }
  }

}
