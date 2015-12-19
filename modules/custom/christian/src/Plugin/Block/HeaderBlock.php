<?php
/**
 * Created by PhpStorm.
 * User: denlillemand
 * Date: 12/18/15
 * Time: 4:57 PM
 */


/**
 * @file
 * Contains \Drupal\header\Plugin\Block\HeaderBlock
 */

namespace Drupal\christian\Plugin\Block;


use Drupal\Core\Block\BlockBase;

/**
 * Class HeaderBlock
 * @package Drupal\header\Plugin\Block
 * @Block(
 *   id = "christian_header",
 *   admin_label = "Header",
 *   module = "christian"
 * )
 */
class HeaderBlock extends BlockBase {

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
     *
     * @see \Drupal\block\BlockViewBuilder
     */
    public function build() {
        return array(
            '#theme' => 'christian_header',
            '#attached' => array(
                'library' => array(
                    'christian/christian'
                )
            )
        );
    }
}
