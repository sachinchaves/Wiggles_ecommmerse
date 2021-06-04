//Form Validation

const Validator = function(element){
    const validator = this;
    validator.form = document.getElementById(element);
    console.log(element);
    validator.reqFields = validator.form.querySelectorAll(".required");
    console.log(validator.reqFields);
    validator.errorCount = 0;
    validator.submitBtn = validator.form.querySelector(".submitBtn");
    validator.submitBtn.disabled = true;

    validator.init = function() {
        validator.reqFields.forEach(function(field){
            field.addEventListener("keyup", function(){
                validator.checkFields();

            })
        })
    }
    
    validator.checkFields = function() {
        validator.reqFields.forEach(function(field) {
            if(field.value=="") {
                field.parentNode.classList.add("error");
                validator.errorCount = 1;
                validator.submitBtn.disabled = true;
            } else {
                field.parentNode.classList.remove("error");
                validator.submitBtn.disabled = false;
            }
        })
    }

    validator.startValidation = function() {
        validator.errorCount = 0;
        validator.checkFields();
    }

    validator.submitBtn.addEventListener("click", function(e){
        validator.startValidation();
        if(validator.errorCount){
            e.preventDefault();
        }
    })

    validator.init();
}


if (document.getElementById("customerForm")) {
    const validator = new Validator("customerForm");
}else if (document.getElementById("paymentForm")){
    const validator = new Validator("paymentForm");
}else if (document.getElementById("customerForm")){
    const validator = new Validator("customerForm");
}else if (document.getElementById("contactforms")){
    const validator = new Validator("contactforms");
}


