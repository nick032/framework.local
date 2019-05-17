<?php
namespace Framework\Http;

class Request
{
	private $queryParams;
	private $parseBody;

	public function __construct(array $queryParams = [], $parseBody = null)
	{
		$this->queryParams = $queryParams;
		$this->parseBody = $parseBody;
	}

	public function getQueryParams(): array
	{
		return $this->queryParams;
	}

	public function getParseBody()
	{
		return $this->parseBody ?: null;
	}
}