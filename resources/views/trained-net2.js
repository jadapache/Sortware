export default function anonymous(rawInput
) {

  var input = lookupInput(rawInput);
  var json = {"type":"LSTMTimeStep","options":{"inputSize":2,"hiddenLayers":[3,5,7,2],"outputSize":2,"decayRate":0.999,"smoothEps":1e-8,"regc":0.000001,"clipval":5},"hiddenLayers":[{"inputMatrix":{"rows":3,"columns":2,"weights":{"0":1.6560890674591064,"1":1.2734242677688599,"2":2.202660083770752,"3":1.8302974700927734,"4":0.27366194128990173,"5":0.5215139985084534}},"inputHidden":{"rows":3,"columns":3,"weights":{"0":-0.43038541078567505,"1":0.4321213960647583,"2":0.38700494170188904,"3":0.3820410668849945,"4":0.5605784058570862,"5":0.33597803115844727,"6":-0.9549451470375061,"7":0.49821439385414124,"8":0.4005933105945587}},"inputBias":{"rows":3,"columns":1,"weights":{"0":0.38541826605796814,"1":-0.24246326088905334,"2":-0.12398373335599899}},"forgetMatrix":{"rows":3,"columns":2,"weights":{"0":-0.5948710441589355,"1":-0.4610961675643921,"2":0.3193700611591339,"3":-0.43666529655456543,"4":0.3057752549648285,"5":0.5826970338821411}},"forgetHidden":{"rows":3,"columns":3,"weights":{"0":-0.2980332374572754,"1":0.19994212687015533,"2":-0.030154908075928688,"3":-1.043318748474121,"4":-1.1395695209503174,"5":0.19360369443893433,"6":-0.8140570521354675,"7":0.6471444964408875,"8":0.5981186032295227}},"forgetBias":{"rows":3,"columns":1,"weights":{"0":0,"1":0,"2":0}},"outputMatrix":{"rows":3,"columns":2,"weights":{"0":1.4255567789077759,"1":1.0539413690567017,"2":2.2296881675720215,"3":1.56935453414917,"4":0.5421130657196045,"5":0.7793067097663879}},"outputHidden":{"rows":3,"columns":3,"weights":{"0":-0.31722405552864075,"1":0.6615113615989685,"2":0.2795610725879669,"3":0.2776188254356384,"4":0.2713054120540619,"5":0.34510165452957153,"6":-0.8267008662223816,"7":0.622303307056427,"8":0.6480150818824768}},"outputBias":{"rows":3,"columns":1,"weights":{"0":0.42074301838874817,"1":-0.26396241784095764,"2":-0.14333222806453705}},"cellActivationMatrix":{"rows":3,"columns":2,"weights":{"0":-2.1930453777313232,"1":0.6989112496376038,"2":2.084076404571533,"3":-1.3920173645019531,"4":-0.6485336422920227,"5":0.8193284273147583}},"cellActivationHidden":{"rows":3,"columns":3,"weights":{"0":-0.5187869668006897,"1":-2.0323243141174316,"2":-0.5299338698387146,"3":0.598905086517334,"4":-1.1052405834197998,"5":0.10435807704925537,"6":-0.06007962301373482,"7":-0.3884231448173523,"8":0.7078421711921692}},"cellActivationBias":{"rows":3,"columns":1,"weights":{"0":1.5469388961791992,"1":0.34719693660736084,"2":0.8066481351852417}}},{"inputMatrix":{"rows":5,"columns":3,"weights":{"0":-0.5458800196647644,"1":1.0656074285507202,"2":1.1356582641601562,"3":-1.5393437147140503,"4":1.471145749092102,"5":0.8525024056434631,"6":-1.2648314237594604,"7":0.9843075275421143,"8":0.45891615748405457,"9":-1.1440396308898926,"10":0.9879196286201477,"11":0.27533528208732605,"12":-0.7933811545372009,"13":1.9371532201766968,"14":1.5605623722076416}},"inputHidden":{"rows":5,"columns":5,"weights":{"0":0.14506801962852478,"1":0.04325467720627785,"2":-0.38560453057289124,"3":-0.16859467327594757,"4":-0.15568336844444275,"5":0.3174985647201538,"6":0.5731344223022461,"7":0.6962273120880127,"8":0.6631761193275452,"9":-0.31386637687683105,"10":0.44770747423171997,"11":0.6020022630691528,"12":0.3632526099681854,"13":0.6201552748680115,"14":0.11014744639396667,"15":0.24407249689102173,"16":0.5700562000274658,"17":0.8647446632385254,"18":0.7387399673461914,"19":0.005872412119060755,"20":-0.08755119889974594,"21":0.4439760148525238,"22":0.7293336391448975,"23":0.8814541697502136,"24":-1.1837903261184692}},"inputBias":{"rows":5,"columns":1,"weights":{"0":-0.09529543668031693,"1":0.1017146036028862,"2":0.24432171881198883,"3":1.0416134595870972,"4":-0.4526534080505371}},"forgetMatrix":{"rows":5,"columns":3,"weights":{"0":-0.05958962067961693,"1":0.05608152970671654,"2":0.13598830997943878,"3":0.08290009200572968,"4":0.4219781458377838,"5":0.22994397580623627,"6":-0.18667948246002197,"7":0.4890005588531494,"8":0.6627134084701538,"9":-0.35568034648895264,"10":0.07735411077737808,"11":-0.12433221191167831,"12":0.6021082401275635,"13":0.44416943192481995,"14":0.9811699390411377}},"forgetHidden":{"rows":5,"columns":5,"weights":{"0":0.12270502001047134,"1":-0.08308936655521393,"2":-0.059982720762491226,"3":-0.027144785970449448,"4":0.20432895421981812,"5":-0.38926807045936584,"6":-0.565015971660614,"7":-0.4337437152862549,"8":-0.35664600133895874,"9":-0.704514741897583,"10":0.038641557097435,"11":-0.508961021900177,"12":-0.5933945178985596,"13":-0.6577220559120178,"14":-0.006113007664680481,"15":0.1713373214006424,"16":-0.18619336187839508,"17":-0.10743185132741928,"18":-0.13368847966194153,"19":0.11354179680347443,"20":0.024464117363095284,"21":-0.3672389090061188,"22":-0.49067339301109314,"23":-0.40557384490966797,"24":-0.08632197976112366}},"forgetBias":{"rows":5,"columns":1,"weights":{"0":0,"1":0,"2":0,"3":0,"4":0}},"outputMatrix":{"rows":5,"columns":3,"weights":{"0":-0.6492542624473572,"1":1.1730380058288574,"2":1.0884929895401,"3":-1.3586701154708862,"4":1.7347769737243652,"5":1.11662757396698,"6":-1.4109786748886108,"7":1.2541121244430542,"8":1.011596918106079,"9":-1.4452879428863525,"10":1.1684725284576416,"11":0.14700110256671906,"12":-0.6999097466468811,"13":2.202418088912964,"14":2.00123929977417}},"outputHidden":{"rows":5,"columns":5,"weights":{"0":0.43734556436538696,"1":0.020019399002194405,"2":-0.44011279940605164,"3":-0.19233177602291107,"4":0.007520417682826519,"5":0.03086339868605137,"6":0.24600614607334137,"7":0.2901863753795624,"8":0.36113405227661133,"9":-0.7286130785942078,"10":0.4224426746368408,"11":-0.11374115943908691,"12":-0.44721949100494385,"13":-0.21446886658668518,"14":0.21351861953735352,"15":0.388790100812912,"16":0.4720611870288849,"17":0.6143994927406311,"18":0.5698632001876831,"19":0.03495149314403534,"20":-0.07915196567773819,"21":0.1387549340724945,"22":0.10099232941865921,"23":0.3015132248401642,"24":-0.8777809739112854}},"outputBias":{"rows":5,"columns":1,"weights":{"0":-0.1036272868514061,"1":0.08344282954931259,"2":0.22826319932937622,"3":1.1760988235473633,"4":-0.4787364602088928}},"cellActivationMatrix":{"rows":5,"columns":3,"weights":{"0":-2.0318617820739746,"1":1.427303671836853,"2":-1.2283461093902588,"3":-1.6352577209472656,"4":1.9830209016799927,"5":-1.4634513854980469,"6":-0.9544691443443298,"7":1.775715708732605,"8":-1.0180655717849731,"9":-1.3486413955688477,"10":2.0364773273468018,"11":-0.6654371023178101,"12":-2.6945319175720215,"13":1.96461021900177,"14":-1.633980393409729}},"cellActivationHidden":{"rows":5,"columns":5,"weights":{"0":-0.017263120040297508,"1":-0.016014495864510536,"2":-0.18048016726970673,"3":-0.44161665439605713,"4":0.090797059237957,"5":-0.7786967754364014,"6":-0.7443006634712219,"7":-0.07845126837491989,"8":-0.3648768663406372,"9":-1.448964238166809,"10":-1.3500027656555176,"11":-0.7669251561164856,"12":-0.04871232435107231,"13":-0.4118511378765106,"14":-2.0219526290893555,"15":-1.0317389965057373,"16":-1.0139312744140625,"17":-0.8384761214256287,"18":-0.9859561920166016,"19":-1.9284543991088867,"20":0.46368205547332764,"21":0.20909588038921356,"22":0.14675533771514893,"23":-0.18004068732261658,"24":0.4090943932533264}},"cellActivationBias":{"rows":5,"columns":1,"weights":{"0":0.17783598601818085,"1":-0.04723995551466942,"2":-0.537323534488678,"3":-0.9540903568267822,"4":0.3550759255886078}}},{"inputMatrix":{"rows":7,"columns":5,"weights":{"0":-0.20561587810516357,"1":-0.003648306941613555,"2":-0.13149911165237427,"3":-0.0063454327173531055,"4":-0.13087016344070435,"5":-0.07122045755386353,"6":0.08379887044429779,"7":-0.004619992803782225,"8":0.20669938623905182,"9":0.038064971566200256,"10":-0.7100620865821838,"11":0.010433214716613293,"12":-0.32748228311538696,"13":-0.0644545629620552,"14":-0.3887954652309418,"15":-0.3158431351184845,"16":0.3672696650028229,"17":-0.016999896615743637,"18":0.2038758397102356,"19":-0.0853438451886177,"20":0.8072748184204102,"21":1.5034475326538086,"22":1.0419363975524902,"23":0.9344953894615173,"24":0.8968491554260254,"25":-0.7945588827133179,"26":-0.13592343032360077,"27":-0.4375738799571991,"28":-0.16083337366580963,"29":-0.4765508770942688,"30":0.2936784327030182,"31":0.8447649478912354,"32":0.2893708348274231,"33":0.41553419828414917,"34":0.5146770477294922}},"inputHidden":{"rows":7,"columns":7,"weights":{"0":0.3296187222003937,"1":0.4449212849140167,"2":-0.129179447889328,"3":0.13904330134391785,"4":0.1507846713066101,"5":0.06864579021930695,"6":-0.05717533826828003,"7":0.43976712226867676,"8":0.33971285820007324,"9":-0.10119657963514328,"10":0.1214093342423439,"11":0.03775080293416977,"12":0.14167208969593048,"13":-0.10980862379074097,"14":0.45374149084091187,"15":0.3871610164642334,"16":0.01988588087260723,"17":0.030585473403334618,"18":0.34342312812805176,"19":-0.05398006737232208,"20":-0.17224371433258057,"21":0.4106699228286743,"22":0.30251798033714294,"23":0.014580328948795795,"24":0.1605466902256012,"25":0.3663262128829956,"26":-0.08965834975242615,"27":-0.20273442566394806,"28":0.0045491778291761875,"29":-0.06955501437187195,"30":-0.19733931124210358,"31":0.2581959366798401,"32":0.6886164546012878,"33":0.011950778774917126,"34":-0.5049964785575867,"35":0.5002073049545288,"36":0.39666861295700073,"37":0.12380806356668472,"38":-0.043461136519908905,"39":0.33307164907455444,"40":-0.23007677495479584,"41":-0.13300037384033203,"42":0.20521822571754456,"43":0.21752408146858215,"44":-0.07432005554437637,"45":0.18747857213020325,"46":0.7095109820365906,"47":-0.03263372927904129,"48":-0.4092537760734558}},"inputBias":{"rows":7,"columns":1,"weights":{"0":-1.1029495000839233,"1":-1.129744052886963,"2":-0.8347867727279663,"3":-0.7544257640838623,"4":-0.7451661229133606,"5":-0.9992659091949463,"6":-0.7604071497917175}},"forgetMatrix":{"rows":7,"columns":5,"weights":{"0":-0.029828250408172607,"1":-0.053266704082489014,"2":-0.0858752578496933,"3":-0.09619268029928207,"4":0.013943568803369999,"5":0.09730099886655807,"6":-0.08239693939685822,"7":-0.06960873305797577,"8":-0.07341273874044418,"9":0.08857770264148712,"10":-0.2464839220046997,"11":-0.2282896190881729,"12":-0.11784414947032928,"13":-0.0006139943725429475,"14":-0.22241009771823883,"15":-0.2123277336359024,"16":-0.07034426182508469,"17":-0.025019589811563492,"18":0.061803657561540604,"19":-0.36136969923973083,"20":-0.5042405724525452,"21":0.10075904428958893,"22":0.3708624839782715,"23":0.3204406201839447,"24":-0.6318691372871399,"25":-0.2238297313451767,"26":-0.34211498498916626,"27":-0.0940348356962204,"28":-0.20920780301094055,"29":-0.22297245264053345,"30":-0.41329702734947205,"31":0.0426095575094223,"32":0.1616545021533966,"33":0.23937460780143738,"34":-0.4047783613204956}},"forgetHidden":{"rows":7,"columns":7,"weights":{"0":0.31449756026268005,"1":0.3418963551521301,"2":-0.10164013504981995,"3":0.13374190032482147,"4":0.0669967383146286,"5":0.09795321524143219,"6":-0.1420011967420578,"7":0.34533172845840454,"8":0.31299060583114624,"9":-0.10471343249082565,"10":0.04350094869732857,"11":0.10415345430374146,"12":0.07497505843639374,"13":-0.10128501057624817,"14":0.2764626443386078,"15":0.35481107234954834,"16":-0.02728787064552307,"17":-0.07341264933347702,"18":-0.035281311720609665,"19":-0.08166953921318054,"20":0.02992987260222435,"21":0.29952582716941833,"22":0.23712967336177826,"23":0.08546444773674011,"24":-0.048119913786649704,"25":-0.24207153916358948,"26":-0.06705720722675323,"27":0.1671389490365982,"28":0.35732337832450867,"29":0.44869524240493774,"30":0.2578078806400299,"31":-0.24186015129089355,"32":-0.4454793930053711,"33":-0.22996561229228973,"34":0.40131866931915283,"35":0.2314128577709198,"36":0.29479020833969116,"37":0.09115886688232422,"38":-0.11382032930850983,"39":-0.14238879084587097,"40":-0.07049721479415894,"41":0.056733980774879456,"42":0.3553883731365204,"43":0.3993546962738037,"44":0.17990119755268097,"45":-0.14620283246040344,"46":-0.3173947334289551,"47":-0.17243938148021698,"48":0.17354154586791992}},"forgetBias":{"rows":7,"columns":1,"weights":{"0":0,"1":0,"2":0,"3":0,"4":0,"5":0,"6":0}},"outputMatrix":{"rows":7,"columns":5,"weights":{"0":-0.07348982989788055,"1":-0.06864602118730545,"2":-0.3511044681072235,"3":-0.08380600064992905,"4":-0.021531304344534874,"5":0.02621191367506981,"6":0.004734290298074484,"7":-0.08758870512247086,"8":0.10302458703517914,"9":0.03544846922159195,"10":-0.8839958310127258,"11":-0.10543912649154663,"12":-0.30808424949645996,"13":-0.009859004989266396,"14":-0.49493467807769775,"15":-0.5085693597793579,"16":0.29410314559936523,"17":-0.022281112149357796,"18":0.23827925324440002,"19":-0.26766085624694824,"20":0.6975777745246887,"21":1.5260876417160034,"22":1.010688304901123,"23":0.9838536381721497,"24":0.7619730234146118,"25":-0.9348006248474121,"26":-0.3174126148223877,"27":-0.47480499744415283,"28":-0.13182944059371948,"29":-0.7051828503608704,"30":0.05616234615445137,"31":0.7603041529655457,"32":0.4518887996673584,"33":0.5321832895278931,"34":0.251087486743927}},"outputHidden":{"rows":7,"columns":7,"weights":{"0":0.48718589544296265,"1":0.33754658699035645,"2":-0.21449337899684906,"3":0.12239106744527817,"4":0.01970664970576763,"5":0.12824048101902008,"6":-0.09811684489250183,"7":0.3640504777431488,"8":0.4863353967666626,"9":-0.0562889538705349,"10":0.06454713642597198,"11":0.13253313302993774,"12":0.1622435748577118,"13":-0.13441896438598633,"14":0.4687792956829071,"15":0.4983360171318054,"16":0.05534341558814049,"17":-0.022447550669312477,"18":0.22331218421459198,"19":-0.13855713605880737,"20":-0.04299657419323921,"21":0.4427267611026764,"22":0.38826268911361694,"23":0.07083866000175476,"24":-0.05233659967780113,"25":0.22456210851669312,"26":-0.2829739451408386,"27":-0.1537315398454666,"28":0.2451813817024231,"29":0.32939413189888,"30":0.027878213673830032,"31":0.08382835239171982,"32":0.24686741828918457,"33":-0.2055981308221817,"34":-0.277357816696167,"35":0.5361783504486084,"36":0.5720134973526001,"37":0.14901027083396912,"38":-0.021344346925616264,"39":0.12360098958015442,"40":-0.2811230421066284,"41":-0.08144920319318771,"42":0.30369922518730164,"43":0.3939460813999176,"44":-0.005727976094931364,"45":0.07671035826206207,"46":0.4596194922924042,"47":-0.17927785217761993,"48":-0.2789696156978607}},"outputBias":{"rows":7,"columns":1,"weights":{"0":-1.1154025793075562,"1":-1.138444423675537,"2":-0.8600923418998718,"3":-0.764674723148346,"4":-0.7579540610313416,"5":-1.0169953107833862,"6":-0.7711266875267029}},"cellActivationMatrix":{"rows":7,"columns":5,"weights":{"0":-0.8547351956367493,"1":-1.3823344707489014,"2":-1.2570552825927734,"3":-1.0819430351257324,"4":-0.9816598892211914,"5":-0.9096910953521729,"6":-1.5055564641952515,"7":-1.3115508556365967,"8":-1.1110093593597412,"9":-0.9082465767860413,"10":-0.7193922400474548,"11":-1.4213948249816895,"12":-1.0370317697525024,"13":-0.8399799466133118,"14":-1.2669662237167358,"15":0.7244526147842407,"16":1.4371503591537476,"17":0.9785061478614807,"18":0.8736392259597778,"19":1.3522213697433472,"20":1.0771981477737427,"21":1.751694917678833,"22":1.3410638570785522,"23":1.3014816045761108,"24":1.6278717517852783,"25":0.8248059153556824,"26":1.4714889526367188,"27":1.0014150142669678,"28":0.8929681777954102,"29":1.3188892602920532,"30":-0.8283340334892273,"31":-1.524304986000061,"32":-1.221010446548462,"33":-1.0193220376968384,"34":-1.2067954540252686}},"cellActivationHidden":{"rows":7,"columns":7,"weights":{"0":-0.18661311268806458,"1":-0.25064781308174133,"2":0.22858954966068268,"3":-0.19806019961833954,"4":-0.14960148930549622,"5":-0.10872633755207062,"6":0.16732975840568542,"7":-0.29119056463241577,"8":-0.23447135090827942,"9":0.10678011924028397,"10":-0.19167248904705048,"11":-0.11276689171791077,"12":-0.0801851823925972,"13":0.17261087894439697,"14":0.04926730692386627,"15":0.09220528602600098,"16":-0.5154923796653748,"17":0.5811758041381836,"18":0.7040607333183289,"19":0.5674600005149841,"20":-0.5379801988601685,"21":-0.07474900037050247,"22":-0.06075773760676384,"23":0.5668400526046753,"24":-0.6763713955879211,"25":-0.7383483052253723,"26":-0.4715732932090759,"27":0.6192290186882019,"28":0.028728434816002846,"29":0.09567976742982864,"30":0.49978211522102356,"31":-0.5841526389122009,"32":-1.0072880983352661,"33":-0.5698996782302856,"34":0.7019566893577576,"35":-0.11895012110471725,"36":-0.19709061086177826,"37":0.4509254992008209,"38":-0.5570463538169861,"39":-0.6745896935462952,"40":-0.44067713618278503,"41":0.5171191096305847,"42":0.055952977389097214,"43":-0.03167973831295967,"44":-0.4498079717159271,"45":0.6262690424919128,"46":0.8347998857498169,"47":0.6093616485595703,"48":-0.668308436870575}},"cellActivationBias":{"rows":7,"columns":1,"weights":{"0":-0.3783206641674042,"1":-0.2824710011482239,"2":-0.14741398394107819,"3":0.1534024029970169,"4":-0.016005810350179672,"5":0.11605442315340042,"6":-0.07476408779621124}}},{"inputMatrix":{"rows":2,"columns":7,"weights":{"0":-0.19985584914684296,"1":-0.24623353779315948,"2":-0.7810483574867249,"3":0.8330714106559753,"4":1.1106411218643188,"5":0.8260684609413147,"6":-0.9590697884559631,"7":-0.31326645612716675,"8":-0.3188990354537964,"9":-0.9160290956497192,"10":0.9253849387168884,"11":0.9244877099990845,"12":0.915143609046936,"13":-0.9372828602790833}},"inputHidden":{"rows":2,"columns":2,"weights":{"0":-0.08993677794933319,"1":0.08148932456970215,"2":-0.1491076648235321,"3":0.00930735096335411}},"inputBias":{"rows":2,"columns":1,"weights":{"0":-0.05368243530392647,"1":0.6805863380432129}},"forgetMatrix":{"rows":2,"columns":7,"weights":{"0":0.13192252814769745,"1":0.144390270113945,"2":-0.44709670543670654,"3":0.5042693614959717,"4":0.628738522529602,"5":0.495737761259079,"6":-0.5514164566993713,"7":-0.03852175548672676,"8":-0.1142706423997879,"9":-0.7169694304466248,"10":0.6972673535346985,"11":0.793982207775116,"12":0.8302510976791382,"13":-0.6869189143180847}},"forgetHidden":{"rows":2,"columns":2,"weights":{"0":-0.14809557795524597,"1":-0.14293375611305237,"2":-0.21699921786785126,"3":-0.12577328085899353}},"forgetBias":{"rows":2,"columns":1,"weights":{"0":0,"1":0}},"outputMatrix":{"rows":2,"columns":7,"weights":{"0":-0.07894875854253769,"1":-0.12157939374446869,"2":-0.5570740699768066,"3":0.49754849076271057,"4":0.6955445408821106,"5":0.598617434501648,"6":-0.6334641575813293,"7":-0.16854582726955414,"8":-0.23542818427085876,"9":-0.5539801716804504,"10":0.6531303524971008,"11":0.8313968181610107,"12":0.7115456461906433,"13":-0.6291190385818481}},"outputHidden":{"rows":2,"columns":2,"weights":{"0":-0.04792581871151924,"1":0.06075725331902504,"2":0.011109283193945885,"3":-0.07654555141925812}},"outputBias":{"rows":2,"columns":1,"weights":{"0":-0.07650989294052124,"1":0.6280300617218018}},"cellActivationMatrix":{"rows":2,"columns":7,"weights":{"0":-0.7141750454902649,"1":-0.7455612421035767,"2":-0.8781002759933472,"3":0.8887907266616821,"4":1.0528250932693481,"5":0.9357771277427673,"6":-0.9249150156974792,"7":-0.7258525490760803,"8":-0.761938750743866,"9":-0.6142057180404663,"10":0.5850068926811218,"11":0.8056038618087769,"12":0.502586841583252,"13":-0.6908712387084961}},"cellActivationHidden":{"rows":2,"columns":2,"weights":{"0":0.25696223974227905,"1":0.3581636846065521,"2":0.3211618661880493,"3":0.45442700386047363}},"cellActivationBias":{"rows":2,"columns":1,"weights":{"0":0.7253844738006592,"1":1.167741060256958}}}],"outputConnector":{"rows":2,"columns":2,"weights":{"0":0.5824099183082581,"1":0.5035290718078613,"2":-0.02776281163096428,"3":0.02304018847644329}},"output":{"rows":2,"columns":1,"weights":{"0":0.3934444487094879,"1":0.996164858341217}},"inputLookup":{"unidades":0,"precio":1},"inputLookupLength":2,"outputLookup":{"unidades":0,"precio":1},"outputLookupLength":2};
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