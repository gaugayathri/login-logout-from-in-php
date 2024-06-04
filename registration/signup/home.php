<?php
session_start();
if(!isset($_SESSION['username'])){
    header('location:login.php');
}


?>

<!doctype html>
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css">

    <title>home page</title>
  </head>
  <body>
    <h1 class="text-center text-warning mt-5">Welcome
<?php echo $_SESSION['username']; ?>        
</h1>

<div class="container mt-5">
 <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Facilis eos eius vel maxime ullam magni ea nostrum cupiditate quaerat! Ipsam incidunt maxime possimus nostrum, odio harum illo vitae. Quam quaerat distinctio dolore iste quibusdam, odio quis aspernatur sint soluta corporis vel quia iure voluptatibus, laboriosam veniam quo! Impedit repellat modi quam reprehenderit error porro labore inventore voluptatem aperiam perspiciatis laudantium ab pariatur reiciendis, officiis veniam laborum! Fugit repellat atque molestias, non similique laudantium nostrum nemo, consequatur molestiae quisquam facere praesentium corrupti quibusdam libero recusandae doloribus doloremque, earum itaque aliquid inventore sit possimus? Ipsa sequi minima nam doloremque eos id itaque provident ipsum quae totam? Officiis expedita aperiam eveniet, assumenda at quam consectetur laudantium magnam eum, necessitatibus odio repudiandae, vero eaque perspiciatis aspernatur fugit! Dolor commodi, hic incidunt officia modi quaerat provident fuga aliquid architecto omnis consequuntur. Nemo voluptatum mollitia, laudantium ratione cumque unde enim rem ipsum beatae qui quas dignissimos sed, quisquam optio, suscipit ex voluptate impedit minus animi aliquam? Nisi ducimus hic nam nemo tenetur sint officiis beatae ullam. Suscipit hic, corporis veritatis eligendi voluptatibus labore voluptatum perferendis unde reprehenderit recusandae error magni aut eos iure commodi atque earum laudantium impedit voluptatem ipsum quaerat? Dolorum porro officia aspernatur magnam.</p>
</div>

 <div class="container d-flex justify-content-center">
    <a href='sign.php' class="btn btn-primary mt-5">Logout</a>
 </div>
  </body>
</html>