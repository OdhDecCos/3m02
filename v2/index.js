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

function fonction1() {
  var R1_pos_odom_X = document.getElementById("R1_pos_odom_X_newvalue").value;
  console.log(R1_pos_odom_X);
  document.getElementById("R1_pos_odom_X").innerHTML = R1_pos_odom_X;
}

google.charts.load('current', {
    packages: ['corechart']
});
google.charts.setOnLoadCallback(drawChart);

function drawChart() {
    var dataR1 = new google.visualization.DataTable();
    var dataR2 = new google.visualization.DataTable();
    dataR1.addColumn('number', 'DateTime');
    dataR1.addColumn('number', 'R1.pos_odom.X');
    dataR1.addColumn('number', 'R1.pos_odom.Y');
    dataR1.addColumn('number', 'R1.pos_odom.Theta');
    dataR2.addColumn('number', 'DateTime');
    dataR2.addColumn('number', 'R2.pos_odom.X');
    dataR2.addColumn('number', 'R2.pos_odom.Y');
    dataR2.addColumn('number', 'R2.pos_odom.Theta');
    for (i = 1; i <= my_2d.length; i++) {
        dataR1.addRow([i, parseInt(my_2d[my_2d.length - i][1]), parseInt(my_2d[my_2d.length - i][2]), parseInt(my_2d[my_2d.length - i][3])]);
        dataR2.addRow([i, parseInt(my_2d[my_2d.length - i][4]), parseInt(my_2d[my_2d.length - i][5]), parseInt(my_2d[my_2d.length - i][6])]);
    }
        
    var options = {
        title: 'Positions',
        curveType: 'function',
        width: 300,
        height: 175,
        legend: {
            position: 'bottom'
        }
    };

    var chartR1 = new google.visualization.LineChart(document.getElementById('chartR1'));
    chartR1.draw(dataR1, options);
    var chartR2 = new google.visualization.LineChart(document.getElementById('chartR2'));
    chartR2.draw(dataR2, options);
    var chartR3 = new google.visualization.LineChart(document.getElementById('chartR3'));
    chartR3.draw(dataR1, options);
    var chartR4 = new google.visualization.LineChart(document.getElementById('chartR4'));
    chartR4.draw(dataR2, options);
}
