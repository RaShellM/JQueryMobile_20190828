$(document).ready(function(){
		/*	$.mobile.defaultPageTransition = "flip";
			/*$.ajax({
					type: "POST",
					url: "http://localhost/2808Mobile/php/db.php",
					cache: false,
					success: onSuccessDb,
					error: onErrorDb,
				});
				*/
				function onSuccess(data, status){
					$("#result").html(data);
				}
				function onError(data, status){
					alert("erreur");
				}
			/*
			function onSuccessDb(status){
				$("#result").html("connexion etablie");
			}
			function onErrorDb(status){
				alert("erreur");
			}
/*
			$("#submit").click(function(){
				let formData = $("#Ajax").serialize();
				$.ajax({
					type: "POST",
					url: "http://localhost/2808Mobile/php/datalieux.php",
					cache: false,
					data: formData,
					success: onSuccess,
					error: onError,
				});
				return false;
			});*/

			$("#useradd").click(function(){
				let formData = $("#AjaxUsers").serialize();
				$.ajax({
					type: "POST",
					url: "php/usersAdd.php",
					cache: false,
					data: formData,
					success: onSuccess,
					error: onError,
				});
			});

			$("#lieuxadd").click(function(){
				let formData = $("#AjaxLieux").serialize();
				$.ajax({
					type: "POST",
					url: "php/lieuxAdd.php",
					cache: false,
					data: formData,
					success: onSuccess,
					error: onError,
				});
			});
		});