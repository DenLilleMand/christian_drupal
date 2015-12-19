<?php
/**
 * Created by PhpStorm.
 * User: denlillemand
 * Date: 12/19/15
 * Time: 2:08 PM
 */


/**
 * @file
 * Contains Drupal\christian\Plugin\Block\ContactBlock
 */

namespace Drupal\christian\Plugin\Block;

use Drupal\Core\Block\BlockBase;

/**
 * @Block(
 *      id = "christian_contactblock",
 *      admin_label = "Contact block",
 *      module = "christian"
 * )
 */
class ContactBlock extends Blockbase {
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
           '#theme' => 'christian_contact',
           '#attached' => array(
             'library' => array(
                    'christian/christian'
             ),
           ),
       );
    }
}