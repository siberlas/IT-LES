/**
 * Created by plaf on 01/05/2017.
 */




createurForm = document.getElementById('InsCreateurForm');


function validPostbac() {
    degree1 = document.getElementsByName('postDegree1');
    schoolName1 = document.getElementsByName('postSchoolName1');
    country1 = document.getElementsByName('postCountry1');
    city1 = document.getElementsByName('postCity1');
    year1 = document.getElementsByName('postYear1');

    degree2 = document.getElementsByName('postDegree2');
    schoolName2 = document.getElementsByName('postSchoolName2');
    country2 = document.getElementsByName('postCountry2');
    city2 = document.getElementsByName('postCity2');
    year2 = document.getElementsByName('postYear2');

    degree3 = document.getElementsByName('postDegree3');
    schoolName3 = document.getElementsByName('postSchoolName3');
    country3 = document.getElementsByName('postCountry3');
    city3 = document.getElementsByName('postCity3');
    year3 = document.getElementsByName('postYear3');


    degree4 = document.getElementsByName('postDegree4');
    schoolName4 = document.getElementsByName('postSchoolName4');
    country4 = document.getElementsByName('postCountry4');
    city4 = document.getElementsByName('postCity4');
    year4 = document.getElementsByName('postYear4');

    console.log(schoolName1[0].value);
   // schoolName1[0].value  ="kdkdkd";
   // schoolName1[0].style.borderColor="red";
  //  year1.style.borderColor ="red";

    if(degree1[0].value !="" || schoolName1[0].value!="" || country1[0].value !="" || city1[0].value !="" || year1[0].value!=""){
        degree1[0].required = true;
        schoolName1[0].required = true;
        country1[0].required= true;
        city1[0].required = true;;
        year1[0].required = true;
    }
    else if (degree1[0].value =="" && schoolName1[0].value=="" && country1[0].value =="" && city1[0].value =="" && year1[0].value==""){
        degree1[0].required = false;
        schoolName1[0].required = false;
        country1[0].required= false;
        city1[0].required = false;
        year1[0].required = false;
    }

    if(degree2[0].value !="" || schoolName2[0].value!="" || country2[0].value !="" || city2[0].value !="" || year2[0].value!=""){
        degree2[0].required = true;
        schoolName2[0].required = true;
        country2[0].required= true;
        city2[0].required = true;;
        year2[0].required = true;
    }
    else if (degree2[0].value =="" && schoolName2[0].value=="" && country2[0].value =="" && city2[0].value =="" && year2[0].value==""){
        degree2[0].required = false;
        schoolName2[0].required = false;
        country2[0].required= false;
        city2[0].required = false;
        year2[0].required = false;
    }

    if(degree3[0].value !="" || schoolName3[0].value!="" || country3[0].value !="" || city3[0].value !="" || year3[0].value!=""){
        degree3[0].required = true;
        schoolName3[0].required = true;
        country3[0].required= true;
        city3[0].required = true;;
        year3[0].required = true;
    }
    else if (degree3[0].value =="" && schoolName3[0].value=="" && country3[0].value =="" && city3[0].value =="" && year3[0].value==""){
        degree3[0].required = false;
        schoolName3[0].required = false;
        country3[0].required= false;
        city3[0].required = false;
        year3[0].required = false;
    }

    if(degree4[0].value !="" || schoolName4[0].value!="" || country4[0].value !="" || city4[0].value !="" || year4[0].value!=""){
        degree4[0].required = true;
        schoolName4[0].required = true;
        country4[0].required= true;
        city4[0].required = true;;
        year4[0].required = true;
    }
    else if (degree4[0].value =="" && schoolName4[0].value=="" && country4[0].value =="" && city4[0].value =="" && year4[0].value==""){
        degree4[0].required = false;
        schoolName4[0].required = false;
        country4[0].required= false;
        city4[0].required = false;
        year4[0].required = false;
    }



}

function validFrorm(){

    createurForm = document.getElementById('InsCreateurForm');



};



