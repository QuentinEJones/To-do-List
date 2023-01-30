<?php /*1st Line on every webpage.*/ include $_SERVER['DOCUMENT_ROOT'].'/functions.php'; ?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Heroic Features - Start Bootstrap Template</title>
        <?php echo $cssFiles ?>
    </head>
    <body>
        <!-- Responsive navbar-->
       <?php echo $nav ?>
        <!-- Header-->
        <header class="py-5">
            <div class="container px-lg-5">
                <div class="p-4 p-lg-5 bg-light rounded-3 ">
                    <div class="m-4 m-lg-5">
                        <h1 class="display-5 fw-bold text-center">Form Code</h1>

            <!-- From Code-->
             <form class="row g-3">
      <div class="col-md-6">
        <label for="Title" class="form-label">User</label>
        <input type="text" class="form-control" name="user">
      </div>
     <div class="col-md-6">
        <label for="Title" class="form-label">Tasks Catagory</label>
        <input type="text" class="form-control" name="inputEmail4">
      </div>
   <div class="col-md-6">
        <label for="Catagory" class="form-label">Tasks Title</label>
         <select name="Catagory" class="form-select">
          <option selected>Choose</option>
          <option>Events </option>
          <option>HomeWork </option>
          <option>Chores </option>
           <option>Health </option>
         </select>
      </div>
               <div class="col-md-3">
        <label for="Catagory" class="form-label">Tasks Start Date</label>
         <br>
        <input type="date">
      </div>
               <div class="col-md-3">
        <label for="Catagory" class="form-label">Tasks Due Date</label>
         <br>
        <input type="date">
      </div>
     <div class="col-md-6">
        <label for="Title" class="form-label">Description</label> 
       <br>
       <textarea name="description" rows="4" cols="120" placeholder="Type Your Description Here"></textarea>
      </div>
       <br>
      <div class="col-md-7">
        <label for="Title" class="form-label">Reward/Cost</label>
        <input type="text" class="form-control" name="reward">
      </div>
        <div class="col-md-5">
        <label for="Title" class="form-label">Time Requiered</label>
        <input type="text" class="form-control" name="timerequiered">
      </div>
      <div class="col-12">
        <button type="submit" action="/redirects/tasks.php" class="btn btn-primary">Create</button>
      </div>
    </form>
                          
                       
                    </div>
                </div>
            </div>
        </header>
        <!-- Page Content-->
        <section class="pt-4">
            <div class="container px-lg-5">
                <!-- Page Features-->
                <div class="row gx-lg-5">
                    <div class="col-lg-6 col-xxl-4 mb-5">
                        <div class="card bg-light border-0 h-100">
                            <div class="card-body text-center p-4 p-lg-5 pt-0 pt-lg-0">
                                <div class="feature bg-primary bg-gradient text-white rounded-3 mb-4 mt-n4"><i class="bi bi-collection"></i></div>
                                <h2 class="fs-4 fw-bold">Fresh new layout</h2>
                                <p class="mb-0">With Bootstrap 5, we've created a fresh new layout for this template!</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-xxl-4 mb-5">
                        <div class="card bg-light border-0 h-100">
                            <div class="card-body text-center p-4 p-lg-5 pt-0 pt-lg-0">
                                <div class="feature bg-primary bg-gradient text-white rounded-3 mb-4 mt-n4"><i class="bi bi-cloud-download"></i></div>
                                <h2 class="fs-4 fw-bold">Free to download</h2>
                                <p class="mb-0">As always, Start Bootstrap has a powerful collectin of free templates.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-xxl-4 mb-5">
                        <div class="card bg-light border-0 h-100">
                            <div class="card-body text-center p-4 p-lg-5 pt-0 pt-lg-0">
                                <div class="feature bg-primary bg-gradient text-white rounded-3 mb-4 mt-n4"><i class="bi bi-card-heading"></i></div>
                                <h2 class="fs-4 fw-bold">Jumbotron hero header</h2>
                                <p class="mb-0">The heroic part of this template is the jumbotron hero header!</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-xxl-4 mb-5">
                        <div class="card bg-light border-0 h-100">
                            <div class="card-body text-center p-4 p-lg-5 pt-0 pt-lg-0">
                                <div class="feature bg-primary bg-gradient text-white rounded-3 mb-4 mt-n4"><i class="bi bi-bootstrap"></i></div>
                                <h2 class="fs-4 fw-bold">Feature boxes</h2>
                                <p class="mb-0">We've created some custom feature boxes using Bootstrap icons!</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-xxl-4 mb-5">
                        <div class="card bg-light border-0 h-100">
                            <div class="card-body text-center p-4 p-lg-5 pt-0 pt-lg-0">
                                <div class="feature bg-primary bg-gradient text-white rounded-3 mb-4 mt-n4"><i class="bi bi-code"></i></div>
                                <h2 class="fs-4 fw-bold">Simple clean code</h2>
                                <p class="mb-0">We keep our dependencies up to date and squash bugs as they come!</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-xxl-4 mb-5">
                        <div class="card bg-light border-0 h-100">
                            <div class="card-body text-center p-4 p-lg-5 pt-0 pt-lg-0">
                                <div class="feature bg-primary bg-gradient text-white rounded-3 mb-4 mt-n4"><i class="bi bi-patch-check"></i></div>
                                <h2 class="fs-4 fw-bold">A name you trust</h2>
                                <p class="mb-0">Start Bootstrap has been the leader in free Bootstrap templates since 2013!</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Footer-->
       <?php echo $footer ?>
        <?php echo $jsFiles ?>
    </body>
</html>
