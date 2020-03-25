<?php

namespace Akceli\RealtimeClientStoreSync\ClientStore;

use Illuminate\Database\Eloquent\Model;

interface ClientStoreInterface
{
    /**
     * @param int $store_id
     * @return array|ClientStorePropertyInterface[]
     */
    public static function getStore(int $store_id): array;
}
