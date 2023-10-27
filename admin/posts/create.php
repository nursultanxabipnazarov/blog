<?php
include __DIR__.'/../../app/controllers/posts.php';
 include '../layout/header.php';

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
 <form  method="POST" class="row g-3">
      <div  class="mb-5">
      <div   class="container">
     <label for="exampleFormControlInput1"  class="form-label">Title</label>
     <input type="text" name = "title" class="form-control" id="exampleFormControlInput1" placeholder="Title">

    <div   class="mb-2 ">
     <label for="exampleFormControlTextarea1" class="form-label"> textarea</label>
  
     <textarea id = "editor" class="form-control" name="text" id="exampleFormControlTextarea1" rows="5"></textarea>
  
  


     </div>

   </div>
   </div>

   <button  type="sumbit" name="post-create" class="btn btn-primary">Post add</button>
</form>
<script>
    ClassicEditor
        .create( document.querySelector( '#editor' ) )
        .catch( error => {
            console.error( error );
        } );
</script>





