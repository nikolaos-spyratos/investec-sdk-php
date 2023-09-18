<?php

declare(strict_types=1);

namespace InvestecSdkPhp\Requests\CorporateBankingForIntermediaries\Accounts;

use InvestecSdkPhp\Requests\CorporateBankingForIntermediaries\IntermediaryRequest;
use Saloon\Enums\Method;

/**
 * GetNetRates
 *
 * Returns the client-rate and admin-fee.
 */
class GetClientRateAndAdminFee extends IntermediaryRequest
{
    protected Method $method = Method::GET;

    public function __construct(
        protected string $intermediaryId,
        protected string $accountNumber,
    ) {
    }

    public function resolveEndpoint(): string
    {
        return "/za/ifi/v1/accounts/{$this->accountNumber}/client-rates";
    }
}
