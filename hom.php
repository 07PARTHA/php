<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Homepage</title>
    <link rel="stylesheet" href="hom.css">
</head>
<body>
    <header class="header">
        <h1>Welcome to the Homepage</h1>
        <nav>
            <ul>
                <li> <button> <a href="c_login.html">Clients</a> </button> </li>
                <li> <button> <a href="W_login.html">Works</a> </button> </li>
                <li> <button> <a href="admin.php">Admin</a> </button> </li>
            </ul>
        </nav>
    </header>

    <main>
        <section id="clients" class="section">
            <h2>Clients</h2>
            <p>Welcome to the Clients section. Here, you can find all client-related information.</p>
        </section>

        <section id="works" class="section">
            <h2>Works</h2>
            <p>This is the Works section, where we showcase all completed and ongoing projects.</p>
        </section>

        <section id="admin" class="section">
            <h2>Admin</h2>
            <p>The Admin panel allows access to site management features and user settings.</p>
        </section>
    </main>

    <footer class="footer">
        <p>&copy; <?php echo date("Y"); ?> Your Company. All rights reserved.</p>
    </footer>
</body>
</html>
