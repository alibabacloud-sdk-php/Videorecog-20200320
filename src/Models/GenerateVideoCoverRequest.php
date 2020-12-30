<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Videorecog\V20200320\Models;

use AlibabaCloud\Tea\Model;

class GenerateVideoCoverRequest extends Model
{
    /**
     * @var string
     */
    public $videoUrl;

    /**
     * @var bool
     */
    public $async;

    /**
     * @var bool
     */
    public $isGif;
    protected $_name = [
        'videoUrl' => 'VideoUrl',
        'async'    => 'Async',
        'isGif'    => 'IsGif',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->videoUrl) {
            $res['VideoUrl'] = $this->videoUrl;
        }
        if (null !== $this->async) {
            $res['Async'] = $this->async;
        }
        if (null !== $this->isGif) {
            $res['IsGif'] = $this->isGif;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GenerateVideoCoverRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['VideoUrl'])) {
            $model->videoUrl = $map['VideoUrl'];
        }
        if (isset($map['Async'])) {
            $model->async = $map['Async'];
        }
        if (isset($map['IsGif'])) {
            $model->isGif = $map['IsGif'];
        }

        return $model;
    }
}
