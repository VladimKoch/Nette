<?php

declare(strict_types=1);


namespace App\Presentation\TomajApi;

use Tomaj\NetteApi\Handlers\BaseHandler;
use Tomaj\NetteApi\Endpoint\ApiHandlerInterface;
use Tomaj\NetteApi\Endpoint\ApiRequestInterface;
use Tomaj\NetteApi\Response\ResponseInterface;
use Tomaj\NetteApi\Response\JsonApiResponse;
use Tomaj\NetteApi\Response\BlobApiResponse;
use Nette\Http\FileUpload;
use Nette\Http\Response;

class TomajApiPresenter extends BaseHandler
{
    public function handle(array $params): ResponseInterface
    {
        if (!isset($params['file']) || !$params['file'] instanceof FileUpload || !$params['file']->isOk()) {
            return new JsonApiResponse(Response::S400_BadRequest, ['error' => 'Soubor nebyl správně nahrán']);
        }

        $file = $params['file'];
        $image = @imagecreatefromjpeg($file->getTemporaryFile());

        if (!$image) {
            return new JsonApiResponse(Response::S400_BadRequest, ['error' => 'Neplatný JPEG obrázek']);
        }

        ob_start();
        imagepng($image);
        $pngData = ob_get_clean();
        imagedestroy($image);

        return new ResponseInterface(
            Response::S200_OK,
            'image/png',
            $pngData
        );
    }
}