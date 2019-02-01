<?php
/**
 * Created by PhpStorm.
 * User: esam
 * Date: 2/1/2019
 * Time: 10:51 PM
 */

namespace CleanPhp\Invoicer\Persistence\Zend\DataTable;


use CleanPhp\Invoicer\Domain\Entity\Order;
use CleanPhp\Invoicer\Domain\Repository\InvoiceRepositoryInterface;
use CleanPhp\Invoicer\Persistence\Zend\AbstractDataTable;

class InvoiceTable extends AbstractDataTable implements InvoiceRepositoryInterface
{

    public function createFromOrder(Order $order)
    {
        // TODO: Implement createFromOrder() method.
    }
}