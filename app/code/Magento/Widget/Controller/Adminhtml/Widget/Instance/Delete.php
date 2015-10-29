<?php
/**
 *
 * Copyright © 2015 Magento. All rights reserved.
 * See COPYING.txt for license details.
 */
namespace Magento\Widget\Controller\Adminhtml\Widget\Instance;

class Delete extends \Magento\Widget\Controller\Adminhtml\Widget\Instance
{
    /**
     * Delete Action
     *
     * @return void
     */
    public function executeInternal()
    {
        $widgetInstance = $this->_initWidgetInstance();
        if ($widgetInstance) {
            try {
                $widgetInstance->delete();
                $this->messageManager->addSuccess(__('The widget instance has been deleted.'));
            } catch (\Exception $e) {
                $this->messageManager->addError($e->getMessage());
            }
        }
        $this->_redirect('adminhtml/*/');
        return;
    }
}
