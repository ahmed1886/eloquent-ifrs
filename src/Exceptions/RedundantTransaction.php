<?php
/**
 * Laravel IFRS Accounting
 *
 * @author Edward Mungai
 * @copyright Edward Mungai, 2020, Germany
 * @license MIT
 */
namespace Ekmungai\IFRS\Exceptions;

/**
 *
 * @author emung
 *
 */
class RedundantTransaction extends IFRSException
{
    /**
     * Redundant Transaction Exception
     *
     * @param string $message
     * @param int $code
     */
    public function __construct(string $message = null, int $code = null)
    {
        $error = _("A Transaction Main Account cannot be one of the Line Item Accounts ");

        parent::__construct($error.$message, $code=null);
    }
}