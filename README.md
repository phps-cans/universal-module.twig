
# Symfony console universal module

This package integrates [twig/twig](https://github.com/twigphp/Twig) in any [container-interop](https://github.com/container-interop/service-provider) compatible framework/container.

## Installation

```
composer require phps-cans/universal-module.twig
```

Once installed, you need to register the [`PSCS\Universal\Module\TwigServiceProvider`](src/TwigServiceProvider.php) into your container.

If your container supports Puli integration, you have nothing to do. Otherwise, refer to your framework or container's documentation to learn how to register *service providers*.

## Introduction

This service provider is meant to create a Symfony\Component\Console\Application.

## Provided services

This *service provider* provides the following services:

| Service name                | Description                          |
|-----------------------------|--------------------------------------|
| `ViewsDirectory`          | The path to your views                   |
| `\Twig_Loader_Filesystem::class`        | Twig Filsesystem loader       |
| `Twig_Environment::class`        | Twig environment using Filesystem loader       |


<small>Project template courtesy of <a href="https://github.com/thecodingmachine/service-provider-template">thecodingmachine/service-provider-template</a></small>
