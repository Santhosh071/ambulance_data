<?php

// Define an array containing the JSON data
$ambulance_data = [
    [
        "station_name" => "Homna Upazila",
        "ambulnc_man_name" => "Anika Ambulance Service",
        "num_01" => "1813395618",
        "num_02" => "1633966128"
    ],
    [
        "station_name" => "Comilla City",
        "ambulnc_man_name" => "Metropolitan Ambulance Service",
        "num_01" => "1814134513",
        "num_02" => "1767595331"
    ],
    [
        "station_name" => "Ardash Sadar Upazila",
        "ambulnc_man_name" => "Insaf Ambulance Service",
        "num_01" => "1918230894",
        "num_02" => "1531777296"
    ],
    [
        "station_name" => "Sadar South Upazila",
        "ambulnc_man_name" => "Ambulance Service",
        "num_01" => "1811652380",
        "num_02" => "1719228739"
    ],
    [
        "station_name" => "Debidwar Upazila",
        "ambulnc_man_name" => "Government Ambulance Service",
        "num_01" => "+8801861183588",
        "num_02" => "+8801825191166"
    ],
    [
        "station_name" => "Barura Upazila",
        "ambulnc_man_name" => "Doctor's Community Hospital Service",
        "num_01" => "+8801758883710",
        "num_02" => "+8801886470050"
    ]
];

// Set the Content-Type header to JSON
header('Content-Type: application/json');

// Output the JSON data
echo json_encode($ambulance_data, JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT);
