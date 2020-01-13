var allCharts = [
  "graphique-type1", 
  "graphique-type2", 
  "graphique-type3", 
  "graphique-type4", 
  "graphique-type5", 
  "graphique-type6",
  "graphique-type7",
  "graphique-type8"];
var selectedChart = null;

addAllEventListener();
iniPalette();
var allPalettes = window.config;
popoverDismiss();


function iniPalette() {
  var requestURL = './config.json';
  var request = new XMLHttpRequest();
  request.open('GET', requestURL);
  request.responseType = 'json';
  request.send();
  request.onload = function() {
    window.config = request.response;
  }
}

function popoverDismiss() {
  $('.popover-dismiss').popover({
    trigger: 'focus'
  })
}

function addFormPalette(txt) {
  var select = document.getElementById('palette');
  select.options[select.options.length] = new Option(txt, 'value');
}


function checkPertinence() {
// Fonction à faire en regardant les résultats de la requête SQL
/* if respaspertinent {
  displayInfoDiv();
}*/
}

function displayInfoDiv() {
  var x = document.getElementById("display");
  if (x.style.display === "none") {
    x.style.display = "block";
  } else {
    x.style.display = "none";
  }
}

function changeChartPalette() {
  var currentPalette = getFormPalette();
  if (selectedChart != null) {
    generateChosenChart(selectedChart)
  }
}

function getFormPalette() {
  return document.getElementById("palette").value;
}

function addAllEventListener() {
  addChartEventListener();
  addPaletteEventListener();
}

function addChartEventListener() {
  // Rajoute les écouteurs sur toutes les boites des graphiques
  for (var i = 0; i < allCharts.length; i++) {
    document.getElementById(allCharts[i]).addEventListener('click', function(e){processChart(e);});
  }
}

// Rajoute le choix pour les palettes
function addPaletteEventListener() {
  document.getElementById("palette").addEventListener('change', function(e){changeChartPalette();});
}

function generateChosenChart(char) {
  // Il faut intégrer lors de l'assemblage le swap du display info si la requête donne peu de résultats
  // checkPertinence();

  switch(char) {
    case allCharts[0]:
      makebar();
      break;
    case allCharts[1]:
      makeCirculaire();
      break;
    case allCharts[2]:
      makeplot2();
      break;
    case allCharts[3]:
      makeplot2();
      break;
    case allCharts[4]:
      makeplot2();
      break;
    case allCharts[5]:
      makeplot2();
      break;
    case allCharts[6]:
      makeplot2();
      break;
    case allCharts[7]:
      makeplot2();
      break;
    default:
      alert("Graphique non défini !");
  }
}

function getState(id) {
  return document.getElementById(id).value == "true";
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
  selectedChart = chart;
  document.getElementById(chart).classList.add("selected")
}

function unselectChart(chart) {
  document.getElementById(chart).classList.remove("selected")
}

function unselectAllCharts() {
  //pour tous les chart on applique deselectChart
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

function getLayoutColors() {
  return window.config.palette[getFormPalette()];
}

function getLayout() {
  var layout = getLayoutZoomState(true, true);
  var color = {colorway: getLayoutColors()};
  var layout = Object.assign(layout, color);
  return layout;
}

//***************************************
// Function de test pour l'interface
//***************************************

function makebar(donnes) {
  /* TODO: Enlever data et remplacer avec le data recup en Ajax
  */
  var donnes = [
    {"idOeuvre": 72},
    {"idOeuvre": 126},
    {"idOeuvre": 473},
    {"idOeuvre": 179},
    {"idOeuvre": 450},
    {"idOeuvre": 217},
    {"idOeuvre": 92},
    {"idOeuvre": 219},
    {"idOeuvre": 70},
    {"idOeuvre": 274},
    {"idOeuvre": 251},
    {"idOeuvre": 369},
    {"idOeuvre": 364},
    {"idOeuvre": 136},
    {"idOeuvre": 76},
    {"idOeuvre": 233},
    {"idOeuvre": 357},
    {"idOeuvre": 402},
    {"idOeuvre": 43},
    {"idOeuvre": 120}
  ]
  
  // Objet qu'on va envoyer en ajax
  // Deux champs: la requete et le type de données
  var obj = { 
    data: donnes,
    typeGraphe: "bar"
  }

  console.log(obj);
  // Requête ajax pour générer la bonne structure
  $.ajax({
    type: 'POST',
    url: './genGraph.php',
    data: obj,
    dataType: "json"
  })
  .done(function(data) {
    console.log(data);
    const xaxis = data.map(d => d.x)
    const yaxis = data.map(d => d.y)

    var donneesBar = [
        {
            x: xaxis,
            y: yaxis,
            type: 'bar',
        }
    ]

    var graphData = [donneesBar];
    console.log(graphData);

    var layoutA = {barmode: 'group'};
    var layoutB = getLayout();
    var layout = Object.assign(layoutA, layoutB);

    Plotly.newPlot('generation-graphique', graphData, layout, barInit());
  })
  .fail(function() {
    alert( "Erreur de génération du graphe." );
  });
}

// Ancien makeplot 
function makeplot_old() {
var trace1 = {
    x: ['giraffes', 'orangutans', 'monkeys'],
    y: [20, 14, 23],
    name: 'SF Zoo',
    type: 'bar'
  };

  var trace2 = {
    x: ['giraffes', 'orangutans', 'monkeys'],
    y: [12, 18, 29],
    name: 'LA Test',
    type: 'bar'
  };

  var data = [trace1, trace2];

  var layoutA = {barmode: 'group'};
  var layoutB = getLayout();
  var layout = Object.assign(layoutA, layoutB);

  Plotly.newPlot('generation-graphique', data, layout, barInit());

};

function makeplot2() {
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



/* ajout*/

function makeCirculaire() {
    var data = [{
      values: [19, 26, 55],
      labels: ['Residential', 'Non-Residential', 'Utility'],
      type: 'pie'
    }];

    var layout = getLayout();


    Plotly.newPlot('generation-graphique', data, layout, barInit());
};
