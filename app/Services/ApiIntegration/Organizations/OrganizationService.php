<?php

declare(strict_types=1);

namespace App\Services\ApiIntegration\Organizations;

use App\Services\ApiIntegration\Concerns\BuildBaseRequest;
use App\Services\ApiIntegration\Concerns\CanSendGetRequest;
use App\Services\ApiIntegration\Concerns\CanSendPostRequest;
use App\Services\ApiIntegration\Organizations\Resources\OrganizationResource;

final class OrganizationService
{
    use BuildBaseRequest;
    use CanSendGetRequest;
    use CanSendPostRequest;

    /**
     * @param string $baseUrl
     * @param string $apiToken
     */
    public function __construct(private readonly string $baseUrl, private readonly string $apiToken)
    {

    }

    public function organization(): OrganizationResource
    {
        return new OrganizationResource(
            service: $this,
        );
    }
}
