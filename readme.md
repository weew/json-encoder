# JSON encoding & decoding library

[![Build Status](https://img.shields.io/travis/weew/php-json-encoder.svg)](https://travis-ci.org/weew/php-json-encoder)
[![Code Quality](https://img.shields.io/scrutinizer/g/weew/php-json-encoder.svg)](https://scrutinizer-ci.com/g/weew/php-json-encoder)
[![Test Coverage](https://img.shields.io/coveralls/weew/php-json-encoder.svg)](https://coveralls.io/github/weew/php-json-encoder)
[![Version](https://img.shields.io/packagist/v/weew/php-json-encoder.svg)](https://packagist.org/packages/weew/php-json-encoder)
[![Licence](https://img.shields.io/packagist/l/weew/php-json-encoder.svg)](https://packagist.org/packages/weew/php-json-encoder)

## Table of contents


## Installation

`composer require weew/php-json-encoder`

## Introduction

This is a very simple wrapper around the `json_encode` and `json_decode` functions that additionally supports various data types and provides catchable encoding & decoding exceptions in case of a JSON error.

## Usage

```php
$encoder = new JsonEncoder();
$encoder->encode(/** data **/);
$encoder->decode(/** json **/);
```
