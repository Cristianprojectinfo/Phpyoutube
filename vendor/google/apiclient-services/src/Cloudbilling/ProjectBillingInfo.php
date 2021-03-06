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

namespace Google\Service\Cloudbilling;

class ProjectBillingInfo extends \Google\Model
{
  /**
   * @var string
   */
  public $billingAccountName;
  /**
   * @var bool
   */
  public $billingEnabled;
  /**
   * @var string
   */
  public $name;
  /**
   * @var string
   */
  public $projectId;

  /**
   * @param string
   */
  public function setBillingAccountName($billingAccountName)
  {
    $this->billingAccountName = $billingAccountName;
  }
  /**
   * @return string
   */
  public function getBillingAccountName()
  {
    return $this->billingAccountName;
  }
  /**
   * @param bool
   */
  public function setBillingEnabled($billingEnabled)
  {
    $this->billingEnabled = $billingEnabled;
  }
  /**
   * @return bool
   */
  public function getBillingEnabled()
  {
    return $this->billingEnabled;
  }
  /**
   * @param string
   */
  public function setName($name)
  {
    $this->name = $name;
  }
  /**
   * @return string
   */
  public function getName()
  {
    return $this->name;
  }
  /**
   * @param string
   */
  public function setProjectId($projectId)
  {
    $this->projectId = $projectId;
  }
  /**
   * @return string
   */
  public function getProjectId()
  {
    return $this->projectId;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(ProjectBillingInfo::class, 'Google_Service_Cloudbilling_ProjectBillingInfo');
