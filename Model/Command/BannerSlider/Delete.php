<?php
/**
 *   @author     Daniel Coull <hello@boxleafdigital.com>
 *   @copyright  27/01/2020, 19:29 Daniel Coull
 *   @version   1.0.0
 *
 */

namespace BoxLeaf\BannerSlider\Model\Command\BannerSlider;

use BoxLeaf\BannerSlider\Api\Data\BannerSliderInterface;
use Magento\Framework\Exception\CouldNotDeleteException;
use Magento\Framework\Exception\CouldNotSaveException;
use BoxLeaf\BannerSlider\Model\ResourceModel\BannerSlider as ResourceBannerSlider;
use BoxLeaf\BannerSlider\Model\BannerSliderFactory ;
use Magento\Framework\Exception\NoSuchEntityException;

/**
 * Class Delete
 * @package BoxLeaf\BannerSlider\Model\Command\BannerSlider
 */
class Delete implements \BoxLeaf\BannerSlider\Api\Command\BannerSlider\DeleteInterface {

    /**
     * @var BannerSliderFactory
     */
    private $_bannerSliderFactory;
    /**
     * @var ResourceBannerSlider
     */
    private $_resource;

    /**
     * Delete constructor.
     * @param BannerSliderFactory $bannerSliderFactory
     * @param ResourceBannerSlider $resource
     */
    public  function  __construct(
        BannerSliderFactory $bannerSliderFactory,
        ResourceBannerSlider $resource
    )
    {
        $this->_bannerSliderFactory = $bannerSliderFactory;
        $this->_resource = $resource; 
    }

    /**
     * @param BannerSliderInterface $bannerSlider
     * @return bool|BannerSliderInterface
     * @throws CouldNotDeleteException
     */
    public function execute(
        BannerSliderInterface $bannerSlider
    ) {

        try {
            $bannerSliderModel = $this->_bannerSliderFactory->create();
            $this->_resource->load($bannerSliderModel, $bannerSlider->getBannerSliderId());
            $this->_resource->delete($bannerSliderModel);
        } catch (\Exception $exception) {
            throw new CouldNotDeleteException(__(
                'Could not delete the BannerSlider: %1',
                $exception->getMessage()
            ));
        }
        return true;
    }
}