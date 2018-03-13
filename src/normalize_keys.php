<?php

use Illuminate\Support\Collection;

Collection::macro('normalizeKeys', function () {
    if ($this->isEmpty()) {
        return $this;
    }

    $null_array = array_fill_keys(
        array_keys(array_merge(...$this)),
        null
    );

    $this->transform(function ($item) use ($null_array) {
        return array_merge($null_array, $item);
    });

    return $this;
});
