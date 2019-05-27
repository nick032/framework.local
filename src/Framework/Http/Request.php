<?php
namespace Framework\Http;

use Psr\Http\Message\ServerRequestInterface;
use Psr\Http\Message\StreamInterface;
use Psr\Http\Message\UriInterface;

class Request implements ServerRequestInterface
{
	private $queryParams = [];
	private $parseBody;

	/*public function __construct(array $queryParams = [], $parseBody = null)
	{
		$this->queryParams = $queryParams;
		$this->parseBody = $parseBody;
	}*/

	public function getQueryParams(): array
	{
		return $this->queryParams;
	}

	public function withQueryParams(array $query): self
	{
		$new = clone $this;
		$new->queryParams = $query;
		return $new;
	}

	public function getParseBody()
	{
		return $this->parseBody ?: null;
	}

	public function withParseBody($data): self
	{
		$new = clone $this;
		$new->parseBody = $data;
		return $new;
	}
	public function getAttribute( $name, $default = null ) {}
	public function getAttributes() {}
	public function getBody() {}
	public function getCookieParams() {}
	public function getHeader( $name ) {}
	public function getHeaderLine( $name ) {}
	public function getHeaders() {
		// TODO: Implement getHeaders() method.
	}
	public function getMethod() {
		// TODO: Implement getMethod() method.
	}
	public function getParsedBody() {
		// TODO: Implement getParsedBody() method.
	}
	public function getProtocolVersion() {
		// TODO: Implement getProtocolVersion() method.
	}
	public function getRequestTarget() {
		// TODO: Implement getRequestTarget() method.
	}
	public function getServerParams() {
		// TODO: Implement getServerParams() method.
	}
	public function getUploadedFiles() {
		// TODO: Implement getUploadedFiles() method.
	}
	public function getUri() {
		// TODO: Implement getUri() method.
	}
	public function hasHeader( $name ) {
		// TODO: Implement hasHeader() method.
	}
	public function withAddedHeader( $name, $value ) {
		// TODO: Implement withAddedHeader() method.
	}
	public function withAttribute( $name, $value ) {
		// TODO: Implement withAttribute() method.
	}
	public function withBody( StreamInterface $body ) {
		// TODO: Implement withBody() method.
	}
	public function withCookieParams( array $cookies ) {
		// TODO: Implement withCookieParams() method.
	}
	public function withHeader( $name, $value ) {
		// TODO: Implement withHeader() method.
	}
	public function withMethod( $method ) {
		// TODO: Implement withMethod() method.
	}
	public function withoutAttribute( $name ) {
		// TODO: Implement withoutAttribute() method.
	}
	public function withoutHeader( $name ) {
		// TODO: Implement withoutHeader() method.
	}
	public function withParsedBody( $data ) {
		// TODO: Implement withParsedBody() method.
	}
	public function withProtocolVersion( $version ) {
		// TODO: Implement withProtocolVersion() method.
	}
	public function withRequestTarget( $requestTarget ) {
		// TODO: Implement withRequestTarget() method.
	}
	public function withUploadedFiles( array $uploadedFiles ) {
		// TODO: Implement withUploadedFiles() method.
	}
	public function withUri( UriInterface $uri, $preserveHost = false ) {
		// TODO: Implement withUri() method.
	}

}