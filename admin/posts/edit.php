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
 <form  method="POST" enctype="multipart/form-data" class="row g-3">
      <div  class="mb-5">
      <div   class="container">
        <p>
        <?php if(count($erMsg) > 0): ?>
          <ul>
             <?php foreach ($erMsg as $err): ?>
                <li><?=$err; ?></li>
             <?php endforeach; ?>
         </ul>
      <?php endif; ?>
                
        </p>
      <label class="form-label">Category</label>
<select name = "category" class="form-select" required="true" aria-required="true">
  <?php foreach ($categories as $key => $category):?> 
    
  
	<option  value="<?=$category['id'];?>"><?=$category['name'];?></option>
  <?php endforeach;?>
</select>
     <label for="exampleFormControlInput1"  class="form-label">Title</label>
     <input type="text" name = "title" value="<?=$post[0]['title']?>" class="form-control" id="exampleFormControlInput1" placeholder="Title">
     <input type="hidden" name ="id" value="<?=$post[0]['id'];?>">

    <div   class="mb-2 ">
     <label for="exampleFormControlTextarea1"  class="form-label"> textarea</label>
  
     <textarea id = "editor" class="form-control"  value="" name="text" id="exampleFormControlTextarea1" rows="5"><?=$post[0]['text']?></textarea>
  
  


     </div>
     <div class="custom-file">
 <input type="file" name="img" class="custom-file-input" id="inputGroupFile01">
<label class="custom-file-label" for="inputGroupFile01">Img add</label>
</div>

   </div>
   </div>

   <button  type="sumbit" name="post-update" class="btn btn-primary">Post Update</button>
</form>
<script>
    ClassicEditor
        .create( document.querySelector( '#editor' ) )
        .catch( error => {
            console.error( error );
        } );
</script>





