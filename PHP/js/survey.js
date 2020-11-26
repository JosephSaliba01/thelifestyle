var FitNutrcount = 0;
var Financecount = 0;
var EduProfcount = 0;

function checkboxes()
{
  var inputElems = document.getElementsByTagName("input");
  
  for (var i=0; i<inputElems.length; i++)
  { 
    if (inputElems[i].id == "FitNutrChoice" && inputElems[i].type == "checkbox" 
      && inputElems[i].checked)
    {
      FitNutrcount++;
    }
    else if (inputElems[i].id == "FinanceChoice" && inputElems[i].type == "checkbox" 
      && inputElems[i].checked)
    {
      Financecount++;
    }
     else if (inputElems[i].id == "EduProfChoice" && inputElems[i].type == "checkbox" 
      && inputElems[i].checked)
    {
      EduProfcount++;
    }
  }
  document.getElementById("resultsSectionBtn").style.display = "block";
  document.getElementById("h2displayResults").innerHTML = "RESULTS: "; 
  document.getElementById("resultsSection").style.borderColor = "red";
  document.getElementById("FitnessAndNutritionResult").innerHTML = "Fitness & Nutrition: " + FitNutrcount;
  document.getElementById("FinanceResult").innerHTML =  "Finance: " + Financecount;
  document.getElementById("EduAnProResult").innerHTML = "Education and Professional life: " +  EduProfcount;

  //tell the user what this means
  typeOfFeed();
}

function typeOfFeed()
{
  if (EduProfcount > Financecount && EduProfcount > FitNutrcount)
  {
    if(Financecount == FitNutrcount)
    {
      if(Financecount == 0)
      {
        document.getElementById("FeedWillDisplay").innerHTML = "You will only be displayed Education and Professional posts"; 
      }
      else
      {
        document.getElementById("FeedWillDisplay").innerHTML = "You will be displayed mainly Education and Professional posts, but will still see the other themes ocassionally"; 
      }

    }
    else if(Financecount > FitNutrcount)
      {
        document.getElementById("FeedWillDisplay").innerHTML = "You will be displayed Education and Professional with some Finance posts and occasionally fitness and nutrition posts"; 
      }
      else if(FitNutrcount > Financecount)
      {
        document.getElementById("FeedWillDisplay").innerHTML = "You will be displayed Education and Professional with some fitness and nutrition posts and occasionally Finance posts"; 
      }
  }
  else if (Financecount > EduProfcount && Financecount > FitNutrcount)
  {
    if(EduProfcount == FitNutrcount)
    {
      if(EduProfcount == 0)
      {
        document.getElementById("FeedWillDisplay").innerHTML = "You will only be displayed Finance posts"; 
      }
      else
      {
        document.getElementById("FeedWillDisplay").innerHTML = "You will be displayed mainly finance posts, but will still see the other themes ocassionally"; 
      }

    }
    else if(EduProfcount > FitNutrcount)
    {
        document.getElementById("FeedWillDisplay").innerHTML = "You will be displayed finance posts with some Education and Professional posts and occasionally fitness and nutrition posts"; 
    }
    else if(FitNutrcount > EduProfcount)
    {
       document.getElementById("FeedWillDisplay").innerHTML = "You will be displayed finance posts with some fitness and nutrition posts and occasionally Education and Professional posts"; 
    }
  }
  else if (FitNutrcount > EduProfcount && FitNutrcount > Financecount)
  {
    if(EduProfcount == Financecount)
    {
      if(EduProfcount == 0)
      {
        document.getElementById("FeedWillDisplay").innerHTML = "You will only be displayed fitness and nutrition posts"; 
      }
      else
      {
        document.getElementById("FeedWillDisplay").innerHTML = "You will be displayed mainly fitness and nutrition posts, but will still see the other themes ocassionally"; 
      }

    }
    else if(EduProfcount > Financecount)
    {
        document.getElementById("FeedWillDisplay").innerHTML = "You will be displayed fitness and nutrition posts with some Education and Professional posts and occasionally finance posts"; 
    }
    else if(Financecount > EduProfcount)
    {
       document.getElementById("FeedWillDisplay").innerHTML = "You will be displayed fitness and nutrition posts with some finance posts and occasionally Education and Professional posts"; 
    }
  }
  else
  {
    if (Financecount == FitNutrcount && FitNutrcount==EduProfcount)
    {
      document.getElementById("FeedWillDisplay").innerHTML = "You will be displayed all types of posts"; 
    }
    else
    {
      if((FitNutrcount+Financecount+EduProfcount)>=2)
      {
        if(Financecount == FitNutrcount && EduProfcount ==0)
        {
          document.getElementById("FeedWillDisplay").innerHTML = "You will only be displayed fitness and nutrition posts as well as finance posts"; 
        }
        else if(Financecount == EduProfcount && FitNutrcount ==0)
        {
          document.getElementById("FeedWillDisplay").innerHTML = "You will only be displayed Education and Professional posts as well as finance posts";
        }
        else if(EduProfcount == FitNutrcount && Financecount ==0)
        {
          document.getElementById("FeedWillDisplay").innerHTML = "You will only be displayed Education and Professional posts as well as fitness and nutrition posts"; 
        }
        else
        {
          document.getElementById("FeedWillDisplay").innerHTML = "You will be displayed all sorts of posts"; 
        }
      }
    }
  }
  FitNutrcount = 0;
  Financecount = 0;
  EduProfcount = 0; 
}

