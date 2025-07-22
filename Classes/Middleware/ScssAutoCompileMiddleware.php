<?php
namespace Malhar\Sitepackage\Middleware;

use Psr\Http\Message\ResponseInterface;
use Psr\Http\Message\ServerRequestInterface;
use Psr\Http\Server\RequestHandlerInterface;
use Psr\Http\Server\MiddlewareInterface;
use Malhar\Sitepackage\Service\CompileService;

class ScssAutoCompileMiddleware implements MiddlewareInterface
{
    public function process(ServerRequestInterface $request, RequestHandlerInterface $handler): ResponseInterface
    {
        // Only compile in development context
        //if ($_ENV['APP_CONTEXT'] === 'Development') {
            (new CompileService())->compileIfNeeded();
        //}

        return $handler->handle($request);
    }
}
