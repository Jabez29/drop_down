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
         <h3 class="mb-3">B. Educational Background</h3>
     </div>

     <p class="text-center font-weight-bold">12. Educational Attainment (Baccalaureate Degree only) *
     </p>
     <form action="#" method="get">
         <div id="d1" class="input-group d-flex">
             <input class="form-control" type="text" style="font-family: Roboto, sans-serif;" name="degree"
                 placeholder="Degree & Specialization" id="deg1">
             <input class="form-control" type="text" style="font-family: Roboto, sans-serif;" name="college"
                 placeholder="College / University" id="col1">
             <input class="form-control" type="text" style="font-family: Roboto, sans-serif;" name="year"
                 placeholder="Year Graduated" id="year1">
             <input class="form-control" type="text" style="font-family: Roboto, sans-serif;" name="honors"
                 placeholder="Honors / Awards Received" id="hon1">
         </div>
         <div class="mt-2">
             <button type="button" class="btn btn-primary" onclick="addFields()">Add More
                 Fields</button>
             <button type="button" class="btn btn-danger" onclick="removeFields()">Remove
                 Field</button>
         </div>
     </form>

     <p class="text-center font-weight-bold">13. Professional Examination(S) Passed</p>
     <form action="#" method="get">
         <div id="d2" class="input-group d-flex">
             <input class="form-control" type="text" style="font-family: Roboto, sans-serif;" name="name"
                 placeholder="Name Of Examination" id="name1">
             <input class="form-control" type="text" style="font-family: Roboto, sans-serif;" name="date"
                 placeholder="Date Taken" id="date1">
             <input class="form-control" type="text" style="font-family: Roboto, sans-serif;" name="rating"
                 placeholder="Rating" id="rating1">
         </div>
         <div class="mt-2">
             <button type="button" class="btn btn-primary" onclick="addFields2()">Add More
                 Fields</button>
             <button type="button" class="btn btn-danger" onclick="removeFields2()">Remove
                 Field</button>
         </div>
     </form>

     <script>
     // Function to add more input fields to "Educational Background"
     function addFields() {
         const inputGroupHTML = `
        <div class="input-group d-flex">
            <input class="form-control" type="text" style="font-family: Roboto, sans-serif;" name="degree" placeholder="Degree & Specialization" id="deg${Date.now()}">
            <input class="form-control" type="text" style="font-family: Roboto, sans-serif;" name="college" placeholder="College / University" id="col${Date.now()}">
            <input class="form-control" type="text" style="font-family: Roboto, sans-serif;" name="year" placeholder="Year Graduated" id="year${Date.now()}">
            <input class="form-control" type="text" style="font-family: Roboto, sans-serif;" name="honors" placeholder="Honors / Awards Received" id="hon${Date.now()}">
        </div>
    `;
         document.getElementById("d1").insertAdjacentHTML('beforeend', inputGroupHTML);
     }

     // Function to remove the last input group in "Educational Background"
     function removeFields() {
         const container = document.getElementById("d1");
         if (container.children.length > 1) {
             container.removeChild(container.lastElementChild); // Removes the last input group
         }
     }

     // Function to add more input fields to "Professional Examination"
     function addFields2() {
         const inputGroupHTML = `
        <div class="input-group d-flex">
            <input class="form-control" type="text" style="font-family: Roboto, sans-serif;" name="name" placeholder="Name Of Examination" id="name${Date.now()}">
            <input class="form-control" type="text" style="font-family: Roboto, sans-serif;" name="date" placeholder="Date Taken" id="date${Date.now()}">
            <input class="form-control" type="text" style="font-family: Roboto, sans-serif;" name="rating" placeholder="Rating" id="rating${Date.now()}">
        </div>
    `;
         document.getElementById("d2").insertAdjacentHTML('beforeend', inputGroupHTML);
     }

     // Function to remove the last input group in "Professional Examination"
     function removeFields2() {
         const container = document.getElementById("d2");
         if (container.children.length > 1) {
             container.removeChild(container.lastElementChild); // Removes the last input group
         }
     }
     </script>

     <label for="card_holder" style="font-family: 'Roboto Slab', serif;">
         <br>
         " 14. Reason(s) for taking the course(s) or pursuing degree(s). You may check (/) more than
         one answer."
         <br> <br>
     </label>

     <div class="form-row" style="display: flex; justify-content: space-between; align-items: center;">

         <div class="col" style="flex: ;"></div>

         <div class="col" style="text-align: right; font-family: Roboto, sans-serif; flex: 1;">
             <p style="font-size: 14px; font-family: 'Roboto Slab', serif;">
                 <br>
                 "Undergraduate/AB/BS"
                 <br>
                 <br>
             </p>
         </div>

         <div class="col" style="text-align: center; font-family: 'Roboto Slab', serif; flex: 1;">
             <p style="font-family: 'Roboto Slab', serif; text-align: center; font-size: 14px;">
                 -
                 <br>
                 "Graduate/MS/MA/PhD"
                 <br>
                 <br>
             </p>
         </div>
     </div>
     <div class="row align-items-center border-bottom py-2">
         <div class="col-8">High grades in the course or subject area(s) related to the course</div>
         <div class="col-2 text-left"><input type="checkbox" name="reason1[]" value="  Undergraduate/AB/BS"></div>
         <div class="col-2 text-left"><input type="checkbox" name="reason1[]" value="Graduate/MS/MA/PhD"></div>
     </div>

     <div class="row align-items-center border-bottom py-2">
         <div class="col-8">Good grades in high school</div>
         <div class="col-2 text-left"><input type="checkbox" name="reason2[]" value="a"></div>
         <div class="col-2 text-left"><input type="checkbox" name="reason2[]" value="b"></div>
     </div>

     <div class="row align-items-center border-bottom py-2">
         <div class="col-8">Influence of parents or relatives</div>
         <div class="col-2 text-left"><input type="checkbox" name="reason3[]" value="a"></div>
         <div class="col-2 text-left"><input type="checkbox" name="reason3[]" value="b"></div>
     </div>

     <div class="row align-items-center border-bottom py-2">
         <div class="col-8">Peer Influence</div>
         <div class="col-2 text-left"><input type="checkbox" name="reason4[]" value="a"></div>
         <div class="col-2 text-left"><input type="checkbox" name="reason4[]" value="b"></div>
     </div>

     <div class="row align-items-center border-bottom py-2">
         <div class="col-8">Inspired by a role model</div>
         <div class="col-2 text-left"><input type="checkbox" name="reason5[]" value="a"></div>
         <div class="col-2 text-left"><input type="checkbox" name="reason5[]" value="b"></div>
     </div>

     <div class="row align-items-center border-bottom py-2">
         <div class="col-8">Strong passion for the profession</div>
         <div class="col-2 text-left"><input type="checkbox" name="reason6[]" value="a"></div>
         <div class="col-2 text-left"><input type="checkbox" name="reason6[]" value="b"></div>
     </div>

     <div class="row align-items-center border-bottom py-2">
         <div class="col-8">Prospect for immediate employment</div>
         <div class="col-2 text-left"><input type="checkbox" name="reason7[]" value="a"></div>
         <div class="col-2 text-left"><input type="checkbox" name="reason7[]" value="b"></div>
     </div>

     <div class="row align-items-center border-bottom py-2">
         <div class="col-8">Status or prestige of the profession</div>
         <div class="col-2 text-left"><input type="checkbox" name="reason8[]" value="a"></div>
         <div class="col-2 text-left"><input type="checkbox" name="reason8[]" value="b"></div>
     </div>

     <div class="row align-items-center border-bottom py-2">
         <div class="col-8">Availability of course offering in chosen institution</div>
         <div class="col-2 text-left"><input type="checkbox" name="reason9[]" value="a"></div>
         <div class="col-2 text-left"><input type="checkbox" name="reason9[]" value="b"></div>
     </div>

     <div class="row align-items-center border-bottom py-2">
         <div class="col-8">Prospect of career advancement</div>
         <div class="col-2 text-left"><input type="checkbox" name="reason10[]" value="a"></div>
         <div class="col-2 text-left"><input type="checkbox" name="reason10[]" value="b"></div>
     </div>

     <div class="row align-items-center border-bottom py-2">
         <div class="col-8">Affordable for the family</div>
         <div class="col-2 text-left"><input type="checkbox" name="reason11[]" value="a"></div>
         <div class="col-2 text-left"><input type="checkbox" name="reason11[]" value="b"></div>
     </div>

     <div class="row align-items-center border-bottom py-2">
         <div class="col-8">Prospect of attractive compensation</div>
         <div class="col-2 text-left"><input type="checkbox" name="reason12[]" value="a"></div>
         <div class="col-2 text-left"><input type="checkbox" name="reason12[]" value="b"></div>
     </div>

     <div class="row align-items-center border-bottom py-2">
         <div class="col-8">Opportunity for employment abroad</div>
         <div class="col-2 text-left"><input type="checkbox" name="reason13[]" value="a"></div>
         <div class="col-2 text-left"><input type="checkbox" name="reason13[]" value="b"></div>
     </div>

     <div class="row align-items-center py-2">
         <div class="col-8">No particular choice or no better idea</div>
         <div class="col-2 text-left"><input type="checkbox" name="reason14[]" value="a"></div>
         <div class="col-2 text-left"><input type="checkbox" name="reason14[]" value="b"></div>
     </div>

     <div class="text-right mt-4">
         <a class="btn btn-primary" href="../caps/training.php" role="button">Next</a>
     </div>