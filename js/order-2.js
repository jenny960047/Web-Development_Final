function checkEnterValue() { 
    var x = document.getElementById("entervalue").value;

    if(document.getElementById('A').checked) {
        document.getElementById("program").value = "方案A :【限量｜晚鳥雙人組】 LUFT Duo x 2";
        if (x < 6200){
            alert("贊助金額必須 ≥ 選擇的回饋方案");
            document.getElementById("entervalue").focus();
            return false;
    }return true;
  }else if(document.getElementById('B').checked) {
        document.getElementById("program").value = "方案B :【集資專屬｜香氛配件組】";
        if (x < 1000){
            alert("贊助金額必須 ≥ 選擇的回饋方案");
            document.getElementById("entervalue").focus();
            return false;
    }
    return true;
  }else if(document.getElementById('C').checked) {
        document.getElementById("program").value = "方案C :【三人組｜隱藏色可選】 LUFT Duo x 3";
        if (x < 9300){
            alert("贊助金額必須 ≥ 選擇的回饋方案");
            document.getElementById("entervalue").focus();
            return false;
    }
    return true;
  }else if(document.getElementById('D').checked) {
        document.getElementById("program").value = "方案D :【來揪團10入組】 LUFT Duo x 10";
        if (x < 28500){
            alert("贊助金額必須 ≥ 選擇的回饋方案");
            document.getElementById("entervalue").focus();
            return false;
    }
    return true;
  }
}