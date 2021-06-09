function checkName(control) {
	if (control.value == "") {
		validatePrompt(control, "請輸入姓名");
		return false;
	}
	return true;
}
function checkEmail(control){
    rule = /^\w+((-\w+)|(\.\w+))*\@[A-Za-z0-9]+((\.|-)[A-Za-z0-9]+)*\.[A-Za-z]+$/;
    if (rule.test(control.value) == false) {
		validatePrompt(control, "請輸入有效的電子信箱");
    	return false;
	}
	return true;
}
function checkPassword(control) {
	rule = /^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)[a-zA-Z\d]{8,}$/;
	if (rule.test(control.value) == false) {
		validatePrompt(control, "請輸入至少 8 位包含數字及英文大小寫的密碼");
		return false;
	}
	return true;
}
// function checkPassword_check(control) {
// 	const password = document.getElementById("password").value;
// 	const password_check = document.getElementById("password_check").value;
// 	if (password_check != password) {
// 		validatePrompt(control, "輸入的密碼不一致");
// 		return false;
// 	}else{
// 		return true;
// 	}
// }
// function checkPhonenumber(control) {
// 	rule = /^09\d{8}$/;
// 	if (rule.test(control.value) == false) {
// 		validatePrompt(control, "請輸入有效的手機號碼");
// 		return false;
// 	}
// 	return true;
// }

function validateForm(form) {
	if (!checkName(form.name)) return;
	if (!checkEmail(form.email)) return;
	if (!checkPassword(form.password)) return;
	if (!checkPassword_check(form.password_check)) return;
	if (!checkPhonenumber(form.phonenumber)) return;
	document.form.submit();
}

function validatePrompt(control, promptStr) {
	alert(promptStr);
	control.focus();
	return;
}