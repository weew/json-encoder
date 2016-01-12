<?php

namespace Tests\Weew\JsonEncoder\Exceptions;

use PHPUnit_Framework_TestCase;
use Weew\JsonEncoder\Exceptions\JsonDecodeException;

class JsonDecodeExceptionTest extends PHPUnit_Framework_TestCase {
    public function test_getters_and_setters() {
        $ex = new JsonDecodeException('foo', 'bar');
        $this->assertEquals('foo', $ex->getMessage());
        $this->assertEquals('bar', $ex->getJson());
    }
}
