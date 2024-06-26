<?php 
// Include the autoloader if needed
// require_once __DIR__ . '/vendor/autoload.php';
// require_once 'vendor/autoload.php';

// Define base path
const BASE_PATH = __DIR__ . '/';

// Require Classes
require_once BASE_PATH . 'classes/Library.php';
require_once BASE_PATH . 'classes/LibraryItem.php';
require_once BASE_PATH . 'classes/Book.php';
require_once BASE_PATH . 'classes/Media.php';
require_once BASE_PATH . 'classes/Person.php';
require_once BASE_PATH . 'classes/Borrower.php';


// Liste de livres avec leur proprietés au format array
$libraryItems = [
    ["Le Petit Prince", "Antoine de Saint-Exupéry", "Reynal & Hitchcock", 9780156012195, "Un petit garçon qui habite une planète lointaine.", new DateTime('1943-04-06'), "Conte", 96, "Le Petit Prince raconte l'histoire d'un jeune garçon vivant sur une planète éloignée."],
    ["Les Misérables", "Victor Hugo", "A. Lacroix, Verboeckhoven & Cie", 9780451419439, "L'histoire de Jean Valjean, un ancien forçat.", new DateTime('1862-01-01'), "Roman", 1232, "Les Misérables est un roman de Victor Hugo qui explore la vie de Jean Valjean et les luttes sociales de son époque."],
    ["Madame Bovary", "Gustave Flaubert", "Michel Lévy frères", 9780140449129, "L'histoire d'Emma Bovary.", new DateTime('1857-01-01'), "Roman", 368, "Madame Bovary décrit la vie d'Emma Bovary, une femme insatisfaite cherchant l'amour et l'excitation."],
    ["L'Étranger", "Albert Camus", "Gallimard", 9782070360024, "Un homme détaché de la société.", new DateTime('1942-05-01'), "Roman", 184, "L'Étranger suit la vie de Meursault, un homme indifférent aux conventions sociales."],
    ["À la recherche du temps perdu", "Marcel Proust", "Grasset", 9782070102600, "Une exploration de la mémoire.", new DateTime('1913-11-14'), "Roman", 1872, "À la recherche du temps perdu est une œuvre monumentale qui examine la mémoire et le passage du temps."],
    ["Notre-Dame de Paris", "Victor Hugo", "Gosselin", 9782253006181, "L'histoire de Quasimodo et Esmeralda.", new DateTime('1831-03-16'), "Roman", 704, "Notre-Dame de Paris narre l'histoire de Quasimodo et de son amour pour Esmeralda."],
    ["Candide", "Voltaire", "Sirène", 9782080703256, "Les aventures de Candide.", new DateTime('1759-01-01'), "Conte philosophique", 144, "Candide est un conte philosophique satirique qui critique l'optimisme irraisonné."],
    ["La Peste", "Albert Camus", "Gallimard", 9780141185132, "Une ville frappée par la peste.", new DateTime('1947-01-01'), "Roman", 320, "La Peste explore les réactions humaines face à une épidémie dévastatrice."],
    ["Les Fleurs du mal", "Charles Baudelaire", "Poulet-Malassis et de Broise", 9782070324209, "Une collection de poèmes.", new DateTime('1857-06-25'), "Poésie", 464, "Les Fleurs du mal est une œuvre poétique qui explore la beauté et la corruption."],
    ["Le Hobbit", "J.R.R. Tolkien", "Allen & Unwin", 9780547928227, "Les aventures de Bilbo Baggins.", new DateTime('1937-09-21'), "Roman", 320, "Le Hobbit raconte les aventures de Bilbo Baggins et sa quête pour récupérer le trésor gardé par le dragon Smaug."],
];

foreach ($libraryItems as  $index_item => $libraryItem) {
    
    // Determine le status (in_house, borrowed, suspended default :in house))
    $status = $index_item % 3 == 0 ? "in_house" : ($index_item % 3 == 1 ? "borrowed" : "suspended");
    // Determine type de support (Papier, Numérique. default :Papier)
    $type   = $index_item % 2 === 0 ? "Papier" : "Numérique";
    // Définir date emprunt et retour si le statut est "borrowed" 
    $loan_date   = $status == "borrowed" ? new DateTime('2024-06-01') : null;
    $return_date = $status == "borrowed" ? new DateTime('2024-06-15') : null;

    // Generate unique reference number starting with REF001 based on item index+1
    $reference_number = "REF" . str_pad($index_item + 1, 3, "0", STR_PAD_LEFT);
 // Instantiation de l'objet LibraryItem pour chaque Item
    $libraryItem = new book(
    
        $reference_number,   //Réference interne
        $libraryItem[0],    //Titre
        $libraryItem[1],   //Auteur
        $libraryItem[2],  //Publisher
        $libraryItem[3], //ISBN
        $libraryItem[4],   //Déscription
        $libraryItem[5],  //Date publication
        $type,           // type support (papier / numérqiue) default : papier
        $status, 
        true,                 // is_Borrowable (default true)
        $loan_date,          // Date de d'emprunt
        $return_date,       // Date of retour
        $libraryItem[6],   //  Genre du livre
        $libraryItem[7],  // Nombre de pages 
        $libraryItem[8], //  Synopsis
        
        
    
    );

    

    // Affichage de l'élement de la bibliotheque
    echo $libraryItem->bookDisplay() . "\n\n";
    //var_dump($libraryItem);

    //echo $libraryItem->mediaDisplay() . "\n\n";
   
    


}