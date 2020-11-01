<?php
/**
 * Contains the BuyableImageSpatieV9 trait.
 *
 * @copyright   Copyright (c) 2020 Attila Fulop
 * @author      Attila Fulop
 * @license     MIT
 * @since       2020-10-11
 *
 */

namespace Vanilo\Support\Traits;

/**
 * Adds Buyable Image support using Spatie's Laravel Media Library V9
 */
trait BuyableImageSpatieV9
{
    public function hasImage(): bool
    {
        return $this->getMedia()->isNotEmpty();
    }

    public function getThumbnailUrl(): ?string
    {
        return $this->getFirstMediaUrl('default', 'thumbnail');
    }

    public function getImageUrl(): ?string
    {
        return $this->getFirstMediaUrl();
    }
}
