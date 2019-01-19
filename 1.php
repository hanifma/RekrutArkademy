<?php
$name = "Hanif Muflihul Anwar";
$address = "Jepara Wetan, Binangun, Cilacap";
$hobbies = array("Editing", "Programming", "Fishing", "Gaming");
$is_married = false;
$skills = [
    "Web" => ["HTML","CSS","PHP","Java Script"],
    "Mobile" => ["Android Studio"],
    "Other" => ["C","VB","Python"]
];
$school = [
    "highSchool" => "SMK TELKOM PURWOKERTO",
    "university" => "-"
];
function biodata($name, $address, $hobbies, $is_married, $school, $skills){
    return json_encode(array(
        "name" => $name,
        "address" => $address,
        "hobbies" => $hobbies,
        "is_married" => $is_married,
        "school" => $school,
        "skills" => $skills
    ), JSON_PRETTY_PRINT);
}
echo biodata($name, $address, $hobbies, $is_married, $school, $skills);
?>