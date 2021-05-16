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
  var salesChartCanvas = document.getElementById('revenue-chart-canvas').getContext('2d')

  // $('#revenue-chart').get(0).getContext('2d');

  var salesChartData = {
    
    labels: labelDemanda,
    datasets: [
      {
        label: 'N° unidades por día',
        backgroundColor: 'rgba(60,141,188,0.5)',
        // borderColor: 'rgba(60,141,188,0.8)',
        // pointRadius: false,
        // pointColor: '#3b8bba',
        // pointStrokeColor: 'rgba(60,141,188,1)',
        // pointHighlightFill: '#fff',
        // pointHighlightStroke: 'rgba(60,141,188,1)',
        data: datosDemanda
      },

    ]
  }

  var salesChartCanvas2 = document.getElementById('revenue-chart-canvas2').getContext('2d')

  var salesChartData2 = {
    
    labels: labelDemanda2,
    datasets: [
      {
        label: 'N° unidades por día',
        backgroundColor: 'rgba(60,141,188,0.5)',
        // borderColor: 'rgba(60,141,188,0.8)',
        // pointRadius: false,
        // pointColor: '#3b8bba',
        // pointStrokeColor: 'rgba(60,141,188,1)',
        // pointHighlightFill: '#fff',
        // pointHighlightStroke: 'rgba(60,141,188,1)',
        data: datosDemanda3
      },

    ]
  }
 
  var salesChartCanvas3 = document.getElementById('revenue-chart-canvas3').getContext('2d')

  var salesChartData3 = {
    
    labels: labelDemanda3,
    datasets: [
      {
        label: 'N° unidades por día',
        backgroundColor: 'rgba(60,141,188,0.5)',
        // borderColor: 'rgba(60,141,188,0.8)',
        // pointRadius: false,
        // pointColor: '#3b8bba',
        // pointStrokeColor: 'rgba(60,141,188,1)',
        // pointHighlightFill: '#fff',
        // pointHighlightStroke: 'rgba(60,141,188,1)',
        data: datosDemanda4
      },

    ]
  }


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
  

  // This will get the first returned node in the jQuery collection.
  // eslint-disable-next-line no-unused-vars
  var salesChart = new Chart(salesChartCanvas, { // lgtm[js/unused-local-variable]
    type: 'line',
    data: salesChartData,
    options: salesChartOptions
  })

  var salesChart2 = new Chart(salesChartCanvas2, { // lgtm[js/unused-local-variable]
    type: 'line',
    data: salesChartData2,
    options: salesChartOptions
  })

  var salesChart3 = new Chart(salesChartCanvas3, { // lgtm[js/unused-local-variable]
    type: 'line',
    data: salesChartData3,
    options: salesChartOptions
  })
  


  // Donut Chart
  var pieChartCanvas = $('#sales-chart-canvas').get(0).getContext('2d')
  var pieData = {
    labels: [
      'Instore Sales',
      'Download Sales',
      'Mail-Order Sales'
    ],
    datasets: [
      {
        data: [30, 12, 20],
        backgroundColor: ['#f56954', '#00a65a', '#f39c12']
      }
    ]
  }
  var pieOptions = {
    legend: {
      display: false
    },
    maintainAspectRatio: false,
    responsive: true
  }
  // Create pie or douhnut chart
  // You can switch between pie and douhnut using the method below.
  // eslint-disable-next-line no-unused-vars
  var pieChart = new Chart(pieChartCanvas, { // lgtm[js/unused-local-variable]
    type: 'doughnut',
    data: pieData,
    options: pieOptions
  })

  // Sales graph chart
  var salesGraphChartCanvas = $('#line-chart').get(0).getContext('2d')
  // $('#revenue-chart').get(0).getContext('2d');

  var salesGraphChartData = {
    labels: ['2011 Q1', '2011 Q2', '2011 Q3', '2011 Q4', '2012 Q1', '2012 Q2', '2012 Q3', '2012 Q4', '2013 Q1', '2013 Q2'],
    datasets: [
      {
        label: 'Digital Goods',
        fill: false,
        borderWidth: 2,
        lineTension: 0,
        spanGaps: true,
        borderColor: '#efefef',
        pointRadius: 3,
        pointHoverRadius: 7,
        pointColor: '#efefef',
        pointBackgroundColor: '#efefef',
        data: [2666, 2778, 4912, 3767, 6810, 5670, 4820, 15073, 10687, 8432]
      }
    ]
  }

  var salesGraphChartOptions = {
    maintainAspectRatio: false,
    responsive: true,
    legend: {
      display: false
    },
    scales: {
      xAxes: [{
        ticks: {
          fontColor: '#efefef'
        },
        gridLines: {
          display: false,
          color: '#efefef',
          drawBorder: false
        }
      }],
      yAxes: [{
        ticks: {
          stepSize: 5000,
          fontColor: '#efefef'
        },
        gridLines: {
          display: true,
          color: '#efefef',
          drawBorder: false
        }
      }]
    }
  }

  // This will get the first returned node in the jQuery collection.
  // eslint-disable-next-line no-unused-vars
  var salesGraphChart = new Chart(salesGraphChartCanvas, { // lgtm[js/unused-local-variable]
    type: 'line',
    data: salesGraphChartData,
    options: salesGraphChartOptions
  })
})
