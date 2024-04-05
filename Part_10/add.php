<?php

include('config/db_connect.php');

$email = $title = $ingredients = '';

$errors = [
    'email' => '',
    'title' => '',
    'ingredients' => '',
];

if (isset($_POST['submit'])) {
    // echo htmlspecialchars($_POST['email']);
    // echo htmlspecialchars($_POST['title']);
    // echo htmlspecialchars($_POST['ingredients']);
    if (empty($_POST['email'])) {
        $errors['email'] = "An email is required <br />";
    } else {
        $email = $_POST['email'];
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $errors['email'] = "email must be a valid email address <br />";
        }
        // echo htmlspecialchars($_POST['email']), "<br />";
    }

    if (empty($_POST['title'])) {
        $errors['title'] = "A title is required";
    } else {
        $title = $_POST['title'];
        if (!preg_match('/^[a-zA-Z\s]+$/', $title)) {
            $errors['title'] = "Title must be letters and spaces only";
        }
        // echo htmlspecialchars($_POST['title']), "<br />";
    }

    if (empty($_POST['ingredients'])) {
        $errors['ingredients'] = "At least one ingredient is required";
    } else {
        $ingredients = $_POST['ingredients'];
        if (!preg_match('/^([a-zA-Z\s]+)(,\s*[a-zA-Z\s]*)*$/', $ingredients)) {
            $errors['ingredients'] = "Ingredients must be a comma separated list";
        }
        // echo htmlspecialchars($_POST['ingredients']), "<br />";
    }

    if (!array_filter($errors)) {

        $email = mysqli_real_escape_string($conn, $_POST['email']);
        $title = mysqli_real_escape_string($conn, $_POST['title']);
        $ingredients = mysqli_real_escape_string($conn, $_POST['ingredients']);

        $sql = "INSERT INTO pizzas(title, email, ingredients) VALUES('$title', '$email', '$ingredients')";
        if (mysqli_query($conn, $sql)) {

            header('Location: index.php');
        } else {
            echo "query error: " . mysqli_error($conn);
        }
    }
}

?>

<!DOCTYPE html>
<html lang="en">

<?php include('templates/header.php'); ?>

<section class="container grey-text">
    <h4 class="center">Add a Pizza</h4>
    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" class="white" method="post">
        <label>Your Email:</label>
        <input type="text" name="email" value="<?= htmlspecialchars($email) ?>">
        <div class="red-text"><?= $errors['email'] ?></div>

        <label>Pizza Title:</label>
        <input type="text" name="title" value="<?= htmlspecialchars($title) ?>">
        <div class="red-text"><?= $errors['title'] ?></div>

        <label>Ingredients (comma separated):</label>
        <input type="text" name="ingredients" value="<?= htmlspecialchars($ingredients) ?>">
        <div class="red-text"><?= $errors['ingredients'] ?></div>

        <div class="center">
            <input type="submit" name="submit" value="submit" class="btn brand z-depth-0">
        </div>

    </form>
</section>

<?php include('templates/footer.php'); ?>

</html>