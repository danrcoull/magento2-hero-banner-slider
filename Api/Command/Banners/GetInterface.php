<?php
/**
 *   @author     Daniel Coull <hello@boxleafdigital.com>
 *   @copyright  27/01/2020, 19:29 Daniel Coull
 *   @version   1.0.0
 *
 */

namespace   BoxLeaf\BannerSlider\Api\Command\Banners;

/**
 * Interface GetInterface
 * @package BoxLeaf\BannerSlider\Api\Command\Banners
 */
interface GetInterface {

    /**
     * @param $bannersId
     * @return \BoxLeaf\BannerSlider\Api\Data\BannersInterface
     * @throws \Magento\Framework\Exception\LocalizedException
     */
    public function execute($bannersId);
}