# PHPSocket PHP backend script for RIA (Rich Internet Application) / SPA (Single-page Application) frontend

**composer.json**
```json
{
    "repositories": [
    {
        "url": "git@github.com:bermud-ru/phpsocket.git",
        "type": "git"
    },
    {
        "url": "git@github.com:bermud-ru/phproll.git",
        "type": "git"
    },
    {
        "url": "git@github.com:bermud-ru/jsroll.git",
        "type": "git"
    }
    ],
    "require": {
      "bermud-ru/phpsocket":"*@dev",
      "bermud-ru/phproll":"*@dev",
      "bermud-ru/jsroll":"*@dev"
    },

    "scripts": {
        "post-install-cmd": [
            "./vendor/bermud-ru/jsroll/post-install",
            "./vendor/bermud-ru/phproll/post-install",
            "./vendor/bermud-ru/phpsocket/post-install"
        ],
        "post-update-cmd": [
            "./vendor/bermud-ru/jsroll/post-update",
            "./vendor/bermud-ru/phproll/post-update",
            "./vendor/bermud-ru/phpsocket/post-update"
        ]
    },
    "install": {
        "address": "127.0.0.1",
        "domain": "wsserver.server"
    }
}
```

**CLI lunch**
```
php server.php --port=8001 --host=10.0.1.231 --thread=4
```

