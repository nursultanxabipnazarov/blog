<?php
//  include __DIR__. "/../../path.php";
 include '../layout/header.php';
 include __DIR__.'/../../app/controllers/posts.php';

 
?>

<div class="container-fluid">
  <div class="row">
  
  <?php
include '../layout/nav.php';
?>
    <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
      <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Dashboard</h1>
        <div class="btn-toolbar mb-2 mb-md-0">
          <div class="btn-group me-2">
            <button type="button" class="btn btn-sm btn-outline-secondary">Share</button>
            <button type="button" class="btn btn-sm btn-outline-secondary">Export</button>
          </div>
          <button type="button" class="btn btn-sm btn-outline-secondary dropdown-toggle">
            <span data-feather="calendar"></span>
            This week
          </button>
        </div>
      </div>
      <div class="btn-group" role="group" aria-label="Basic example">
      <a href="<?= BASE_URL."admin/posts/create.php";?>">
  <button type="button" class="btn btn-primary">Post add</button>

</a>

</div>
      <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>TITLE</th>
                        <th>TEXT</th>
                        <th>IMG</th>
                        <th>AUTHOR</th>
                        <th>CRUD</th>
                    </tr>
                </thead>
                <tbody>
            <?php foreach ($posts as $key => $post) :?>
              
                    <tr>
                        <td><?=$post['title']?></td>
                        <td><?=$post['text']?></td>
                        <td><img src="../../img/post/<?=$post['img'];?>" class="img-fluid" style="max-width: 120px; height: auto;"></td>
                        <td><?=$user[0]['fname']?></td>

                        <td><?=$post['create_at']?></td>
                        <td>
                            <a href="<?=BASE_URL."admin/posts/create.php";?>" class="add" title="Add" data-toggle="tooltip"><i class="material-icons">&#xE03B;</i></a>
                            <a  href="edit.php?id=<?=$post['id']?>" class="edit" title="Edit" data-toggle="tooltip"><i class="material-icons">&#xE254;</i></a>
                            <a href="delete.php?destroy=<?=$post['id'];?>" class="delete" title="Delete" data-toggle="tooltip"><i class="material-icons">&#xE872;</i></a>
                        </td>
                    </tr>
              <?php endforeach;?>
                  
                </tbody>
            </table>
    
    </main>
  </div>
</div>


    <script src="/docs/5.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

      <script src="https://cdn.jsdelivr.net/npm/feather-icons@4.28.0/dist/feather.min.js" integrity="sha384-uO3SXW5IuS1ZpFPKugNNWqTZRRglnUJK6UAZ/gxOX80nxEkN9NcGZTftn6RzhGWE" crossorigin="anonymous"></script><script src="https://cdn.jsdelivr.net/npm/chart.js@2.9.4/dist/Chart.min.js" integrity="sha384-zNy6FEbO50N+Cg5wap8IKA4M/ZnLJgzc6w2NqACZaK0u0FXfOWRRJOnQtpZun8ha" crossorigin="anonymous"></script><script src="dashboard.js"></script>
  </body>
</html>