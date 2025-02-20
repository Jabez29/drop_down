 <nav class="navbar navbar-expand-lg fixed-top" style="background-color: #1d8348; width: 100%;">
     <div class="container-fluid">
         <a class="navbar-brand d-flex align-items-center text-white" href="#">
             <img src="Assets/icon/actscc_logo.png" width="50" height="50" class="d-inline-block align-top" alt="Logo"
                 style="margin-right: 10px;">
             <span id="alumniText" class="ml-2"
                 style="font-family: 'Arial', sans-serif; font-weight: bold; color: white; margin-left: 10px;">
                 ACTS COMPUTER COLLEGE
             </span>
         </a>
         <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
             aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
             <span class="navbar-toggler-icon"></span>
         </button>
         <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
             <ul class="navbar-nav">
                 <li class="nav-item"><a class="nav-link text-white" href="../caps/landingpage.php">HOME</a></li>
                 <li class="nav-item"><a class="nav-link text-white" href="#">ABOUT</a></li>
                 <li class="nav-item"><a class="nav-link text-white" href="#">ACADEMICS</a></li>
                 <!-- <li class="nav-item"><a class="nav-link text-white" href="#">STUDENTS</a></li> -->
                 <!-- <li class="nav-item"><a class="nav-link text-white" href="#">RESEARCH</a></li> -->
                 <li class="nav-item"><a class="nav-link text-white" href="#">ALUMNI</a></li>
                 <li class="nav-item"><a class="nav-link text-white" href="#">Profile</a></li>
             </ul>
         </div>
     </div>
 </nav>


 <div class="p-4 border rounded shadow-sm bg-white">
     <div class="block-heading text-center">
         <h3 class="mb-3">C. TRAINING(S)/ADVANCE STUDIES ATTENDED AFTER COLLEGE</h3>
     </div>

     <p class="text-center font-weight-bold">15. Please list down all professional or work-related training program(s),
         including advanced studies you have attended after college.</p>

     <form action="#" method="get">
         <div id="d1" class="input-group d-flex">
             <input class="form-control" type="text" style="font-family: Roboto, sans-serif;" name="training_title"
                 placeholder="Title of Training or Advanced Study" id="training1">
             <input class="form-control" type="text" style="font-family: Roboto, sans-serif;" name="duration"
                 placeholder="Duration and Credits Earned" id="duration1">
             <input class="form-control" type="text" style="font-family: Roboto, sans-serif;" name="institution"
                 placeholder="Name of Training Institution/College/University" id="institution1">
         </div>
         <div class="mt-2">
             <button type="button" class="btn btn-primary" onclick="addFields()">Add More Fields</button>
             <button type="button" class="btn btn-danger" onclick="removeFields()">Remove Field</button>
         </div>

         <p class="mt-3">15b. What made you pursue advanced studies?</p>
         <div class="form-check">
             <input type="checkbox" class="form-check-input" name="reason" value="promotion" id="promotion">
             <label class="form-check-label" for="promotion">For promotion</label>
         </div>
         <div class="form-check">
             <input type="checkbox" class="form-check-input" name="reason" value="professional_development"
                 id="professional_development">
             <label class="form-check-label" for="professional_development">For professional development</label>
         </div>
     </form>

     <div class="text-right mt-4">
         <a class="btn btn-primary" href="../caps/employment.php" role="button">Next</a>
     </div>
 </div>