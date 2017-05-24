<?php
namespace Tests\Weew\JsonEncoder;

namespace Tests\Weew\JsonEncoder;

use PHPUnit_Framework_TestCase;
use Tests\Weew\JsonEncoder\Stubs\FakeArrayable;
use Tests\Weew\JsonEncoder\Stubs\FakeJsonable;
use Weew\JsonEncoder\Exceptions\InvalidDataTypeException;
use Weew\JsonEncoder\Exceptions\JsonDecodeException;
use Weew\JsonEncoder\Exceptions\JsonEncodeException;
use Weew\JsonEncoder\JsonEncoder;

class JsonEncoderTest extends PHPUnit_Framework_TestCase {
    public function test_encode_array() {
        $encoder = new JsonEncoder();
        $json = $encoder->encode(['foo' => 'bar']);
        $this->assertEquals('{"foo":"bar"}', $json);
    }

    public function test_encode_object() {
        $encoder = new JsonEncoder();
        $json = $encoder->encode((object) ['foo' => 'bar']);
        $this->assertEquals('{"foo":"bar"}', $json);
    }

    public function test_encode_arrayable() {
        $encoder = new JsonEncoder();
        $json = $encoder->encode(new FakeArrayable());
        $this->assertEquals('{"foo":"bar"}', $json);
    }

    public function test_encode_jsonable() {
        $encoder = new JsonEncoder();
        $json = $encoder->encode(new FakeJsonable());
        $this->assertEquals('{"foo":"bar"}', $json);
    }

    public function test_encode_invalid_data_type() {
        $encoder = new JsonEncoder();
        $this->setExpectedException(InvalidDataTypeException::class);
        $encoder->encode(1);
    }

    public function test_encode_throws_exception_with_invalid_data() {
        $encoder = new JsonEncoder();
        $data = [];
        $data['foo'] = &$data;
        $this->setExpectedException(JsonEncodeException::class);
        $encoder->encode($data);
    }

    public function test_decode() {
        $encoder = new JsonEncoder();
        $data = $encoder->decode('{"foo": "bar"}');
        $this->assertEquals(['foo' => 'bar'], $data);
    }

    public function test_decode_throws_exception_with_invalid_data() {
        $encoder = new JsonEncoder();
        $this->setExpectedException(JsonDecodeException::class);
        $encoder->decode('{"foo": "bar"');
    }

    public function test_encode_null() {
        $encoder = new JsonEncoder();
        $this->setExpectedException(InvalidDataTypeException::class);
        $encoder->encode(null);
    }

    public function test_decode_null() {
        $encoder = new JsonEncoder();
        $this->assertEquals(null, $encoder->decode(null));
    }

    public function test_encode_empty_string() {
        $encoder = new JsonEncoder();
        $this->setExpectedException(InvalidDataTypeException::class);
        $encoder->encode('');
    }

    public function test_decode_empty_string() {
        $encoder = new JsonEncoder();
        $this->assertEquals(null, $encoder->decode(''));
    }
}
