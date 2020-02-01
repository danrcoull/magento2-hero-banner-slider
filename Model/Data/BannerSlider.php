<?php
/**
 *   @author     Daniel Coull <hello@boxleafdigital.com>
 *   @copyright  27/01/2020, 19:29 Daniel Coull
 *   @version   1.0.0
 *
 */

namespace BoxLeaf\BannerSlider\Model\Data;

use BoxLeaf\BannerSlider\Api\Data\BannerSliderInterface;

/**
 * Class BannerSlider
 * @package BoxLeaf\BannerSlider\Model\Data
 */
class BannerSlider extends \Magento\Framework\Api\AbstractExtensibleObject implements BannerSliderInterface
{

    /**
     * Get bannerslider_id
     * @return string|null
     */
    public function getBannersliderId()
    {
        return $this->_get(self::BANNERSLIDER_ID);
    }

    /**
     * Set bannerslider_id
     * @param string $bannersliderId
     * @return \BoxLeaf\BannerSlider\Api\Data\BannerSliderInterface
     */
    public function setBannersliderId($bannersliderId)
    {
        return $this->setData(self::BANNERSLIDER_ID, $bannersliderId);
    }

    /**
     * Get enabled
     * @return boolean|null
     */
    public function getEnabled()
    {
        return $this->_get(self::ENABLED);
    }

    /**
     * Set enabled
     * @param string $bannerEnabled
     * @return \BoxLeaf\BannerSlider\Api\Data\BannerSliderInterface
     */
    public function setEnabled($bannerSliderEnabled)
    {
        return $this->setData(self::ENABLED, $bannerSliderEnabled);
    }

    /**
     * Get slider_name
     * @return string|null
     */
    public function getSliderName()
    {
        return $this->_get(self::SLIDER_NAME);
    }

    /**
     * Set slider_name
     * @param string $sliderName
     * @return \BoxLeaf\BannerSlider\Api\Data\BannerSliderInterface
     */
    public function setSliderName($sliderName)
    {
        return $this->setData(self::SLIDER_NAME, $sliderName);
    }

    /**
     * Retrieve existing extension attributes object or create a new one.
     * @return \BoxLeaf\BannerSlider\Api\Data\BannerSliderExtensionInterface|null
     */
    public function getExtensionAttributes()
    {
        return $this->_getExtensionAttributes();
    }

    /**
     * Set an extension attributes object.
     * @param \BoxLeaf\BannerSlider\Api\Data\BannerSliderExtensionInterface $extensionAttributes
     * @return $this
     */
    public function setExtensionAttributes(
        \BoxLeaf\BannerSlider\Api\Data\BannerSliderExtensionInterface $extensionAttributes
    ) {
        return $this->_setExtensionAttributes($extensionAttributes);
    }

    /**
     * Get slides
     * @return string|null
     */
    public function getSlides()
    {
        return $this->_get(self::SLIDES);
    }

    /**
     * Set slides
     * @param string $slides
     * @return \BoxLeaf\BannerSlider\Api\Data\BannerSliderInterface
     */
    public function setSlides($slides)
    {
        return $this->setData(self::SLIDES, $slides);
    }
}
