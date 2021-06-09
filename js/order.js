function checkEnterValue() { 
    var x = document.getElementById("entervalue").value;

    if(document.getElementById('A').checked) {
        document.getElementById("program").value = "方案A :【限量早鳥優惠 | 矮層架組】";
        if (x < 12900){
            alert("贊助金額必須 ≥ 選擇的回饋方案");
            document.getElementById("entervalue").focus();
            return false;
    }return true;
  }else if(document.getElementById('B').checked) {
    document.getElementById("program").value = "方案B :【限量早鳥優惠 | 跳台貓砂架】";
    if (x < 19800){
            alert("贊助金額必須 ≥ 選擇的回饋方案");
            document.getElementById("entervalue").focus();
            return false;
    }
    return true;
  }else if(document.getElementById('C').checked) {
    document.getElementById("program").value = "方案C :【限量早鳥優惠 | 實用層架組】";
    if (x < 28400){
            alert("贊助金額必須 ≥ 選擇的回饋方案");
            document.getElementById("entervalue").focus();
            return false;
    }
    return true;
  }else if(document.getElementById('D').checked) {
    document.getElementById("program").value = "方案D :【限量早鳥優惠 | 豪華層架牆組】";
    if (x < 67900){
            alert("贊助金額必須 ≥ 選擇的回饋方案");
            document.getElementById("entervalue").focus();
            return false;
    }
    return true;
  }
}