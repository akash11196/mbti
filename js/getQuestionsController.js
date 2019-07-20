
function saveResponse(){
	response ={
		'q1':$("input[name='question1']:checked").val(),
		'q2':$("input[name='question2']:checked").val(),
		'q3':$("input[name='question3']:checked").val(),
		'q4':$("input[name='question4']:checked").val(),
		'q5':$("input[name='question5']:checked").val(),
		'q6':$("input[name='question6']:checked").val(),
		'q7':$("input[name='question7']:checked").val(),
		'q8':$("input[name='question8']:checked").val(),
		'q9':$("input[name='question9']:checked").val(),
		'q10':$("input[name='question10']:checked").val(),
		'email':$("#email").val(),	

}
if(response.q1==null||response.q2==null||response.q3==null||response.q4==null||response.q5==null||response.q6==null||response.q8==null||response.q7==null||response.q9==null||response.q10==null||response.email==null){
	swal("Plesae fill all the fields in the form before submitting");

}
else{
 $.ajax({
        type: "POST",
        url: "/mbti/php/saveResponse.php",
        data: response
    }).done(function (data) {
    	data1=JSON.parse(data);
    	
    	window.location = "/mbti/showResponse?id=" + data1[0].id;
    });
}
}