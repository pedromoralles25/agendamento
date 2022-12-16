<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Agendamento</title>
</head>
<body>

<form action="controleAgendamento.php" method="POST">
    <p>
    Selecione a data:
        <input type="date" name="data"></input>
    </p>
    <p>
    Selecione o horário:
        <select name="hora">
            <option value="08:00">08:00</option>
            <option value="09:00">09:00</option>
            <option value="10:00">10:00</option>
            <option value="11:00">11:00</option>
            <option value="13:00">13:00</option>
            <option value="14:00">14:00</option>
            <option value="15:00">15:00</option>
            <option value="16:00">16:00</option>
        </select>
    </p>
    <p>
        <input type="submit" value="Enviar">
    </p>
</form>
    
</body>
</html>