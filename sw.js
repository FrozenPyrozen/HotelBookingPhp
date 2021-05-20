'use strict';
importScripts('sw-toolbox.js');
toolbox.precache(['index.php', 'new.php', 'edit.php', 'backend_events.php']);
toolbox.router.get('/*', toolbox.networkFirst, { networkTimeoutSeconds: 5 });
