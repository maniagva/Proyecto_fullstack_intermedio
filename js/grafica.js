var data = [{
    values: [16, 15, 12, 6, 5, 4, 42],
    labels: ['Cocoa', 'Chocolate de mesa', 'Vino de cafe', 'Cafe premium', 'Chucula', 'Crema de cafe', 'Grageas' ],
    name: 'Ventas Totales',
    hoverinfo: 'label+percent+name',
    hole: .4,
    type: 'pie'
  }];
  
  var layout = {
    title: 'Ventas Globales',
    height: 400,
    width: 600,
    showlegend: false,
    grid: {rows: 1, columns: 1}
  };
  
  Plotly.newPlot('grafica', data, layout);