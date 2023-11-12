<?php

// Define an array of motorbike names
$motorbikeNames = [
    "Honda CBR",
    "Yamaha R1",
    "Kawasaki Ninja",
    "Suzuki GSX-R",
    "Ducati Panigale"
];

// Define an array of motorbike types
$motorbikeTypes = [
    "Sport",
    "Cruiser",
    "Naked",
    "Touring",
    "Adventure"
];

// Define an array of motorbike engine sizes
$motorbikeEngineSizes = [
    "600cc",
    "1000cc",
    "650cc",
    "750cc",
    "1200cc"
];

// Generate the list of motorbike names along with their type and engine size
for ($i = 0; $i < count($motorbikeNames); $i++) {
    echo "Motorbike Name: " . $motorbikeNames[$i] . "\n";
    echo "Type: " . $motorbikeTypes[$i] . "\n";
    echo "Engine Size: " . $motorbikeEngineSizes[$i] . "\n\n";
}

?>