function countTimes(arr) {
    var counts = [];

    cell = {}
    cell['n'] = 1
    cell['obj'] = arr[0]
    counts.push(cell)

    for (var i = 1; i < arr.length; i++) {
        var el = arr[i]
        var cell = {}

        var found = false
        var j = 0
        // Recherche dans notre tableau de résultats: 
        // est-ce que la valeur est la?
        while (found === false && j < counts.length) {
            if (el === counts[j].obj) {
                found = true
                counts[j].n += 1
            }
            j++
        }
        if (found === false) {
            cell = {}
            cell['n'] = 1
            cell['obj'] = arr[i] 
            counts.push(cell)
        }
    }

    return counts
}

function compareCounts(a, b) {
    return a.n < b.n
}

export default function graph(data) {
    // On récupère uniquemenet les auteurs
    const e = data.map(a => a.auteurFiche)

    // Crée un tableau avec chaque auteur et son nombre d'occurences
    // tab[i].obj contient l'objet, ici le nom de l'auteur ("Christèle Couleau")
    // tab[i].n contient le nombre d'occurences
    const nomsEtNombreOccurences = countTimes(e).sort(compareCounts) 

    // On récupère de ce tableau individuellement le nombre d'occurences de chaque 
    // auteur de fiche
    const nomsAuteurs = nomsEtNombreOccurences.map(d => d.obj)
    const nombreOccurences = nomsEtNombreOccurences.map(d => d.n)

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
