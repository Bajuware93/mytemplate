/*function myajaxfunction() {
 
    $.ajax({ //ajax request
        url: bob_unique.ajaxurl,
        data: {
            'action':'serversidefunction',
            'post_type' : $('#post_type').val(), // value of text box having id "post_type"
            'reg_name': $('#reg_name').val()
        },
        success:function(data) {  //result
         $(".showdiv").html(data); //showdiv is the class of the div where we want to show the results
        },
        error: function(errorThrown){
            console.log(errorThrown);
        }
    });  
               
} */

function ajax_req() {
 
    $.ajax({ //ajax request
        url: timo_unique.ajaxurl,
        data: {
            'action':'server_req',//PHP Methode die ausgefuehrt wird
            'reg_name': $('#reg_name').val(),
			'reg_mail': $('#reg_mail').val(),
			'reg_pw': $('#reg_pw').val()
        },
        success:function(data) {  //Wenn Antwort von Server(bzw server_reg) gekommen
         $(".showdiv").html(data); //showdiv is the class of the div where we want to show the results
        },
        error: function(errorThrown){
            console.log(errorThrown);
        }
    });  
               
}
