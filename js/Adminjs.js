function addCourseValidation(){
	var courseTitle = document.getElementById("courseTitle").value;
	if(courseTitle=="")
	{
		document.getElementById('courseTitleError').innerHTML="*Course Title can not be empty";
		return false;
	}
	else if(courseTitle.length<3)
	{
		document.getElementById('courseTitleError').innerHTML="*Course Title can not be less than 3 character";
		return false;
	}

	var courseDescription = document.getElementById("courseDescription").value;
	if(courseDescription=="")
	{
		document.getElementById('courseDescriptionError').innerHTML="*Course Description can not be empty";
		return false;
	}
	else if(courseDescription.length<10)
	{		
		document.getElementById('courseDescriptionError').innerHTML="*Course Description can not be less than 10 character";
		return false;
	}

	var courseCategory = document.querySelector( 'input[name="courseCategory"]:checked');   
	if(courseCategory == null) 
	{   
         document.getElementById('courseCategoryError').innerHTML="*Select a Course Category"; 
         return false;
    } 

    
    


}

function addInstactorValidation(){
	var instactorTitle = document.getElementById("instactorTitle").value;
	if(instactorTitle=="")
	{
		document.getElementById('instactorTitleError').innerHTML="*Course Title can not be empty";
		return false;
	}
	else if(instactorTitle.length<3)
	{
		document.getElementById('instactorTitleError').innerHTML="*Course Title can not be less than 3 characters";
		return false;		
	}

	var assignedCourse = document.getElementById("assignedCourse").value;
	if(assignedCourse=="")
	{
		document.getElementById('assignedCourseError').innerHTML="Please assign a course";
		return false;
	}

	var instactorPassword = document.getElementById("instactorPassword").value;
	if(instactorPassword=="")
	{
		document.getElementById('instactorPasswordError').innerHTML="Please set a password";
		return false;
	}
	else if(instactorPassword.length>14 || instactorPassword.length<8)
	{
		document.getElementById('instactorPasswordError').innerHTML="Password must me grater than 8 and less than 14 characters";
		return false;
	}
}



