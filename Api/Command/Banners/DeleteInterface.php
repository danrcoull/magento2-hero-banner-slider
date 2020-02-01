<?php
/**
 *   @author     Daniel Coull <hello@boxleafdigital.com>
 *   @copyright  27/01/2020, 19:29 Daniel Coull
 *   @version   1.0.0
 *
 */

namespace   BoxLeaf\BannerSlider\Api\Command\Banners;

/**
 * Interface DeleteInterface
 * @package BoxLeaf\BannerSlider\Api\Command\Banners
 */
interface DeleteInterface {

    /**
     * @param \BoxLeaf\BannerSlider\Api\Data\BannersInterface $banners
     * @return \BoxLeaf\BannerSlider\Api\Data\BannersInterface
     */
    public function execute(\BoxLeaf\BannerSlider\Api\Data\BannersInterface $banners);
}