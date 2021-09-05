var skill_count=1;
var hobby_count=1;
var education_count=1;
var experience_count=1;
function addSkill(){
    let addSkill = document.getElementById('addSkill');
    let skillHide = document.getElementById('skill_hide');
    if(skill_count<5)
    {
        ++skill_count;
        var field = 
        `<div class="mb-3">
            <label class="form-label">Skillset Name</label>
            <input type="text" class="form-control" name="skill${skill_count}">
            <select class="form-select mt-2" name="skill_level${skill_count}">
                <option value="">Select stars based upon your skill level</option>
                <option value="1">1 - Novice</option>
                <option value="2">2 - Advanced Beginner</option>
                <option value="3">3 - Competent</option>
                <option value="4">4 - Proficient</option>
                <option value="5">5 - Expert</option>
            </select>
        </div>`;
        console.log(field);
        var htmlObject = document.createElement('div');
        htmlObject.innerHTML=field;
        addSkill.insertAdjacentElement("beforeend", htmlObject);
    }
    if(skill_count==5)
    {
        skillHide.style = "display:none";
    }
}

function addHobby(){
    let addHobby = document.getElementById('addHobby');
    let hobbyHide = document.getElementById('hobby_hide');
    if(hobby_count<4)
    {
        ++hobby_count;
        var field = 
        `<div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Hobby</label>
            <input type="text" name="hobby${hobby_count}" class="form-control">
        </div>`;
        var htmlObject = document.createElement('div');
        htmlObject.innerHTML=field;
        addHobby.insertAdjacentElement("beforeend", htmlObject);
    }
    if(hobby_count==4)
    {
        hobbyHide.style = "display:none";
    }
}
function addEducation(){
    let addEducation = document.getElementById('addEducation');
    let educationHide = document.getElementById('education_hide');
    if(education_count<3)
    {
        ++education_count;
        var field = 
        `<div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">School/College/University</label>
            <input type="text" name="institute${education_count}" class="form-control">
        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Degree Name</label>
            <input type="text" name="degree${education_count}" class="form-control">
        </div>
        <div class="mb-3 d-flex justify-content-between">
            <div>
                <label for="exampleInputEmail1" class="form-label">From</label>
                <input type="text" name="from${education_count}" class="form-control">
            </div>
            <div>
                <label for="exampleInputEmail1" class="form-label">To</label>
                <input type="text" name="to${education_count}" class="form-control">
            </div>
        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Grade/Score/CGPA</label>
            <input type="text" name="grade${education_count}" class="form-control">
        </div>`;
        var htmlObject = document.createElement('div');
        htmlObject.innerHTML=field;
        addEducation.insertAdjacentElement("beforeend", htmlObject);
    }
    if(education_count==3)
    {
        educationHide.style = "display:none";
    }
}
function addExperience(){
    let addExperience = document.getElementById('addExperience');
    let experienceHide = document.getElementById('experience_hide');
    if(experience_count<3)
    {
        ++experience_count;
        var field = 
        `<div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Title</label>
            <input type="text" name="title${experience_count}" class="form-control">
        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Description</label>
            <input type="text" name="description${experience_count}" class="form-control">
        </div>`;
        var htmlObject = document.createElement('div');
        htmlObject.innerHTML=field;
        addExperience.insertAdjacentElement("beforeend", htmlObject);
    }
    if(experience_count==3)
    {
        experienceHide.style = "display:none";
    }
}