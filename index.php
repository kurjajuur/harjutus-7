<!DOCTYPE html>
<html>
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
  <title>harjutus-7 - Tsüklid</title>
  <style>.contact {background: pink;} </style>
</head>
<body>
	<?php
	$count = 1;

	while ($count <= 10) {
	 	echo $count;
	 	$count += 1;
	 } 
	 echo "<br>lähme edasi";
	?>
	<h3>Infinite while loop</h3>
	<?php
	/*$count = 1;

	while ($count <= 10) {
	 	echo $count;
	 } 
	 echo "<br>lähme edasi";
	*/
	?>
<?php
    $count = 1;
    $number = 10;

    while ($count < 10) {
        while ($number > 0) {
            echo $number;
            $number -= 1;
        }
        //echo $count;
        $count += 1;
    }
?>
<br>
<?php
    $count = 0;

    while ($count < 15) {
        if ($count == 5) {
       //     echo "<script>alert('Number viie kord');</script>";
        } else {
            echo $count;
        }
        $count += 1;
    }
?>

<h2>For loop</h2>
<?php
    for ($count = 1; $count <= 10; $count += 1) {
        echo $count;
    }
?><br>

<?php
	for ($count = 1; $count <= 20; $count++) {
		if ($count % 2 === 1) {
			echo "Number {$count} on paaritu arv. <br>";
		} else {
			echo "Number {$count} on paarisarv. <br>";
		}
	}
?><br>


<?php
 /*  // While loop 
 	$students = 1;

    while ($students <= 20) {
        // Ulata õpilasele paberileht.

        $students++;
    }
?>

<?php
    for ($students = 1; $students <= 20; $students++) {
        // Ulata õpilasele paberileht.
    }*/
?>
<ol class = "students list">
<?php
    $students = array("Marko", "Fränk", "Merili", "Merili", "Triinu", "Veronika", "Silja", "Kristi", "Markus", "Cärolin", "Heiko", "Ingrid", "Syret", "Mihkel", "Eve", "Anneli", "Ants", "Risto", "Marge", "Aile");

    foreach ($students as $student) {
        // Ulata {$student}ile paberileht.
        echo "<li>Õpilase nimi on: {$student}<br></li>"; 
    }
?>
</ol>

<?php
    $students = array("Marko", "Fränk", "Merili", "Merili", "Triinu", "Veronika", "Silja", "Kristi", "Markus", "Cärolin", "Heiko", "Ingrid", "Syret", "Mihkel", "Eve", "Anneli", "Ants", "Risto", "Marge", "Aile");
    $nr = 1;

    foreach ($students as $student) {
        // Ulata {$student}ile paberileht.
        echo "{$nr}. Õpilase nimi on: {$student}<br>"; 
        $nr++;
    }
?>
<?php
    $animals = array("elephant", "dog", "cat", "fox");

    foreach ($animals as $animal) {
        echo $animal;
    }
?><br>
<table class="contact">
	<tbody>
		
		<?php
		    $contact = array(
		        "first_name" => "Peeter",
		        "last_name" => "Pirukas",
		        "e-mail" => "peeter.pirukas@eesti.ee",
		        "age" => 3
		        // $attribute => $value
		    );

		    foreach ($contact as $attribute => $value ) {
		    	$attribute_formatted = ucfirst(str_replace("_", " ", $attribute));
		        echo "
		        <tr>
		        	<td>{$attribute_formatted}:</td> 
		        	<td>{$value}</td>
		        </tr>"
		        ;
		    }
		?>
	
	</tbody>
</table>

<?php
	for ($nr = 1; $nr <= 10; $nr++) {
		echo $nr;
		continue;
		echo "test";
	}
?><br>
<?php
	for ($number = 1; $number <= 10; $number++) {
    if ($number == 5) {
        continue; // Kui $nr == 5, siis jääb alljärgnev vahele ning tsükkel käivitub uuesti.
    }

    echo $number . ", ";
}
?>
<br>
<?php
	$number =1;
	while ($number <= 10) {
		if ($number == 5) {
			break;
		}
		echo $number . ", ";
		$number++;
	}
?>
</body>

</html>