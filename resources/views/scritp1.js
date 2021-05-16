const brain = require("brain.js");


const rawData = [
  {"fecha":"01/2017","unidades":5302,"precio":1},{"fecha":"02/2017","unidades":4432,"precio":1},
  {"fecha":"03/2017","unidades":5123,"precio":1},{"fecha":"04/2017","unidades":4974,"precio":1},{"fecha":"05/2017","unidades":5432,"precio":1},
  {"fecha":"06/2017","unidades":5657,"precio":1},{"fecha":"07/2017","unidades":7252,"precio":1},{"fecha":"08/2017","unidades":8216,"precio":1},
  {"fecha":"09/2017","unidades":6019,"precio":1},{"fecha":"10/2017","unidades":5612,"precio":1},{"fecha":"11/2017","unidades":5020,"precio":1},
  {"fecha":"12/2017","unidades":5330,"precio":1},{"fecha":"01/2018","unidades":5236,"precio":1},{"fecha":"02/2018","unidades":4575,"precio":1},
  {"fecha":"03/2018","unidades":4546,"precio":1},{"fecha":"04/2018","unidades":4836,"precio":1},{"fecha":"04/2018","unidades":5148,"precio":1},
  {"fecha":"05/2018","unidades":5741.78,"precio":1}]


  // var trainedNet = require('./trained-net');
  // trainedNet(rawData);

    function scaleDown(step){ //normalizando
      return {
        unidades: step.unidades / 8216,
        precio: step.precio / 1

      };
    }

    // console.log(scaleDown(rawData[0]));

    function scaleUp(step){ //desnormalizar
      return{
        unidades: step.unidades * 8216,
        precio: step.precio * 1

      };
    }

    // console.log(scaleUp(scaleDown(rawData[0])));

    const scaledData = rawData.map(scaleDown);

    const trainingData = [

      scaledData.slice(0, 18)

  

    ];
    console.log(trainingData);

		/* Red */
		// const net = new brain.recurrent.LSTMTimeStep({
    //   inputSize: 2,
    //   hiddenLayers: [3, 5, 7, 2],
    //   outputSize: 2
    // });

    // // var data = <?php echo json_encode($ventas_por_meses2);?>;
    
	
		/* Entrenamiento */
    // net.train(trainingData, { 
    //   learningRate: 0.005, 
    //   errorThresh: 0.02, 
    //   log: (stats) => console.log(stats)
    // });

    	/* Predicción */
      // var array=[];

// console.log(trainingData)
// for (var i=0; i<=trainingData.length-1; i++){
// var result = scaleUp(net.run(trainingData[i]));
// array.push(result);

// }

// var result = net.forecast(trainingData[0],3).map(scaleUp);
// array.push(result2);


// var result = net.forecast([trainingData[0],trainingData[1],trainingData[2]],3).map(scaleUp);

// console.log(result.toString());

// delete result.precio;
// console.log(result);
// console.log(result2);

// const json = net.toJSON();
// const fs = require('fs');
// fs.writeFileSync(__dirname + 'trained-net.json', JSON.stringify(json), 'utf8');

const fs = require('fs')
const json= JSON.parse(fs.readFileSync(__dirname + 'trained-net.json'))
		const net = new brain.recurrent.LSTMTimeStep()
      net.fromJSON(json)
console.log(scaleUp(net.run(trainingData[0])));
// // result=Math.round(result.unidades);
// result=Math.round(result.unidades * 100) / 100

//       console.log(result);
    // console.log(scaleUp(net.run(trainingData[0])));
    // console.log(trainingData[0]);




     
    