<?php



class TorIpChecker
{

	/**
	 * @var INodeList
	 */
	private $list;



	/**
	 * @param INodeList
	 */
	public function __construct(INodeList $list)
	{
		$this->list = $list;
	}

	/**
	 * @param string $ip
	 * @return bool
	 */
	public function isInList(string $ip): bool
	{
		return in_array($ip, $this->list->getIPs(), TRUE);
	}

}