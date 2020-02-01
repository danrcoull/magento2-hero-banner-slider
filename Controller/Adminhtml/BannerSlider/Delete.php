<?php
/**
 *   @author     Daniel Coull <hello@boxleafdigital.com>
 *   @copyright  27/01/2020, 19:29 Daniel Coull
 *   @version   1.0.0
 *
 */

namespace BoxLeaf\BannerSlider\Controller\Adminhtml\BannerSlider;

/**
 * Class Delete
 * @package BoxLeaf\BannerSlider\Controller\Adminhtml\BannerSlider
 */
class Delete extends \BoxLeaf\BannerSlider\Controller\Adminhtml\BannerSlider
{

    /**
     * Delete action
     *
     * @return \Magento\Framework\Controller\ResultInterface
     */
    public function execute()
    {
        /** @var \Magento\Backend\Model\View\Result\Redirect $resultRedirect */
        $resultRedirect = $this->resultRedirectFactory->create();
        // check if we know what should be deleted
        $id = $this->getRequest()->getParam('bannerslider_id');
        if ($id) {
            try {
                // init model and delete
                $model = $this->_objectManager->create(\BoxLeaf\BannerSlider\Model\BannerSlider::class);
                $model->load($id);
                $model->delete();
                // display success message
                $this->messageManager->addSuccessMessage(__('You deleted the Bannerslider.'));
                // go to grid
                return $resultRedirect->setPath('*/*/');
            } catch (\Exception $e) {
                // display error message
                $this->messageManager->addErrorMessage($e->getMessage());
                // go back to edit form
                return $resultRedirect->setPath('*/*/edit', ['bannerslider_id' => $id]);
            }
        }
        // display error message
        $this->messageManager->addErrorMessage(__('We can\'t find a Bannerslider to delete.'));
        // go to grid
        return $resultRedirect->setPath('*/*/');
    }
}
