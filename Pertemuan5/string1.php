<?php
$loremIpsum = "Lorem ipsum dolor sit amet consectetur adipisicing elit. 
Reprehenderit laborum doloribus exercitationem, impedit ipsam assumenda, 
nesciunt aperiam culpa error recusandae perferendis officiis ut quasi totam, 
quia officia earum id labore.";

echo "<p> {$loremIpsum}</p>";
echo "Panjang karakter: ". strlen($loremIpsum). "<br>"; 
echo "Panjang kata: " . str_word_count($loremIpsum). "<br>"; 
echo "<p>". strtoupper($loremIpsum). "</p>";
echo "<p>" . strtolower($loremIpsum) . "</p>";
?>