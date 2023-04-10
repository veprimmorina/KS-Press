    function validateLogIn(){
        if(document.myForm.username.value == ""){
        alert("Shenoni usernamin");
        document.myForm.username.focus();
        return false;
        }
        if(document.myForm.password.value == "" ){
            alert("Shenoni Fjalkalimin");
            document.myForm.password.focus();
            return false;
        }
        if(document.myForm.password.value.length < 6){
            alert("Fjalkalimi duhet te permbaje se paku 6 karaktere");
            document.myForm.password.focus();
            return false;
        }
        }
        function validateRegister(){
        if(document.registerForm.username.value == ""){
            alert("Shenoni usernamin");
            document.registerForm.username.focus();
            return false;
        }
        if(document.registerForm.email.value==""){
            alert("Shenoni emailin");
            document.registerForm.email.focus();
            return false;
        }
        if(document.registerForm.password.value == "" ){
            alert("Shenoni Fjalkalimin");
            document.registerForm.password.focus();
            return false;
        }
        if(document.registerForm.password.value.length < 6){
            alert("Fjalkalimi duhet te permbaje se paku 6 karaktere");
            document.registerForm.password.focus();
            return false;
        }
    }

    


