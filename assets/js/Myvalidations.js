function validateEmail(sEmail) {
                var filter = /^([\w-\.]+)@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.)|(([\w-]+\.)+))([a-zA-Z]{2,4}|[0-9]{1,3})(\]?)$/;
                if (filter.test(sEmail)) {
                    return true;
                }
                else {
                    return false;
                }
            }

            function validateMobile(mobile)
            {
                var pattern = /^\d{10}$/;
                if (pattern.test(mobile)) {
                    return true;
                }
                else
                {
                    return false;
                }
            } 

function validateNam(mobile)
            {
                var pattern = /^\[A-Za-z]+$/;
                if (pattern.test(mobile)) {
                    return true;
                }
                else
                {
                    return false;
                }
            } 


 function validatePin(pin)
            {
                var pattern = /^\d{6}$/;
                if (pattern.test(pin)) {
                    return true;
                }
                else
                {
                    return false;
                }
            } 

function validateAge(age)
            {
                var pattern = /^\d{2}$/;
                if (pattern.test(age)) {
                    return true;
                }
                else
                {
                    return false;
                }
            } 
            

function validateNum(nm) {
      
    if (isNaN(nm)) {
        return true;
    } else {
        return false;
    }
  }



