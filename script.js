
var loginForm = {
  username: "M133",
  password: "M133Sec",
  checkdata: function(){
    var nme=  document.getElementById('tes');
    var pss= document.getElementById('tes1');
    var testos = document.getElementById('testos');
    var div = document.getElementById('wrapper');
    if(nme.value !== "M133" || pss.value !== "M133Sec"){
      nme.style.border ="1px solid red";
      document.getElementById('usern').style.color = "red";
      testos.textContent = 'Benutzername oder Passwort fehlerhaft';
      usern.focus();
      return false;
    }
    else{
      div.style.display ="none";
      setTimeout(function(){window.location.href = "data.php";},500);
      return true;
    }
  }
}
  let x = document.querySelectorAll("input[my-min-length]");//returns input
  for(let i = 0; i< x.length;i++){
    let element = x[i];
    element.addEventListener("keyup", function(){ //keyup = when keyboard key is released
      let minL = element.getAttribute("my-min-length");//takes value from attribute
      let errorC = element.parentNode.querySelector("small[my-min-length]");//takes value from parentnode(div) small[my-min-length
      if(element.value.length < minL){
        errorC.style.display ="block";
        document.getElementById('username').style.color ="red";
        document.getElementById('btnss').style.cursor ="no-drop";
        document.getElementById("btnss").disabled = true;

      }
      else {
        errorC.style.display ="none";
      }
    });
  }
