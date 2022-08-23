$(document)
.on("submit","form.js-register",function(event)
{
	event.preventDefault();
	var _form = $(this);
	_error =$(".js-error",_form);
		
	var dataObj = {
		
		
		// look through form tag in register.php
		// there is only one email
	email: $("input[type='email']",_form).val(),
	password: $("input[type='password']",_form).val()
	}
// basic validation
if(dataObj.email.length < 6)
{
	_error
		.text("Please enter a valid email address")
		.show();
		return false;
	} else if (dataObj.password.length < 11){
			_error
			.text("please enter a pass phrase that is at least 11 characters long")
			.show();
	}
	// hide error messages if no error
	_error.hide();
	
//	console.log('form was submitted, on error should not se this',data);
relativePath = getContextPath()+"PHP_tutorial/";
console.log("Url for ajax php is: ",relativePath)
console.log("command is: ",relativePath + 'ajax/register.php')
$.ajax({
type: 'POST',
url: relativePath + 'ajax/register.php',
data: dataObj,
dataType: 'json',
async: true,	
	})
	.done(function ajaxDone(data){
	console.log("returned from ajax");
	console.log(data);
	
// keep in mind ajax/register.php
	if(data.redirect !== undefined){
		window.location=relativePath + data.redirect;
		console.log("redirect user",data.myname);
		
		} else if (data.error !== undefined){
		_error.text(data.error).show();	
		}	
	})
	.fail(function ajaxFailed(e) {
		console.log("something failed");
		console.log(e);
	})
	.always(function ajaxAlwaysDoThis(data){
		console.log('Always');
	})
	return false;
})

////////////////////////////

.on("submit","form.js-loginb",function(event)
{
	event.preventDefault();
	var _form = $(this);
	_error =$(".js-error",_form);
		
	var dataObj = {
		
		
		// look through form tag in register.php
		// there is only one email
	email: $("input[type='email']",_form).val(),
	password: $("input[type='password']",_form).val()
	}
// basic validation
if(dataObj.email.length < 6)
{
	_error
		.text("Please enter a valid email address")
		.show();
		return false;
	} else if (dataObj.password.length < 11){
			_error
			.text("please enter a pass phrase that is at least 11 characters long")
			.show();
	}
	// hide error messages if no error
	_error.hide();
	
//	console.log('form was submitted, on error should not se this',data);
relativePath = getContextPath()+"PHP_tutorial/";
console.log("Url for ajax php is: ",relativePath)
console.log("command is: ",relativePath + 'ajax/login.php')
$.ajax({
type: 'POST',
url: relativePath + 'ajax/register.php',
data: dataObj,
dataType: 'json',
async: true,	
	})
	.done(function ajaxDone(data){
	console.log("returned from ajax");
	console.log(data);
	
// keep in mind ajax/register.php
	if(data.redirect !== undefined){
		window.location=relativePath + data.redirect;
		console.log("redirect user",data.myname);
		
		} else if (data.error !== undefined){
		_error.text(data.error).show();	
		}	
	})
	.fail(function ajaxFailed(e) {
		console.log("something failed");
		console.log(e);
	})
	.always(function ajaxAlwaysDoThis(data){
		console.log('Always');
	})
	return false;
})



