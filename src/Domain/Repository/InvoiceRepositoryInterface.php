<?php 
namespace CleanPhp\Invoicer\Domain\Repository;

use CleanPhp\Invoicer\Domain\Entity\Order;

interface InvoiceRepositoryInterface extends RepositoryInterface
{
	public function createFromOrder(Order $order);

}