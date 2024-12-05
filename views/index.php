<?php
    require_once'../configs/database.php';
    require_once'../model/user.php';

    $database = new database();
    $db = $database->connect();
    $user = new user($db);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<?php
    foreach ($user->readAll() as $rows){
        echo $rows->produtos;
    }

    foreach ($user->readAllClientes() as $users)
    {
      echo $users->users;
    }

?>
    <canvas id="myChart">

</canvas>

    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script>
        const ctx = document.getElementById('myChart');
new Chart(ctx, {
  type: 'bar',
  data: {
    labels: ['Produtos', 'Vendas'],
    datasets: [{
      label: '# of Votes',
      data: [<?=$rows->produtos?>, <?=$users->users?>],
      borderWidth: 1
    }]
  },
  options: {
    scales: {
      y: {
        beginAtZero: true
      }
    }
  }
});
    </script>
<!-- <script src="../assets/script.js"></script> -->
</body>
</html>