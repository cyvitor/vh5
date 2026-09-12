<?php
$pageTitle = 'Central VT | Automação e modernização da operação digital';
$pageDescription = 'Três frentes na mesma operação: DocuTrace entregue, produção em cloud em implantação e LeadFlow em desenvolvimento.';
$canonicalPath = '/centralvt.php';
?>
<!doctype html>
<html lang="pt-BR">
<head><?php include __DIR__ . '/head.php'; ?></head>
<body>
	<?php include __DIR__ . '/header.php'; ?>
	<main>
		<section class="project-hero">
			<div class="container project-hero-grid">
				<div>
					<a class="back-link" href="index.php#casos">← Voltar aos casos reais</a>
					<p class="eyebrow"><span></span>Case principal · três frentes</p>
					<h1>Central VT</h1>
					<p class="project-lead">Automação e modernização da operação digital: comunicação documental rastreável, engenharia de produção e automação do primeiro contato. Cada frente mantém seu estado real.</p>
					<span class="badge progress"><i></i>Case em evolução</span>
				</div>
				<div class="project-symbol" aria-hidden="true">
					<div class="mini-architecture"><span>Doc</span><b>→</b><span>Cloud</span><b>→</b><span>Lead</span></div>
				</div>
			</div>
		</section>

		<section class="section project-story">
			<div class="container">
				<div class="story-grid reveal">
					<article><span>01</span><h2>Contexto operacional</h2><p>A evolução digital exigia resolver problemas diferentes, mas conectados: publicação da aplicação, comunicação documental e tratamento do primeiro contato.</p></article>
					<article><span>02</span><h2>Abordagem</h2><p>Em vez de tratar cada demanda como um sistema isolado, o trabalho foi organizado como uma evolução da mesma operação, com entregas e estados independentes.</p></article>
					<article><span>03</span><h2>Estado atual</h2><p>DocuTrace entregue. Engenharia de produção em implantação, com pipeline integrada ainda pendente. LeadFlow em desenvolvimento e sem resultado operacional medido.</p></article>
				</div>
			</div>
		</section>

		<section class="section section-soft" id="producao">
			<div class="container">
				<div class="section-heading reveal">
					<div><p class="section-kicker">Frente 1</p><h2>Produção e cloud</h2></div>
					<p>Uma aplicação confiável também precisa de identidade, testes, rollback, observabilidade e limites conhecidos.</p>
				</div>
				<div class="front-status reveal"><span class="badge progress"><i></i>Em implantação</span></div>
				<div class="story-grid reveal">
					<article><span>Problema</span><h2>Publicação frágil</h2><p>Faltava um processo completo, seguro e repetível para sair do ambiente de desenvolvimento e chegar à produção com rastreio.</p></article>
					<article><span>Comprovado</span><h2>O que já está feito</h2><p>Ambientes containerizados, Cloud Run em produção, preparação do GitLab, Workload Identity Federation, IAM de menor privilégio, linha de base, rollback e teste de carga.</p></article>
					<article><span>Esperado</span><h2>O que ainda falta</h2><p>A integração final da pipeline precisa ser validada. O deploy automatizado ainda não deve ser apresentado como operacional.</p></article>
				</div>
				<div class="project-metrics reveal" style="margin-top:28px">
					<div><strong>8.502</strong><span>requisições no teste de carga em homologação</span></div>
					<div><strong>Banco</strong><span>o primeiro gargalo comprovado foi conexão</span></div>
					<div><strong>WIF</strong><span>pipeline sem chave JSON permanente</span></div>
					<div><strong>Pendente</strong><span>portão da pipeline integrada</span></div>
				</div>
				<p class="data-note">O teste de 10/08/2026 foi em homologação. Falhas no pico mascaravam esgotamento de conexões do PostgreSQL. Por isso a leitura é engenharia de limite, não “aprovado para escala”. Fonte interna do projeto Central VT.</p>
			</div>
		</section>

		<section class="section" id="leadflow-resumo">
			<div class="container">
				<div class="section-heading reveal">
					<div><p class="section-kicker">Frente 2</p><h2>LeadFlow</h2></div>
					<p>Captação, triagem e encaminhamento do primeiro contato — ainda em desenvolvimento.</p>
				</div>
				<div class="front-status reveal"><span class="badge build"><i></i>Em desenvolvimento</span></div>
				<div class="story-grid reveal">
					<article><span>Problema</span><h2>Triagem manual</h2><p>Contatos comerciais e solicitações de suporte entram pelo mesmo ponto e dependem de consulta, cadastro e encaminhamento humano.</p></article>
					<article><span>Solução</span><h2>Regra antes da IA</h2><p>O contato é gravado antes da classificação. Regras locais resolvem os casos claros, a IA trata somente o residual e falhas podem ser reprocessadas.</p></article>
					<article><span>Resultado</span><h2>Ainda esperado</h2><p>Menos intervenção entre contato e agenda. Nenhum percentual deve ser apresentado como já obtido.</p></article>
				</div>
				<p class="front-link reveal"><a class="case-link" href="leadflow.php">Abrir o caso LeadFlow →</a></p>
			</div>
		</section>

		<section class="section section-soft" id="docutrace-resumo">
			<div class="container">
				<div class="section-heading reveal">
					<div><p class="section-kicker">Frente 3</p><h2>DocuTrace</h2></div>
					<p>A frente já entregue: comunicação documental transformada em operação controlada.</p>
				</div>
				<div class="front-status reveal"><span class="badge done"><i></i>Entregue</span></div>
				<div class="story-grid reveal">
					<article><span>Problema</span><h2>Envio sem ciência</h2><p>Sair o e-mail não dizia quem chegou ao contrato, quem baixou e quem se manifestou.</p></article>
					<article><span>Solução</span><h2>Trilha por destinatário</h2><p>Campanha, token individual, portal protegido e eventos separados de entrega, visualização, download e aceite ou recusa.</p></article>
					<article><span>Comprovado</span><h2>Operação mensurável</h2><p>Fluxo centralizado, protegido e pesquisável. Não é assinatura digital nem garantia jurídica isolada.</p></article>
				</div>
				<p class="front-link reveal"><a class="case-link" href="docutrace.php">Abrir o caso DocuTrace →</a></p>
			</div>
		</section>

		<section class="section project-stack">
			<div class="container">
				<p class="section-kicker reveal">Meios nesta conta</p>
				<ul class="project-tech reveal">
					<li>Docker</li><li>Google Cloud Run</li><li>GitLab CI/CD</li><li>Workload Identity</li><li>PostgreSQL</li><li>PHP</li><li>APIs</li>
				</ul>
			</div>
		</section>

		<section class="contact compact" id="contato">
			<div class="container contact-inner reveal">
				<p class="section-kicker">Um processo parecido?</p>
				<h2>Descreva a operação. Avaliamos o que automatizar, integrar e manter sob decisão humana.</h2>
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
