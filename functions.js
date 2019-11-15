function get_value(id){
  var select = document.getElementById(id);
  var value = select.value;
  return value;
}

function get_data(){
document.getElementById("mark").innerHTML = get_value("selectmark");
document.getElementById("filler").innerHTML = get_value("selectfiller");
document.getElementById("volume").innerHTML = get_value("addvolume") + " м³";
}

function get_mark_price(mark_id){
var select = get_value(mark_id);
switch (select){
  case 'М100 В7,5':
    return 2400;
  break;
  case 'М150 В12,5':
    return 2570;
  break;
  case 'М200 В15':
    return 2590;
  break;
  case 'М250 В20':
    return 2700;
  break;
  case 'М300 В22,5':
    return 2930;
  break;
  case 'М350 В25':
    return 3140;
  break;
  case 'М400 В30':
    return 3100;
  break;
  case 'М450 В35':
    return 3150;
  break;
  case 'М500 В40':
    return 3250;
  break;
}
}

function get_filler_price(filler_id){
var price = 0;
var select = get_value(filler_id);
switch (select){
  case 'Гравий':
    return 50;
  break;
  case 'Гранит':
    return 450;
  break;
}
}

function calculate(){
  var cost = (get_mark_price("selectmark") + get_filler_price("selectfiller")) * get_value("addvolume");
  return cost;
}

function view_cost(){
  if(is_noerror("selectmark") && is_noerror("selectfiller") && is_noerror("addvolume")){
  get_cost();
  get_data();
  view('page4');
}
}

function get_cost(){
document.getElementById("cost").innerHTML = calculate() + " рублей";
}

function valid_mail(email) {
   var reg = /^([A-Za-z0-9_\-\.])+\@([A-Za-z0-9_\-\.])+\.([A-Za-z]{2,4})$/;
   var address = get_value(email);
   if(reg.test(address)) {
      return false;
   }
   else{
    return true;
   }
}

function clear_error(){
  document.getElementById("error").innerHTML = "";
}
function is_noerror(data_id){
  switch (data_id){
  case 'addmail':
      if(valid_mail(data_id)){
        document.getElementById("error").innerHTML = "Введите e-mail";
        return false;
  }
  else {
    document.getElementById("error").innerHTML = "";
    return true;
  }
  break;
  case 'selectmark':
    if(get_value(data_id) == 'Марка бетона'){
      document.getElementById("error").innerHTML = "Выберите марку бетона";
      return false;
  }
  else {
      document.getElementById("error").innerHTML = "";
      return true;
    }
    break;
  case 'selectfiller':
    if(get_value(data_id) == 'Наполнитель'){
      document.getElementById("error").innerHTML = "Выберите наполнитель";
      return false;
    }
  else {
      clear_error();
      return true;
    }
     break;

    case 'addvolume':
      if(get_value(data_id) == 'Объем' || isNaN(get_value(data_id)) || get_value(data_id) == 0  || get_value(data_id) == ''){
        document.getElementById("error").innerHTML = "Введите объем в м³";
        return false;
  }
  else {
    document.getElementById("error").innerHTML = "";
    return true;
  }
  break;
  }
}

function clickbutton(idDiv, data_id){
  if(is_noerror(data_id)){
    view(idDiv);
}
}

function setCurrentLink(link) {
 var dots = document.getElementsByTagName("a");
        for (var i = 0; i < dots.length; i++) {
            if(dots[i].id == link){
            dots[i].classList.add("current");
            continue;
          }
            dots[i].classList.remove("current");
        }
    }

function view(idDiv){
clear_error();
setCurrentLink(idDiv);
 var divs = document.getElementsByClassName("calc");
        for(i = 0; i < divs.length; i++){
          if(divs[i].id == idDiv){
            divs[i].style.display = 'block';
            continue;
          }
          divs[i].style.display = 'none';
        }
}