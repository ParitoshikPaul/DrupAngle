<?php

namespace Drupal\drupanglerestui\Plugin\rest\resource;

use Drupal\rest\Plugin\ResourceBase;
use Drupal\rest\ResourceResponse;

/**
 * Provides a Demo Resource
 *
 * @RestResource(
 *   id = "content_type_resource",
 *   label = @Translation("Content Type Resource"),
 *   uri_paths = {
 *     "canonical" = "/contentTypes"
 *   }
 * )
 */

class GetContentTypes extends ResourceBase {
        
 /**
   * Responds to entity GET requests.
   * @return \Drupal\rest\ResourceResponse
   */
  public function get() {
    $response = ['message' => 'Hello, this is a rest service'];
    return new ResourceResponse($response);
  }
}