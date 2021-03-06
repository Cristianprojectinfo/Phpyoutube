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

namespace Google\Service\Dialogflow;

class GoogleCloudDialogflowCxV3beta1PageInfoFormInfoParameterInfo extends \Google\Model
{
  /**
   * @var string
   */
  public $displayName;
  /**
   * @var bool
   */
  public $justCollected;
  /**
   * @var bool
   */
  public $required;
  /**
   * @var string
   */
  public $state;
  /**
   * @var array
   */
  public $value;

  /**
   * @param string
   */
  public function setDisplayName($displayName)
  {
    $this->displayName = $displayName;
  }
  /**
   * @return string
   */
  public function getDisplayName()
  {
    return $this->displayName;
  }
  /**
   * @param bool
   */
  public function setJustCollected($justCollected)
  {
    $this->justCollected = $justCollected;
  }
  /**
   * @return bool
   */
  public function getJustCollected()
  {
    return $this->justCollected;
  }
  /**
   * @param bool
   */
  public function setRequired($required)
  {
    $this->required = $required;
  }
  /**
   * @return bool
   */
  public function getRequired()
  {
    return $this->required;
  }
  /**
   * @param string
   */
  public function setState($state)
  {
    $this->state = $state;
  }
  /**
   * @return string
   */
  public function getState()
  {
    return $this->state;
  }
  /**
   * @param array
   */
  public function setValue($value)
  {
    $this->value = $value;
  }
  /**
   * @return array
   */
  public function getValue()
  {
    return $this->value;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(GoogleCloudDialogflowCxV3beta1PageInfoFormInfoParameterInfo::class, 'Google_Service_Dialogflow_GoogleCloudDialogflowCxV3beta1PageInfoFormInfoParameterInfo');
