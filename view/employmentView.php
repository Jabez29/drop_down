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



<div class="container mt-4">
    <div class="paper">
        <h3 class="text-center mb-3">D. Employment Data</h3>
        <p class="text-center">
            (Employment here means any type of work performed or services rendered in exchange for compensation under a
            contract of hire which creates the employer and employee relation)
        </p>
        <form action="submit.php" method="post">
            <div class="mb-3">
                <label class="form-label">16. Are you presently employed?</label><br>
                <input type="radio" name="employed" value="yes"> Yes
                <input type="radio" name="employed" value="no"> No
                <input type="radio" name="employed" value="never_employed"> Never Employed
            </div>
            <div class="mb-3">
                <label class="form-label">If NO or NEVER BEEN EMPLOYED, proceed to Question 17. If YES, proceed to
                    Questions 18 to 22.</label>
            </div>
            <div class="mb-3">
                <label class="form-label">17. Please state reason(s) why you are not yet employed. (Check all that
                    apply)</label><br>
                <input type="checkbox" name="reason_not_employed" value="advance_study"> Advance or further study<br>
                <input type="checkbox" name="reason_not_employed" value="family_concern"> Family concern, decided not to
                find a job<br>
                <input type="checkbox" name="reason_not_employed" value="health_issue"> Health-related reasons<br>
                <input type="checkbox" name="reason_not_employed" value="lack_experience"> Lack of work experience<br>
                <input type="checkbox" name="reason_not_employed" value="no_job_opportunity"> No job opportunity<br>
                <input type="checkbox" name="reason_not_employed" value="did_not_look_for_job"> Did not look for a
                job<br>
                <input type="checkbox" name="reason_not_employed" value="other_reasons"> Other reasons: <input
                    type="text" name="other_reason_specify">
            </div>
            <div class="mb-3">
                <label class="form-label">18. Present Employment Status</label><br>
                <input type="radio" name="employment_status" value="regular"> Regular or Permanent
                <input type="radio" name="employment_status" value="contractual"> Contractual
                <input type="radio" name="employment_status" value="temporary"> Temporary
                <input type="radio" name="employment_status" value="self_employed"> Self-employed
                <input type="radio" name="employment_status" value="casual"> Casual
            </div>
            <div class="mb-3">
                <label class="form-label">19. Present occupation:</label>
                <input type="text" class="form-control" name="present_occupation">
            </div>
            <div class="mb-3">
                <label class="form-label">20a. Name of Company or Organization including address:</label>
                <input type="text" class="form-control" name="company_name">
            </div>
            <div class="mb-3">
                <label class="form-label">20b. Major line of business of the company you are presently employed in
                    (Check one only)</label><br>
                <input type="checkbox" name="business_type" value="agriculture"> Agriculture, Hunting, and Forestry<br>
                <input type="checkbox" name="business_type" value="fishing"> Fishing<br>
                <input type="checkbox" name="business_type" value="mining"> Mining and Quarrying<br>
                <input type="checkbox" name="business_type" value="manufacturing"> Manufacturing<br>
                <input type="checkbox" name="business_type" value="education"> Education<br>
                <input type="checkbox" name="business_type" value="health"> Health and Social Work<br>
                <input type="checkbox" name="business_type" value="other"> Other: <input type="text"
                    name="other_business_type">
            </div>
            <div class="mb-3">
                <label class="form-label">21. Place of Work:</label><br>
                <input type="radio" name="work_place" value="local"> Local
                <input type="radio" name="work_place" value="abroad"> Abroad
            </div>
            <div class="mb-3">
                <label class="form-label">22. Is this your first job after college?</label><br>
                <input type="radio" name="first_job" value="yes"> Yes
                <input type="radio" name="first_job" value="no"> No
            </div>
            <div class="mb-3">
                <label class="form-label">24. After you graduated, did you look for a job right away or did you take a
                    break?</label><br>
                <input type="radio" name="job_search" value="yes"> Yes
                <input type="radio" name="job_search" value="no"> No
            </div>
            <div class="mb-3">
                <label class="form-label">25. How long was your break?</label><br>
                <input type="radio" name="break_duration" value="1-3_months"> 1-3 months
                <input type="radio" name="break_duration" value="one_year"> One year
            </div>
            <div class="mb-3">
                <label class="form-label">36. Was the curriculum you had in college relevant to your first
                    job?</label><br>
                <input type="radio" name="curriculum_relevance" value="yes"> Yes
                <input type="radio" name="curriculum_relevance" value="no"> No
            </div>
            <div class="mb-3">
                <label class="form-label">38. Suggestions to improve your course curriculum:</label>
                <textarea name="suggestions_for_curriculum" class="form-control" rows="4"></textarea>
            </div>
            <div class="mb-3">
                <label><input type="checkbox" name="agree" required> I Agree to the terms and conditions.</label>
            </div>
            <button type="submit" class="btn btn-primary w-100">Submit</button>
        </form>
    </div>
</div>
<style>
.paper {
    max-width: 800px;
    margin: auto;
    padding: 20px;
    background: white;
    border: 1px solid #ddd;
    box-shadow: 2px 2px 10px rgba(0, 0, 0, 0.1);
    border-radius: 5px;
}
</style>