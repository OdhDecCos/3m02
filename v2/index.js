function tab(event, tab) {
    let tabs = document.getElementsByClassName("tab");
    for (i = 0; i < tabs.length; i++) {
        if(tabs[i].id != tab) {
            tabs[i].dataset.active = "inactive"
        } else {
            tabs[i].dataset.active = "active"
        }
    }

    let buttons = document.getElementsByClassName("tab-select");
    for (i = 0; i < buttons.length; i++) {
        buttons[i].dataset.active = "inactive"
    }

    event.currentTarget.dataset.active = "active";
    console.log("test");
}


google.charts.load('current', {
    packages: ['corechart']
});
google.charts.setOnLoadCallback(drawChart);

function drawChart() {
    var dataR1 = new google.visualization.DataTable();
    var dataR2 = new google.visualization.DataTable();
    var dataR3 = new google.visualization.DataTable();
    var dataR4 = new google.visualization.DataTable();
    dataR1.addColumn('number', 'DateTime');
    dataR1.addColumn('number', 'R1.pos_odom.X');/*
    dataR1.addColumn('number', 'R1.pos_odom.Y');
    dataR1.addColumn('number', 'R1.pos_odom.Theta');*/
    dataR2.addColumn('number', 'DateTime');
    dataR2.addColumn('number', 'R2.pos_odom.X');/*
    dataR2.addColumn('number', 'R2.pos_odom.Y');
    dataR2.addColumn('number', 'R2.pos_odom.Theta');*/
    dataR3.addColumn('number', 'DateTime');
    dataR3.addColumn('number', 'R1.pos_odom.X');/*
    dataR3.addColumn('number', 'R1.pos_odom.Y');
    dataR3.addColumn('number', 'R1.pos_odom.Theta');*/
    dataR4.addColumn('number', 'DateTime');
    dataR4.addColumn('number', 'R2.pos_odom.X');/*
    dataR4.addColumn('number', 'R2.pos_odom.Y');
    dataR4.addColumn('number', 'R2.pos_odom.Theta');*/
    let r1 = [1, 1, 3, 3, 2, 2, 4, 4, 1, 1];
    let r2 = [2, 5, 5, 3, 3, 2, 2, 4, 4, 1];
    let r3 = [2, 2, 6, 6, 1, 1, 1, 2, 2, 4];
    let r4 = [5, 5, 5, 3, 3, 4, 4, 4, 1, 1];
    /*for (i = 1; i <= my_2d.length; i++) {
        dataR1.addRow([i, parseInt(my_2d[my_2d.length - i][1]), parseInt(my_2d[my_2d.length - i][2]), parseInt(my_2d[my_2d.length - i][3])]);
        dataR2.addRow([i, parseInt(my_2d[my_2d.length - i][4]), parseInt(my_2d[my_2d.length - i][5]), parseInt(my_2d[my_2d.length - i][6])]);
        dataR3.addRow([i, parseInt(my_2d[my_2d.length - i][1]), parseInt(my_2d[my_2d.length - i][2]), parseInt(50 - my_2d[my_2d.length - i][3])]);
        dataR4.addRow([i, parseInt(my_2d[my_2d.length - i][4]), parseInt(my_2d[my_2d.length - i][5]), parseInt(50 - my_2d[my_2d.length - i][6])]);
    }*/

    for (i = 1; i <= my_2d.length; i++) {
      dataR1.addRow([i, r1[i]]);
      dataR2.addRow([i, r2[i]]);
      dataR3.addRow([i, r3[i]]);
      dataR4.addRow([i, r4[i]]);
    }

    dataR1.addRow()
        
    var options = {
        title: 'Moteur 1',
        width: 350,
        height: 250,
        legend: {
            position: 'bottom'
        }
    };

    var chartR1 = new google.visualization.LineChart(document.getElementById('chartR1'));
    chartR1.draw(dataR1, options);
    options.title = "Angle";
    var chartR2 = new google.visualization.LineChart(document.getElementById('chartR2'));
    chartR2.draw(dataR2, options);
    options.title = "Moteur 2";
    var chartR3 = new google.visualization.LineChart(document.getElementById('chartR3'));
    chartR3.draw(dataR3, options);
    options.title = "Vitesse";
    var chartR4 = new google.visualization.LineChart(document.getElementById('chartR4'));
    chartR4.draw(dataR4, options);
}


