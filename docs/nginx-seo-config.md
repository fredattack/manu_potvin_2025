# Configuration nginx SEO

Snippets nginx a appliquer sur le serveur de production pour manupotvin.be.

## 1. Trailing slash normalization (301)

Rediriger les URLs avec trailing slash vers la version sans trailing slash pour eviter le contenu duplique.

```nginx
# Dans le bloc server principal
if (!-d $request_filename) {
    rewrite ^/(.*)/$ /$1 permanent;
}
```

## 2. Redirect non-www en un seul hop

Eviter la chaine de redirections http://manupotvin.be -> https://manupotvin.be -> https://www.manupotvin.be.
Rediriger directement en un seul 301.

```nginx
server {
    listen 80;
    listen 443 ssl;
    server_name manupotvin.be;

    ssl_certificate     /etc/letsencrypt/live/manupotvin.be/fullchain.pem;
    ssl_certificate_key /etc/letsencrypt/live/manupotvin.be/privkey.pem;

    return 301 https://www.manupotvin.be$request_uri;
}
```

## 3. HSTS header

Forcer HTTPS via le header Strict-Transport-Security.

```nginx
# Dans le bloc server SSL principal (www.manupotvin.be)
add_header Strict-Transport-Security "max-age=31536000; includeSubDomains" always;
```

## 4. Masquer la version nginx

Supprimer le header Server qui expose la version nginx.

```nginx
# Dans le bloc http ou server
server_tokens off;
```

## 5. Cache-Control pour les assets statiques

Anciennement en commentaire dans app.blade.php, deplace ici.

```nginx
location ~* \.(css|js|jpg|jpeg|png|webp|woff2|woff|ttf|svg|ico)$ {
    expires 1y;
    add_header Cache-Control "public, max-age=31536000, immutable";
}
```

## Application

Ces snippets doivent etre ajoutes dans la configuration nginx du serveur de production.
Tester avec `nginx -t` avant de recharger avec `systemctl reload nginx`.
