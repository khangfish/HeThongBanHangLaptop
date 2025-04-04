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
namespace FluentSmtpLib\Google\Service\Gmail;

class AutoForwarding extends \FluentSmtpLib\Google\Model
{
    /**
     * @var string
     */
    public $disposition;
    /**
     * @var string
     */
    public $emailAddress;
    /**
     * @var bool
     */
    public $enabled;
    /**
     * @param string
     */
    public function setDisposition($disposition)
    {
        $this->disposition = $disposition;
    }
    /**
     * @return string
     */
    public function getDisposition()
    {
        return $this->disposition;
    }
    /**
     * @param string
     */
    public function setEmailAddress($emailAddress)
    {
        $this->emailAddress = $emailAddress;
    }
    /**
     * @return string
     */
    public function getEmailAddress()
    {
        return $this->emailAddress;
    }
    /**
     * @param bool
     */
    public function setEnabled($enabled)
    {
        $this->enabled = $enabled;
    }
    /**
     * @return bool
     */
    public function getEnabled()
    {
        return $this->enabled;
    }
}
// Adding a class alias for backwards compatibility with the previous class name.
\class_alias(\FluentSmtpLib\Google\Service\Gmail\AutoForwarding::class, 'FluentSmtpLib\\Google_Service_Gmail_AutoForwarding');
