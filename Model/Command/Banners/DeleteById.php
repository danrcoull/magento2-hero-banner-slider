<?php
/**
 *   @author     Daniel Coull <hello@boxleafdigital.com>
 *   @copyright  27/01/2020, 19:29 Daniel Coull
 *   @version   1.0.0
 *
 */

namespace BoxLeaf\BannerSlider\Model\Command\Banners;

/**
 * Class DeleteById
 * @package BoxLeaf\BannerSlider\Model\Command\Banners
 */
class DeleteById implements \BoxLeaf\BannerSlider\Api\Command\Banners\DeleteByIdInterface {


    /**
     * @var Get
     */
    private $_get;
    /**
     * @var Delete
     */
    private $_delete;

    public  function  __construct(
        Get $get,
        Delete $delete
    )
    {
        $this->_get = $get;
        $this->_delete = $delete;
    }

    /**
     * @param $bannersId
     * @return bool|\BoxLeaf\BannerSlider\Api\Data\BannersInterface
     * @throws \Magento\Framework\Exception\CouldNotDeleteException
     * @throws \Magento\Framework\Exception\LocalizedException
     */
    public function execute($bannersId
    )
    {
        $bannersModel = $this->_get->execute($bannersId);
        return $this->_delete->execute($bannersModel);
    }
}