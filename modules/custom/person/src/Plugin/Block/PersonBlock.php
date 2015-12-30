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
use Drupal\Core\Entity\EntityFormBuilderInterface;
use Drupal\person\Entity\Person;

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
            $container->get('entity.form_builder')
        );
    }

    /**
     * @var EntityFormBuilderInterface
     */
    protected $entityFormBuilder;

    /**
     * @param array $configuration
     * @param string $plugin_id
     * @param mixed $plugin_definition
     * @param $entityFormBuilder
     */
    public function __construct(array $configuration, $plugin_id, $plugin_definition, $entityFormBuilder)
    {
        parent::__construct($configuration, $plugin_id, $plugin_definition);
        $this->entityFormBuilder = $entityFormBuilder;
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
     *
     * Jeg taenkte at finde noget kode som bruger den her entityforbuilder metode, og see hvordan de faar fat i vores entity:
     * https://api.drupal.org/api/drupal/core!lib!Drupal!Core!Entity!EntityFormBuilder.php/function/EntityFormBuilder%3A%3AgetForm/8
     *
     * Nogle moduler som gør det samme:
     * https://www.drupal.org/project/entityform_block
     *
     * https://www.drupal.org/project/eform
     *
     * Ellers er EntityInterface::create() en mulighed, men jeg synes det virker lidt far fetched???
     * https://api.drupal.org/api/drupal/core%21lib%21Drupal%21Core%21Entity%21EntityInterface.php/interface/EntityInterface/8
     */
    public function build()
    {
        return $this->entityFormBuilder->getForm( Person::create(array()), 'default', array());
    }
}