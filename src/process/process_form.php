<?php

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $data = json_decode(file_get_contents('php://input'), true);
    file_put_contents('./data/cargaisons.json', $data);
}
    
   header('Content-Type: application/json');
    
    // Lire les données JSON de la requête
    $input = file_get_contents('php://input');
    $data = json_decode($input, true);
    
    if (json_last_error() !== JSON_ERROR_NONE) {
        echo json_encode(['error' => 'Invalid JSON']);
        exit;
    }
    
    // Chemin du fichier JSON
    $file = './data/cargaisons.json';
    
    
    // Lire les données existantes du fichier JSON
    if (file_exists($file)) {
        $json_data = file_get_contents($file);
        $arr_data = json_decode($json_data, true);
    } else {
        $arr_data = [];
    }
    
    // Ajouter les nouvelles données
    $arr_data[] = $data;
    
    // Sauvegarder les données mises à jour dans le fichier JSON
    if (file_put_contents($file, json_encode($arr_data, JSON_PRETTY_PRINT))) {
        echo json_encode(['message' => 'Les données ont été ajoutées avec succès']);
    } else {
        echo json_encode(['error' => 'Erreur lors de la sauvegarde des données']);
    }

 




/* if ($_SERVER["REQUEST_METHOD"] === "POST") {
    // Récupérer les données du formulaire
    $id_cargo = $_POST['id_cargo'] ?? null;
    $category = $_POST['type_cargo'] ?? null;
    $dateDepart = $_POST['depart'] ?? null;
    $dateArrive = $_POST['arrive'] ?? null;
    $origine = $_POST['origine'] ?? null;
    $destination = $_POST['destination'] ?? null;
    $etat = $_POST['etat'] ?? null;

    // Vérification des données obligatoires
    if (!$id_cargo || !$category || !$dateDepart || !$dateArrive || !$origine || !$destination) {
        http_response_code(400); 
        echo json_encode(array("message" => "Tous les champs sont obligatoires."));
        exit();
    }

    // Créer un tableau avec les nouvelles données
    $nouvellesDonnees = array(
        "id_cargo" => $id_cargo,
        "type_cargo" => $category,
        "depart" => $dateDepart,
        "arrive" => $dateArrive,
        "origine" => $origine,
        "destination" => $destination,
        "etat" => $etat
    );

    // Chemin vers le fichier JSON
    $cheminFichierJson = "./data/cargaisons.json";

    // Lire le contenu du fichier JSON
    if (!file_exists($cheminFichierJson)) {
        http_response_code(500); // Erreur interne du serveur
        echo json_encode(array("message" => "Le fichier JSON n'existe pas."));
        exit();
    }

    $json = file_get_contents($cheminFichierJson);

    // Convertir le contenu JSON en tableau associatif
    $donneesExistantes = json_decode($json, true);
    if ($donneesExistantes === null) {
        http_response_code(500); // Erreur interne du serveur
        echo json_encode(array("message" => "Erreur lors de la lecture du fichier JSON."));
        exit();
    }

    // Ajouter les nouvelles données à votre tableau existant
    $donneesExistantes[] = $nouvellesDonnees;

    // Convertir le tableau associatif en JSON
    $nouveauContenuJson = json_encode($donneesExistantes, JSON_PRETTY_PRINT);
    if ($nouveauContenuJson === false) {
        http_response_code(500); // Erreur interne du serveur
        echo json_encode(array("message" => "Erreur lors de l'encodage JSON."));
        exit();
    }

    // Écrire le nouveau contenu JSON dans le fichier
    if (file_put_contents($cheminFichierJson, $nouveauContenuJson) === false) {
        http_response_code(500); // Erreur interne du serveur
        echo json_encode(array("message" => "Erreur lors de l'écriture du fichier JSON."));
        exit();
    }

    // Envoyer une réponse JSON en cas de succès
    echo json_encode(array("message" => "Données ajoutées avec succès au fichier JSON."));
} else {
    // Envoyer une réponse d'erreur si la requête n'est pas de type POST
    http_response_code(405); // Méthode non autorisée
    echo json_encode(array("message" => "Méthode non autorisée."));
} */
?>
