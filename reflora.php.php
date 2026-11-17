<?php	
$impactos = [
	[
		'numero' => '01',
		'titulo' => 'Solo e água contaminados',
		'texto' => 'Baterias, placas e telas podem liberar metais e substâncias tóxicas. No lixo comum, esses materiais podem chegar ao solo e aos cursos d’água.',
		'icone' => '◉',
	],
	[
		'numero' => '02',
		'titulo' => 'Riscos para a saúde',
		'texto' => 'A exposição a contaminantes pode afetar quem vive perto de áreas de descarte irregular e quem manuseia esses resíduos sem proteção.',
		'icone' => '✳',
	],
	[
		'numero' => '03',
		'titulo' => 'Recursos desperdiçados',
		'texto' => 'Celulares e computadores guardam cobre, alumínio e outros materiais que podem voltar para a indústria quando separados corretamente.',
		'icone' => '↻',
	],
];

$destinos = [
	['passo' => '01', 'titulo' => 'Apague seus dados', 'texto' => 'Faça backup do que importa, saia das suas contas e restaure o aparelho para as configurações de fábrica. Retire chips e cartões de memória.'],
	['passo' => '02', 'titulo' => 'Separe por tipo', 'texto' => 'Mantenha pilhas e baterias separadas. Proteja terminais com fita e, se possível, guarde cada item em uma embalagem seca.'],
	['passo' => '03', 'titulo' => 'Encontre um ponto', 'texto' => 'Procure um ecoponto ou ponto de coleta de eletroeletrônicos. Redes de varejo e fabricantes também podem receber produtos antigos.'],
	['passo' => '04', 'titulo' => 'Entregue com segurança', 'texto' => 'Não desmonte, fure ou queime aparelhos. Leve-os inteiros ao coletor e confirme se o local aceita aquele tipo de material.'],
];

function e(string $texto): string
{
	return htmlspecialchars($texto, ENT_QUOTES, 'UTF-8');
}
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="Descubra como descartar, reciclar e reutilizar resíduos eletrônicos com mais cuidado e segurança.">
	<meta name="theme-color" content="#fffafb">
	<title>Reflora 🌷 | Tecnologia que floresce de novo</title>
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=DM+Mono:wght@400;500&family=DM+Sans:wght@400;500;600;700&family=Manrope:wght@400;500;600;700;800&family=Nunito:wght@600;700;800&family=Playfair+Display:wght@600;700&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="/style.css">
</head>
<body>

    <header class="site-header">
        <div class="container header-content">
            <a class="logo" href="#inicio" aria-label="Reflora - início"><span class="brand-mark" aria-hidden="true">✿</span> Reflora</a>
            <nav class="nav-links" aria-label="Navegação principal">
                <a href="#inicio">Início</a>
                <a href="#impactos">Impactos</a>
                <a href="#descarte">Como descartar</a>
            </nav>
        </div>
    </header>

    <main id="inicio" class="container main-content">
        <section class="intro" id="impactos">
            <h1>Impactos no Meio Ambiente</h1>
            <p>O descarte incorreto de lixo eletrônico traz consequências graves para o planeta e para a nossa saúde. Entenda os principais riscos:</p>
        </section>

        <div class="card-grid">
            <?php foreach ($impactos as $impacto): ?>
            <article class="card">
                <h3><?= e($impacto['titulo']) ?></h3>
                <p><?= e($impacto['texto']) ?></p>
            </article>
            <?php endforeach; ?>
        </div>

        <section class="health-section" id="descarte">
            <h2>Como fazer o descarte correto</h2>
            <p class="subtitle">Prepare o aparelho e entregue-o a um ponto de coleta apropriado:</p>

            <ul class="substance-list">
                <?php foreach ($destinos as $destino): ?>
                <li><strong><?= e($destino['titulo']) ?>:</strong> <?= e($destino['texto']) ?></li>
                <?php endforeach; ?>
            </ul>
        </section>

        <section class="health-section" id="reuso">
            <h2>Um aparelho usado ainda pode ter muita vida</h2>
            <p class="subtitle">Conserte, doe, reutilize ou recicle. Evitar o descarte precoce também ajuda o meio ambiente.</p>

            <ul class="substance-list">
                <li><strong>Conserte:</strong> Procure uma assistência técnica antes de substituir o aparelho inteiro.</li>
                <li><strong>Doe ou venda:</strong> Apague seus dados e encaminhe aparelhos em bom estado para outra pessoa.</li>
                <li><strong>Reaproveite:</strong> Use equipamentos antigos com segurança para outras funções.</li>
                <li><strong>Recicle:</strong> Entregue aparelhos sem conserto em um ponto especializado.</li>
            </ul>
        </section>

        <section class="health-section" id="coleta">
            <h2>Encontre um ponto de coleta</h2>
            <p class="subtitle">Consulte um localizador oficial antes de levar seus aparelhos:</p>
            <div class="card-grid">
                <article class="card">
                    <h3>Green Eletron</h3>
                    <p><a href="https://greeneletron.org.br/localizador/" target="_blank" rel="noopener noreferrer">Encontrar ponto de coleta →</a></p>
                </article>
                <article class="card">
                    <h3>ABREE</h3>
                    <p><a href="https://abree.org.br/" target="_blank" rel="noopener noreferrer">Consultar locais de entrega →</a></p>
                </article>
            </div>
        </section>
    </main>

    <footer class="site-footer">
        <div class="container">
            <p>&copy; 2026 Reflora. Feito por Floboians — promovendo o descarte correto de eletrônicos.</p>
        </div>
    </footer>

</body>
</html>
