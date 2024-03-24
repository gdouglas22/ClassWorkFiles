 $goods = [
    [
      'id'=>1,
      'name'=>'Свекла',
      'price'=>47,
      'info'=>'Свекла занимает лидирующее место среди овощей по содержанию многих ценных минералов.',
      'img'=>'https://my.informatics.ru/media/ck_uploads/abkadirov_rr/2019/02/26/beets.jpg'
    ], 
    [
      'id'=>2,
      'name'=>'Морковь',
      'price'=>26,
      'info'=>'Высокое содержание каротина. Великолепная морковь для сока, с высоким содержанием каротина.',
      'img'=>'https://my.informatics.ru/media/ck_uploads/abkadirov_rr/2019/02/26/carrot.jpg'
    ], 
    [
      'id'=>3,
      'name'=>'Киви',
      'price'=>137,
      'info'=>'Плоды покрыты коричневой кожицей с мелкими волосками, за которой скрывается ароматная, сочная мякоть.',
      'img'=>'https://my.informatics.ru/media/ck_uploads/abkadirov_rr/2019/02/26/kiwi.jpg'
    ], 
    [
      'id'=>4,
      'name'=>'Картофель',
      'price'=>35,
      'info'=>'Картофель российского производства. Выращено в Мытищах. Экологически чистый продукт!',
      'img'=>'https://my.informatics.ru/media/ck_uploads/abkadirov_rr/2019/02/26/potato.jpg'
    ], 
    [
      'id'=>5,
      'name'=>'Клубника',
      'price'=>1315,
      'info'=>'Крупная отборная египетская клубника - сердце. Сладкая и сочная, с сильным ароматом.',
      'img'=>'https://my.informatics.ru/media/ck_uploads/abkadirov_rr/2019/02/26/strawberries.jpg'
    ], 
    [
      'id'=>6,
      'name'=>'Томаты',
      'price'=>213,
      'info'=>'Розовые томаты – самые сладкие и вкусные. Отличаются мясистой, сочной , сладкой мякотью.',
      'img'=>'https://my.informatics.ru/media/ck_uploads/abkadirov_rr/2019/02/26/tomato.jpg'
    ]
  ];

<!doctype html>
<html lang="ru">
  <head>
    <meta charset="utf-8">
    <title>Овощнофф</title>
    
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  </head>
  <body class="bg-light">
    <div class="container py-4">
      <h1>Овощнофф</h1>
      <h4 class="text-muted">Самые свежие овощи и фрукты</h4>
      <hr class="mb-5">
      
      <div class="row">
        <div class="col-4">
          <div class="card" style="width: 18rem;">
            <img src="https://my.informatics.ru/media/ck_uploads/abkadirov_rr/2019/02/26/beets.jpg" class="card-img-top">
            <div class="card-body">
              <h5 class="card-title">Свекла</h5>
              <p class="card-text">Свекла занимает лидирующее место среди овощей по содержанию многих ценных минералов.</p>
              <a href="#" class="btn btn-success">47 руб.</a>
            </div>
          </div>
        </div>
        
        <div class="col-4">
          <div class="card" style="width: 18rem;">
            <img src="https://my.informatics.ru/media/ck_uploads/abkadirov_rr/2019/02/26/carrot.jpg" class="card-img-top">
            <div class="card-body">
              <h5 class="card-title">Морковь</h5>
              <p class="card-text">Высокое содержание каротина. Великолепная морковь для сока, с высоким содержанием каротина.</p>
              <a href="#" class="btn btn-success">26 руб.</a>
            </div>
          </div>
        </div>
        
        <div class="col-4">
          <div class="card" style="width: 18rem;">
            <img src="https://my.informatics.ru/media/ck_uploads/abkadirov_rr/2019/02/26/kiwi.jpg" class="card-img-top">
            <div class="card-body">
              <h5 class="card-title">Киви</h5>
              <p class="card-text">Плоды покрыты коричневой кожицей с мелкими волосками, за которой скрывается ароматная, сочная мякоть.</p>
              <a href="#" class="btn btn-success">237 руб.</a>
            </div>
          </div>
        </div>
        
      </div>
    </div>
  </body>
</html>
