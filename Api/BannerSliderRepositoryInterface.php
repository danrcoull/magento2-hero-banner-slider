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
 * Interface BannerSliderRepositoryInterface
 * @package BoxLeaf\BannerSlider\Api
 */
interface BannerSliderRepositoryInterface
{

    /**
     * Save BannerSlider
     * @param \BoxLeaf\BannerSlider\Api\Data\BannerSliderInterface $bannerSlider
     * @return \BoxLeaf\BannerSlider\Api\Data\BannerSliderInterface
     * @throws \Magento\Framework\Exception\LocalizedException
     */
    public function save(
        \BoxLeaf\BannerSlider\Api\Data\BannerSliderInterface $bannerSlider
    );

    /**
     * Retrieve BannerSlider
     * @param string $bannersliderId
     * @return \BoxLeaf\BannerSlider\Api\Data\BannerSliderInterface
     * @throws \Magento\Framework\Exception\LocalizedException
     */
    public function get($bannersliderId);

    /**
     * Retrieve BannerSlider matching the specified criteria.
     * @param \Magento\Framework\Api\SearchCriteriaInterface $searchCriteria
     * @return \BoxLeaf\BannerSlider\Api\Data\BannerSliderSearchResultsInterface
     * @throws \Magento\Framework\Exception\LocalizedException
     */
    public function getList(
        \Magento\Framework\Api\SearchCriteriaInterface $searchCriteria
    );

    /**
     * Delete BannerSlider
     * @param \BoxLeaf\BannerSlider\Api\Data\BannerSliderInterface $bannerSlider
     * @return bool true on success
     * @throws \Magento\Framework\Exception\LocalizedException
     */
    public function delete(
        \BoxLeaf\BannerSlider\Api\Data\BannerSliderInterface $bannerSlider
    );

    /**
     * Delete BannerSlider by ID
     * @param string $bannersliderId
     * @return bool true on success
     * @throws \Magento\Framework\Exception\NoSuchEntityException
     * @throws \Magento\Framework\Exception\LocalizedException
     */
    public function deleteById($bannersliderId);
}
