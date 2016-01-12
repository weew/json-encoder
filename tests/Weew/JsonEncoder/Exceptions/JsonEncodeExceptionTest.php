<?php

namespace Tests\Weew\JsonEncoder\Exceptions;

use PHPUnit_Framework_TestCase;
use Weew\JsonEncoder\Exceptions\JsonEncodeException;

class JsonEncodeExceptionTest extends PHPUnit_Framework_TestCase {
    public function test_getters_and_setters() {
        $ex = new JsonEncodeException('foo', 'bar');
        $this->assertEquals('foo', $ex->getMessage());
        $this->assertEquals('bar', $ex->getData());
    }
}
