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

namespace Google\Service\CertificateAuthorityService;

class KeyVersionSpec extends \Google\Model
{
  /**
   * @var string
   */
  public $algorithm;
  /**
   * @var string
   */
  public $cloudKmsKeyVersion;

  /**
   * @param string
   */
  public function setAlgorithm($algorithm)
  {
    $this->algorithm = $algorithm;
  }
  /**
   * @return string
   */
  public function getAlgorithm()
  {
    return $this->algorithm;
  }
  /**
   * @param string
   */
  public function setCloudKmsKeyVersion($cloudKmsKeyVersion)
  {
    $this->cloudKmsKeyVersion = $cloudKmsKeyVersion;
  }
  /**
   * @return string
   */
  public function getCloudKmsKeyVersion()
  {
    return $this->cloudKmsKeyVersion;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(KeyVersionSpec::class, 'Google_Service_CertificateAuthorityService_KeyVersionSpec');
