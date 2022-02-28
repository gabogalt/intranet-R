<?php

 $params = session_get_cookie_params();
        setcookie(
            session_name(),
            '',
            time() - MAX_SESSION_TIEMPO,
            $params[ 'path' ],
            $params[ 'domain' ],
            $params[ 'secure' ],
            $params[ 'httponly' ] );

    @session_destroy();

echo '<script>window.location = "http://remax-rio.com.ar/intranet1/login.php";</script>';