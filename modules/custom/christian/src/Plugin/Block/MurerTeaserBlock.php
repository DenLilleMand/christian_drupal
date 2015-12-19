<?php
/**
 * Created by PhpStorm.
 * User: denlillemand
 * Date: 12/19/15
 * Time: 12:13 AM
 */

/**
 * @file
 * Contains Drupal\christian\Plugin\Block\MurerTeaserBlock
 */

namespace Drupal\christian\Plugin\Block;

use Drupal\Core\Block\BlockBase;

/**
 * Class MurerTeaserBlock
 * @package Drupal\christian\Plugin\Block
 * @Block(
 *      id = "christian_murerteaserblock",
 *      admin_label = "Murer teaser block",
 *      module = "christian"
 * )
 */
class MurerTeaserBlock extends BlockBase
{
    /**
     * Builds and returns the renderable array for this block plugin.
     *
     * If a block should not be rendered because it has no content, then this
     * method must also ensure to return no content: it must then only return an
     * empty array, or an empty array with #cache set (with cacheability metadata
     * indicating the circumstances for it being empty).
     *
     * @return array
     *   A renderable array representing the content of the block.
     */
    public function build() {
        return array(
            '#theme' => 'christian_murer_teaser',
            '#attached' => array(
                'library' => array(
                    'christian/christian'
                ),
            ),
        );
    }
}