var allCharts = ["graphique-type1", "graphique-type2", "graphique-type3", "graphique-type4", "graphique-type5", "graphique-type6"];
addAllEventListener();

function addAllEventListener() {
  for (var i = 0; i < allCharts.length; i++) {
    document.getElementById(allCharts[i]).addEventListener('click', function(e){processChart(e);});
  }
}

function generateChosenChart(char) {
  switch(char) {
    case allCharts[0]:
      makeplot();
      break;
    case allCharts[1]:
      makeplot2();
      break;
    default:
      alert("Graphique non défini !");
  }
}

function processChart(e) {
  var charType = e.currentTarget.id;
  updateSelectedChart(charType);
  generateChosenChart(charType);
  setTimeout(function() { // Dirige l'utilisateur vers le graphique générer, délai de 5ms pour laisser le temps à plotly de générer le graphique.
    jump('generation-graphique');
  }, 5);
}

function selectChart(chart) {
  //alert(chart);
  document.getElementById(chart).classList.add("selected")
}

function unselectChart(chart) {
  document.getElementById(chart).classList.remove("selected")
}

function unselectAllCharts() {
  //pour tous les chat on applique deselectChart
  for (i=0; i < allCharts.length; i++) {
    unselectChart(allCharts[i]);
  }
}

function updateSelectedChart(chart) {
  unselectAllCharts();
  selectChart(chart);
}

function jump(h){ //http://jsfiddle.net/DerekL/rEpPA/
    var top = document.getElementById(h).offsetTop;
    window.scrollTo(0, top);
}

function addButton(bar, button, index) {
  bar.splice(index, 0, button);
}

function createSaveAsButton(name, icon, format) {
  var newButton = {
    name: name,
    icon: icon,
    click: function(gd) {
      Plotly.downloadImage(gd, {format: format})
    }
  }
  return newButton;
}

function barInit() {
  var barButtons = ['toImage', 'select2d', 'lasso2d', 'toggleSpikelines', 'hoverClosestCartesian', 'hoverCompareCartesian']; // all of the native options that will be dispayed, original list here : https://github.com/plotly/plotly.js/blob/master/src/components/modebar/buttons.js

  var newSaveAsButtons = createSaveAsButton("Télécharger le graphique en fichier SVG", Plotly.Icons.camera, 'svg');
  addButton(barButtons, newSaveAsButtons, 1)

  var config = {
    locale: 'fr',
    responsive: true,
    displaylogo: false,
    modeBarButtons: [barButtons]
  }

  return config;
}


function getLayoutZoomState(stateX, stateY) { // state is a boolean, return an array that contain information about the state of fixed ranges of yaxis and xaxis
  return {
    yaxis: {
      fixedrange: stateY
    },
    xaxis : {
      fixedrange: stateX
    }
  };
}

function getLayout() {
  var layout = getLayoutZoomState(true, true);
  return layout;
}

// En dessous c'est pas moi qui est fait :)

function makeplot() {
  var trace1 = {
    x: ['giraffes', 'orangutans', 'monkeys'],
    y: [20, 14, 23],
    name: 'SF Zoo',
    type: 'bar'
  };

  var trace2 = {
    x: ['giraffes', 'orangutans', 'monkeys'],
    y: [12, 18, 29],
    name: 'LA Zoo',
    type: 'bar'
  };

  var data = [trace1, trace2];

  var layoutA = {barmode: 'group'};
  var layoutB = getLayout();
  var layout = Object.assign(layoutA, layoutB);

  Plotly.newPlot('generation-graphique', data, layout, barInit());
//Plotly.d3.csv("https://raw.githubusercontent.com/plotly/datasets/master/2014_apple_stock.csv", function(data){ processData(data) } );

};

function makeplot2() {
    //Plotly.d3.csv("https://raw.githubusercontent.com/plotly/datasets/master/2014_apple_stock.csv", function(data){ processData2(data) } );
    var data = [
      {
        x: ['giraffes', 'orangutans', 'monkeys'],
        y: [20, 14, 23],
        type: 'bar'
      }
    ];


    var layout = getLayout();

    Plotly.newPlot('generation-graphique', data, layout, barInit());
};

/*
function processData(allRows) {

    console.log(allRows);
    var x = [], y = [], standard_deviation = [];

    for (var i=0; i<allRows.length; i++) {
        row = allRows[i];
        x.push( row['AAPL_x'] );
        y.push( row['AAPL_y'] );
    }
    console.log( 'X',x, 'Y',y, 'SD',standard_deviation );
    makePlotly( x, y, standard_deviation );
}

function makePlotly( x, y, standard_deviation ){
    var plotDiv = document.getElementById("plot");
    var traces = [{
        x: x,
        y: y
    }];

    var layout = getLayout();

    Plotly.newPlot('generation-graphique', traces, layout,
        {title: 'Plotting CSV data from AJAX call'});
};

function processData2(allRows) {

    console.log(allRows);
    var x = [], y = [], standard_deviation = [];

    for (var i=0; i<allRows.length; i++) {
        row = allRows[i];
        x.push( row['AAPL_x'] );
        y.push( row['AAPL_y'] );
    }
    console.log( 'X',x, 'Y',y, 'SD',standard_deviation );
    makePlotly2( x, y, standard_deviation );
}

function makePlotly2( x, y, standard_deviation ){
    var plotDiv = document.getElementById("plot");
    var traces = [{
        x: x,
        y: y
    }];

    var layout = getLayout();


    Plotly.newPlot('generation-graphique', traces, layout,
        barInit());
};*/




//var newSaveAsButtons = createSaveAsButton("Télécharger le graphique en fichier SVG", Plotly.Icons.camera, 'svg');
//var BarButtonsNames = ['toImage', 'select2d', 'lasso2d', 'toggleSpikelines', 'hoverClosestCartesian', 'hoverCompareCartesian'];




//Plotly.newPlot('myDiv', data, layout, barInit());
