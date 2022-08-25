<?php 
    include __DIR__ . "/db.php"; 
    $genreSelected = $_GET["genre"];
    function filtering($element){
        if ($element["genre"] == $_GET["genre"]) {
            return $element;
        }
    };


    if($genreSelected == "All"){
        $filteredDiscs = $discs;
    }elseif($genreSelected == "Pop"){
        $filteredDiscs = $discs;
        $filteredDiscs = array_filter($filteredDiscs, "filtering");
    }elseif($genreSelected == "Rock"){
        $filteredDiscs = $discs;
        $filteredDiscs = array_filter($filteredDiscs, "filtering");
    }elseif($genreSelected == "Jazz"){
        $filteredDiscs = $discs;
        $filteredDiscs = array_filter($filteredDiscs, "filtering");
    }elseif($genreSelected == "Metal"){
        $filteredDiscs = $discs;
        $filteredDiscs = array_filter($filteredDiscs, "filtering");
    }

    header('Content-Type: application/json');
    echo json_encode(["success" => true,
                    "result" => $filteredDiscs]);
?>