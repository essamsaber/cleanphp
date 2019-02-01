<?php
/**
 * Created by PhpStorm.
 * User: esam
 * Date: 2/1/2019
 * Time: 10:52 PM
 */

namespace CleanPhp\Invoicer\Persistence\Zend\TableGateway;

use Zend\Db\Adapter\Adapter;
use Zend\Db\ResultSet\HydratingResultSet;
use Zend\Db\TableGateway\TableGateway;
use Zend\Hydrator\HydratorInterface;

class TableGatewayFactory
{
    public function createGateway(Adapter $dbAdapter, HydratorInterface $hydrator, $object, $table)
    {
        $resultSet = new HydratingResultSet($hydrator, $object);
        return new TableGateway($table, $dbAdapter, null,$resultSet);

    }
}