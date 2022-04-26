<!DOCTYPE html>
<html lang="en">
<head>
    <?php include_once 'views/shared/headers.php'; ?>
    <title>Home | Arkan MVC</title>
</head>
<body>
    <h1>Arkan MVC</h1>
    <?php include_once 'views/shared/footers.php'; ?>

    <script>
        var request = new XMLHttpRequest()
        request.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                console.log(request.responseText)
            }
        }
        request.open('POST', '../test/fetch')
        request.send('Hello Test!')
    </script>
</body>
</html>