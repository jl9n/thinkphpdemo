<IfModule mod_rewrite.c>
RewriteEngine on

#����ʾindex.php

RewriteCond %{REQUEST_FILENAME} !-d
RewriteCond %{REQUEST_FILENAME} !-f
RewriteRule ^(.*)$ index.php/$1 [QSA,PT,L]

</IfModule>