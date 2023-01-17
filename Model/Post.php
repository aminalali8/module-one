<?php
namespace Amin\ModuleOne\Model;
class Post extends \Magento\Framework\Model\AbstractModel implements \Magento\Framework\DataObject\IdentityInterface
{
	const CACHE_TAG = 'amin_moduleone_post';

	protected $_cacheTag = 'amin_moduleone_post';

	protected $_eventPrefix = 'amin_moduleone_post';

	protected function _construct()
	{
		$this->_init('Amin\ModuleOne\Model\ResourceModel\Post');
	}

	public function getIdentities()
	{
		return [self::CACHE_TAG . '_' . $this->getId()];
	}

	public function getDefaultValues()
	{
		$values = [];

		return $values;
	}
}
