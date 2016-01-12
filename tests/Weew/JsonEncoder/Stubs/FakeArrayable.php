<?php

namespace Tests\Weew\JsonEncoder\Stubs;

use Weew\Contracts\IArrayable;

class FakeArrayable implements IArrayable {
    /**
     * @return array
     */
    public function toArray() {
        return ['foo' => 'bar'];
    }
}
