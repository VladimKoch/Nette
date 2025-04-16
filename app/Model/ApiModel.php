<?php

namespace App\Model\ApiModel;

use Tomaj\NetteApi\EndpointIdentifier;
use Tomaj\NetteApi\Router\ApiRouter;
use Tomaj\NetteApi\Misc\Authorization\NoAuthorization;
use Tomaj\NetteApi\Description\InputParam;
use Tomaj\NetteApi\Description\InputParamType;
use Nette\DI\Container;
use App\Api\ImageConvertHandler;

class ApiModel
{
    public function __construct(private ApiRouter $apiRouter, private Container $container)
    {
    }

    public function registerEndpoints(): void
    {
        $handler = $this->container->getByType(ImageConvertHandler::class);

        $this->apiRouter->registerEndpoint(
            new EndpointIdentifier(1, 'image', 'convert'),
            NoAuthorization::class,
            $handler,
            [
                new InputParam(InputParam::FILE, 'file', InputParamType::FILE, true),
            ]
        );
    }
}