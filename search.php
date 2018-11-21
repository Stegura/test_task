<?php
    if(isset($_POST["queryStr"])) {
        $conn = mysqli_connect("localhost", "root", "", "world") or die ("No connection");
        $searchArea = "city";
        $columnName = "Name";

        $string = $_POST["queryStr"];
        
        $query = mysqli_query($conn, "SELECT * FROM $searchArea WHERE Name LIKE '%$string%' LIMIT 10");

        echo("<ul>");
        while($data = mysqli_fetch_array($query)) {
            echo("<li><a href='#'>".$data[$columnName]."</a></li>");
        }
        echo("</ul>");
    }
?>