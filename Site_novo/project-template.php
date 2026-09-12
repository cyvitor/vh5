<?php
$projects = require __DIR__ . '/project-data.php';
if (!isset($projectSlug, $projects[$projectSlug])) {
	http_response_code(404);
	exit('Projeto não encontrado.');
}
$project = $projects[$projectSlug];
$pageTitle = $project['title'];
$pageDescription = $project['description'];
$canonicalPath = '/' . $projectSlug . '.php';
?>
<!doctype html>
<html lang="pt-BR">
<head><?php include __DIR__ . '/head.php'; ?></head>
<body>
	<?php include __DIR__ . '/header.php'; ?>
	<main>
		<section class="project-hero">
			<div class="container project-hero-grid">
				<div class="reveal">
					<a class="back-link" href="index.php#casos">← Voltar aos casos reais</a>
					<p class="eyebrow"><span></span><?= htmlspecialchars($project['type']) ?></p>
					<h1><?= htmlspecialchars($project['name']) ?></h1>
					<p class="project-lead"><?= htmlspecialchars($project['lead']) ?></p>
					<?php if (!empty($project['status'])):
						$tone = $project['status_tone'] ?? 'done';
						if (!in_array($tone, ['done', 'progress', 'build'], true)) {
							$tone = 'done';
						}
					?><span class="badge <?= htmlspecialchars($tone) ?>"><i></i><?= htmlspecialchars($project['status']) ?></span><?php endif; ?>
				</div>
				<div class="project-symbol reveal" aria-hidden="true">
					<?php if (($project['visual'] ?? '') === 'diagram'): ?>
						<div class="mini-architecture"><span>GitLab</span><b>→</b><span>Docker</span><b>→</b><span>Cloud</span></div>
					<?php else: ?>
						<span><?= htmlspecialchars(substr($project['name'], 0, 2)) ?></span>
						<small><?= htmlspecialchars($project['type']) ?></small>
					<?php endif; ?>
				</div>
			</div>
		</section>

		<section class="section project-story">
			<div class="container">
				<div class="story-grid story-grid-five reveal">
					<article><span>01</span><h2>Problema</h2><p><?= htmlspecialchars($project['problem']) ?></p></article>
					<article><span>02</span><h2>Contexto operacional</h2><p><?= htmlspecialchars($project['context'] ?? $project['problem']) ?></p></article>
					<article><span>03</span><h2>Solução</h2><p><?= htmlspecialchars($project['solution']) ?></p></article>
					<article><span>04</span><h2>Como funciona</h2><p><?= htmlspecialchars($project['how'] ?? $project['solution']) ?></p></article>
					<article class="story-result"><span>05</span><h2><?= htmlspecialchars($project['result_label'] ?? 'Resultado comprovado') ?></h2><p><?= htmlspecialchars($project['result']) ?></p></article>
				</div>
			</div>
		</section>

		<section class="section project-evidence">
			<div class="container">
				<div class="section-heading reveal">
					<div><p class="section-kicker">Evidências</p><h2>Resultado em contexto</h2></div>
					<p>Indicadores e entregas apresentados de acordo com o estado real de cada solução.</p>
				</div>
				<div class="project-metrics reveal">
					<?php foreach ($project['metrics'] as $metric): ?>
						<div><strong><?= htmlspecialchars($metric['value']) ?></strong><span><?= htmlspecialchars($metric['label']) ?></span></div>
					<?php endforeach; ?>
				</div>
				<?php if (!empty($project['note'])): ?><p class="data-note"><?= htmlspecialchars($project['note']) ?></p><?php endif; ?>
				<div class="deliverables reveal">
					<?php foreach ($project['highlights'] as $item): ?><div><i>✓</i><?= htmlspecialchars($item) ?></div><?php endforeach; ?>
				</div>
			</div>
		</section>

		<?php if (!empty($project['images'])): ?>
		<section class="section project-gallery">
			<div class="container">
				<div class="section-heading reveal"><div><p class="section-kicker">Evidência visual</p><h2>Interface e operação</h2></div><p>Imagens demonstrativas com dados fictícios ou devidamente sanitizados.</p></div>
				<div class="gallery-grid reveal">
					<?php foreach ($project['images'] as $image): ?>
						<figure><img src="<?= htmlspecialchars($image['src']) ?>" alt="<?= htmlspecialchars($image['alt']) ?>" loading="lazy" decoding="async" /></figure>
					<?php endforeach; ?>
				</div>
			</div>
		</section>
		<?php endif; ?>

		<section class="section project-stack">
			<div class="container">
				<p class="section-kicker reveal">Tecnologias aplicadas</p>
				<ul class="project-tech reveal"><?php foreach ($project['technologies'] as $tech): ?><li><?= htmlspecialchars($tech) ?></li><?php endforeach; ?></ul>
			</div>
		</section>

		<section class="contact compact" id="contato">
			<div class="container contact-inner reveal">
				<p class="section-kicker">Tem um processo semelhante?</p>
				<h2>Descreva o fluxo. Avaliamos o que automatizar, integrar e preparar para produção.</h2>
				<div class="contact-actions">
					<a class="button light" href="mailto:cyvitorhugo@gmail.com">Conversar por e-mail</a>
					<a class="button outline-light" href="https://wa.me/5571981583829" target="_blank" rel="noopener">WhatsApp ↗</a>
				</div>
			</div>
		</section>
	</main>
	<?php include __DIR__ . '/footer.php'; ?>
	<script src="assets/js/portfolio.js" defer></script>
</body>
</html>
