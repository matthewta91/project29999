<?php

/**
 * Magestore
 *
 * NOTICE OF LICENSE
 *
 * This source file is subject to the Magestore.com license that is
 * available through the world-wide-web at this URL:
 * http://www.magestore.com/license-agreement.html
 *
 * DISCLAIMER
 *
 * Do not edit or add to this file if you wish to upgrade this extension to newer
 * version in the future.
 *
 * @category    Magestore
 * @package     Magestore_Membership
 * @copyright   Copyright (c) 2012 Magestore (http://www.magestore.com/)
 * @license     http://www.magestore.com/license-agreement.html
 */

namespace Magestore\Membership\Model;

/**
 * class PaymentStatus
 *
 * @category Magestore
 * @package  Magestore_Membership
 * @module   Membership
 * @author   Magestore Developer
 */
class PaymentStatus
{
    const STATUS_PAID = 1;

    const STATUS_REFUNDED = 2;

    /**
     * Get available statuses.
     *
     * @return void
     */
    public static function getStatus()
    {
        return [self::STATUS_PAID => __('Paid'), self::STATUS_REFUNDED => __('Refunded')];
    }
}