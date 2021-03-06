<?php
/*
 * Copyright 2014 Google Inc.
 *
 * Licensed under the Apache License, Version 2.0 (the "License"); you may not
 * use this file except in compliance with the License. You may obtain a copy of
 * the License at
 *
 * http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS, WITHOUT
 * WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied. See the
 * License for the specific language governing permissions and limitations under
 * the License.
 */

namespace Google\Service\CloudRun;

class ListDomainMappingsResponse extends \Google\Collection
{
  protected $collection_key = 'unreachable';
  /**
   * @var string
   */
  public $apiVersion;
  protected $itemsType = DomainMapping::class;
  protected $itemsDataType = 'array';
  /**
   * @var string
   */
  public $kind;
  protected $metadataType = ListMeta::class;
  protected $metadataDataType = '';
  /**
   * @var string[]
   */
  public $unreachable;

  /**
   * @param string
   */
  public function setApiVersion($apiVersion)
  {
    $this->apiVersion = $apiVersion;
  }
  /**
   * @return string
   */
  public function getApiVersion()
  {
    return $this->apiVersion;
  }
  /**
   * @param DomainMapping[]
   */
  public function setItems($items)
  {
    $this->items = $items;
  }
  /**
   * @return DomainMapping[]
   */
  public function getItems()
  {
    return $this->items;
  }
  /**
   * @param string
   */
  public function setKind($kind)
  {
    $this->kind = $kind;
  }
  /**
   * @return string
   */
  public function getKind()
  {
    return $this->kind;
  }
  /**
   * @param ListMeta
   */
  public function setMetadata(ListMeta $metadata)
  {
    $this->metadata = $metadata;
  }
  /**
   * @return ListMeta
   */
  public function getMetadata()
  {
    return $this->metadata;
  }
  /**
   * @param string[]
   */
  public function setUnreachable($unreachable)
  {
    $this->unreachable = $unreachable;
  }
  /**
   * @return string[]
   */
  public function getUnreachable()
  {
    return $this->unreachable;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(ListDomainMappingsResponse::class, 'Google_Service_CloudRun_ListDomainMappingsResponse');