var registerForm = {

    vali1: function(){
      var usn1= document.getElementById('test');
      var bn_e= document.getElementById('bn_e');

      //value = M133
      if(usn1.value === "M133"){
        usn1.style.border = "1px solid red";
        bn_e.textContent = "Benutzername bereits in Verwendung";
        document.getElementById('username').style.color ="red";
        document.getElementById('btnss').style.cursor ="no-drop";
        document.getElementById("btnss").disabled = true;

        username.focus();
        return false;
      }
      else {
        usn1.style.border = "1px solid white";
        document.getElementById('username').style.color ="black";
        document.getElementById('btnss').style.cursor ="pointer";
        document.getElementById("btnss").disabled = false;
        bn_e.textContent = "";
        username.focus();
        return true;
      }
    },
    vali2: function(){
      var pw= document.getElementById('test1');
      var pww= document.getElementById('test2');
      var p_e= document.getElementById('p_e');
      var regi= /[A-Z]+/;//Capital letters
      var regi1= /[a-z]+/;
      var regi2= /[!@#$%^&*(),.?":{}|<>]/g;

      if(pw.value.length < 9){
        pw.style.border = "1px solid red";
        document.getElementById('password').style.color="red";
        p_e.textContent = "Password muss mindestens 9 Zeichen lang sein";
        document.getElementById('btnss').style.cursor ="no-drop";
        document.getElementById("btnss").disabled = true;
        return false;
      }
      else if(regi.test(pw.value) == false){
        pw.style.border = "1px solid red";
        document.getElementById('password').style.color="red";
        p_e.textContent = "Passwort muss Grossbuchstaben enthalten";
        document.getElementById('btnss').style.cursor ="no-drop";
        document.getElementById("btnss").disabled = true;
        password.focus();
        return false;
      }
      else if(regi1.test(pw.value) == false){
        pw.style.border = "1px solid red";
        document.getElementById('password').style.color="red";
        p_e.textContent = "Passwort muss Kleinbuchstaben enthalten";
        document.getElementById('btnss').style.cursor ="no-drop";
        document.getElementById("btnss").disabled = true;
        password.focus();
        return false;
      }
      else if(regi2.test(pw.value) == false){
        pw.style.border = "1px solid red";
        document.getElementById('password').style.color="red";
        p_e.textContent = "Passwort muss Sonderzeichen enthalten";
        document.getElementById('btnss').style.cursor ="no-drop";
        document.getElementById("btnss").disabled = true;
        password.focus();
        return false;
      }
      //if value1 not equals to value2
      else if(pw.value !== pww.value){
        pw.style.border = "1px solid red";
        document.getElementById('password').style.color="red";
        p_e.textContent = "Passwörter stimmen nicht überein";
        document.getElementById('btnss').style.cursor ="no-drop";
        document.getElementById("btnss").disabled = true;
        password.focus();
        return false;
      }
      else {
        pw.style.border = "1px solid white";
        document.getElementById('password').style.color="black";
        document.getElementById('btnss').style.cursor ="pointer";
        document.getElementById("btnss").disabled = false;
        p_e.textContent = "";
        password.focus();
        return true;
      }
    },

    vali4: function() {
      var ort= document.getElementById('test4');
      var plz= document.getElementById('test5');
      var o_e= document.getElementById('o_e');
      var plz_e= document.getElementById('plz_e');

        if(ort.value === "" && plz.value !== ""){
        ort.style.border = "1px solid red";
        document.getElementById('ort').style.color="red";
        document.getElementById('btnss').style.cursor ="no-drop";
        document.getElementById("btnss").disabled = true;
        o_e.textContent = "Pflichtfeld";
        return false;
      }
      //if value 2 is empty and value1 isn't
      else if(plz.value ==="" && ort.value !== ""){
        plz.style.border = "1px solid red";
        document.getElementById('plz').style.color ="red";
        document.getElementById('btnss').style.cursor ="no-drop";
        document.getElementById("btnss").disabled = true;
        plz_e.textContent = "Pflichtfeld";
        return false;
      }
      else {
        ort.style.border = "1px solid white";
        plz.style.border = "1px solid white";
        document.getElementById('ort').style.color="black";
        document.getElementById('plz').style.color="black";
        document.getElementById('btnss').style.cursor ="pointer";
        document.getElementById("btnss").disabled = false;
        plz_e.textContent = "";
        plz_e.focus();
        o_e.focus();
        return true;
      }
    },
    vali5: function(){
        var email= document.getElementById('test6');
        var em_e= document.getElementById('em_e');
        var reg = /^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;

        if(email.value === ""){
        email.style.border ="1px solid red";
        document.getElementById('email').style.color="red";
        document.getElementById('btnss').style.cursor ="no-drop";
        document.getElementById("btnss").disabled = true;
        em_e.textContent = "Pflichtfeld";
        em_e.focus();
        return false;
      }
      //if value dosen't fit regex validation

      else if(reg.test(email.value) == false){
        email.style.border = "1px solid red";
        document.getElementById('email').style.color ="red";
        document.getElementById('btnss').style.cursor ="no-drop";
        document.getElementById("btnss").disabled = true;
        em_e.textContent = "E-Mail Format inkorrekt.";
        em_e.focus();
        return false;
      }
      else{
        email.style.border = "1px solid white";
        document.getElementById('email').style.color ="black";
        document.getElementById('btnss').style.cursor ="pointer";
        document.getElementById("btnss").disabled = false;
        em_e.textContent ="";
        em_e.focus();
        return true;
      }
    },
    vali6: function(){
      var strasse= document.getElementById('test3');
      var s_e= document.getElementById('s_e');
      var ort= document.getElementById('test4');
      var o_e= document.getElementById('o_e');
      var email= document.getElementById('test6');
      var em_e= document.getElementById('em_e');

      if(strasse.value === ""){
      strasse.style.border = "1px solid red";
      document.getElementById('strasse').style.color="red";
      s_e.textContent = "Pflichtfeld";
      strasse.focus();
      return false;
    } else if(ort.value === ""){
      ort.style.border = "1px solid red";
      document.getElementById('ort').style.color="red";
      o_e.textContent = "Pflichtfeld";
      return false;
    }if(email.value === ""){
    email.style.border ="1px solid red";
    document.getElementById('email').style.color="red";
    document.getElementById('btnss').style.cursor ="no-drop";
    document.getElementById("btnss").disabled = true;
    em_e.textContent = "Pflichtfeld";
    em_e.focus();
    return false;
  }
  }


}





var dataForm = {
  validate: function() {
    var h1 = document.getElementById('g1');
    var h2 = document.getElementById('g2');
    var h3 = document.getElementById('g3');
    var h_e = document.getElementById('h_e');
    if(h1.value.length <= 0 || h2.value.length <= 0 || h3.value.length <= 0){
      h1.style.border = "1px solid red";
      h2.style.border = "1px solid red";
      h3.style.border = "1px solid red";
      document.getElementById('hobby').style.color ="red";
      h_e.textContent = "Pflichtfeld";
      h_ee.textContent = "Pflichtfeld";
      h_eee.textContent = "Pflichtfeld";
      h_e.focus();
      return false;
    }else {

    }
  },
  validate1: function() {
    var r = document.getElementsByName('g');
    var r_e = document.getElementById('r_e')
    for(var i = 0,length = r.length; i< length;i++){
      if(r[i].checked){
        var gender = r[i].value;
        console.log(gender)
        break;
      }
    }
  },
  validate2: function() {
    var s = document.getElementsByName('s');
    for(var i = 0, length = s.length; i< length; i++){
      if(s[i].checked){
        var status = s[i].value;
        console.log(status);
        break;
      }else {
        //console.log("fehlerhaft")
        return false;
      }
    }
  },

  validate3: function() {
    var o = document.getElementById("options");
    var l = o.selectedIndex;
    var m = o.options[l].text;
    console.log(m);
  },
  validate4: function(){
    var nia = document.getElementById('why');
    var d_e = document.getElementById('d_e');


    if(nia.value.length < 5){
      nia.style.border = "1px solid red";
      d_e.style.color ="red";
      d_e.textContent = "Minimal 5 Buchstaben";
    }else if(nia.value.length > 120){
      nia.style.border = "1px solid red";
      d_e.style.color ="red";
      document.getElementById('button').style.cursor ="no-drop";
      document.getElementById("button").disabled = true;
      d_e.textContent = "Maximal 120 Buchstaben";
    }
    else {
      nia.style.border = "1px solid white";
      d_e.style.color ="white";
      document.getElementById('button').style.cursor ="pointer";
      document.getElementById("button").disabled = false;
      d_e.textContent = "";
    }
  }
}
