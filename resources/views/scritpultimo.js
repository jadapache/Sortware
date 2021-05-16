const brain = require("brain.js");


const rawData = [
  {"fecha":"01/2017","unidades":10953103,"precio":1},{"fecha":"02/2017","unidades":7159203,"precio":1},
  {"fecha":"03/2017","unidades":15051676,"precio":1},{"fecha":"04/2017","unidades":6669415,"precio":1},{"fecha":"05/2017","unidades":6674070,"precio":1},
  {"fecha":"06/2017","unidades":8191501,"precio":1},{"fecha":"07/2017","unidades":5059605,"precio":1},{"fecha":"08/2017","unidades":7191327,"precio":1},
  {"fecha":"09/2017","unidades":13464453,"precio":1},{"fecha":"10/2017","unidades":9216140,"precio":1},{"fecha":"11/2017","unidades":17398388,"precio":1},
  {"fecha":"12/2017","unidades":5352286,"precio":1},{"fecha":"01/2018","unidades":12576263,"precio":1},{"fecha":"02/2018","unidades":4487799,"precio":1},
  {"fecha":"03/2018","unidades":16505695,"precio":1},{"fecha":"04/2018","unidades":5408428,"precio":1},{"fecha":"05/2018","unidades":6297857,"precio":1},
  {"fecha":"06/2018","unidades":5083914,"precio":1},{"fecha":"07/2018","unidades":5906195,"precio":1},{"fecha":"08/2018","unidades":7168304,"precio":1},
  {"fecha":"09/2018","unidades":4936830,"precio":1},{"fecha":"10/2018","unidades":9853751,"precio":1},{"fecha":"11/2018","unidades":17451207,"precio":1},
  {"fecha":"12/2018","unidades":3847180,"precio":1},{"fecha":"01/2019","unidades":8602921,"precio":1},{"fecha":"02/2019","unidades":9478361,"precio":1},
  {"fecha":"03/2019","unidades":11088728,"precio":1},{"fecha":"04/2019","unidades":5444520,"precio":1},{"fecha":"05/2019","unidades":6615720,"precio":1},
   {"fecha":"06/2019","unidades":6646879,"precio":1}]
  //,{"fecha":"07/2019","unidades":5279018,"precio":1},{"fecha":"08/2019","unidades":5881155,"precio":1},
  // {"fecha":"09/2019","unidades":9624456,"precio":1}]
    // const rawData = [{"fecha":"03/2021","unidades":10,"precio":1},{"fecha":"04/2021","unidades":12,"precio":1}]

    function scaleDown(step){ //normalizando
      return {
        unidades: step.unidades / 17451207,
        precio: step.precio / 1

      };
    }

    // console.log(scaleDown(rawData[0]));

    function scaleUp(step){ //desnormalizar
      return{
        unidades: step.unidades * 17451207,
        precio: step.precio * 1

      };
    }

    // console.log(scaleUp(scaleDown(rawData[0])));

    const scaledData = rawData.map(scaleDown);

    const trainingData = [

      scaledData.slice(0, 30)
      
  

    ];
    console.log(trainingData);

		/* Red */
		const net = new brain.recurrent.LSTMTimeStep({
      inputSize: 2,
      hiddenLayers: [3, 5, 7, 2],
      outputSize: 2
    });

    // var data = <?php echo json_encode($ventas_por_meses2);?>;
    
	
		/* Entrenamiento */
    net.train(trainingData, { 
      learningRate: 0.005, 
      errorThresh: 0.02, 
    });

    	/* Predicción */
      var array=[];

// console.log(trainingData)
// var result = scaleUp(net.run(trainingData));
// array.push(result);



var result = net.forecast(trainingData[0],3).map(scaleUp);

// console.log(result.toString());

// delete result.precio;
console.log(result);

// // result=Math.round(result.unidades);
// result=Math.round(result.unidades * 100) / 100

//       console.log(result);
    // console.log(scaleUp(net.run(trainingData[0])));
    // console.log(trainingData[0]);


// const fs = require('fs');
// fs.writeFileSync('trained-net.js', `export default ${ net.toFunction().toString() };`);
      // get json data
// write to file system
// copy and paste! no need to import brain.js


     
    