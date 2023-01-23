<?php
namespace Amin\ModuleOne\Model\ResourceModel\Post;

class Collection extends \Magento\Framework\Model\ResourceModel\Db\Collection\AbstractCollection
{
	protected $_idFieldName = 'post_id';
	protected $_eventPrefix = 'amin_moduleone_post_collection';
	protected $_eventObject = 'post_collection';

	/**
	 * Define resource model
	 *
	 * @return void
	 */
	protected function _construct()
	{
		$this->_init('Amin\ModuleOne\Model\Post', 'Amin\ModuleOne\Model\ResourceModel\Post');
	}

}
