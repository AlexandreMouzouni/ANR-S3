export default function graph(data) {
    console.log(data)
    const nomsAuteurs = data.map(d => d.nomAuteur)
    const nombreOccurences = data.map(d => d.nombreFiches)
    console.log(nomsAuteurs)
    console.log(nombreOccurences)

    const graphData = [
        {
            x: nomsAuteurs,
            y: nombreOccurences,
            mode: 'lines+markers',
            type: 'line',
            text: nomsAuteurs,
        }
    ]

    const layout = {
        title: 'Nombre de fiches par auteur de fiche',
        xaxis: {
            tickangle: -45,
        },
        yaxis: {
            title: 'Nombre de fiches',
            titlefont: {
              size: 16,
              color: 'rgb(107, 107, 107)'
            },
            tickfont: {
              size: 14,
              color: 'rgb(107, 107, 107)'
            }
          },
        barmode: 'group'
      };
    Plotly.newPlot('graph', graphData, layout);
}
