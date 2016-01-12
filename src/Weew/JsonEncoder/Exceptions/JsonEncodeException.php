<?php

namespace Weew\JsonEncoder\Exceptions;

use Exception;

class JsonEncodeException extends Exception {
    /**
     * @var mixed
     */
    private $data;

    /**
     * JsonEncodeException constructor.
     *
     * @param string $message
     * @param mixed $data
     */
    public function __construct($message, $data) {
        parent::__construct($message);

        $this->data = $data;
    }

    /**
     * @return mixed
     */
    public function getData() {
        return $this->data;
    }
}
