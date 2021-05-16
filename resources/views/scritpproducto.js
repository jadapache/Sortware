const brain = require("brain.js");


const rawData = [
  {"fecha":"01/2017","unidades":2660,"precio":1},{"fecha":"02/2017","unidades":1459,"precio":1},
  {"fecha":"03/2017","unidades":1831,"precio":1},{"fecha":"04/2017","unidades":1193,"precio":1},{"fecha":"05/2017","unidades":1803,"precio":1},
  {"fecha":"06/2017","unidades":1685,"precio":1},{"fecha":"07/2017","unidades":2318,"precio":1},{"fecha":"08/2017","unidades":2245,"precio":1},
  {"fecha":"09/2017","unidades":1928,"precio":1},{"fecha":"10/2017","unidades":1229,"precio":1},{"fecha":"11/2017","unidades":3365,"precio":1},
  {"fecha":"12/2017","unidades":1859,"precio":1},{"fecha":"01/2018","unidades":1943,"precio":1},{"fecha":"02/2018","unidades":1495,"precio":1},
  {"fecha":"03/2018","unidades":2101,"precio":1},{"fecha":"04/2018","unidades":2733,"precio":1},{"fecha":"05/2018","unidades":1914,"precio":1},
  {"fecha":"06/2018","unidades":2870,"precio":1},{"fecha":"07/2018","unidades":2260,"precio":1},{"fecha":"08/2018","unidades":3036,"precio":1},
  {"fecha":"09/2018","unidades":2899,"precio":1},{"fecha":"10/2018","unidades":4216,"precio":1},{"fecha":"11/2018","unidades":2645,"precio":1},
  {"fecha":"12/2018","unidades":3423,"precio":1},{"fecha":"01/2019","unidades":3397,"precio":1},{"fecha":"02/2019","unidades":4404,"precio":1},
  {"fecha":"03/2019","unidades":3159,"precio":1},{"fecha":"04/2019","unidades":4393,"precio":1},{"fecha":"05/2019","unidades":4013,"precio":1},
  {"fecha":"06/2019","unidades":4374,"precio":1},{"fecha":"07/2019","unidades":5755,"precio":1},{"fecha":"08/2019","unidades":4076,"precio":1},
  {"fecha":"09/2019","unidades":6820,"precio":1}]
    // const rawData = [{"fecha":"03/2021","unidades":10,"precio":1},{"fecha":"04/2021","unidades":12,"precio":1}]

    function scaleDown(step){ //normalizando
      return {
        unidades: step.unidades / 6820,
        precio: step.precio / 1

      };
    }

    // console.log(scaleDown(rawData[0]));

    function scaleUp(step){ //desnormalizar
      return{
        unidades: step.unidades * 6820,
        precio: step.precio * 1

      };
    }

    // console.log(scaleUp(scaleDown(rawData[0])));

    const scaledData = rawData.map(scaleDown);

    const trainingData = [

      scaledData.slice(0, 33)
      
  

    ];
    console.log(trainingData);

		/* Red */
		const net = new brain.recurrent.LSTMTimeStep({
      inputSize: 2,
      hiddenLayers: [4, 3, 2],
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


     
    