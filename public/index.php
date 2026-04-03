<?php
declare(strict_types=1);

// 🔴 Configuration des erreurs (mode dev)
ini_set('display_errors', '1');
error_reporting(E_ALL);

// 🔵 Autoload des classes
spl_autoload_register(function ($class) {
    require __DIR__ . '/../src/' . $class . '.php';
});

// 🟢 Fonction avec typage strict
function addition(int $a, int $b): int {
    return $a + $b;
}

echo "Addition: " . addition(4, 6) . "<br>";

// 🟡 Gestion des exceptions
function division(int $a, int $b): float {
    if ($b === 0) {
        throw new Exception("Division par zéro interdite");
    }
    return $a / $b;
}

try {
    echo "Division: " . division(10, 2) . "<br>";
    echo "Division (erreur): " . division(10, 0) . "<br>";
} catch (Exception $e) {
    echo "Erreur: " . $e->getMessage() . "<br>";
}
// ================= Étape 5 =================
spl_autoload_register(function ($class) {
  require __DIR__ . '/../src/' . $class . '.php';
});

$p = new Personne();
echo $p->saluer();
echo "<br>";


// ================= Étape 6 =================
ini_set('display_errors', '1');
error_reporting(E_ALL);

// test erreur
$variableNonDefinie = "Test";
echo $variableNonDefinie;