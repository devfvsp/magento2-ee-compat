<?php
/**
 * Copyright © Magento, Inc. All rights reserved.
 * See COPYING.txt for license details.
 */

namespace Magento\Framework\App;

use Magento\Framework\App\RequestInterface;

/**
 * Stub for CsrfAwareInterface introduced in magento 2.3.0
 */
interface CsrfAwareActionInterface
{
    /**
     * Create exception in case CSRF validation failed.
     * Return null if default exception will suffice.
     *
     * @param RequestInterface $request
     *
     * @return object|null
     */
    public function createCsrfValidationException(RequestInterface $request);

    /**
     * Perform custom request validation.
     * Return null if default validation is needed.
     *
     * @param RequestInterface $request
     *
     * @return bool|null
     */
    public function validateForCsrf(RequestInterface $request);
}
