<?php
/**
 *   @author     Daniel Coull <hello@boxleafdigital.com>
 *   @copyright  27/01/2020, 19:29 Daniel Coull
 *   @version   1.0.0
 *
 */

namespace BoxLeaf\BannerSlider\Api\Data;

/**
 * Interface BannersSearchResultsInterface
 * @package BoxLeaf\BannerSlider\Api\Data
 */
interface BannersSearchResultsInterface extends \Magento\Framework\Api\SearchResultsInterface
{

    /**
     * Get Banners list.
     * @return \BoxLeaf\BannerSlider\Api\Data\BannersInterface[]
     */
    public function getItems();

    /**
     * Set banner_name list.
     * @param \BoxLeaf\BannerSlider\Api\Data\BannersInterface[] $items
     * @return $this
     */
    public function setItems(array $items);
}
