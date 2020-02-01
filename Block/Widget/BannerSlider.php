<?php
/**
 *   @author     Daniel Coull <hello@boxleafdigital.com>
 *   @copyright  27/01/2020, 19:29 Daniel Coull
 *   @version   1.0.0
 *
 */

namespace BoxLeaf\BannerSlider\Block\Widget;

use BoxLeaf\BannerSlider\Api\BannerSliderRepositoryInterface;
use BoxLeaf\BannerSlider\Api\BannersRepositoryInterface;
use Magento\Framework\Api\SearchCriteriaBuilderFactory;
use Magento\Framework\View\Element\Template;
use Magento\Widget\Block\BlockInterface;

/**
 * Class BannerSlider
 * @package BoxLeaf\BannerSlider\Block\Widget
 */
class BannerSlider extends Template implements BlockInterface
{
    protected $_template = "banner/slider.phtml";
    /**
     * @var BannerSliderRepositoryInterface
     */
    private $bannerSliderRepository;
    /**
     * @var SearchCriteriaBuilderFactory
     */
    private $searchCriteriaBuilderFactory;
    /**
     * @var BannersRepositoryInterface
     */
    private $bannersRepository;
    /**
     * @var \Magento\Cms\Model\Template\FilterProvider
     */
    private $contentProcessor;

    /**
     * BannerSlider constructor.
     * @param BannerSliderRepositoryInterface $bannerSliderRepository
     * @param BannersRepositoryInterface $bannersRepository
     * @param SearchCriteriaBuilderFactory $searchCriteriaBuilderFactory
     * @param \Magento\Cms\Model\Template\FilterProvider $contentProcessor
     * @param Template\Context $context
     * @param array $data
     */
    public function __construct(
        BannerSliderRepositoryInterface $bannerSliderRepository,
        BannersRepositoryInterface $bannersRepository,
        SearchCriteriaBuilderFactory $searchCriteriaBuilderFactory,
        \Magento\Cms\Model\Template\FilterProvider $contentProcessor,
        Template\Context $context, array $data = [])
    {
        parent::__construct($context, $data);
        
        $this->bannerSliderRepository = $bannerSliderRepository;
        $this->bannersRepository = $bannersRepository;
        $this->searchCriteriaBuilderFactory = $searchCriteriaBuilderFactory;
        $this->contentProcessor = $contentProcessor;
    }

    /**
     * @return string
     */
    public function getImageClass() {
        $class ='';

        if($this->getData('is_parallax')) {
            $class  .= 'img-parallax ';
        }


        return $class;
    }

    /**
     * @return string
     */
    public function getClass() {
        $class ='';

        if($this->getData('full_width')) {
            $class  .= 'full-width ';
        }

        if($this->getData('is_parallax')) {
            $class  .= 'is-parallax ';
        }

        if($this->getData('full_height')) {
            $class  .= 'full-height ';
        }

        return $class;
    }

    /**
     * @return bool|\BoxLeaf\BannerSlider\Api\Data\BannerSliderInterface
     */
    public function getSlider()
    {
        $sliderId= $this->getData('slider_id');
        try {
            $bannerSlider = $this->bannerSliderRepository->get($sliderId);

            return $bannerSlider;
        }catch (\Exception $e) {
            die($e->getMessage());
            return false;
        }
    }

    /**
     * @param \BoxLeaf\BannerSlider\Api\Data\BannerSliderInterface $slider
     * @return array|bool
     */
    public function getSliderSlides($slider) {
        try {
            $slides = json_decode($slider->getSlides());
            return $slides;
        }catch (\Exception $e) {
            return false;
        }
    }

    public function getSlide($bannerId) {
        try {
            return $this->bannersRepository->get($bannerId);
        }catch (\Exception $e) {
            return false;
        }
    }

    public function showTabs(){
        return $this->getData('show_tabs');
    }

    /**
     * @param $content
     * @return string
     * @throws \Exception
     */
    public function processContent($content)
    {
        return $this->contentProcessor->getPageFilter()->filter($content);
    }


    /**
     * @return false|string
     */
    public function  getSliderConfig() {
        $config = [
            'slidesToShow' => 1,
            'slidesToScroll' => 1,
            'autoplay' => true,
            'autoplaySpeed' => 4500,
            'arrows' => $this->showTabs() ? false : true,
            'fade' => true,
        ];

        if( $this->showTabs()) {
            $config['asNavFor'] = '.tabs';
        }

        return json_encode($config);
    }

    /**
     * @return false|string
     */
    public function  getTabsConfig() {
        $config = [
            'slidesToShow' => 4,
            'slidesToScroll' => 1,
            'autoplaySpeed' => 4500,
            'arrows' => false ,
            'dots' => false ,
            'fade' => false,
            'autoplay' => true,
            'centerMode' => true,
            'focusOnSelect' => true,
            'asNavFor' => '.slider'
        ];


        return json_encode($config);
    }

}
