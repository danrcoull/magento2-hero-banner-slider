<?php
/**
 *   @author     Daniel Coull <hello@boxleafdigital.com>
 *   @copyright  27/01/2020, 19:29 Daniel Coull
 *   @version   1.0.0
 *
 */

namespace   BoxLeaf\BannerSlider\Api\Command\BannerSlider;


use BoxLeaf\BannerSlider\Api\Data\BannerSliderInterface;

/**
 * Interface DeleteByIdInterface
 * @package BoxLeaf\BannerSlider\Api\Command\BannerSlider
 */
interface DeleteByIdInterface {

    /**
     * @param $bannersId
     * @return BannerSliderInterface
     */
    public function execute($bannersId);
}