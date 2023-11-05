<?php
function generateRandomProblemLink() {
    // Obtenir la date actuelle
    $currentDate = new DateTime();

    // Générer un seed aléatoire basé sur la date actuelle
    $seed = $currentDate->format('Ymd');

    // Initialiser un générateur de nombres pseudo-aléatoires avec le seed
    srand($seed);

    // Générer un numéro de problème aléatoire entre 1 et le nombre maximum de problèmes disponibles
    $maxProblemNumber = 100; // Remplacez par le nombre total de problèmes disponibles
    $randomProblemNumber = rand(1, $maxProblemNumber);

    // Construire le lien avec le numéro de problème aléatoire
    $problemLink = "https://projecteuler.net/problem=" . $randomProblemNumber;

    return $problemLink;
}
?>