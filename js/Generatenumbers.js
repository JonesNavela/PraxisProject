


function Random() {
    var textAreaElement = document.getElementById('millionRandomNumbers');
    textAreaElement.value = ""; // Clear list everytime
    
    var provinces = provinceArrayList(); 
    var provinceCountIndex = 0;

    
    for(var i = 0; i< 54; i++ ) { //loop 50 times (This must be 1 million )

        if(provinceCountIndex === 9) {
            provinceCountIndex = 0;
        }

        var province =  provinces[provinceCountIndex];

        var rndDigits = Math.floor(Math.random() * 900) +100;     // Because we want 3 number digits (we start from 100 - 900) 
        var rndChars =generateRandoChars(3);
        var code = province.code;
                
        province.car_registrations++;
       
        
        // This Random Number must be concatinated with the Province - Code and 3 random characters - for example
        var finalRegistrationPlate = rndChars + "-" + rndDigits + "-" + code;
        
        // append to list
        textAreaElement.value += finalRegistrationPlate + " \n";  
        
        provinceCountIndex++;
    }
    
    
    // update counts  on display
    updateCountsOnScreen(provinces);    
      
}

function updateCountsOnScreen(provinces){
    for(var idx = 0 ; idx < provinces.length; idx++) {
        
        var elementName = "province"+ (idx +1);         
        var element =  document.getElementsByName(elementName)[0];
        var elementValue = element.value ? element.value: 0 ;
        var newValue = parseInt(elementValue) + parseInt(provinces[idx].car_registrations);
            element.value = (newValue);
            provinces[idx].car_registrations = newValue;
            
            //API CALL
            apiCall(provinces[idx]);
        
    }
    
    
    function apiCall(province){
        var xmlhttp = new XMLHttpRequest();
        xmlhttp.onreadystatechange = function() {
            if (this.readyState === 4 && this.status === 200) {
                document.getElementById("result").innerHTML = this.responseText;
            }
        };
        xmlhttp.open("GET", "api/SaveCounts.php?name=" + province.name +"&code=" + province.code + "&count="+ province.car_registrations, true);
        xmlhttp.send();
    }
}


function generateRandoChars(limit) {
  var text = "";
  var possible = "ABCDEFGHIJKLMNOPQRSTUVWXYZ"; // this is an option: ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz
  if(!limit)   
      limit = 3;

  for (var i = 0; i < limit; i++)
    text += possible.charAt(Math.floor(Math.random() * possible.length));

  return text;
}

