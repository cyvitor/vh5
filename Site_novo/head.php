<?php
$pageTitle = $pageTitle ?? 'VH5 | Automação de operações';
$pageDescription = $pageDescription ?? 'A VH5 transforma processos manuais em operações que funcionam sozinhas — integradas, rastreáveis e prontas para produção.';
$canonicalPath = $canonicalPath ?? '/';
$ogImage = $ogImage ?? 'https://vh5.xyz/assets/images/og-vitor-hugo-devops.jpg';
$canonicalUrl = 'https://vh5.xyz' . $canonicalPath;
?>
<title><?= htmlspecialchars($pageTitle, ENT_QUOTES, 'UTF-8') ?></title>
<meta charset="utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1" />
<meta name="description" content="<?= htmlspecialchars($pageDescription, ENT_QUOTES, 'UTF-8') ?>" />
<meta name="author" content="Vitor Hugo Lima dos Santos" />
<meta name="theme-color" content="#07111f" />
<meta name="robots" content="index, follow, max-image-preview:large" />
<meta property="og:type" content="website" />
<meta property="og:url" content="<?= htmlspecialchars($canonicalUrl, ENT_QUOTES, 'UTF-8') ?>" />
<meta property="og:title" content="<?= htmlspecialchars($pageTitle, ENT_QUOTES, 'UTF-8') ?>" />
<meta property="og:description" content="<?= htmlspecialchars($pageDescription, ENT_QUOTES, 'UTF-8') ?>" />
<meta property="og:image" content="<?= htmlspecialchars($ogImage, ENT_QUOTES, 'UTF-8') ?>" />
<meta property="og:image:width" content="1200" />
<meta property="og:image:height" content="630" />
<meta property="og:locale" content="pt_BR" />
<meta name="twitter:card" content="summary_large_image" />
<link rel="canonical" href="<?= htmlspecialchars($canonicalUrl, ENT_QUOTES, 'UTF-8') ?>" />
<link rel="icon" href="assets/images/favicon.svg" type="image/svg+xml" />
<link rel="apple-touch-icon" href="assets/images/apple-touch-icon.png" />
<link rel="manifest" href="manifest.webmanifest" />
<link rel="stylesheet" href="assets/css/portfolio.css" />
