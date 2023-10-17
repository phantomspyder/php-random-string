<?php
    $is_submitted = false;    
    $supported_characters = ';%hH}w^#v&tDeQVs1o{EN5]lU6mC+~9nK-*GIFjMzB?T.Ou,b"k!r[Zq8:S Rxy@p7_`$d(XALP\'Y2ga|f/W03i)Jc4';    
    if(isset($_POST['generate'])) {      
        $output_value = '';
        $is_submitted = true;
        $required_length = $_POST['length'];
        $i = 0;
        while ($i < $required_length) {
            $random_index = random_int(0, strlen($supported_characters) - 1);
            $output_value .= "<span class=\"number\">".$supported_characters[$random_index]."</span>";
            $i++;
        }        
    }
?>
<!DOCTYPE html>
<html>
<head>
<style>
* {
    font-family: sans-serif;
}
body {
    background: #F4F4F4;
}
 /* The alert message box */
 .alert {
  padding: 12px;
  background-color: #f44336; /* Red */
  color: white;
  margin-bottom: 15px;
}

input[type=text] {
    width: 100%;
    padding: 12px 20px;
    margin: 8px 0;
    box-sizing: border-box;
}
input[type=number] {
    width: 100%;
    padding: 12px 20px;
    margin: 8px 0;
    box-sizing: border-box;
}
input[type=text]:focus {
    border: 3px solid #555;
}
input[type=number]:focus {
    border: 3px solid #555;
}
.generate {
    background-color: #04AA6D;
    border: none;
    color: white;
    padding: 16px 32px;
    text-decoration: none;
    margin: 4px 2px;
    cursor: pointer;

}
.number {
    padding: 4px;
    background-color: #FFF;
    margin: 2px;
    width: 20px;
    border: 1px solid grey;
}
.success {
    margin-top: 15px;
    margin-bottom: 15px;
    padding: 4px 12px;
    background-color: #ddffdd;
    border-left: 6px solid #04AA6D;
}

</style>
</head>
<body>

<h2>Random String Generator</h2>
<div class="alert">  
  Warning: This is for demo purpose only. Do not use the generated string as a password.
</div> 
<form method="POST" action="" autocomplete="off">
  <label for="length">Required Length of the String to be generated (1-50)</label>
  <input type="number" id="length" name="length" min="1" max="50" required>  
  <input class="generate" type="submit" id="generate" name="generate" value="Generate" />
</form>

<!-- disply result if only the form was submitted -->
<?php if ($is_submitted): ?>
<div class="success">
  <h3>Result</h3>  
  <p><?= $output_value ?></p>
</div>
<?php endif; ?>

</body>
</html>
