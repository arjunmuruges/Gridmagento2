<?php
namespace Arjun\Grid\Model\ResourceModel\Grid;

use Arjun\Grid\Model\Grid;
use Arjun\Grid\Model\ResourceModel\Grid as GridResourceModel;
use Magento\Framework\Model\ResourceModel\Db\Collection\AbstractCollection;

class Collection extends AbstractCollection
{
    protected function _construct()
    {
       
       $this->_init(Grid::class, GridResourceModel::class);
    }
}