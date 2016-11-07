# typeof

**Installation**

```
composer require kelunik/typeof
```

**Usage**

```php
<?php

use function Kelunik\Typeof\typeof;

var_dump(typeof(new stdClass)); // "stdClass"
var_dump(typeof("")); // "string"
var_dump(typeof(42)); // "integer"
var_dump(typeof(42.)); // "double"
```

**License**

MIT.
