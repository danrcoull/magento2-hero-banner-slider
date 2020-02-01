<?php
/**
 *   @author     Daniel Coull <hello@boxleafdigital.com>
 *   @copyright  27/01/2020, 19:29 Daniel Coull
 *   @version   1.0.0
 *
 */

namespace BoxLeaf\BannerSlider\Api\Data;

/**
 * Interface BannerSliderInterface
 * @package BoxLeaf\BannerSlider\Api\Data
 */
interface BannerSliderInterface extends \Magento\Framework\Api\ExtensibleDataInterface
{

    const SLIDES = 'slides';
    const SLIDER_NAME = 'slider_name';
    const BANNERSLIDER_ID = 'bannerslider_id';
    const ENABLED = 'enabled';

    /**
     * Get bannerslider_id
     * @return string|null
     */
    public function getBannersliderId();

    /**
     * Set bannerslider_id
     * @param string $bannersliderId
     * @return \BoxLeaf\BannerSlider\Api\Data\BannerSliderInterface
     */
    public function setBannersliderId($bannersliderId);

    /**
     * Get enabled
     * @return boolean|null
     */
    public function getEnabled();

    /**
     * Set enabled
     * @param string $bannerSliderEnabled
     * @return \BoxLeaf\BannerSlider\Api\Data\BannerSliderInterface
     */
    public function setEnabled($bannerSliderEnabled);

    /**
     * Get slider_name
     * @return string|null
     */
    public function getSliderName();

    /**
     * Set slider_name
     * @param string $sliderName
     * @return \BoxLeaf\BannerSlider\Api\Data\BannerSliderInterface
     */
    public function setSliderName($sliderName);

    /**
     * Retrieve existing extension attributes object or create a new one.
     * @return \BoxLeaf\BannerSlider\Api\Data\BannerSliderExtensionInterface|null
     */
    public function getExtensionAttributes();

    /**
     * Set an extension attributes object.
     * @param \BoxLeaf\BannerSlider\Api\Data\BannerSliderExtensionInterface $extensionAttributes
     * @return $this
     */
    public function setExtensionAttributes(
        \BoxLeaf\BannerSlider\Api\Data\BannerSliderExtensionInterface $extensionAttributes
    );

    /**
     * Get slides
     * @return string|null
     */
    public function getSlides();

    /**
     * Set slides
     * @param string $slides
     * @return \BoxLeaf\BannerSlider\Api\Data\BannerSliderInterface
     */
    public function setSlides($slides);
}
