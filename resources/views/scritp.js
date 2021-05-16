const brain = require("brain.js");


const rawData = [
  {"fecha":"01/2017","unidades":15,"precio":1},{"fecha":"02/2017","unidades":16,"precio":1},
  {"fecha":"03/2017","unidades":18,"precio":1},{"fecha":"04/2017","unidades":27,"precio":1},{"fecha":"05/2017","unidades":21,"precio":1},
  {"fecha":"06/2017","unidades":49,"precio":1},{"fecha":"07/2017","unidades":21,"precio":1},{"fecha":"08/2017","unidades":22,"precio":1},
  {"fecha":"09/2017","unidades":28,"precio":1},{"fecha":"10/2017","unidades":36,"precio":1},{"fecha":"11/2017","unidades":40,"precio":1},
  {"fecha":"12/2017","unidades":3,"precio":1},{"fecha":"01/2018","unidades":21,"precio":1},{"fecha":"02/2018","unidades":29,"precio":1},
  {"fecha":"03/2018","unidades":62,"precio":1},{"fecha":"04/2018","unidades":65,"precio":1},{"fecha":"05/2018","unidades":46,"precio":1},
  {"fecha":"06/2018","unidades":44,"precio":1},{"fecha":"07/2018","unidades":33,"precio":1},{"fecha":"08/2018","unidades":62,"precio":1},
  {"fecha":"09/2018","unidades":22,"precio":1},{"fecha":"10/2018","unidades":12,"precio":1},{"fecha":"11/2018","unidades":24,"precio":1},
  {"fecha":"12/2018","unidades":3,"precio":1},{"fecha":"01/2019","unidades":5,"precio":1},{"fecha":"02/2019","unidades":14,"precio":1},
  {"fecha":"03/2019","unidades":36,"precio":1},{"fecha":"04/2019","unidades":40,"precio":1},{"fecha":"05/2019","unidades":49,"precio":1},
  {"fecha":"06/2019","unidades":7,"precio":1},{"fecha":"07/2019","unidades":52,"precio":1},{"fecha":"08/2019","unidades":65,"precio":1},
  {"fecha":"09/2019","unidades":17,"precio":1}]
  // ,
  // {"fecha":"06/2019","unidades":7,"precio":1},{"fecha":"07/2019","unidades":52,"precio":1},{"fecha":"08/2019","unidades":65,"precio":1},
  // {"fecha":"09/2019","unidades":17,"precio":1}]
    // const rawData = [{"fecha":"03/2021","unidades":10,"precio":1},{"fecha":"04/2021","unidades":12,"precio":1}]

    function scaleDown(step){ //normalizando
      return {
        unidades: step.unidades / 65,
        precio: step.precio / 1

      };
    }

    // console.log(scaleDown(rawData[0]));

    function scaleUp(step){ //desnormalizar
      return{
        unidades: step.unidades * 65,
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
      // var array=[];

// console.log(trainingData)
// var result2 = scaleUp(net.run(trainingData[0]));


var result = net.forecast(trainingData[0],3).map(scaleUp);
  // array.push(result);
  
  



// console.log(result.toString());

// delete result.precio;
console.log(result);
// console.log(result2);


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


     
    