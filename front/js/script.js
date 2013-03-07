$(document).ready(function(){
	$("#sendform").click(function(){
var valid = '';
var isr = ' precisa ser preenchido.';
var datastr="";
var course = $("#course").val(); 
datastr=datastr+'&course='+course;
var tara = $("#tara").val(); 
datastr=datastr+'&tara='+tara;
var quantidade = $("#quantidade").val(); 
datastr=datastr+'&quantidade='+quantidade;
var idprodutos = $("#idprodutos").val(); 
datastr=datastr+'&idprodutos='+idprodutos;
if (course.length<1) {
			valid += '<br />Campo course'+isr;
		}

if (valid!='') {//Campos não foram preenchidos
			$("#response").html("Erro!:"+valid);
		}
else {
			//datastr ='nome=' + nome + '&email=' + email + '&assunto=' + assunto + '&mensagem=' + mensagem;
			datastr=datastr.replace(/\r?\n|\r/g, "<br>");
			$("#response").html("Enviando .... ");
			send(datastr,'atualiza.php');
		}
		return false;

	});
});
function send(datastr,url){
	$.ajax({	
		type: "POST",
		url: url,
		data: datastr,
		cache: false,
		success: function(html){
		$("#response").html(html);
	}
	});
}