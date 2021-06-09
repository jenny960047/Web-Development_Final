function checkEnterValue() { 
    var x = document.getElementById("entervalue").value;

    if(document.getElementById('A').checked) {
        document.getElementById("program").value = "方案A :【環保聯手】Lab22環保咖啡鞋x Biion純素親水鞋";
        if (x < 2780){
            alert("贊助金額必須 ≥ 選擇的回饋方案");
            document.getElementById("entervalue").focus();
            return false;
    }return true;
  }else if(document.getElementById('B').checked) {
        document.getElementById("program").value = "方案B :【超早鳥】成人雙入．英倫亮面款";
        if (x < 2880){
            alert("贊助金額必須 ≥ 選擇的回饋方案");
            document.getElementById("entervalue").focus();
            return false;
    }
    return true;
  }else if(document.getElementById('C').checked) {
        document.getElementById("program").value = "方案C :【超早鳥】兒童雙入．必備霧面款";
        if (x < 1680){
            alert("贊助金額必須 ≥ 選擇的回饋方案");
            document.getElementById("entervalue").focus();
            return false;
    }
    return true;
  }else if(document.getElementById('D').checked) {
        document.getElementById("program").value = "方案D :【百萬解鎖】成人雙入．正義聯盟聯名款";
        if (x < 3280){
            alert("贊助金額必須 ≥ 選擇的回饋方案");
            document.getElementById("entervalue").focus();
            return false;
    }
    return true;
  }
}