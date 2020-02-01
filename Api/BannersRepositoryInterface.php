<?php
/**
 *   @author     Daniel Coull <hello@boxleafdigital.com>
 *   @copyright  27/01/2020, 19:29 Daniel Coull
 *   @version   1.0.0
 *
 */

namespace BoxLeaf\BannerSlider\Api;

use Magento\Framework\Api\SearchCriteriaInterface;

/**
 * Interface BannersRepositoryInterface
 * @package BoxLeaf\BannerSlider\Api
 */
interface BannersRepositoryInterface
{

    /**
     * Save Banners
     * @param \BoxLeaf\BannerSlider\Api\Data\BannersInterface $banners
     * @return \BoxLeaf\BannerSlider\Api\Data\BannersInterface
     * @throws \Magento\Framework\Exception\LocalizedException
     */
    public function save(
        \BoxLeaf\BannerSlider\Api\Data\BannersInterface $banners
    );

    /**
     * Retrieve Banners
     * @param string $bannersId
     * @return \BoxLeaf\BannerSlider\Api\Data\BannersInterface
     * @throws \Magento\Framework\Exception\LocalizedException
     */
    public function get($bannersId);

    /**
     * Retrieve Banners matching the specified criteria.
     * @param \Magento\Framework\Api\SearchCriteriaInterface $searchCriteria
     * @return \BoxLeaf\BannerSlider\Api\Data\BannersSearchResultsInterface
     * @throws \Magento\Framework\Exception\LocalizedException
     */
    public function getList(
        \Magento\Framework\Api\SearchCriteriaInterface $searchCriteria
    );

    /**
     * Delete Banners
     * @param \BoxLeaf\BannerSlider\Api\Data\BannersInterface $banners
     * @return bool true on success
     * @throws \Magento\Framework\Exception\LocalizedException
     */
    public function delete(
        \BoxLeaf\BannerSlider\Api\Data\BannersInterface $banners
    );

    /**
     * Delete Banners by ID
     * @param string $bannersId
     * @return bool true on success
     * @throws \Magento\Framework\Exception\NoSuchEntityException
     * @throws \Magento\Framework\Exception\LocalizedException
     */
    public function deleteById($bannersId);
}
