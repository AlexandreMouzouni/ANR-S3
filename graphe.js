export default function graphe(data) {
console.log(data);

const margin = 60;
const width = 1000 - 2 * margin;
const height = 600 - 2 * margin;

const svg = d3.select('#graph');

const chart = svg.append('g')
    .attr('transform', `translate(${margin}, ${margin})`);

var nombres = data.map((d) => d.nombre)
// On obtient chaque nombre du tableau,
// et on le stocke dans un autre tableau [123, 124, 125..]
var nombreMax = Math.max(...nombres)
// Obtenir le maximal pour faire l'axe Y de notre tableau

const yScale = d3.scaleLinear()
    .range([height, 0])
    .domain([0, nombreMax]);

chart.append('g')
    .call(d3.axisLeft(yScale));

const xScale = d3.scaleBand()
    .range([0, width])
    .domain(data.map((d) => d.annee))
    .padding(0);

console.log(xScale(1854))
console.log(xScale(1864))
console.log(xScale(1874))
console.log(xScale(1884))

var sequentialScale = d3.scaleSequential()
    .domain([0, 10])
    .interpolator(d3.interpolateRainbow);

chart.append('g')
    .attr('transform', `translate(0, ${height})`)
    .call(d3.axisBottom(xScale));

chart.selectAll()
    .data(data)
    .enter()
    .append('rect')
    .attr('x', (d) => xScale(d.annee))
    .attr('y', (d) => yScale(d.nombre))
    .attr('height', (d) => height - yScale(d.nombre))
    .attr('width', xScale.bandwidth())
    .style("stroke", "red")
    .style('fill', (d,i) => sequentialScale(i))

console.log(data.length)

chart.selectAll()
   .data(data)
   .enter()
   .append('text')
   .text(function(d) {
        return d.nombre;
   })
   .attr("x", function(d, i) {
        return xScale(d.annee) + (xScale.bandwidth() / 2);  // +5
   })
   .attr("y", function(d) {
        return yScale(d.nombre);              // +15
   })
   .attr("font-family", "sans-serif")
   .attr("font-size", "11px")
   .attr("fill", (d,i) => sequentialScale(i))
   .attr("text-anchor", "middle");
}