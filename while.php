<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>While Loop</title>
    <style>
        :root {
            color-scheme: light;
            font-family: Inter, system-ui, -apple-system, BlinkMacSystemFont, "Segoe UI", sans-serif;
            color: #1E6E64;
            background: #f7faf6;
        }
        * {
            box-sizing: border-box;
        }
        body {
            margin: 0;
            min-height: 100vh;
            padding: 2rem;
            display: flex;
            justify-content: center;
            background: #f7faf6;
            color: #1E6E64;
        }
        .container {
            width: min(100%, 560px);
            background: #ffffff;
            border: 1px solid rgba(30,110,100,.12);
            border-radius: 24px;
            padding: 2rem;
            box-shadow: 0 20px 50px rgba(30,110,100,.08);
        }
        h1 {
            margin: 0 0 1rem;
            font-size: clamp(1.8rem, 2.4vw, 2.6rem);
        }
        h2 {
            margin-top: 1.8rem;
            font-size: 1.15rem;
            font-weight: 600;
        }
        a {
            display: inline-block;
            margin-bottom: 1.2rem;
            padding: .75rem 1.1rem;
            border-radius: 999px;
            background: #1E6E64;
            color: #fff;
            text-decoration: none;
            transition: transform .2s ease, background .2s ease;
        }
        a:hover {
            transform: translateY(-1px);
            background: #165147;
        }
        form {
            display: grid;
            gap: 1rem;
            margin-top: 1rem;
        }
        label {
            font-weight: 600;
        }
        input[type="number"] {
            width: 100%;
            padding: .9rem 1rem;
            border-radius: 14px;
            border: 1px solid rgba(30,110,100,.2);
            font-size: 1rem;
            outline: none;
        }
        input[type="number"]:focus {
            border-color: #1E6E64;
            box-shadow: 0 0 0 4px rgba(30,110,100,.08);
        }
        input[type="submit"] {
            width: fit-content;
            border: none;
            border-radius: 999px;
            padding: .95rem 1.3rem;
            background: #1E6E64;
            color: #fff;
            cursor: pointer;
            font-weight: 600;
            transition: transform .2s ease, background .2s ease;
        }
        input[type="submit"]:hover {
            transform: translateY(-1px);
            background: #165147;
        }
        .result {
            margin-top: 1.5rem;
            padding: 1rem 1.1rem;
            border-radius: 18px;
            background: #f2fbf8;
            border: 1px solid rgba(30,110,100,.14);
            line-height: 1.75;
        }
    </style>
</head>
<body>
    <div class="container">
    <?php
        echo "<h1>W1 - While Loop - Anawin Sakulcharoenchoke BIT.2/3 No.22</h1>";
    ?>

    <a href="index.php">Back to Index</a> <br><br>

    <form action="">
        <label for="">เลขแม่สูตรคูณ</label> <br> 
        <input type="number" name="num" id="">
        <input type="submit" value="คำนวณ">
    </form>

    <?php
        if(isset($_GET["num"])){
            $num = $_GET["num"];

            echo "<div class=\"result\"><h2>สูตรคูณแม่ " . $num . " (While Loop)</h2>";

            $i = 1;
            while($i <= 12){
                echo $num . " x " . $i . " = " . ($num * $i) . "<br>";
                $i++;
            }

            echo "</div>";
        }
    ?>
    </div>
</body>
</html>
