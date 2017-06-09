<?php



abstract class NodeList implements INodeList
{

	/**
	 * @var array
	 */
	protected $list = [];



	/**
	 * @return array
	 */
	public function getIPs(): array
	{
		return $this->list;
	}

}