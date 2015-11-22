<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Pluton JSON stuff</title>
        <link href="./css/form.css" type="text/css" rel="stylesheet" />
        <script src="https://code.jquery.com/jquery-2.1.4.min.js"></script>
    </head>
    <body>
        <?php
        if ($_SERVER['REQUEST_METHOD'] == "POST") {
            $array = array();
            $array['TargetAssembly'] = $_POST['TargetAssembly'];
            $array['Types[Type0]'][$_POST['Type']]['Methods'] = array("TargetMethod" => $_POST['Method']);
            $array['Types[Type0]'][$_POST['Type']]['Methods']['Instructions'] = array(array("OpCode" => $_POST['OpCode'], "InstructionType" => $_POST['InstructionType'], "OperandType" => $_POST['OperandType'], "ParamVarOffset" => 0));
            echo '<textarea disabled="disabled" rows="40">' . json_encode($_POST, JSON_PRETTY_PRINT) . '</textarea>';
            echo '<h3>PHP output for debugging:</h3>';
            echo '<textarea disabled="disabled" rows="40">' . print_r($_POST, true) . '</textarea>';
        }
        else {
            echo '<h1>Waiting for input</h1>';
        }
        ?>
    </body>
</html>
