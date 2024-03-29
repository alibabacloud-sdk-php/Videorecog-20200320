<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Videorecog\V20200320\Models\DetectVideoShotResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @description 1
     *
     * @var int[]
     */
    public $shotFrameIds;
    protected $_name = [
        'shotFrameIds' => 'ShotFrameIds',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->shotFrameIds) {
            $res['ShotFrameIds'] = $this->shotFrameIds;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return data
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ShotFrameIds'])) {
            if (!empty($map['ShotFrameIds'])) {
                $model->shotFrameIds = $map['ShotFrameIds'];
            }
        }

        return $model;
    }
}
