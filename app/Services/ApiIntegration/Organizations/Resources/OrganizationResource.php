<?php

declare(strict_types=1);

namespace App\Services\ApiIntegration\Organizations\Resources;

use App\Services\ApiIntegration\Organizations\OrganizationService;
use Illuminate\Http\Client\Response;

final class OrganizationResource
{
    /**
     * @param OrganizationService $service
     */
    public function __construct(private readonly OrganizationService $service,)
    {

    }

    public function index(): Response
    {
        return $this->service->get(
            request: $this->service->buildRequestWithToken(),
            url: "/organizations",
        );
    }

    public function addRecord(string $identifier, array $data = []): Response
    {
        return $this->service->post(
            request: $this->service->buildRequestWithToken(),
            url: "/dental/{$identifier}/records",
            payload: $data,
        );
    }
}
