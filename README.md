# VH5

Site institucional da VH5, publicado em [vh5.xyz](https://vh5.xyz/).

A VH5 automatiza operações empresariais: analisa o processo, integra o que a empresa já usa e coloca a solução em produção. Software, regras, IA e DevOps entram como meio, não como o produto anunciado.

## Stack

- PHP 8 (Apache)
- HTML, CSS e JavaScript estáticos
- Docker opcional para desenvolvimento local (`php:8.3-apache`)

Não há banco de dados nem build de frontend. Os casos ficam em `Site_novo/project-data.php` e são renderizados por `project-template.php`.

## Estrutura

```text
Site_novo/          código publicado em /var/www/vh5
  index.php         home
  project-data.php  conteúdo dos casos
  project-template.php
  *.php             páginas de caso
  assets/           CSS, JS, imagens e currículo
docker/             .htaccess usado no container local (sem redirecionar HTTPS)
Dockerfile
docker-compose.yml
```

Pastas como `legado/`, `Curriculo/` e `tmp/` ficam de fora do Git.

## Como rodar localmente

```bash
docker compose up --build
```

Abra [http://localhost:8080](http://localhost:8080). O container copia `Site_novo/` para `/var/www/html` e aplica `docker/htaccess.local`, para o redirecionamento HTTPS de produção não quebrar o ambiente local.

Sem Docker, aponte o Apache ou o PHP embutido para `Site_novo/`:

```bash
php -S localhost:8080 -t Site_novo
```

## Produção

- Origem: Apache no VPS, `DocumentRoot` em `/var/www/vh5`
- Domínio: `vh5.xyz` (Cloudflare na frente)
- O `.htaccess` de produção não força HTTPS no origin; o certificado fica no Cloudflare

## Licença

Uso privado da VH5. Todos os direitos reservados.
