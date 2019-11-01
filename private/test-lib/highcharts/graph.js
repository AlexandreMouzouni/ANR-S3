// La variable data est dans le contexte global.
// C'est un tableau d'objets data, chacun possédant un attribut .annee et .nombre.
Highcharts.chart('container', {
    chart: {
        type: 'column'
    },
    title: {
        text: 'test histogramme'
    },
    subtitle: {
        text: 'test'
    },
    xAxis: [{
        categories: d => d.annee[0], // Pour chaque objet data, appliquer une fonction qui récupère l'année
        /*
        Equivalent a:
        data.map(
            function(data) {
                return d.annee;
            }
        )
         */
        title: { text: 'Date' },
        alignTicks: false
    }],
    yAxis: [{
        min : 0,
        title: { text: 'Nombre de livres ' }
    }],
    tooltip: {
        headerFormat: '<span style="font-size:10px">{point.key}</span><table>',
        pointFormat: '<tr><td style="color:{series.color};padding:0">Nombre de livres </td>' +
            '<td style="padding:0"><b>{point.y:.1f}</b></td></tr>',
        footerFormat: '</table>',
        shared: true,
        useHTML: true
    },

    plotOptions: {
        column: {
            pointPadding:0.1,
            borderWidth: 0
        }
    },

    series: [{
        name: 'Nombre de livres ',
        data: data.map(d => d.nombre) // Pour chaque objet data, appliquer une fonction qui récupère la valeur
    }]

});