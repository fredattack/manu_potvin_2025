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

## 6. Compression Brotli (Action 40)

Activer la compression Brotli pour reduire la taille des reponses HTTP. Brotli offre 15-25% de compression supplementaire par rapport a gzip.

Prerequis : installer le module `ngx_brotli` (non inclus par defaut dans nginx).

```nginx
# Dans le bloc http
brotli on;
brotli_comp_level 6;
brotli_types text/plain text/css application/json application/javascript text/xml application/xml application/xml+rss text/javascript image/svg+xml;

# Garder gzip en fallback pour les navigateurs sans support Brotli
gzip on;
gzip_vary on;
gzip_proxied any;
gzip_comp_level 6;
gzip_types text/plain text/css application/json application/javascript text/xml application/xml application/xml+rss text/javascript image/svg+xml;
```

## 7. Headers de securite (Action 42)

Ajouter Referrer-Policy et Permissions-Policy pour ameliorer la securite et le score SEO technique.

```nginx
# Dans le bloc server SSL principal (www.manupotvin.be)
add_header Referrer-Policy "strict-origin-when-cross-origin" always;
add_header Permissions-Policy "camera=(), microphone=(), geolocation=(self), payment=()" always;
```

## Application

Ces snippets doivent etre ajoutes dans la configuration nginx du serveur de production.
Tester avec `nginx -t` avant de recharger avec `systemctl reload nginx`.
