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

namespace Google\Service\Compute;

class InterconnectAttachmentPrivateInfo extends \Google\Model
{
  /**
   * @var string
   */
  public $tag8021q;

  /**
   * @param string
   */
  public function setTag8021q($tag8021q)
  {
    $this->tag8021q = $tag8021q;
  }
  /**
   * @return string
   */
  public function getTag8021q()
  {
    return $this->tag8021q;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(InterconnectAttachmentPrivateInfo::class, 'Google_Service_Compute_InterconnectAttachmentPrivateInfo');
