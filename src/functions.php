<?php

namespace Kelunik\Typeof;

function typeof($o) {
    if (is_object($o)) {
        return get_class($o);
    }

    return gettype($o);
}
