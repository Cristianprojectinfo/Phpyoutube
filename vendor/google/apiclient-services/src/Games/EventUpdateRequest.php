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

namespace Google\Service\Games;

class EventUpdateRequest extends \Google\Model
{
  /**
   * @var string
   */
  public $definitionId;
  /**
   * @var string
   */
  public $kind;
  /**
   * @var string
   */
  public $updateCount;

  /**
   * @param string
   */
  public function setDefinitionId($definitionId)
  {
    $this->definitionId = $definitionId;
  }
  /**
   * @return string
   */
  public function getDefinitionId()
  {
    return $this->definitionId;
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
   * @param string
   */
  public function setUpdateCount($updateCount)
  {
    $this->updateCount = $updateCount;
  }
  /**
   * @return string
   */
  public function getUpdateCount()
  {
    return $this->updateCount;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(EventUpdateRequest::class, 'Google_Service_Games_EventUpdateRequest');
