
document.addEventListener('DOMContentLoaded',function() {
    var div_container = document.getElementById("container");
    //forms
    var form_log=document.getElementsByName('formLogin')[0];
    var form_PassRem=document.getElementsByName('formPassRem')[0];
    var form_UsersReg=document.getElementsByName('formUsersReg')[0];
    var form_SendReg=document.getElementsByName('formSendReg')[0];
    var form_DeliveryReg=document.getElementsByName('formDeliveryReg')[0];
//div forms
    var div_form_log = document.getElementsByClassName('rowFormLogIn')[0];
    var div_formPasswordRem = document.getElementsByClassName('rowFormPasswordReminder')[0];
    var div_formUsersRegistration = document.getElementsByClassName('rowFormUsersRegistration')[0];
    var div_formSenderRegistration = document.getElementsByClassName("rowFormSenderRegistration")[0];
    var div_formDeliveryRegistration = document.getElementsByClassName("rowFormDeliveryRegistration")[0];
    //lincs form
    var rem_passw = document.getElementById("rememberPassword");
    var reg = document.getElementsByClassName("btn_registration")[0];
    var reg_send = document.getElementsByClassName("btn_registration_sender")[0];
    var reg_deliv = document.getElementsByClassName("btn_registration_delivery")[0];
    var btn_sender_inp = document.getElementById("inpRadioSender");
    var btn_delivery = document.getElementById("inpRadioDelivery");
//forms close
    var close_form_log = document.getElementsByClassName('formLogInClose')[0];
    var close_form_pass = document.getElementsByClassName('formPassRemClose')[0];
    var close_form_reg = document.getElementsByClassName('formUsersRegClose')[0];
    var close_form_send = document.getElementsByClassName('formSenderClose')[0];
    var close_form_delivery = document.getElementsByClassName('formDeliveryClose')[0];

    var inpEmail = document.getElementsByClassName("mail");
    var p_small = document.getElementsByClassName("small")[0];
    var p_medium = document.getElementsByClassName("medium")[0];
    var p_large = document.getElementsByClassName("large")[0];
    var hidden= document.getElementsByClassName("dropdown-content")[0];
    var dd_span=document.getElementById("dropdownSpan");
    var str=dd_span.innerText;
    //const return_value = 0;
    const submit_rem_pass = document.querySelector('#submitButton');
    const div_answear = document.querySelector('.answear');
    const div_inputs = document.querySelector('#formPasRemInputs');
    const input_email = div_inputs.querySelector('[type="email"]');
    const input_tel = div_inputs.querySelector('[type="tel"]');
    const btn_login = document.querySelector('#btnLogin');
    const btn_login2 = document.querySelector('#btnLogin2');
    var mail_value;
    var tel_value;
    var ret_value;
    var re = /^([a-z0-9_-]+\.)*[a-z0-9_-]+@[a-z0-9_-]+(\.[a-z0-9_-]+)*\.[a-z]{2,6}$/;



    div_container.addEventListener("click", function (event) {

        switch (event.target) {
            case rem_passw:
                div_form_log.style.display = "none";
                div_formPasswordRem.style.display = "block";
                backgroundAnimation(div_formPasswordRem);
                clearForm(div_form_log);
                break;
            case close_form_log:
                //f();
                /*div_form_log.style.display = "none";
                div_formUsersRegistration.style.display = "block";
                backgroundAnimation(div_formUsersRegistration);*/
                clearForm(div_form_log);
                break;
            case close_form_pass:
                div_formPasswordRem.style.display = "none";
                div_form_log.style.display = "block";
                backgroundAnimation(div_form_log);
                clearForm(div_formPasswordRem);
                div_answear.style.display = 'none';
                break;
            case close_form_reg:
                div_formUsersRegistration.style.display = "none";
                div_form_log.style.display = "block";
                backgroundAnimation(div_form_log);
                clearForm(div_formUsersRegistration);
                break;
            case   close_form_send:
            case btn_login:
                div_formSenderRegistration.style.display = "none";
                div_form_log.style.display = "block";
                backgroundAnimation(div_form_log);
                clearForm(div_formSenderRegistration);
                break;
            case  close_form_delivery:
            case btn_login2:
                div_formDeliveryRegistration.style.display = "none";
                div_form_log.style.display = "block";
                backgroundAnimation(div_form_log);
                clearForm(div_formDeliveryRegistration);
                dd_span.innerText=str;
                break;
            case  btn_sender_inp:
                div_formUsersRegistration.style.display = "none";
                div_formSenderRegistration.style.display = "block";
                backgroundAnimation(div_formSenderRegistration);
                clearForm(div_formUsersRegistration);
                break;
            case btn_delivery:
                div_formUsersRegistration.style.display = "none";
                div_formDeliveryRegistration.style.display = "block";
                backgroundAnimation(div_formDeliveryRegistration);
                clearForm(div_formUsersRegistration);
                break;
            case reg:
                div_form_log.style.display = "none";
                div_formUsersRegistration.style.display = "block";
                backgroundAnimation(div_formUsersRegistration);
                clearForm(div_form_log);
                break;
            case  reg_send:
                div_formSenderRegistration.style.display = "none";
                div_formUsersRegistration.style.display = "block";
                backgroundAnimation(div_formUsersRegistration);
                clearForm(div_formSenderRegistration);
                break;
            case  reg_deliv:
                div_formDeliveryRegistration.style.display = "none";
                div_formUsersRegistration.style.display = "block";
                backgroundAnimation(div_formUsersRegistration);
                clearForm(div_formDeliveryRegistration);
                break;
            case p_small:
                dd_span.innerText = str + " - " + p_small.innerText;
                break;
            case p_medium:
                dd_span.innerText = str +  " - " + p_medium.innerText;
                break;
            case p_large:
                dd_span.innerText = str +  " - " + p_large.innerText;
                break;
            default:
                break;
        }
    });

/*
     for(var i=0; i<inpEmail.length; i++){
         inpEmail[i].addEventListener("blur",function (event) {
             validInput(event.target,re);
         });
     }
*/


    jQuery(function($){
        $(".tel").mask("+38(999) 999-9999");
    });




    function validInput(inp,reExp) {
        var reg = reExp.exec(inp.value);
        (!reg) ? inp.style.border = "1px solid #CD2714" : inp.style.border = "1px solid #3b5bb2";
    }

    function clearForm(forms) {
        //forms.reset();
         var t=forms.getElementsByTagName("input");
          for(var i=0;i<t.length; i++){
             switch (t[i].type) {
                 case "email":
                 case "password":
                 case "text":
                 case "tel":
                     t[i].value="";
                     break;
                 case 'radio':
                 case 'checkbox':
                     t[i].checked = false;
                     break;
           }
          }

         /*  // clearing selects
           var selects = form.getElementsByTagName('select');
           for (var i = 0; i<selects.length; i++)
               selects[i].selectedIndex = 0;

           // clearing textarea
           var text= form.getElementsByTagName('textarea');
           for (var i = 0; i<text.length; i++)
               text[i].innerHTML= '';
*/
        return false;
    }

    function backgroundAnimation(form) {
        if(form===div_formSenderRegistration){
            $(div_container).animate(
                {backgroundPositionX:"100%"}, 100,"linear");
           // $(div_container).css("backgroundPosition", "50%");

        }
        if(form===div_form_log||form===div_formPasswordRem||form===div_formUsersRegistration){
            $(div_container).animate(
                {backgroundPositionX:"0"}, 100,"linear");
            //$(div_container).css("backgroundPosition", "0");
        }
        if(form===div_formDeliveryRegistration){
            $(div_container).animate(
                {backgroundPositionX:"50%"}, 100,"linear");
            //$(div_container).css("backgroundPosition", "100%");
        }
    }
    
    //напомнить пароль
    submit_rem_pass.addEventListener('click', function (e) {
        e.preventDefault();
       e.stopPropagation();
       if(valid_form_rem_password()){
           div_answear.classList.add('valid');
           div_answear.insertAdjacentHTML('afterbegin', '<p>На Ваш '+ ret_value+' было отправлено сообщение с новым паролем</p>')
           div_answear.style.display = 'block';
       }else{
           div_answear.classList.add('noValid');
           div_answear.insertAdjacentHTML('afterbegin', '<p>Заполните одно из полей -  email или phone</p>')
           div_answear.style.display = 'block';
           setTimeout(function(){
               $(div_answear).animate({opacity: "0"}, 1000, "linear");
           },1000);
       }
    });

    // ВАЛИДАЦИЯ формы напомнить пароль
    function valid_form_rem_password() {
        mail_value  = input_email.value;
        tel_value = input_tel.value;

        if( mail_value==='' && tel_value==='')
            return false;
        if(mail_value!=='' && tel_value===''){
            ret_value = mail_value;
            return  true;
        }
        if(mail_value==='' && tel_value!==''){
            ret_value = tel_value;
            return  true;
        }
    }
    // отработка малой кнопки войти (возврат во вход)

    
});