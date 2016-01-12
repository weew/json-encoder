<?php

namespace Tests\Weew\JsonEncoder\Stubs;

use Weew\Contracts\IJsonable;

class FakeJsonable implements IJsonable {
    /**
     * @param int $options
     *
     * @return string
     */
    public function toJson($options = 0) {
        return '{"foo":"bar"}';
    }
}
