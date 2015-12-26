<?php
/**
 * Created by PhpStorm.
 * User: denlillemand
 * Date: 12/26/15
 * Time: 1:47 PM
 */

/**
 * @file
 * Contains Drupal\person\Plugin\Block\PersonBlock
 */

namespace Drupal\person\Plugin\Block;

use Drupal\Core\Block\BlockBase;
use Drupal\Core\Plugin\ContainerFactoryPluginInterface;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Drupal\Core\Form\FormBuilderInterface;

/**
 * @Block(
 *      id = "person_block_id",
 *      admin_label = "Person block",
 *      module = "person"
 * )
 */
class PersonBlock extends Blockbase implements ContainerFactoryPluginInterface
{

    /**
     * @var FormBuilderInterface
     */
    protected $formBuilder;

    /**
     * @param array $configuration
     * @param string $plugin_id
     * @param mixed $plugin_definition
     * @param $formBuilder
     */
    public function __construct(array $configuration, $plugin_id, $plugin_definition, $formBuilder)
    {
        parent::__construct($configuration, $plugin_id, $plugin_definition);
        $this->formBuilder = $formBuilder;
    }

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
    public function build()
    {
        return $this->formBuilder->getForm('Drupal\person\Form\PersonForm');
    }


    /**
     * Creates an instance of the plugin.
     *
     * @param \Symfony\Component\DependencyInjection\ContainerInterface $container
     *   The container to pull out services used in the plugin.
     * @param array $configuration
     *   A configuration array containing information about the plugin instance.
     * @param string $plugin_id
     *   The plugin ID for the plugin instance.
     * @param mixed $plugin_definition
     *   The plugin implementation definition.
     *
     * @return static
     *   Returns an instance of this plugin.
     */
    public static function create(ContainerInterface $container, array $configuration, $plugin_id, $plugin_definition)
    {
        return new static(
            $configuration,
            $plugin_id,
            $plugin_definition,
            $container->get('form_builder')
        );
    }
}