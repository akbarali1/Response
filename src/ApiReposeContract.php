<?php
declare(strict_types=1);

namespace Akbarali\ResponseData;

interface ApiReposeContract
{
    public function getResult(?string $key = null);

    public function isError(): bool;

    public function getError();

    public function getErrorMessage();

    public function getErrorCode();
}
