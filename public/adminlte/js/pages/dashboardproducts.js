/*
 * Author: Abdullah A Almsaeed
 * Date: 4 Jan 2014
 * Description:
 *      This is a demo file used only for the main dashboard (index.html)
 **/

/* global moment:false, Chart:false, Sparkline:false */

$(function () {
  'use strict'

  // Make the dashboard widgets sortable Using jquery UI
  $('.connectedSortable').sortable({
    placeholder: 'sort-highlight',
    connectWith: '.connectedSortable',
    handle: '.card-header, .nav-tabs',
    forcePlaceholderSize: true,
    zIndex: 999999
  })
  $('.connectedSortable .card-header').css('cursor', 'move')

 

  

  /* Chart.js Charts */
  // Sales chart
  var salesChartCanvas = document.getElementById('revenue-chart-canvas-products').getContext('2d')

  // $('#revenue-chart').get(0).getContext('2d');


  var salesChartData = {
    labels: labelVentas,
    datasets: [
      {
        label: '# unidades por mes',
        backgroundColor: 'rgba(60,141,188,0.9)',
        borderColor: 'rgba(60,141,188,0.8)',
        pointHitRadius: 30,
        //pointRadius: false,
        //pointColor: '#3b8bba',
        //pointStrokeColor: 'rgba(60,141,188,1)',
        //pointHighlightFill: '#fff',
        //pointHighlightStroke: 'rgba(60,141,188,1)',
        data: datosVentas
      },
      {
        label: '# unidades estimadas',
        // backgroundColor: 'rgba(60,141,188,0.9)',
        borderColor: 'rgba(255,87,51,0.8)',
        //pointRadius: false,
        //pointColor: '#3b8bba',
        //pointStrokeColor: 'rgba(60,141,188,1)',
        //pointHighlightFill: '#fff',
        //pointHighlightStroke: 'rgba(60,141,188,1)',
        data: prediccion
      },
    ]
  }
  // cont=0;
  // for (i=0; i<=salesChartData.data.datasets[0].data.length; i++){
  // cont=cont+1;
  // if (cont==salesChartData.data.datasets[0].data.length){
  // salesChartData.config.data.datasets[0].backgroundColor[4] = "lightgreen";
  // salesChartData.update();
  // }
  // }
  var salesChartOptions = {
    maintainAspectRatio: false,
    responsive: true,
    legend: {
      display: true
    },
    scales: {
      xAxes: [{
        gridLines: {
          display: true
        }
      }],
      yAxes: [{
        gridLines: {
          display: true
        }
      }]
    }
  }

  var salesChart2 = new Chart(salesChartCanvas, { // lgtm[js/unused-local-variable]
    type: 'line',
    data: salesChartData,
    options: salesChartOptions
  })

  var salesChartCanvasbar = document.getElementById('revenue-chart-canvas-products-bar').getContext('2d')

  var salesChartDatabar = {
    labels: labelVentasbar,
    datasets: [
      {
        label: '# unidades por mes',
        backgroundColor: [],
        // borderColor: 'rgba(60,141,188,0.8)',
        // pointHitRadius: 30,
        //pointRadius: false,
        //pointColor: '#3b8bba',
        //pointStrokeColor: 'rgba(60,141,188,1)',
        //pointHighlightFill: '#fff',
        //pointHighlightStroke: 'rgba(60,141,188,1)',
        data: datosVentasbar
      },
    ]
    
  }

  
  
 
  var salesChartOptionsbar = {
    maintainAspectRatio: false,
    responsive: true,
    legend: {
      display: true
    },
    scales: {
      xAxes: [{
        gridLines: {
          display: true
        }
      }],
      yAxes: [{
        gridLines: {
          display: true
        }
      }]
    }
  }

  var salesChart3 = new Chart(salesChartCanvasbar, { // lgtm[js/unused-local-variable]
    type: 'bar',
    data: salesChartDatabar,
    options: salesChartOptionsbar
  })
  var cont = 0;

  for (var i=0; i<conteoDatos; i++){
    cont++;
  salesChart3.data.datasets[0].backgroundColor[i] ='rgba(60,141,188,0.8)';
  salesChart3.update();
    if (cont==conteoDatos){
  salesChart3.data.datasets[0].backgroundColor[cont] ="#DD1414";
  salesChart3.update();
    }
  }


})
