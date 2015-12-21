<?php
/**
 * Created by PhpStorm.
 * User: denlillemand
 * Date: 12/20/15
 * Time: 9:59 PM
 */

/**
 * @file
 * Contains Drupal\christian\Plugin\Block\ContactTeaserBlock
 */

namespace Drupal\christian\Plugin\Block;

use Drupal\Core\Block\BlockBase;

/**
 * Class ContactTeaserBlock
 * @package Drupal\christian\Plugin\Block
 * @Block(
 *      id = "contact_teaser_block_id",
 *      admin_label = "contact teaser block",
 *      module = "christian"
 * )
 */
class ContactTeaserBlock extends BlockBase {
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
            '#theme' => 'christian_contact_teaser',
            '#attached' => array(
                'library' => array(
                    'christian/christian'
                )
            )
        );
    }
}