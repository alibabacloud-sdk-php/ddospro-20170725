<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\DDoSPro\V20170725\Models\DescribeHealthCheckConfigResponseBody\listeners;

use AlibabaCloud\Tea\Model;

class check extends Model
{
    /**
     * @var string
     */
    public $type;

    /**
     * @var int
     */
    public $timeout;

    /**
     * @var string
     */
    public $domain;

    /**
     * @var int
     */
    public $interval;

    /**
     * @var int
     */
    public $up;

    /**
     * @var int
     */
    public $down;

    /**
     * @var int
     */
    public $port;

    /**
     * @var string
     */
    public $uri;
    protected $_name = [
        'type'     => 'Type',
        'timeout'  => 'Timeout',
        'domain'   => 'Domain',
        'interval' => 'Interval',
        'up'       => 'Up',
        'down'     => 'Down',
        'port'     => 'Port',
        'uri'      => 'Uri',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }
        if (null !== $this->timeout) {
            $res['Timeout'] = $this->timeout;
        }
        if (null !== $this->domain) {
            $res['Domain'] = $this->domain;
        }
        if (null !== $this->interval) {
            $res['Interval'] = $this->interval;
        }
        if (null !== $this->up) {
            $res['Up'] = $this->up;
        }
        if (null !== $this->down) {
            $res['Down'] = $this->down;
        }
        if (null !== $this->port) {
            $res['Port'] = $this->port;
        }
        if (null !== $this->uri) {
            $res['Uri'] = $this->uri;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return check
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }
        if (isset($map['Timeout'])) {
            $model->timeout = $map['Timeout'];
        }
        if (isset($map['Domain'])) {
            $model->domain = $map['Domain'];
        }
        if (isset($map['Interval'])) {
            $model->interval = $map['Interval'];
        }
        if (isset($map['Up'])) {
            $model->up = $map['Up'];
        }
        if (isset($map['Down'])) {
            $model->down = $map['Down'];
        }
        if (isset($map['Port'])) {
            $model->port = $map['Port'];
        }
        if (isset($map['Uri'])) {
            $model->uri = $map['Uri'];
        }

        return $model;
    }
}
