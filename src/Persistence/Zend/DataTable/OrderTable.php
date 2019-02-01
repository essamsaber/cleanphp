<?php
/**
 * Created by PhpStorm.
 * User: esam
 * Date: 2/1/2019
 * Time: 10:50 PM
 */

namespace CleanPhp\Invoicer\Persistence\Zend\DataTable;


use CleanPhp\Invoicer\Domain\Repository\OrderRepositoryInterface;
use CleanPhp\Invoicer\Persistence\Zend\AbstractDataTable;

class OrderTable extends AbstractDataTable implements OrderRepositoryInterface
{

    public function getUninvoicedOrders()
    {
        return [];
    }
}