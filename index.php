<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Filmoteca - Ma Collection de Films</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
        }
                
        header {
            background-color: #333;
            color: white;
            padding: 1rem 0;
            text-align: center;
        }
        
        header h1 {
            margin: 0;
        }
        
        nav ul {
            list-style: none;
            padding: 0;
        }
        
        nav ul li {
            display: inline;
            margin: 0 1rem;
        }
        
        nav ul li a {
            color: white;
            text-decoration: none;
        }
        
        nav ul li a:hover {
            text-decoration: underline;
        }
        
        main {
            padding: 2rem;
            padding-bottom: 5rem; 
        }
        
        footer {
            background-color: #333;
            color: white;
            text-align: center;
            padding: 1rem 0;
            position: fixed;
            width: 100%;
            bottom: 0;
        }

        form {
            margin-top: 2rem;
            background-color: #fff;
            padding: 2rem;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            max-width: 600px;
            margin: 2rem auto;
        }

        form label {
            display: block;
            margin-bottom: 0.5rem;
            font-weight: bold;
        }

        form input[type="text"],
        form textarea {
            width: 100%;
            padding: 0.5rem;
            margin-bottom: 1rem;
            border: 1px solid #ccc;
            border-radius: 4px;
        }

        form input[type="submit"] {
            background-color: #333;
            color: white;
            padding: 0.5rem 1rem;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }

        form input[type="submit"]:hover {
            background-color: #555;
        }
    </style>
</head>

<body>
    <header>
        <h1>Filmoteca</h1>
        <nav>
            <ul>
                <li><a href="#">Accueil</a></li>
                <li><a href="#">Liste des Films</a></li>
                <li><a href="#">Ajouter un Film</a></li>
                <li><a href="#">Contact</a></li>
            </ul>
        </nav>
    </header>
    <main>
        <section>
            <h2>Bienvenue dans Ma Collection de Films</h2>
            <p>Gérez votre collection de films facilement. Ajoutez, éditez, supprimez et notez vos films préférés!</p>
            <h2>Liste des Films</h2>
            <?php
            $servername = "localhost";
            $username = "root";
            $password = "root";
            $dbname = "filmoteca";
            
             
            $conn = new mysqli($servername, $username, $password, $dbname);
            
            if ($conn->connect_error) {
                die("Connection failed: " . $conn->connect_error);
            }
            
            $sql = "SELECT id, title, year, synopsis, director, created_at, genre FROM movies WHERE deleted_at IS NULL";
            $result = $conn->query($sql);
            
            if ($result->num_rows > 0) {
                echo "<ul>";
                while ($row = $result->fetch_assoc()) {
                    echo "<li><strong>" . $row["title"] . " (" . $row["year"] . ")</strong><br>";
                    echo "Director: " . $row["director"] . "<br>";
                    echo "Genre: " . $row["genre"] . "<br>";
                    echo "Synopsis: " . $row["synopsis"] . "<br>";
                    echo "Added on: " . $row["created_at"] . "</li><br>";
                }
                echo "</ul>";
            } else {
                echo "0 results";
            }
            
            $conn->close();
            ?>
        </section>
        <section>
            <h2>Ajouter un Film</h2>
            <form action="add_movie.php" method="post">
                <label for="title">Titre:</label><br>
                <input type="text" id="title" name="title" required><br>
                <label for="year">Année:</label><br>
                <input type="text" id="year" name="year" required><br>
                <label for="synopsis">Synopsis:</label><br>
                <textarea id="synopsis" name="synopsis"></textarea><br>
                <label for="director">Réalisateur:</label><br>
                <input type="text" id="director" name="director" required><br>
                <label for="genre">Genre:</label><br>
                <input type="text" id="genre" name="genre" required><br><br>
                <input type="submit" value="Ajouter">
            </form>
        </section>
    </main>
    <footer>
        <p>&copy; 2024 Filmoteca. Tous droits réservés.</p>
    </footer>
</body>

</html>