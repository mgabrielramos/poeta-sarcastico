<?php
// generator.php

header('Content-Type: application/json; charset=utf-8');

// Lê JSON enviado via fetch
$input = json_decode(file_get_contents('php://input'), true);

$lines = isset($input['lines']) ? (int)$input['lines'] : 6;
if ($lines < 2)  $lines = 2;
if ($lines > 16) $lines = 16;

// Se quiser permitir seed pra “repetir” um poema:
if (isset($input['seed'])) {
    mt_srand((int)$input['seed']);
}

// Vocabulário técnico
$tecnicos = [
    'mecânica quântica',
    'termodinâmica',
    'neurociência computacional',
    'teoria da informação',
    'entropia',
    'cosmologia',
    'ótica quântica',
    'cibernética',
    'teoria do caos',
    'estatística bayesiana',
    'engenharia de sistemas',
    'topologia',
];

// Vocabulário filosófico
$filosoficos = [
    'niilismo elegante',
    'existencialismo de boteco',
    'ontologia decrépita',
    'epistemologia cansada',
    'ética improvisada',
    'metafísica em ruínas',
    'dialética mal resolvida',
    'teleologia esquecida',
    'hedonismo culpado',
    'ascese intermitente',
];

// Sarcasmo / crítica
$sarcasmo = [
    'coaching quântico',
    'produtividade tóxica',
    'meritocracia de powerpoint',
    'espiritualidade de Instagram',
    'capitalismo mindfulness',
    'otimismo obrigatório',
    'autoajuda pasteurizada',
    'empreendedorismo de palco',
    'guru de LinkedIn',
    'gestão de tempo que rouba o tempo',
];

// Sujeitos / “eu” / entidades
$sujeitos = [
    'eu',
    'o cosmos',
    'a minha sanidade',
    'o algoritmo',
    'a estatística',
    'a consciência',
    'o corpo cansado',
    'a dúvida',
    'a entropia emocional',
    'o superego em burnout',
];

// Complementos filosófico-técnicos
$complementos = [
    'é só um bug de arredondamento no universo',
    'é uma feature mal documentada da natureza',
    'roda em beta eterno desde o Big Bang',
    'vive em loop infinito esperando sentido',
    'faz overfitting em qualquer crença conveniente',
    'não passa de ruído fantasiado de revelação',
    'compila com warning, mas ninguém lê o log',
    'é uma curva normal com delírios de grandeza',
    'é ruído branco com pretensões de sinfonia',
    'é só um cluster de átomos fingindo importância',
];

// Estruturas de verso
$estruturas = [
    // %s substituídos por aleatórios das listas
    "Entre %s e %s, descubro que %s %s.",
    "Na prática, %s encontra %s e %s percebe que %s.",
    "Quando %s flerta com %s, %s descobre que %s.",
    "Enquanto %s promete respostas, %s sussurra que %s.",
    "Sob a luz da %s, %s olha para %s e conclui que %s.",
    "Se %s fosse honesto como %s, %s admitiria que %s.",
];

function pick(array $arr) {
    return $arr[array_rand($arr)];
}

$poemLines = [];

for ($i = 0; $i < $lines; $i++) {
    $estrutura = pick($estruturas);

    $v1 = pick($tecnicos);
    $v2 = pick($filosoficos);
    $v3 = pick($sujeitos);
    $v4 = pick($sarcasmo);
    $v5 = pick($complementos);

    // Substituição inteligente: escolhe o que encaixa melhor em cada posição
    // Aqui uso um padrão simples: %s %s %s %s em ordem adequada
    $line = sprintf(
        $estrutura,
        $v1,
        $v2,
        $v3,
        // às vezes usa sarcasmo, às vezes complemento
        (mt_rand(0, 1) === 0 ? $v5 : $v4 . ' que prova que ' . $v5)
    );

    $poemLines[] = $line;
}

$response = [
    'lines' => $poemLines,
    'text'  => implode("\n", $poemLines),
];

echo json_encode($response, JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT);
