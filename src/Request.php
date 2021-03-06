<?php

namespace BrainyLab;

class Request
{

  private $url;
  private $token;

  function __construct(string $url, ?string $token)
  {
    $this->url = $url;
    $this->token = $token;
  }

  public function Post(array $data, ?string $endpoint)
  {
    $data = Methods\Post::Connection($this->url, $this->token, $endpoint, $data);

    return $data;
  }
}
