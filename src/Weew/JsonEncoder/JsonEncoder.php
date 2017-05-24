<?php

namespace Weew\JsonEncoder;

use Weew\Contracts\IArrayable;
use Weew\Contracts\IJsonable;
use Weew\JsonEncoder\Exceptions\InvalidDataTypeException;
use Weew\JsonEncoder\Exceptions\JsonDecodeException;
use Weew\JsonEncoder\Exceptions\JsonEncodeException;

class JsonEncoder implements IJsonEncoder {
    /**
     * @param $data
     * @param int $options
     *
     * @return string
     * @throws InvalidDataTypeException
     * @throws JsonEncodeException
     */
    public function encode($data, $options = 0) {
        $json = null;

        if ($data instanceof IArrayable) {
            $json = @json_encode($data->toArray(), $options);
        } else if ($data instanceof IJsonable) {
            $json = $data->toJson($options);
        } else if (is_array($data) || is_object($data)) {
            $json =  @json_encode($data, $options);
        } else {
            throw new InvalidDataTypeException(
                s('Can not convert data of type "%s" to json.', get_type($data))
            );
        }

        if ($json === false) {
            throw new JsonEncodeException(json_last_error_msg(), $data);
        }

        return $json;
    }

    /**
     * @param $json
     * @param bool $assoc
     * @param int $depth
     * @param int $options
     *
     * @return mixed
     * @throws JsonDecodeException
     */
    function decode($json, $assoc = true, $depth = 512, $options = 0) {
        if (array_contains(['', null], $json)) {
            return null;
        }

        $data = @json_decode($json, $assoc, $depth, $options);
        
        if ($data === null && json_last_error() !== JSON_ERROR_NONE) {
            throw new JsonDecodeException(json_last_error_msg(), $json);
        }

        return $data;
    }
}
