
$(document).ready(function(){


	
	/************ ********************************************/

$(document).on("input", ".numeric", function() {
   this.value = this.value.replace(/[^0-9 .]/g, '');
});

/************ ********************************************/



	/************ ********************************************/
	$("#submit_login").click(function(event){
		  event.preventDefault();
		 
		 var username = $('#Username').val();
		 var password_set = $('#Password').val();
		 var height = $( window ).height();
		 
		 if(!username){
			    new_alert("#massage","danger","कृपया लॉगिन आईडी दर्ज करें");
				return false ;
		 }
		 	 if(!password_set){
			    new_alert("#massage","danger","कृपया लॉगिन पासवर्ड दर्ज करें");
				return false ;
		 } 
		 
		// alert(username);
		   
		 //  alert('s');
		 $.ajax({  
			type:"POST",
			url:base_url+"Admin/Loginform",   
			data:{password_set:password_set,username:username},
			success:function(data) {
					if($.trim(data) != "error"){
					$("body").html(""); 
					$("body").html("<div style='margin: 15%;' align='center'><img src='"+base_url+"assets/img/ajax-loaders/loader.gif' style='width: 200px; height:200px;' /> </div>");
					} 
					//return false ;
					if($.trim(data) == "admin"){
					var surl = base_url+'Admin/Admin_dashboard'; 
					window.setTimeout(function() { window.location = surl; }, 3000);
					}else if($.trim(data) == "error"){
						new_alert("#massage","danger","Invalid Username & Password");
					}
			}
			});  
				event.preventDefault();
		});		
		
		
		/************ ********************************************/
		
			$("#general_form_submit").submit(function(event){
			var url = $(this).attr('action');
			$("#submit").hide();
			$.ajax({
				type:"POST",
				url:base_url+url, 
				data: new FormData(this),
				contentType: false,
				cache: false,
				processData: false,
				dataType: "json",  
				success:function(data) {
					if(data.mass_id){
						var mass=data.mass_id;
					}else{
						var mass= "#msg";
					} 
					
					if(data.status){ 		
						new_alert(mass,'success',data.mass);
						if(data.url == "reload"){
							setTimeout(function(){ reload(); }, 2000);
						}else if(data.url == "otp"){
							$("#otp_box").show();
							$("#school_registration_box").remove();
							$("#user_id").val(data.user_id);
						}else if(data.url != ""){
							setTimeout(function(){ window.location = data.url; }, 2000);
						}
						}else{				 
						new_alert(mass,'danger',data.mass);
							$("#submit").show();
						}
				}
				});  
				event.preventDefault();
		});
		/************ ********************************************/
		
			$("#add_billing_data").submit(function(event){

				if(submit_go){

				
			var url = $(this).attr('action');
			$("#submit").remove();
			$.ajax({
				type:"POST",
				url:base_url+url, 
				data: new FormData(this),
				contentType: false,
				cache: false,
				processData: false,
				dataType: "json",  
				success:function(data) {
					if(data.mass_id){
						var mass=data.mass_id;
					}else{
						var mass= "#msg";
					} 
					if(data.status){ 		
						new_alert(mass,'success',data.mass);
				let	location =  base_url+'Billing/print_billing/'+data.id; 

				setTimeout(function(){ 	window.open(location,'_blank');}, 1000);

				setTimeout(function(){ window.location = base_url; },2000);

						}else{				 
						new_alert(mass,'danger',data.mass);
							$("#submit").show();
						}
				}
				});  
				event.preventDefault();

			}
			event.preventDefault();
		});
		 


		/************ ********************************************/
	});
		 

function active_inactive_user(user_id,status_user,text,table,update_by_feild,update_feild,responce_text){
		
		
		bootbox.confirm(text, function(result){
    	if(result){
					//alert(ticket_number);
	$.ajax({
		type:"POST",
		url:base_url+'Comman_data/active_inactive_user', 
		data: {user_id:user_id,status_user:status_user,text:text,table:table,update_by_feild:update_by_feild,update_feild:update_feild,responce_text:responce_text}, 
		dataType:'json',
		success:function (data){
					if(data.status){
						new_alert("#massage",'success',data.mass);
								setTimeout(function(){ location.reload(); },1000);
					}else{
						new_alert("#massage",'danger',data.mass);
					}
					}
	});	
	event.preventDefault();	
				}
});
event.preventDefault();
		}




/************ ********************************************/

function new_alert(set_id,type,msg){
	//<button type="button" class="close" data-dismiss="alert">&times;</button>
	$(set_id).html('<div class="alert alert-'+type+'"> '+msg+'</div>');
	}
/************ ********************************************/

function select_all_btn(this_set) {
	if ($(this_set).prop('checked')==true){ 
        $(".select_all_set").attr('checked',true); 
    }else{
		$(".select_all_set").attr('checked',false); 
	}
}

/************ ********************************************/

	function reload(){
		window.close();
		location.reload();
		}