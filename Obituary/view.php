<?php
$conn = new mysqli('localhost', 'root', '', 'obituary_platform');

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$result = $conn->query("SELECT * FROM obituaries");

if ($result->num_rows > 0) {
    echo "<table border='8';  >
        <tr >
            <th>ID</th>
            <th>Name</th>
            <th>Date of Birth</th>
            <th>Date of Death</th>
            <th>Content</th>
            <th>Author</th>
            <th>Submission Date</th>
        </tr>";
    while($row = $result->fetch_assoc()) {
        echo "<tr >
            <td>{$row['id']}</td>
            <td>{$row['name']}</td>
            <td>{$row['date_of_birth']}</td>
            <td>{$row['date_of_death']}</td>
            <td>{$row['content']}</td>
            <td>{$row['author']}</td>
            <td>{$row['submission_date']}</td>
        </tr>";
    }
    echo "</table>";
} else {
    echo "No content found.";
}

$conn->close();
?>
