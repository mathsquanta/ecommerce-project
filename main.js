$(document).ready(function(){
	cat ();
	menu ();
	getProducts();
	function cat(){
		$.ajax({
			url		: "action.php",
			method	: "POST",
			data 	: {category:1},
			success	: function(data){
				$("#getCategory").html(data);
			}
		})
		
	}
	
	
	function menu(){
		$.ajax({
			url		: "action.php",
			method	: "POST",
			data 	: {menu:1},
			success	: function(data){
				$("#getMenu").html(data);
			}
		})
		
	}
	
	function getProducts(){
		$.ajax({
			url		: "action.php",
			method	: "POST",
			data 	: {getProducts:1},
			success	: function(data){
				$("#getProducts").html(data);
			}
		})
		
	}
	
	$("body").delegate(" .category", "click", function(event){
		event.preventDefault();
		var cat_id = $(this).attr('cid');
		$.ajax({
			url			: 	"action.php",
			method		: 	"POST",
			data 		: 	{select_category:1, getCaId:cat_id},
			success		: 	function(data){
				$("#getProducts").html(data);
			}
			
		})
		
	})
	
	$("body").delegate(" .menu", "click", function(event){
		event.preventDefault();
		var menu_id = $(this).attr('mid');
		$.ajax({
			url			: 	"action.php",
			method		: 	"POST",
			data 		: 	{select_menu:1, getMenId:menu_id},
			success		: 	function(data){
				$("#getProducts").html(data);
			}
			
		})
		
	})
	
		$("#searchBtn").click(function(){
			
			var keyword = $("#search").val();
			if (keyword != ""){
				
				$.ajax({
				url			: 	"action.php",
				method		: 	"POST",
				data 		: 	{search:1, keywords:keyword},
				success		: 	function(data){
					$("#getProducts").html(data);
			}
			
		})
				
			}
			
		})

	$("#signup_button").click(function(event){
		
		event.preventDefault();
		$.ajax({
				url			: 	"register.php",
				method		: 	"POST",
				data 		: 	$("form").serialize(),
				success		: 	function(data){
					$("#signup_alert").html(data)
			}
			
		})
		
	})
	
	$("#signin").click(function(){
		event.preventDefault();
		var email = $("#email").val();
		var password = $("#password").val();
		$.ajax({
				url			: 	"login.php",
				method		: 	"POST",
				data 		: 	{userSignin:1,userEmail:email, userPassword:password},
				success		: 	function(data){
					if(data = "truenkjnkcjbcskbjkdfsb"){
						window.location.href = "profile.php";
					}

			}
			
		})
	})
	
	$("body").delegate("#products", "click", function(event){
		event.preventDefault();
		var p_id = $(this).attr('pid');
		$.ajax({
			url		: "action.php",
			method	: "POST",
			data	: {addToCart:1,proId:p_id},
			success : function(data){
				
				$("#addCart_msg").html(data);
				cart_count();
				
			}
			
		})
	})
	cart_box();
	function cart_box(){
		$.ajax ({
			url		: "action.php",
			method	: "POST",
			data	: {getCart:1},
			success : function(data){
				
				$("#cartProducts").html(data);
			}
				
		})
		cart_count();
				
	};
	
	function cart_count(){
		
		$.ajax ({
			url		: "action.php",
			method	: "POST",
			data	: {cart_count:1},
			success : function(data){
				
				$(".badge").html(data);
				cart_count();
				
			}
				
		})
		
	}
		
	$("#cart_box").click(function(event){
		event.preventDefault();
		$.ajax ({
			url		: "action.php",
			method	: "POST",
			data	: {getCart:1},
			success : function(data){
				
				$("#cartProducts").html(data);
				
				
			}
				
		})
		
		
	})
	cart_checkout();
	function cart_checkout(){
		$.ajax ({
			url: "action.php",
			method : "POST",
			data : {cart_checkout:1},
			success : function(data){
				$("#cart_checkout").html(data);
				
			}
		})
	}
	
	$("body").delegate(".qty","keyup",function(){
		
		var pid = $(this).attr("pid");
		var qty = $("#qty-"+pid).val();
		var price = $("#price-"+pid).val();
		var total = qty * price ;
		$("#total-"+pid).val(total);
	})
	
	$("body").delegate(".delete","click",function(event){
		event.preventDefault();
		var pid = $(this).attr("delete");
		$.ajax({
			url : "action.php",
			method : "POST",
			data : {removeProduct:1,remove:pid},
			success : function(data){
				$("#cart_msg").html(data);
				cart_checkout();
				
			}
		})
	})
	$("body").delegate(".update","click",function(event){
		event.preventDefault();
		var pid = $(this).attr("update");
		var qty = $("#qty-"+pid).val();
		var price = $("#price-"+pid).val();
		var total = $("#total-"+pid).val();
		$.ajax ({
			
			url : "action.php",
			method : "POST",
			data : {updateProduct:1,update:pid, qty:qty, price:price, total:total},
			success : function(data){
				$("#cart_msg").html(data);
				cart_checkout();
				
			}
		})
	})
})
