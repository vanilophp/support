<?php

declare(strict_types=1);

/**
 * Contains the AddressModel trait.
 *
 * @copyright   Copyright (c) 2018 Attila Fulop
 * @author      Attila Fulop
 * @license     MIT
 * @since       2018-10-26
 *
 */

namespace Vanilo\Support\Traits;

/**
 * Trait for Eloquent Models with default implementation of the Address interface
 */
trait AddressModel
{
    /**
     * @inheritDoc
     */
    public function getName(): string
    {
        return $this->name ?: '';
    }

    /**
     * @inheritDoc
     */
    public function getCountryCode(): string
    {
        return $this->country_id ?: '';
    }

    /**
     * @inheritDoc
     */
    public function getProvinceCode(): ?string
    {
        return $this->province?->code;
    }

    /**
     * @inheritDoc
     */
    public function getPostalCode(): ?string
    {
        return $this->postalcode;
    }

    /**
     * @inheritDoc
     */
    public function getCity(): string
    {
        return $this->city ?: '';
    }

    /**
     * @inheritDoc
     */
    public function getAddress(): string
    {
        return $this->address ?: '';
    }

    public function getAddress2(): ?string
    {
        return $this->address2 ?? null;
    }
}
