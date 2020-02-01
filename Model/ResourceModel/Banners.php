<?php
/**
 *   @author     Daniel Coull <hello@boxleafdigital.com>
 *   @copyright  27/01/2020, 19:29 Daniel Coull
 *   @version   1.0.0
 *
 */

namespace BoxLeaf\BannerSlider\Model\ResourceModel;

/**
 * Class Banners
 * @package BoxLeaf\BannerSlider\Model\ResourceModel
 */
class Banners extends \Magento\Framework\Model\ResourceModel\Db\AbstractDb
{

    /**
     * Define resource model
     *
     * @return void
     */
    protected function _construct()
    {
        $this->_init('boxleaf_bannerslider_banners', 'banners_id');
    }
}
