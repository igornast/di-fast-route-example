<?php declare(strict_types=1);


namespace App\Controller\Item;


use App\Service\ItemService;
use Laminas\Diactoros\Response\JsonResponse;
use Psr\Http\Message\ServerRequestInterface;

class ItemList
{
    /**
     * @var ServerRequestInterface
     */
    private $request;
    /**
     * @var ItemService
     */
    private $itemService;

    public function __construct(ServerRequestInterface $request, ItemService $itemService)
    {
        $this->request = $request;
        $this->itemService = $itemService;
    }

    public function __invoke()
    {
        $uri = $this->request->getUri();

        return new JsonResponse(['path' => $uri->getPath(), 'items' => $this->itemService->getSampleList()]);
    }
}