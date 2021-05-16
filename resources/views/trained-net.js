export default function anonymous(rawInput
) {

  var input = lookupInput(rawInput);
  var json = {"type":"LSTMTimeStep","options":{"inputSize":2,"hiddenLayers":[3,5,7,2],"outputSize":2,"decayRate":0.999,"smoothEps":1e-8,"regc":0.000001,"clipval":5},"hiddenLayers":[{"inputMatrix":{"rows":3,"columns":2,"weights":{"0":1.9574843645095825,"1":1.5179551839828491,"2":2.2058961391448975,"3":1.5910807847976685,"4":1.5477654933929443,"5":1.2242136001586914}},"inputHidden":{"rows":3,"columns":3,"weights":{"0":-1.5935649871826172,"1":-0.12022466957569122,"2":1.1403229236602783,"3":1.089395523071289,"4":-0.291324645280838,"5":0.6600580215454102,"6":1.0618042945861816,"7":-0.21087467670440674,"8":2.144768476486206}},"inputBias":{"rows":3,"columns":1,"weights":{"0":-1.2997277975082397,"1":1.001557469367981,"2":1.958886742591858}},"forgetMatrix":{"rows":3,"columns":2,"weights":{"0":-1.2267401218414307,"1":-1.0806317329406738,"2":0.8448205590248108,"3":-0.17368142306804657,"4":-0.3876810669898987,"5":-0.29067108035087585}},"forgetHidden":{"rows":3,"columns":3,"weights":{"0":0.2578026354312897,"1":1.454126000404358,"2":-0.01089564710855484,"3":-0.2344762235879898,"4":-0.07658883929252625,"5":-0.3346948027610779,"6":-1.119652271270752,"7":-1.3537335395812988,"8":-0.2338326871395111}},"forgetBias":{"rows":3,"columns":1,"weights":{"0":0,"1":0,"2":0}},"outputMatrix":{"rows":3,"columns":2,"weights":{"0":1.5039048194885254,"1":1.1411125659942627,"2":1.8076577186584473,"3":0.9827125072479248,"4":1.8641180992126465,"5":1.4809303283691406}},"outputHidden":{"rows":3,"columns":3,"weights":{"0":-3.1777915954589844,"1":0.6247880458831787,"2":1.3858107328414917,"3":1.9098362922668457,"4":0.10935043543577194,"5":0.8998257517814636,"6":0.22046558558940887,"7":-0.5283620953559875,"8":1.5034986734390259}},"outputBias":{"rows":3,"columns":1,"weights":{"0":-1.6356544494628906,"1":1.3849554061889648,"2":1.9971617460250854}},"cellActivationMatrix":{"rows":3,"columns":2,"weights":{"0":-1.0671448707580566,"1":0.8542594909667969,"2":-2.0023961067199707,"3":1.042603850364685,"4":-2.7629926204681396,"5":0.12333879619836807}},"cellActivationHidden":{"rows":3,"columns":3,"weights":{"0":-1.1173515319824219,"1":-1.8516955375671387,"2":-0.043992724269628525,"3":1.1778699159622192,"4":-1.0174583196640015,"5":2.297696828842163,"6":-0.7265558242797852,"7":-1.4389545917510986,"8":-1.116614818572998}},"cellActivationBias":{"rows":3,"columns":1,"weights":{"0":-0.5285261869430542,"1":-1.8499599695205688,"2":3.312446117401123}}},{"inputMatrix":{"rows":5,"columns":3,"weights":{"0":-0.9899047613143921,"1":-1.0759450197219849,"2":-1.7811309099197388,"3":-2.3298280239105225,"4":-1.35106360912323,"5":-1.4902374744415283,"6":-1.812963604927063,"7":-1.1918201446533203,"8":-2.254722833633423,"9":1.6744228601455688,"10":1.756296992301941,"11":1.6567617654800415,"12":-2.985405683517456,"13":-2.317877769470215,"14":-2.702906847000122}},"inputHidden":{"rows":5,"columns":5,"weights":{"0":-0.34895721077919006,"1":-0.19734147191047668,"2":-0.2577373683452606,"3":-0.36841854453086853,"4":0.051804229617118835,"5":-0.4617575705051422,"6":-0.401712030172348,"7":-0.3928488790988922,"8":0.6047528982162476,"9":0.8481343984603882,"10":-0.19625335931777954,"11":-0.19294658303260803,"12":-0.18426860868930817,"13":1.1804852485656738,"14":0.25459393858909607,"15":0.08661796152591705,"16":-0.8576211929321289,"17":-0.49369335174560547,"18":0.9743021726608276,"19":2.1459505558013916,"20":0.32188257575035095,"21":1.1559879779815674,"22":0.5666993260383606,"23":4.959973335266113,"24":-0.12800320982933044}},"inputBias":{"rows":5,"columns":1,"weights":{"0":-0.5340726375579834,"1":0.018489062786102295,"2":-0.40772825479507446,"3":-0.5671111941337585,"4":0.7216700911521912}},"forgetMatrix":{"rows":5,"columns":3,"weights":{"0":0.023997673764824867,"1":-0.07245860248804092,"2":-0.1986897587776184,"3":-0.0006879736902192235,"4":-0.13041292130947113,"5":-0.14524097740650177,"6":-0.03436977416276932,"7":0.07018113136291504,"8":-0.1365092247724533,"9":2.316967010498047,"10":0.2577419877052307,"11":1.0612998008728027,"12":1.767204761505127,"13":0.49944186210632324,"14":0.28596892952919006}},"forgetHidden":{"rows":5,"columns":5,"weights":{"0":-0.17086535692214966,"1":-0.20510601997375488,"2":-0.1949714869260788,"3":0.0025797795969992876,"4":0.07093105465173721,"5":-0.3623163104057312,"6":-0.3133266568183899,"7":-0.2825867533683777,"8":-0.11472854763269424,"9":0.3888399004936218,"10":-0.2530316412448883,"11":-0.6093670129776001,"12":-0.49125009775161743,"13":-0.1082690879702568,"14":0.7094649076461792,"15":-0.07322341948747635,"16":-0.5703511238098145,"17":-0.36605435609817505,"18":-0.30586060881614685,"19":-0.07930079102516174,"20":-0.31794458627700806,"21":-1.4023653268814087,"22":-0.7649451494216919,"23":0.2100454419851303,"24":0.7414439916610718}},"forgetBias":{"rows":5,"columns":1,"weights":{"0":0,"1":0,"2":0,"3":0,"4":0}},"outputMatrix":{"rows":5,"columns":3,"weights":{"0":-0.854993999004364,"1":-1.3045693635940552,"2":-1.5935403108596802,"3":-2.267054557800293,"4":-1.6076329946517944,"5":-1.181882619857788,"6":-1.6541898250579834,"7":-1.278180480003357,"8":-2.007479667663574,"9":2.2644715309143066,"10":1.515358328819275,"11":1.8690212965011597,"12":-1.5025036334991455,"13":-2.6762356758117676,"14":-0.1184108629822731}},"outputHidden":{"rows":5,"columns":5,"weights":{"0":-0.34733936190605164,"1":-0.23421840369701385,"2":-0.3037526607513428,"3":-0.2031923532485962,"4":0.09977938234806061,"5":-0.33796456456184387,"6":-0.3426482677459717,"7":-0.453413188457489,"8":0.6829992532730103,"9":0.6872236728668213,"10":-0.2622174322605133,"11":-0.5587552785873413,"12":-0.4164963364601135,"13":1.0143978595733643,"14":0.5351879000663757,"15":-0.02510114572942257,"16":-1.1074824333190918,"17":-0.8125496506690979,"18":0.5416886210441589,"19":2.4049015045166016,"20":0.3051729202270508,"21":-0.1612779051065445,"22":-0.03313278779387474,"23":5.310547351837158,"24":0.5304049849510193}},"outputBias":{"rows":5,"columns":1,"weights":{"0":-0.5326281189918518,"1":-0.022835135459899902,"2":-0.4408717751502991,"3":-0.5812458395957947,"4":0.16124118864536285}},"cellActivationMatrix":{"rows":5,"columns":3,"weights":{"0":-0.09879881888628006,"1":-1.082607626914978,"2":0.07056890428066254,"3":-0.6137560606002808,"4":-0.779798150062561,"5":-1.3845270872116089,"6":-0.8125952482223511,"7":-1.2390726804733276,"8":-0.9608073830604553,"9":1.9975297451019287,"10":-0.11085788905620575,"11":1.598824143409729,"12":1.5033677816390991,"13":1.4417861700057983,"14":1.7099432945251465}},"cellActivationHidden":{"rows":5,"columns":5,"weights":{"0":-0.8728570342063904,"1":-0.7750513553619385,"2":-0.4491638243198395,"3":-1.0218422412872314,"4":0.12815873324871063,"5":-0.6775906085968018,"6":-0.5819515585899353,"7":-0.31843841075897217,"8":-1.0399489402770996,"9":-0.9474219083786011,"10":-0.7944441437721252,"11":-0.9765251874923706,"12":-0.7446779608726501,"13":-1.156847596168518,"14":0.4683299958705902,"15":0.2398039549589157,"16":0.1701980084180832,"17":0.5487756133079529,"18":-0.8105725646018982,"19":-0.9910743832588196,"20":0.8267480134963989,"21":1.2481521368026733,"22":1.2248814105987549,"23":1.2444989681243896,"24":-1.574851155281067}},"cellActivationBias":{"rows":5,"columns":1,"weights":{"0":0.13632409274578094,"1":-0.09906281530857086,"2":-0.13522429764270782,"3":0.3136020004749298,"4":0.7922523021697998}}},{"inputMatrix":{"rows":7,"columns":5,"weights":{"0":-0.4472973048686981,"1":-0.9364485740661621,"2":-0.45673564076423645,"3":0.03061126172542572,"4":0.38652512431144714,"5":-0.18112289905548096,"6":-0.7276697754859924,"7":-0.24519990384578705,"8":-2.0564091205596924,"9":-0.34620317816734314,"10":-0.02586362510919571,"11":0.19171364605426788,"12":0.1322324424982071,"13":-1.062259554862976,"14":-0.9141008853912354,"15":-0.35886436700820923,"16":-0.28969916701316833,"17":-0.6373743414878845,"18":0.6562498211860657,"19":0.26938363909721375,"20":-0.41589394211769104,"21":-0.2994745075702667,"22":-0.4563809037208557,"23":-0.04206497222185135,"24":0.28072258830070496,"25":1.267281413078308,"26":1.2363996505737305,"27":1.1731493473052979,"28":1.1706446409225464,"29":-1.848534345626831,"30":-0.524742066860199,"31":-0.6511011123657227,"32":-0.9135777950286865,"33":0.3059585392475128,"34":1.482371211051941}},"inputHidden":{"rows":7,"columns":7,"weights":{"0":-0.13087090849876404,"1":0.7020390033721924,"2":0.2490602731704712,"3":0.11674198508262634,"4":0.12525518238544464,"5":-0.4356209337711334,"6":-0.1635895073413849,"7":-0.509223461151123,"8":0.6045985221862793,"9":0.32195886969566345,"10":-1.0445034503936768,"11":-0.5219500064849854,"12":-0.10224190354347229,"13":-1.3353291749954224,"14":-0.27697089314460754,"15":0.4036591053009033,"16":0.5174424052238464,"17":-0.22807782888412476,"18":-0.298965722322464,"19":0.0033216618467122316,"20":0.08080250024795532,"21":-0.1349732130765915,"22":0.7961928248405457,"23":0.7713680863380432,"24":-0.15742729604244232,"25":0.1400223672389984,"26":1.030670404434204,"27":0.0014637489803135395,"28":-0.2837357521057129,"29":0.9684061408042908,"30":0.6278437972068787,"31":0.38727954030036926,"32":0.2660055160522461,"33":0.6154471039772034,"34":0.12080798298120499,"35":1.1040058135986328,"36":0.17215630412101746,"37":0.04590919613838196,"38":0.6401557922363281,"39":0.4097806513309479,"40":0.23030896484851837,"41":1.617266058921814,"42":-0.46353575587272644,"43":0.050504572689533234,"44":0.8011465072631836,"45":-0.3810660243034363,"46":-0.3021102249622345,"47":0.518713116645813,"48":-0.637978196144104}},"inputBias":{"rows":7,"columns":1,"weights":{"0":-0.27641814947128296,"1":-0.46064040064811707,"2":-0.6230626702308655,"3":-0.16273759305477142,"4":-0.17929308116436005,"5":-0.447784960269928,"6":0.7036757469177246}},"forgetMatrix":{"rows":7,"columns":5,"weights":{"0":-0.06178369000554085,"1":-0.18492592871189117,"2":-0.08150758594274521,"3":0.09431987255811691,"4":-0.12786278128623962,"5":-0.17203450202941895,"6":-0.13780607283115387,"7":-0.1882777214050293,"8":-0.13492655754089355,"9":-0.33828380703926086,"10":-0.3105213940143585,"11":-0.37637731432914734,"12":-0.26527151465415955,"13":0.2553309500217438,"14":-0.04549894854426384,"15":-0.29156267642974854,"16":-0.13720889389514923,"17":-0.5340980291366577,"18":0.7711760997772217,"19":0.7036213278770447,"20":-0.39077258110046387,"21":-0.2867559790611267,"22":-0.3233632743358612,"23":-0.0249496903270483,"24":0.09692519158124924,"25":-0.23144273459911346,"26":-0.3772415518760681,"27":-0.3824601173400879,"28":1.2882107496261597,"29":0.1641583889722824,"30":-0.17200227081775665,"31":-0.1732591688632965,"32":-0.1331871896982193,"33":0.3449167013168335,"34":0.38995516300201416}},"forgetHidden":{"rows":7,"columns":7,"weights":{"0":-0.26779603958129883,"1":0.4890909492969513,"2":0.34754040837287903,"3":0.034122101962566376,"4":-0.12711678445339203,"5":0.1643412858247757,"6":-0.24036404490470886,"7":-0.1579580008983612,"8":0.020357998088002205,"9":0.0036971410736441612,"10":0.3318473994731903,"11":0.02588370069861412,"12":0.08749895542860031,"13":0.17834073305130005,"14":-0.35125017166137695,"15":0.32507801055908203,"16":0.49238428473472595,"17":0.11604247242212296,"18":0.06700936704874039,"19":0.24384865164756775,"20":-0.13212215900421143,"21":-0.02326607145369053,"22":0.2840903103351593,"23":0.47551679611206055,"24":-0.31996163725852966,"25":0.08749871701002121,"26":0.775723397731781,"27":-0.3590150773525238,"28":-0.07805044203996658,"29":0.5548917055130005,"30":0.4872148931026459,"31":0.2778359651565552,"32":0.3653762638568878,"33":0.4318620562553406,"34":0.14850451052188873,"35":-0.25338855385780334,"36":0.5429561734199524,"37":0.42775291204452515,"38":-0.10540423542261124,"39":0.01935010589659214,"40":0.7627148628234863,"41":-0.04041167348623276,"42":-0.22127734124660492,"43":1.8413324356079102,"44":1.1205252408981323,"45":0.21396562457084656,"46":0.2438359409570694,"47":0.8866670727729797,"48":0.0023471720051020384}},"forgetBias":{"rows":7,"columns":1,"weights":{"0":0,"1":0,"2":0,"3":0,"4":0,"5":0,"6":0}},"outputMatrix":{"rows":7,"columns":5,"weights":{"0":-0.5250773429870605,"1":-0.9303357005119324,"2":-0.5848016738891602,"3":0.06304985284805298,"4":0.2744259238243103,"5":-0.27555155754089355,"6":-0.7785114645957947,"7":-0.26357054710388184,"8":-1.7552030086517334,"9":-0.2651028335094452,"10":-0.14745232462882996,"11":0.06122519448399544,"12":0.03260708227753639,"13":-0.9001513719558716,"14":-0.6394290924072266,"15":-0.2236170470714569,"16":-0.24110771715641022,"17":-0.7697848081588745,"18":0.588117241859436,"19":0.47263410687446594,"20":-0.3300497829914093,"21":-0.3751494288444519,"22":-0.4939183294773102,"23":-0.045404378324747086,"24":0.36401307582855225,"25":1.069168210029602,"26":0.8829075694084167,"27":1.1054259538650513,"28":1.545156717300415,"29":-1.796380639076233,"30":-0.51985102891922,"31":-0.6723271012306213,"32":-0.8336173892021179,"33":0.295758992433548,"34":1.4088705778121948}},"outputHidden":{"rows":7,"columns":7,"weights":{"0":-0.2734251618385315,"1":0.7623800039291382,"2":0.41332849860191345,"3":0.07587930560112,"4":0.056761469691991806,"5":-0.3413343131542206,"6":-0.27942904829978943,"7":-0.38909581303596497,"8":0.40983057022094727,"9":0.35722675919532776,"10":-1.0507700443267822,"11":-0.4878460168838501,"12":-0.1939069628715515,"13":-1.4117144346237183,"14":-0.5786178112030029,"15":0.5116608738899231,"16":0.5393487215042114,"17":-0.44710758328437805,"18":-0.3144633173942566,"19":-0.2263505905866623,"20":-0.11836324632167816,"21":-0.12503300607204437,"22":0.7327666878700256,"23":0.8171224594116211,"24":-0.1881788969039917,"25":0.12733259797096252,"26":1.0251177549362183,"27":-0.10638528317213058,"28":-0.32637667655944824,"29":1.0292460918426514,"30":0.7064390182495117,"31":0.35614919662475586,"32":0.22738446295261383,"33":0.6160473823547363,"34":0.046833187341690063,"35":0.39531293511390686,"36":0.4710679054260254,"37":0.1581234484910965,"38":0.13527119159698486,"39":0.0344744548201561,"40":0.5984001755714417,"41":0.7552697062492371,"42":-0.47251784801483154,"43":0.7332478761672974,"44":1.0199683904647827,"45":-0.34796959161758423,"46":-0.3323858678340912,"47":0.7020524144172668,"48":-0.5082787871360779}},"outputBias":{"rows":7,"columns":1,"weights":{"0":-0.28613215684890747,"1":-0.4941751956939697,"2":-0.6694431900978088,"3":-0.16966724395751953,"4":-0.18031953275203705,"5":-0.5396031141281128,"6":0.7804989218711853}},"cellActivationMatrix":{"rows":7,"columns":5,"weights":{"0":0.26626306772232056,"1":-0.4253521263599396,"2":0.43137726187705994,"3":1.7862656116485596,"4":-0.40491247177124023,"5":-0.7786529064178467,"6":-0.24877427518367767,"7":-0.934800922870636,"8":-0.7305014133453369,"9":1.0863059759140015,"10":-0.9609369039535522,"11":-0.46139878034591675,"12":-1.035019874572754,"13":-1.0479209423065186,"14":1.5253026485443115,"15":-0.37124359607696533,"16":-0.09904366731643677,"17":-0.08246608078479767,"18":0.9258105754852295,"19":-1.0342843532562256,"20":0.1731768697500229,"21":-0.10041444003582001,"22":0.09467126429080963,"23":0.9141115546226501,"24":-0.1683373749256134,"25":-0.34628918766975403,"26":-0.3582601547241211,"27":-0.6635510921478271,"28":-1.0742032527923584,"29":1.78546941280365,"30":0.34561577439308167,"31":0.10209242254495621,"32":0.3521602153778076,"33":1.238813042640686,"34":-1.897568941116333}},"cellActivationHidden":{"rows":7,"columns":7,"weights":{"0":-0.5419020652770996,"1":-1.2763807773590088,"2":0.3671889305114746,"3":-0.06328549236059189,"4":-0.7521097660064697,"5":0.34979447722435,"6":-0.11157218366861343,"7":0.8614784479141235,"8":-0.7988749146461487,"9":-0.5185636281967163,"10":0.5379315614700317,"11":0.8655931949615479,"12":0.4584416151046753,"13":1.5383894443511963,"14":0.8846004009246826,"15":0.19682036340236664,"16":-0.8251379132270813,"17":0.7141491174697876,"18":0.9577756524085999,"19":-0.1638566255569458,"20":0.19253823161125183,"21":1.3058645725250244,"22":-1.806389570236206,"23":-1.538504958152771,"24":-0.17982864379882812,"25":0.4322402775287628,"26":-0.0984545648097992,"27":1.9051214456558228,"28":0.5867693424224854,"29":-1.0234500169754028,"30":-0.9122278690338135,"31":0.20247091352939606,"32":-0.17012013494968414,"33":0.3127235174179077,"34":0.6778331995010376,"35":0.4237056374549866,"36":-0.09031882137060165,"37":-0.8868942260742188,"38":0.07353256642818451,"39":0.503905713558197,"40":-1.3579496145248413,"41":-1.2263290882110596,"42":1.0401685237884521,"43":-2.4584710597991943,"44":-1.4552005529403687,"45":0.13545258343219757,"46":0.0022991690784692764,"47":-0.7540755271911621,"48":-0.7885068655014038}},"cellActivationBias":{"rows":7,"columns":1,"weights":{"0":-0.586481511592865,"1":0.39364558458328247,"2":0.28703945875167847,"3":-0.6210854649543762,"4":-0.3758259117603302,"5":-0.09957366436719894,"6":-1.0163257122039795}}},{"inputMatrix":{"rows":2,"columns":7,"weights":{"0":0.5453645586967468,"1":-0.10871522128582001,"2":-0.4763299226760864,"3":0.3083272874355316,"4":0.22063158452510834,"5":-0.9474286437034607,"6":-0.04202898219227791,"7":0.3509098291397095,"8":0.18454350531101227,"9":-0.29251039028167725,"10":0.712170422077179,"11":0.45242348313331604,"12":-0.7979578375816345,"13":0.25542330741882324}},"inputHidden":{"rows":2,"columns":2,"weights":{"0":0.3482547998428345,"1":-0.045360974967479706,"2":-0.04731516167521477,"3":0.2254275679588318}},"inputBias":{"rows":2,"columns":1,"weights":{"0":-0.24695000052452087,"1":-0.605431079864502}},"forgetMatrix":{"rows":2,"columns":7,"weights":{"0":0.4801512062549591,"1":-0.013343899510800838,"2":-0.4707176685333252,"3":0.5461182594299316,"4":0.3652033507823944,"5":-0.5591363906860352,"6":-0.061234425753355026,"7":0.2726314067840576,"8":0.30738067626953125,"9":-0.08875571936368942,"10":0.6267523169517517,"11":0.5062268376350403,"12":-0.05358846113085747,"13":0.14262497425079346}},"forgetHidden":{"rows":2,"columns":2,"weights":{"0":-0.23197615146636963,"1":0.43393078446388245,"2":-0.33966729044914246,"3":0.48581182956695557}},"forgetBias":{"rows":2,"columns":1,"weights":{"0":0,"1":0}},"outputMatrix":{"rows":2,"columns":7,"weights":{"0":0.5857564806938171,"1":-0.04736125469207764,"2":-0.6101691722869873,"3":0.610906183719635,"4":0.34210094809532166,"5":-0.7593395709991455,"6":-0.0745849683880806,"7":0.3301311433315277,"8":0.1896870881319046,"9":-0.1832907795906067,"10":0.7690322399139404,"11":0.46552687883377075,"12":-0.43536606431007385,"13":0.2530716359615326}},"outputHidden":{"rows":2,"columns":2,"weights":{"0":0.12436824291944504,"1":0.2977120280265808,"2":-0.2211047112941742,"3":0.3655935525894165}},"outputBias":{"rows":2,"columns":1,"weights":{"0":-0.26783260703086853,"1":-0.6304871439933777}},"cellActivationMatrix":{"rows":2,"columns":7,"weights":{"0":-0.0000789068581070751,"1":-0.3547341227531433,"2":-0.1292334347963333,"3":-0.16011260449886322,"4":-0.13539832830429077,"5":-0.6997549533843994,"6":-0.3251723051071167,"7":-0.0807369202375412,"8":-0.0046380129642784595,"9":0.20458845794200897,"10":-0.25295621156692505,"11":-0.0943882018327713,"12":0.5837458372116089,"13":0.3153337836265564}},"cellActivationHidden":{"rows":2,"columns":2,"weights":{"0":1.6922616958618164,"1":-0.9684481024742126,"2":-0.9659552574157715,"3":0.603419840335846}},"cellActivationBias":{"rows":2,"columns":1,"weights":{"0":0.5622842311859131,"1":-0.2742280662059784}}}],"outputConnector":{"rows":2,"columns":2,"weights":{"0":1.4262865781784058,"1":-1.057350754737854,"2":0.009791150689125061,"3":0.027112731710076332}},"output":{"rows":2,"columns":1,"weights":{"0":0.38227298855781555,"1":0.999780535697937}},"inputLookup":{"unidades":0,"precio":1},"inputLookupLength":2,"outputLookup":{"unidades":0,"precio":1},"outputLookupLength":2};
  var output = [];
  var states = [];
  var prevStates;
  var state;
  var max = input.length;
  for (var _i = 0; _i < max; _i++) {
    prevStates = states;
    states = [];
    states[0] = {
      name: 'forwardFn',
      left: null,
      right: null,
      product: new Matrix(2, 1)
    };
    states[1] = {
      name: 'multiply',
      left: json.hiddenLayers[0].inputMatrix,
      right: states[0].product,
      product: new Matrix(3, 1)
    };
    states[2] = {
      name: 'multiply',
      left: json.hiddenLayers[0].inputHidden,
      right: typeof prevStates[25] === 'object' ? prevStates[25].product : new Matrix(3, 1),
      product: new Matrix(3, 1)
    };
    states[3] = {
      name: 'add',
      left: states[1].product,
      right: states[2].product,
      product: new Matrix(3, 1)
    };
    states[4] = {
      name: 'add',
      left: states[3].product,
      right: json.hiddenLayers[0].inputBias,
      product: new Matrix(3, 1)
    };
    states[5] = {
      name: 'sigmoid',
      left: states[4].product,
      right: null,
      product: new Matrix(3, 1)
    };
    states[6] = {
      name: 'multiply',
      left: json.hiddenLayers[0].forgetMatrix,
      right: states[0].product,
      product: new Matrix(3, 1)
    };
    states[7] = {
      name: 'multiply',
      left: json.hiddenLayers[0].forgetHidden,
      right: states[2].right,
      product: new Matrix(3, 1)
    };
    states[8] = {
      name: 'add',
      left: states[6].product,
      right: states[7].product,
      product: new Matrix(3, 1)
    };
    states[9] = {
      name: 'add',
      left: states[8].product,
      right: json.hiddenLayers[0].forgetBias,
      product: new Matrix(3, 1)
    };
    states[10] = {
      name: 'sigmoid',
      left: states[9].product,
      right: null,
      product: new Matrix(3, 1)
    };
    states[11] = {
      name: 'multiply',
      left: json.hiddenLayers[0].outputMatrix,
      right: states[0].product,
      product: new Matrix(3, 1)
    };
    states[12] = {
      name: 'multiply',
      left: json.hiddenLayers[0].outputHidden,
      right: states[2].right,
      product: new Matrix(3, 1)
    };
    states[13] = {
      name: 'add',
      left: states[11].product,
      right: states[12].product,
      product: new Matrix(3, 1)
    };
    states[14] = {
      name: 'add',
      left: states[13].product,
      right: json.hiddenLayers[0].outputBias,
      product: new Matrix(3, 1)
    };
    states[15] = {
      name: 'sigmoid',
      left: states[14].product,
      right: null,
      product: new Matrix(3, 1)
    };
    states[16] = {
      name: 'multiply',
      left: json.hiddenLayers[0].cellActivationMatrix,
      right: states[0].product,
      product: new Matrix(3, 1)
    };
    states[17] = {
      name: 'multiply',
      left: json.hiddenLayers[0].cellActivationHidden,
      right: states[2].right,
      product: new Matrix(3, 1)
    };
    states[18] = {
      name: 'add',
      left: states[16].product,
      right: states[17].product,
      product: new Matrix(3, 1)
    };
    states[19] = {
      name: 'add',
      left: states[18].product,
      right: json.hiddenLayers[0].cellActivationBias,
      product: new Matrix(3, 1)
    };
    states[20] = {
      name: 'tanh',
      left: states[19].product,
      right: null,
      product: new Matrix(3, 1)
    };
    states[21] = {
      name: 'multiplyElement',
      left: states[10].product,
      right: states[2].right,
      product: new Matrix(3, 1)
    };
    states[22] = {
      name: 'multiplyElement',
      left: states[5].product,
      right: states[20].product,
      product: new Matrix(3, 1)
    };
    states[23] = {
      name: 'add',
      left: states[21].product,
      right: states[22].product,
      product: new Matrix(3, 1)
    };
    states[24] = {
      name: 'tanh',
      left: states[23].product,
      right: null,
      product: new Matrix(3, 1)
    };
    states[25] = {
      name: 'multiplyElement',
      left: states[15].product,
      right: states[24].product,
      product: new Matrix(3, 1)
    };
    states[26] = {
      name: 'multiply',
      left: json.hiddenLayers[1].inputMatrix,
      right: states[25].product,
      product: new Matrix(5, 1)
    };
    states[27] = {
      name: 'multiply',
      left: json.hiddenLayers[1].inputHidden,
      right: typeof prevStates[50] === 'object' ? prevStates[50].product : new Matrix(5, 1),
      product: new Matrix(5, 1)
    };
    states[28] = {
      name: 'add',
      left: states[26].product,
      right: states[27].product,
      product: new Matrix(5, 1)
    };
    states[29] = {
      name: 'add',
      left: states[28].product,
      right: json.hiddenLayers[1].inputBias,
      product: new Matrix(5, 1)
    };
    states[30] = {
      name: 'sigmoid',
      left: states[29].product,
      right: null,
      product: new Matrix(5, 1)
    };
    states[31] = {
      name: 'multiply',
      left: json.hiddenLayers[1].forgetMatrix,
      right: states[25].product,
      product: new Matrix(5, 1)
    };
    states[32] = {
      name: 'multiply',
      left: json.hiddenLayers[1].forgetHidden,
      right: states[27].right,
      product: new Matrix(5, 1)
    };
    states[33] = {
      name: 'add',
      left: states[31].product,
      right: states[32].product,
      product: new Matrix(5, 1)
    };
    states[34] = {
      name: 'add',
      left: states[33].product,
      right: json.hiddenLayers[1].forgetBias,
      product: new Matrix(5, 1)
    };
    states[35] = {
      name: 'sigmoid',
      left: states[34].product,
      right: null,
      product: new Matrix(5, 1)
    };
    states[36] = {
      name: 'multiply',
      left: json.hiddenLayers[1].outputMatrix,
      right: states[25].product,
      product: new Matrix(5, 1)
    };
    states[37] = {
      name: 'multiply',
      left: json.hiddenLayers[1].outputHidden,
      right: states[27].right,
      product: new Matrix(5, 1)
    };
    states[38] = {
      name: 'add',
      left: states[36].product,
      right: states[37].product,
      product: new Matrix(5, 1)
    };
    states[39] = {
      name: 'add',
      left: states[38].product,
      right: json.hiddenLayers[1].outputBias,
      product: new Matrix(5, 1)
    };
    states[40] = {
      name: 'sigmoid',
      left: states[39].product,
      right: null,
      product: new Matrix(5, 1)
    };
    states[41] = {
      name: 'multiply',
      left: json.hiddenLayers[1].cellActivationMatrix,
      right: states[25].product,
      product: new Matrix(5, 1)
    };
    states[42] = {
      name: 'multiply',
      left: json.hiddenLayers[1].cellActivationHidden,
      right: states[27].right,
      product: new Matrix(5, 1)
    };
    states[43] = {
      name: 'add',
      left: states[41].product,
      right: states[42].product,
      product: new Matrix(5, 1)
    };
    states[44] = {
      name: 'add',
      left: states[43].product,
      right: json.hiddenLayers[1].cellActivationBias,
      product: new Matrix(5, 1)
    };
    states[45] = {
      name: 'tanh',
      left: states[44].product,
      right: null,
      product: new Matrix(5, 1)
    };
    states[46] = {
      name: 'multiplyElement',
      left: states[35].product,
      right: states[27].right,
      product: new Matrix(5, 1)
    };
    states[47] = {
      name: 'multiplyElement',
      left: states[30].product,
      right: states[45].product,
      product: new Matrix(5, 1)
    };
    states[48] = {
      name: 'add',
      left: states[46].product,
      right: states[47].product,
      product: new Matrix(5, 1)
    };
    states[49] = {
      name: 'tanh',
      left: states[48].product,
      right: null,
      product: new Matrix(5, 1)
    };
    states[50] = {
      name: 'multiplyElement',
      left: states[40].product,
      right: states[49].product,
      product: new Matrix(5, 1)
    };
    states[51] = {
      name: 'multiply',
      left: json.hiddenLayers[2].inputMatrix,
      right: states[50].product,
      product: new Matrix(7, 1)
    };
    states[52] = {
      name: 'multiply',
      left: json.hiddenLayers[2].inputHidden,
      right: typeof prevStates[75] === 'object' ? prevStates[75].product : new Matrix(7, 1),
      product: new Matrix(7, 1)
    };
    states[53] = {
      name: 'add',
      left: states[51].product,
      right: states[52].product,
      product: new Matrix(7, 1)
    };
    states[54] = {
      name: 'add',
      left: states[53].product,
      right: json.hiddenLayers[2].inputBias,
      product: new Matrix(7, 1)
    };
    states[55] = {
      name: 'sigmoid',
      left: states[54].product,
      right: null,
      product: new Matrix(7, 1)
    };
    states[56] = {
      name: 'multiply',
      left: json.hiddenLayers[2].forgetMatrix,
      right: states[50].product,
      product: new Matrix(7, 1)
    };
    states[57] = {
      name: 'multiply',
      left: json.hiddenLayers[2].forgetHidden,
      right: states[52].right,
      product: new Matrix(7, 1)
    };
    states[58] = {
      name: 'add',
      left: states[56].product,
      right: states[57].product,
      product: new Matrix(7, 1)
    };
    states[59] = {
      name: 'add',
      left: states[58].product,
      right: json.hiddenLayers[2].forgetBias,
      product: new Matrix(7, 1)
    };
    states[60] = {
      name: 'sigmoid',
      left: states[59].product,
      right: null,
      product: new Matrix(7, 1)
    };
    states[61] = {
      name: 'multiply',
      left: json.hiddenLayers[2].outputMatrix,
      right: states[50].product,
      product: new Matrix(7, 1)
    };
    states[62] = {
      name: 'multiply',
      left: json.hiddenLayers[2].outputHidden,
      right: states[52].right,
      product: new Matrix(7, 1)
    };
    states[63] = {
      name: 'add',
      left: states[61].product,
      right: states[62].product,
      product: new Matrix(7, 1)
    };
    states[64] = {
      name: 'add',
      left: states[63].product,
      right: json.hiddenLayers[2].outputBias,
      product: new Matrix(7, 1)
    };
    states[65] = {
      name: 'sigmoid',
      left: states[64].product,
      right: null,
      product: new Matrix(7, 1)
    };
    states[66] = {
      name: 'multiply',
      left: json.hiddenLayers[2].cellActivationMatrix,
      right: states[50].product,
      product: new Matrix(7, 1)
    };
    states[67] = {
      name: 'multiply',
      left: json.hiddenLayers[2].cellActivationHidden,
      right: states[52].right,
      product: new Matrix(7, 1)
    };
    states[68] = {
      name: 'add',
      left: states[66].product,
      right: states[67].product,
      product: new Matrix(7, 1)
    };
    states[69] = {
      name: 'add',
      left: states[68].product,
      right: json.hiddenLayers[2].cellActivationBias,
      product: new Matrix(7, 1)
    };
    states[70] = {
      name: 'tanh',
      left: states[69].product,
      right: null,
      product: new Matrix(7, 1)
    };
    states[71] = {
      name: 'multiplyElement',
      left: states[60].product,
      right: states[52].right,
      product: new Matrix(7, 1)
    };
    states[72] = {
      name: 'multiplyElement',
      left: states[55].product,
      right: states[70].product,
      product: new Matrix(7, 1)
    };
    states[73] = {
      name: 'add',
      left: states[71].product,
      right: states[72].product,
      product: new Matrix(7, 1)
    };
    states[74] = {
      name: 'tanh',
      left: states[73].product,
      right: null,
      product: new Matrix(7, 1)
    };
    states[75] = {
      name: 'multiplyElement',
      left: states[65].product,
      right: states[74].product,
      product: new Matrix(7, 1)
    };
    states[76] = {
      name: 'multiply',
      left: json.hiddenLayers[3].inputMatrix,
      right: states[75].product,
      product: new Matrix(2, 1)
    };
    states[77] = {
      name: 'multiply',
      left: json.hiddenLayers[3].inputHidden,
      right: typeof prevStates[100] === 'object' ? prevStates[100].product : new Matrix(2, 1),
      product: new Matrix(2, 1)
    };
    states[78] = {
      name: 'add',
      left: states[76].product,
      right: states[77].product,
      product: new Matrix(2, 1)
    };
    states[79] = {
      name: 'add',
      left: states[78].product,
      right: json.hiddenLayers[3].inputBias,
      product: new Matrix(2, 1)
    };
    states[80] = {
      name: 'sigmoid',
      left: states[79].product,
      right: null,
      product: new Matrix(2, 1)
    };
    states[81] = {
      name: 'multiply',
      left: json.hiddenLayers[3].forgetMatrix,
      right: states[75].product,
      product: new Matrix(2, 1)
    };
    states[82] = {
      name: 'multiply',
      left: json.hiddenLayers[3].forgetHidden,
      right: states[77].right,
      product: new Matrix(2, 1)
    };
    states[83] = {
      name: 'add',
      left: states[81].product,
      right: states[82].product,
      product: new Matrix(2, 1)
    };
    states[84] = {
      name: 'add',
      left: states[83].product,
      right: json.hiddenLayers[3].forgetBias,
      product: new Matrix(2, 1)
    };
    states[85] = {
      name: 'sigmoid',
      left: states[84].product,
      right: null,
      product: new Matrix(2, 1)
    };
    states[86] = {
      name: 'multiply',
      left: json.hiddenLayers[3].outputMatrix,
      right: states[75].product,
      product: new Matrix(2, 1)
    };
    states[87] = {
      name: 'multiply',
      left: json.hiddenLayers[3].outputHidden,
      right: states[77].right,
      product: new Matrix(2, 1)
    };
    states[88] = {
      name: 'add',
      left: states[86].product,
      right: states[87].product,
      product: new Matrix(2, 1)
    };
    states[89] = {
      name: 'add',
      left: states[88].product,
      right: json.hiddenLayers[3].outputBias,
      product: new Matrix(2, 1)
    };
    states[90] = {
      name: 'sigmoid',
      left: states[89].product,
      right: null,
      product: new Matrix(2, 1)
    };
    states[91] = {
      name: 'multiply',
      left: json.hiddenLayers[3].cellActivationMatrix,
      right: states[75].product,
      product: new Matrix(2, 1)
    };
    states[92] = {
      name: 'multiply',
      left: json.hiddenLayers[3].cellActivationHidden,
      right: states[77].right,
      product: new Matrix(2, 1)
    };
    states[93] = {
      name: 'add',
      left: states[91].product,
      right: states[92].product,
      product: new Matrix(2, 1)
    };
    states[94] = {
      name: 'add',
      left: states[93].product,
      right: json.hiddenLayers[3].cellActivationBias,
      product: new Matrix(2, 1)
    };
    states[95] = {
      name: 'tanh',
      left: states[94].product,
      right: null,
      product: new Matrix(2, 1)
    };
    states[96] = {
      name: 'multiplyElement',
      left: states[85].product,
      right: states[77].right,
      product: new Matrix(2, 1)
    };
    states[97] = {
      name: 'multiplyElement',
      left: states[80].product,
      right: states[95].product,
      product: new Matrix(2, 1)
    };
    states[98] = {
      name: 'add',
      left: states[96].product,
      right: states[97].product,
      product: new Matrix(2, 1)
    };
    states[99] = {
      name: 'tanh',
      left: states[98].product,
      right: null,
      product: new Matrix(2, 1)
    };
    states[100] = {
      name: 'multiplyElement',
      left: states[90].product,
      right: states[99].product,
      product: new Matrix(2, 1)
    };
    states[101] = {
      name: 'multiply',
      left: json.outputConnector,
      right: states[100].product,
      product: new Matrix(2, 1)
    };
    states[102] = {
      name: 'add',
      left: states[101].product,
      right: json.output,
      product: new Matrix(2, 1)
    };
    for (var stateIndex = 0, stateMax = 103; stateIndex < stateMax; stateIndex++) {
      state = states[stateIndex];
      var product = state.product;
      var left = state.left;
      var right = state.right;

      switch (state.name) {
        case 'forwardFn':
          
                  product.weights = _input.weights = _this.inputValue;
                
          break;
        case 'multiply': //compiled from src/recurrent/matrix/multiply.js
          
          var leftRows = left.rows;
          var leftColumns = left.columns;
          var rightColumns = right.columns; // loop over rows of left
        
          for (var leftRow = 0; leftRow < leftRows; leftRow++) {
            var leftRowBase = leftColumns * leftRow;
            var rightRowBase = rightColumns * leftRow; // loop over cols of right
        
            for (var rightColumn = 0; rightColumn < rightColumns; rightColumn++) {
              // dot product loop
              var dot = 0; // loop over columns of left
        
              for (var leftColumn = 0; leftColumn < leftColumns; leftColumn++) {
                var rightColumnBase = rightColumns * leftColumn;
                var leftIndex = leftRowBase + leftColumn;
                var rightIndex = rightColumnBase + rightColumn;
                dot += left.weights[leftIndex] * right.weights[rightIndex];
                
                
              }
        
              product.weights[rightRowBase + rightColumn] = dot;
            }
          }
        
          break;
        case 'add': //compiled from src/recurrent/matrix/add.js
          
          for (var i = 0; i < left.weights.length; i++) {
            product.weights[i] = left.weights[i] + right.weights[i];
            
          }
        
          break;
        case 'sigmoid': //compiled from src/recurrent/matrix/sigmoid.js
          
          // sigmoid nonlinearity
          for (var i = 0; i < left.weights.length; i++) {
            product.weights[i] = 1 / (1 + Math.exp(-left.weights[i]));
            
          }
        
          break;
        case 'tanh': //compiled from src/recurrent/matrix/tanh.js
          
          // tanh nonlinearity
          for (var i = 0; i < left.weights.length; i++) {
            product.weights[i] = Math.tanh(left.weights[i]);
            
          }
        
          break;
        case 'multiplyElement': //compiled from src/recurrent/matrix/multiply-element.js
          
          var weights = left.weights;
        
          for (var i = 0; i < weights.length; i++) {
            product.weights[i] = left.weights[i] * right.weights[i];
            
          }
        
          break;
      }
    }
    output = state.product.weights;
  }
  return lookupOutputPartial(output, input);
  function lookupInput(rawInputs) {
        var table = {"unidades":0,"precio":1};
        var result = [];
        for (var i = 0; i < rawInputs.length; i++) {
          var rawInput = rawInputs[i];
          var input = new Float32Array(2);
          for (var p in table) {
            input[table[p]] = rawInput.hasOwnProperty(p) ? rawInput[p] : 0;
          }
          result.push(input);
        }
        return result;
      }
  function lookupOutput(output) {
        var table = {"unidades":0,"precio":1};
        var result = {};
        for (var p in table) {
          result[p] = output[table[p]];
        }
        return result;
      }

  function Matrix(rows, columns) {
    this.rows = rows;
    this.columns = columns;
    this.weights = zeros(rows * columns);
  }
  function zeros(size) {
  return new Float32Array(size);
}
  function softmax(m) {
  var result = new matrix(m.rows, m.columns); // probability volume

  var maxVal = -999999;

  for (var i = 0; i < m.weights.length; i++) {
    if (m.weights[i] > maxVal) {
      maxVal = m.weights[i];
    }
  }

  var s = 0;

  for (var _i = 0; _i < m.weights.length; _i++) {
    result.weights[_i] = Math.exp(m.weights[_i] - maxVal);
    s += result.weights[_i];
  }

  for (var _i2 = 0; _i2 < m.weights.length; _i2++) {
    result.weights[_i2] /= s;
  } // no backward pass here needed
  // since we will use the computed probabilities outside
  // to set gradients directly on m


  return result;
}
  function randomFloat(a, b) {
  return Math.random() * (b - a) + a;
}
  function sampleI(m) {
  // sample argmax from w, assuming w are
  // probabilities that sum to one
  var r = randomFloat$3(0, 1);
  var x = 0;
  var i = 0;
  var w = m.weights;

  while (true) {
    x += w[i];

    if (x > r) {
      return i;
    }

    i++;
  }
}
  function maxI(m) {
  // argmax of array w
  var weights = m.weights;
  var maxv = weights[0];
  var maxix = 0;

  for (var i = 1; i < weights.length; i++) {
    var v = weights[i];
    if (v < maxv) continue;
    maxix = i;
    maxv = v;
  }

  return maxix;
}
};