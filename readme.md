# JSON encoding & decoding library

[![Build Status](https://img.shields.io/travis/weew/json-encoder.svg)](https://travis-ci.org/weew/json-encoder)
[![Code Quality](https://img.shields.io/scrutinizer/g/weew/json-encoder.svg)](https://scrutinizer-ci.com/g/weew/json-encoder)
[![Test Coverage](https://img.shields.io/coveralls/weew/json-encoder.svg)](https://coveralls.io/github/weew/json-encoder)
[![Version](https://img.shields.io/packagist/v/weew/json-encoder.svg)](https://packagist.org/packages/weew/json-encoder)
[![Licence](https://img.shields.io/packagist/l/weew/json-encoder.svg)](https://packagist.org/packages/weew/json-encoder)

## Table of contents

- [Installation](#installation)
- [Introduction](#introduction)
- [Usage](#usage)

## Installation

`composer require weew/json-encoder`

## Introduction

This is a very simple wrapper around the `json_encode` and `json_decode` functions that additionally supports various data types and provides catchable encoding & decoding exceptions in case of a JSON error.

## Usage

```php
$encoder = new JsonEncoder();
$encoder->encode(/** data **/);
$encoder->decode(/** json **/);
```