/*PAGE_R1*/
function fct1() {
  var R1_pos_odom_X = document.getElementById("R1_pos_odom_X_newvalue").value;
  if(R1_pos_odom_X_newvalue.value==""){
    R1_pos_odom_X.value =document.getElementById("R1_pos_odom_X");
  }else{
  document.getElementById("R1_pos_odom_X").innerHTML = R1_pos_odom_X;
}
}

function fct2() {
    var R1_pos_odom_Y = document.getElementById("R1_pos_odom_Y_newvalue").value;
    if(R1_pos_odom_Y_newvalue.value==""){
      R1_pos_odom_Y.value =document.getElementById("R1_pos_odom_Y");
    }else{
    document.getElementById("R1_pos_odom_Y").innerHTML = R1_pos_odom_Y;
    }
  }
  
  function fct3() {
    var R1_pos_odom_Theta = document.getElementById("R1_pos_odom_Theta_newvalue").value;
    if(R1_pos_odom_Theta_newvalue.value==""){
      R1_pos_odom_Theta.value =document.getElementById("R1_pos_odom_Theta");
    }else{
    document.getElementById("R1_pos_odom_Theta").innerHTML = R1_pos_odom_Theta;
    }
  }
  
  function fct4() {
    var R1_vitesse = document.getElementById("R1_vitesse_newvalue").value;
    if(R1_vitesse_newvalue.value==""){
      R1_vitesse.value =document.getElementById("R1_vitesse");
    }else{
    document.getElementById("R1_vitesse").innerHTML = R1_vitesse;
    }
  }
  
  function fct5() {
    var R1_GPIO1 = document.getElementById("R1_GPIO1_newvalue").value;
    if(R1_GPIO1_newvalue.value==""){
      R1_GPIO1.value =document.getElementById("R1_GPIO1");
    }else{
    document.getElementById("R1_GPIO1").innerHTML = R1_GPIO1;
    }
  }
  
  function fct6() {
    var R1_GPIO2 = document.getElementById("R1_GPIO2_newvalue").value;
    if(R1_GPIO2_newvalue.value==""){
      R1_GPIO2.value =document.getElementById("R1_GPIO2");
    }else{
    document.getElementById("R1_GPIO2").innerHTML = R1_GPIO2;
    }
  }
  
  function fct7() {
    var R1_GPIO3 = document.getElementById("R1_GPIO3_newvalue").value;
    if(R1_GPIO3_newvalue.value==""){
      R1_GPIO3.value =document.getElementById("R1_GPIO3");
    }else{
    document.getElementById("R1_GPIO3").innerHTML = R1_GPIO3;
    }
  }
  
  function fct8() {
    var R1_GPIO4 = document.getElementById("R1_GPIO4_newvalue").value;
    if(R1_GPIO4_newvalue.value==""){
      R1_GPIO4.value =document.getElementById("R1_GPIO4");
    }else{
    document.getElementById("R1_GPIO4").innerHTML = R1_GPIO4;
    }
  }
  
  function fct9() {
    var R1_GPIO5 = document.getElementById("R1_GPIO5_newvalue").value;
    if(R1_GPIO5_newvalue.value==""){
      R1_GPIO5.value =document.getElementById("R1_GPIO5");
    }else{
    document.getElementById("R1_GPIO5").innerHTML = R1_GPIO5;
    }
  }
  
  function fct10() {
    var R1_GPIO6 = document.getElementById("R1_GPIO6_newvalue").value;
    if(R1_GPIO6_newvalue.value==""){
      R1_GPIO6.value =document.getElementById("R1_GPIO6");
    }else{
    document.getElementById("R1_GPIO6").innerHTML = R1_GPIO6;
    }
  }
  
  function fct11() {
    var R1_GPIO7 = document.getElementById("R1_GPIO7_newvalue").value;
    if(R1_GPIO7_newvalue.value==""){
      R1_GPIO7.value =document.getElementById("R1_GPIO7");
    }else{
    document.getElementById("R1_GPIO7").innerHTML = R1_GPIO7;
    }
  }
  
  function fct12() {
    var R1_GPIO8 = document.getElementById("R1_GPIO8_newvalue").value;
    if(R1_GPIO8_newvalue.value==""){
      R1_GPIO8.value =document.getElementById("R1_GPIO8");
    }else{
    document.getElementById("R1_GPIO8").innerHTML = R1_GPIO8;
    }
  }
  
  function fct13() {
    var R1_moteur1_dir = document.getElementById("R1_moteur1_dir_newvalue").value;
    if(R1_moteur1_dir_newvalue.value==""){
      R1_moteur1_dir.value =document.getElementById("R1_moteur1_dir");
    }else{
    document.getElementById("R1_moteur1_dir").innerHTML = R1_moteur1_dir;
    }
  }
  
  function fct14() {
    var R1_moteur1_pwm = document.getElementById("R1_moteur1_pwm_newvalue").value;
    if(R1_moteur1_pwm_newvalue.value==""){
      R1_moteur1_pwm.value =document.getElementById("R1_moteur1_pwm");
    }else{
    document.getElementById("R1_moteur1_pwm").innerHTML = R1_moteur1_pwm;
    }
  }
  
  function fct15() {
    var R1_moteur2_dir = document.getElementById("R1_moteur2_dir_newvalue").value;
    if(R1_moteur2_dir_newvalue.value==""){
      R1_moteur2_dir.value =document.getElementById("R1_moteur2_dir");
    }else{
    document.getElementById("R1_moteur2_dir").innerHTML = R1_moteur2_dir;
    }
  }
  
  function fct16() {
    var R1_moteur2_pwm = document.getElementById("R1_moteur2_pwm_newvalue").value;
    if(R1_moteur2_pwm_newvalue.value==""){
      R1_moteur2_pwm.value =document.getElementById("R1_moteur2_pwm");
    }else{
    document.getElementById("R1_moteur2_pwm").innerHTML = R1_moteur2_pwm;
    }
  }
  
  function fct17() {
    var R1_pos_ax12_1 = document.getElementById("R1_pos_ax12_1_newvalue").value;
    if(R1_pos_ax12_1_newvalue.value==""){
      R1_pos_ax12_1.value =document.getElementById("R1_pos_ax12_1");
    }else{
    document.getElementById("R1_pos_ax12_1").innerHTML = R1_pos_ax12_1;
    }
    var R1_pos_ax12_2 = document.getElementById("R1_pos_ax12_2_newvalue").value;
    if(R1_pos_ax12_2_newvalue.value==""){
      R1_pos_ax12_2.value =document.getElementById("R1_pos_ax12_2");
    }else{
    document.getElementById("R1_pos_ax12_2").innerHTML = R1_pos_ax12_2;
    }
    var R1_pos_ax12_3 = document.getElementById("R1_pos_ax12_3_newvalue").value;
    if(R1_pos_ax12_3_newvalue.value==""){
      R1_pos_ax12_3.value =document.getElementById("R1_pos_ax12_3");
    }else{
    document.getElementById("R1_pos_ax12_3").innerHTML = R1_pos_ax12_3;
    }
    var R1_pos_ax12_4 = document.getElementById("R1_pos_ax12_4_newvalue").value;
    if(R1_pos_ax12_4_newvalue.value==""){
      R1_pos_ax12_4.value =document.getElementById("R1_pos_ax12_4");
    }else{
    document.getElementById("R1_pos_ax12_4").innerHTML = R1_pos_ax12_4;
    }
    var R1_pos_ax12_5 = document.getElementById("R1_pos_ax12_5_newvalue").value;
    if(R1_pos_ax12_5_newvalue.value==""){
      R1_pos_ax12_5.value =document.getElementById("R1_pos_ax12_5");
    }else{
    document.getElementById("R1_pos_ax12_5").innerHTML = R1_pos_ax12_5;
    }
    var R1_pos_ax12_6 = document.getElementById("R1_pos_ax12_6_newvalue").value;
    if(R1_pos_ax12_6_newvalue.value==""){
      R1_pos_ax12_6.value =document.getElementById("R1_pos_ax12_6");
    }else{
    document.getElementById("R1_pos_ax12_6").innerHTML = R1_pos_ax12_6;
    }
    var R1_pos_ax12_7 = document.getElementById("R1_pos_ax12_7_newvalue").value;
    if(R1_pos_ax12_7_newvalue.value==""){
      R1_pos_ax12_7.value =document.getElementById("R1_pos_ax12_7");
    }else{
    document.getElementById("R1_pos_ax12_7").innerHTML = R1_pos_ax12_7;
    }
    var R1_pos_ax12_8 = document.getElementById("R1_pos_ax12_8_newvalue").value;
    if(R1_pos_ax12_8_newvalue.value==""){
      R1_pos_ax12_8.value =document.getElementById("R1_pos_ax12_8");
    }else{
    document.getElementById("R1_pos_ax12_8").innerHTML = R1_pos_ax12_8;
    }
    var R1_pos_ax12_9 = document.getElementById("R1_pos_ax12_9_newvalue").value;
    if(R1_pos_ax12_9_newvalue.value==""){
      R1_pos_ax12_9.value =document.getElementById("R1_pos_ax12_9");
    }else{
    document.getElementById("R1_pos_ax12_9").innerHTML = R1_pos_ax12_9;
    }
    var R1_pos_ax12_10 = document.getElementById("R1_pos_ax12_10_newvalue").value;
    if(R1_pos_ax12_10_newvalue.value==""){
      R1_pos_ax12_10.value =document.getElementById("R1_pos_ax12_10");
    }else{
    document.getElementById("R1_pos_ax12_10").innerHTML = R1_pos_ax12_10;
    }
    var R1_pos_ax12_11 = document.getElementById("R1_pos_ax12_11_newvalue").value;
    if(R1_pos_ax12_11_newvalue.value==""){
      R1_pos_ax12_11.value =document.getElementById("R1_pos_ax12_11");
    }else{
    document.getElementById("R1_pos_ax12_11").innerHTML = R1_pos_ax12_11;
    }
    var R1_pos_ax12_12 = document.getElementById("R1_pos_ax12_12_newvalue").value;
    if(R1_pos_ax12_12_newvalue.value==""){
      R1_pos_ax12_12.value =document.getElementById("R1_pos_ax12_12");
    }else{
    document.getElementById("R1_pos_ax12_12").innerHTML = R1_pos_ax12_12;
    }
  }
  
  /*PAGE_R2*/
  function fct18() {
    var R2_pos_odom_X = document.getElementById("R2_pos_odom_X_newvalue").value;
    if(R2_pos_odom_X_newvalue.value==""){
      R2_pos_odom_X.value =document.getElementById("R2_pos_odom_X");
    }else{
    document.getElementById("R2_pos_odom_X").innerHTML = R2_pos_odom_X;
    }
  }
  
  function fct19() {
    var R2_pos_odom_Y = document.getElementById("R2_pos_odom_Y_newvalue").value;
    if(R2_pos_odom_Y_newvalue.value==""){
      R2_pos_odom_Y.value =document.getElementById("R2_pos_odom_Y");
    }else{
    document.getElementById("R2_pos_odom_Y").innerHTML = R2_pos_odom_Y;
    }
  }
  
  function fct20() {
    var R2_pos_odom_Theta = document.getElementById("R2_pos_odom_Theta_newvalue").value;
    if(R2_pos_odom_Theta_newvalue.value==""){
      R2_pos_odom_Theta.value =document.getElementById("R2_pos_odom_Theta");
    }else{
    document.getElementById("R2_pos_odom_Theta").innerHTML = R2_pos_odom_Theta;
    }
  }
  
  function fct21() {
    var R2_vitesse = document.getElementById("R2_vitesse_newvalue").value;
    if(R2_vitesse_newvalue.value==""){
      R2_vitesse.value =document.getElementById("R2_vitesse");
    }else{
    document.getElementById("R2_vitesse").innerHTML = R2_vitesse;
    }
  }
  
  function fct22() {
    var R2_GPIO1 = document.getElementById("R2_GPIO1_newvalue").value;
    if(R2_GPIO1_newvalue.value==""){
      R2_GPIO1.value =document.getElementById("R2_GPIO1");
    }else{
    document.getElementById("R2_GPIO1").innerHTML = R2_GPIO1;
    }
  }
  
  function fct23() {
    var R2_GPIO2 = document.getElementById("R2_GPIO2_newvalue").value;
    if(R2_GPIO2_newvalue.value==""){
      R2_GPIO2.value =document.getElementById("R2_GPIO2");
    }else{
    document.getElementById("R2_GPIO2").innerHTML = R2_GPIO2;
    }
  }
  
  function fct24() {
    var R2_GPIO3 = document.getElementById("R2_GPIO3_newvalue").value;
    if(R2_GPIO3_newvalue.value==""){
      R2_GPIO3.value =document.getElementById("R2_GPIO3");
    }else{
    document.getElementById("R2_GPIO3").innerHTML = R2_GPIO3;
    }
  }
  
  function fct25() {
    var R2_GPIO4 = document.getElementById("R2_GPIO4_newvalue").value;
    if(R2_GPIO4_newvalue.value==""){
      R2_GPIO4.value =document.getElementById("R2_GPIO4");
    }else{
    document.getElementById("R2_GPIO4").innerHTML = R2_GPIO4;
    }
  }
  
  function fct26() {
    var R2_GPIO5 = document.getElementById("R2_GPIO5_newvalue").value;
    if(R2_GPIO5_newvalue.value==""){
      R2_GPIO5.value =document.getElementById("R2_GPIO5");
    }else{
    document.getElementById("R2_GPIO5").innerHTML = R2_GPIO5;
    }
  }
  
  function fct27() {
    var R2_GPIO6 = document.getElementById("R2_GPIO6_newvalue").value;
    if(R2_GPIO6_newvalue.value==""){
      R2_GPIO6.value =document.getElementById("R2_GPIO6");
    }else{
    document.getElementById("R2_GPIO6").innerHTML = R2_GPIO6;
    }
  }
  
  function fct28() {
    var R2_GPIO7 = document.getElementById("R2_GPIO7_newvalue").value;
    if(R2_GPIO7_newvalue.value==""){
      R2_GPIO7.value =document.getElementById("R2_GPIO7");
    }else{
    document.getElementById("R2_GPIO7").innerHTML = R2_GPIO7;
    }
  }
  
  function fct29() {
    var R2_GPIO8 = document.getElementById("R2_GPIO8_newvalue").value;
    if(R2_GPIO8_newvalue.value==""){
      R2_GPIO8.value =document.getElementById("R2_GPIO8");
    }else{
    document.getElementById("R2_GPIO8").innerHTML = R2_GPIO8;
    }
  }
  
  function fct30() {
    var R2_moteur1_dir = document.getElementById("R2_moteur1_dir_newvalue").value;
    if(R2_moteur1_dir_newvalue.value==""){
      R2_moteur1_dir.value =document.getElementById("R2_moteur1_dir");
    }else{
    document.getElementById("R2_moteur1_dir").innerHTML = R2_moteur1_dir;
    }
  }
  
  function fct31() {
    var R2_moteur1_pwm = document.getElementById("R2_moteur1_pwm_newvalue").value;
    if(R2_moteur1_pwm_newvalue.value==""){
      R2_moteur1_pwm.value =document.getElementById("R2_moteur1_pwm");
    }else{
    document.getElementById("R2_moteur1_pwm").innerHTML = R2_moteur1_pwm;
    }
  }
  
  function fct32() {
    var R2_moteur2_dir = document.getElementById("R2_moteur2_dir_newvalue").value;
    if(R2_moteur2_dir_newvalue.value==""){
      R2_moteur2_dir.value =document.getElementById("R2_moteur2_dir");
    }else{
    document.getElementById("R2_moteur2_dir").innerHTML = R2_moteur2_dir;
    }
  }
  
  function fct33() {
    var R2_moteur2_pwm = document.getElementById("R2_moteur2_pwm_newvalue").value;
    if(R2_moteur2_pwm_newvalue.value==""){
      R2_moteur2_pwm.value =document.getElementById("R2_moteur2_pwm");
    }else{
    document.getElementById("R2_moteur2_pwm").innerHTML = R2_moteur2_pwm;
    }
  }
  
  function fct34() {
    var R2_pos_ax12_1 = document.getElementById("R2_pos_ax12_1_newvalue").value;
    if(R2_pos_ax12_1_newvalue.value==""){
      R2_pos_ax12_1.value =document.getElementById("R2_pos_ax12_1");
    }else{
    document.getElementById("R2_pos_ax12_1").innerHTML = R2_pos_ax12_1;
    }
    var R2_pos_ax12_2 = document.getElementById("R2_pos_ax12_2_newvalue").value;
    if(R2_pos_ax12_2_newvalue.value==""){
      R2_pos_ax12_2.value =document.getElementById("R2_pos_ax12_2");
    }else{
    document.getElementById("R2_pos_ax12_2").innerHTML = R2_pos_ax12_2;
    }
    var R2_pos_ax12_3 = document.getElementById("R2_pos_ax12_3_newvalue").value;
    if(R2_pos_ax12_3_newvalue.value==""){
      R2_pos_ax12_3.value =document.getElementById("R2_pos_ax12_3");
    }else{
    document.getElementById("R2_pos_ax12_3").innerHTML = R2_pos_ax12_3;
    }
    var R2_pos_ax12_4 = document.getElementById("R2_pos_ax12_4_newvalue").value;
    if(R2_pos_ax12_4_newvalue.value==""){
      R2_pos_ax12_4.value =document.getElementById("R2_pos_ax12_4");
    }else{
    document.getElementById("R2_pos_ax12_4").innerHTML = R2_pos_ax12_4;
    }
    var R2_pos_ax12_5 = document.getElementById("R2_pos_ax12_5_newvalue").value;
    if(R2_pos_ax12_5_newvalue.value==""){
      R2_pos_ax12_5.value =document.getElementById("R2_pos_ax12_5");
    }else{
    document.getElementById("R2_pos_ax12_5").innerHTML = R2_pos_ax12_5;
    }
    var R2_pos_ax12_6 = document.getElementById("R2_pos_ax12_6_newvalue").value;
    if(R2_pos_ax12_6_newvalue.value==""){
      R2_pos_ax12_6.value =document.getElementById("R2_pos_ax12_6");
    }else{
    document.getElementById("R2_pos_ax12_6").innerHTML = R2_pos_ax12_6;
    }
    var R2_pos_ax12_7 = document.getElementById("R2_pos_ax12_7_newvalue").value;
    if(R2_pos_ax12_7_newvalue.value==""){
      R2_pos_ax12_7.value =document.getElementById("R2_pos_ax12_7");
    }else{
    document.getElementById("R2_pos_ax12_7").innerHTML = R2_pos_ax12_7;
    }
    var R2_pos_ax12_8 = document.getElementById("R2_pos_ax12_8_newvalue").value;
    if(R2_pos_ax12_8_newvalue.value==""){
      R2_pos_ax12_8.value =document.getElementById("R2_pos_ax12_8");
    }else{
    document.getElementById("R2_pos_ax12_8").innerHTML = R2_pos_ax12_8;
    }
    var R2_pos_ax12_9 = document.getElementById("R2_pos_ax12_9_newvalue").value;
    if(R2_pos_ax12_9_newvalue.value==""){
      R2_pos_ax12_9.value =document.getElementById("R2_pos_ax12_9");
    }else{
    document.getElementById("R2_pos_ax12_9").innerHTML = R2_pos_ax12_9;
    }
    var R2_pos_ax12_10 = document.getElementById("R2_pos_ax12_10_newvalue").value;
    if(R2_pos_ax12_10_newvalue.value==""){
      R2_pos_ax12_10.value =document.getElementById("R2_pos_ax12_10");
    }else{
    document.getElementById("R2_pos_ax12_10").innerHTML = R2_pos_ax12_10;
    }
    var R2_pos_ax12_11 = document.getElementById("R2_pos_ax12_11_newvalue").value;
    if(R2_pos_ax12_11_newvalue.value==""){
      R2_pos_ax12_11.value =document.getElementById("R2_pos_ax12_11");
    }else{
    document.getElementById("R2_pos_ax12_11").innerHTML = R2_pos_ax12_11;
    }
    var R2_pos_ax12_12 = document.getElementById("R2_pos_ax12_12_newvalue").value;
    if(R2_pos_ax12_12_newvalue.value==""){
      R2_pos_ax12_12.value =document.getElementById("R2_pos_ax12_12");
    }else{
    document.getElementById("R2_pos_ax12_12").innerHTML = R2_pos_ax12_12;
    }
  }
  
  /*Page ASSERV R1*/