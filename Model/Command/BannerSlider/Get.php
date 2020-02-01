<?php
/**
 *   @author     Daniel Coull <hello@boxleafdigital.com>
 *   @copyright  27/01/2020, 19:29 Daniel Coull
 *   @version   1.0.0
 *
 */

namespace BoxLeaf\BannerSlider\Model\Command\BannerSlider;

use BoxLeaf\BannerSlider\Api\Command\BannerSlider\GetInterface;

use BoxLeaf\BannerSlider\Api\Data\BannerSliderInterface;
use BoxLeaf\BannerSlider\Model\ResourceModel\BannerSlider as ResourceBannerSlider;
use BoxLeaf\BannerSlider\Model\BannerSliderFactory ;
use Magento\Framework\Exception\NoSuchEntityException;

/**
 * Class Get
 * @package BoxLeaf\BannerSlider\Model\Command\BannerSlider
 */
class Get implements GetInterface {

    /**
     * @var ResourceBannerSlider
     */
    private $_resource;
    /**
     * @var BannerSliderFactory
     */
    private $_bannerSliderFactory;


    public  function  __construct(
        BannerSliderFactory $bannerSliderFactory,
        ResourceBannerSlider $resource
    )
    {
        $this->_bannerSliderFactory = $bannerSliderFactory;
        $this->_resource = $resource; 
    }

    /**
     * @param $bannerSliderId
     * @return BannerSliderInterface
     * @throws NoSuchEntityException
     */
    public function execute($bannerSliderId) {

        $bannerSlider = $this->_bannerSliderFactory->create();
        $this->_resource->load($bannerSlider, $bannerSliderId);
        if (!$bannerSlider->getBannerSliderId()) {
            throw new NoSuchEntityException(__('BannerSlider with id "%1" does not exist.', $bannerSliderId));
        }
        return $bannerSlider->getDataModel();
    }
}