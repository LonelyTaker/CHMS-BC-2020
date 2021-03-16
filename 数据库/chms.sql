/*
Navicat MySQL Data Transfer

Source Server         : 1
Source Server Version : 50617
Source Host           : localhost:3306
Source Database       : chms

Target Server Type    : MYSQL
Target Server Version : 50617
File Encoding         : 65001

Date: 2020-06-11 22:06:48
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for `announce`
-- ----------------------------
DROP TABLE IF EXISTS `announce`;
CREATE TABLE `announce` (
  `id` int(100) NOT NULL AUTO_INCREMENT,
  `title` varchar(45) COLLATE utf8_unicode_ci DEFAULT NULL,
  `content` varchar(500) COLLATE utf8_unicode_ci DEFAULT NULL,
  `path` varchar(30) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=19 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of announce
-- ----------------------------
INSERT INTO `announce` VALUES ('6', '疫情期间糖尿病患者应该注意哪些问题', '1、作息要规律。春节这段时间很多的糖尿病人可能会熬到很晚，但是最近临近返程了，重新回到工作岗位，调整好作息是很重要的，良好的作息可以有效的增强免疫力和抵抗力，对于抗菌抗病毒是很重要的，也可以让自己更快的恢复到工作状态中。2、饮食要均衡。很多的糖尿病人工作地方距离家较远，返程是要花一段时间的，对于那些需要较长时间的患者朋友，到了饭点应该去吃饭，不要因为在路途中觉得不方便就选择不吃饭，这样的做法是不利于血糖的正常调节的，在身体没有得到足够的能量的情况下，自身的免疫力也会受到一定的影响，所以说应该及时的吃饭，如果说途中确实不方便进食，可以在出发前准备一些零食，水果，适当的吃饭可以增加饱腹感和血糖的控制。', 'img/ad/tangniaobing.png');
INSERT INTO `announce` VALUES ('5', '血糖高的危害有哪些', '危害一、 导致机体脱水及高渗性昏迷。高血糖致使大量葡萄糖随尿排泄，引起渗透性利尿，导致机体脱水。脱水使得细胞外液渗透压增高，水分由细胞内向细胞外转移引起细胞内失水，脑细胞失水可引起脑功能紊乱直至昏迷，临床上称之为”高渗性昏迷“。危害二、 导致电解质紊乱及酸中毒。高血糖时，病人的尿量明显增加，并从尿中带走大量电解质，导致电解质紊乱。同时，由于高血糖病人存在糖的利用障碍，转而通过分解脂肪产生能量，伴随着脂肪分解，酮体生成增加，导致”糖尿病酮症酸中毒“。危害三、 导致胰岛功能衰竭。高血糖对胰岛B细胞具有“毒性作用”，糖尿病患者如果长期出现高血糖，将导致胰岛功能衰竭、胰岛素分泌更少和病情进行性恶化。', 'img/ad/gaoxuetang.png');
INSERT INTO `announce` VALUES ('4', '风湿病人在生活中要注意什么', '风湿病人在生活中的禁忌有很多，如果不注意就会影响治疗的效果，下面一起来着重的来了解风湿病人生活需要注意的方面。1.生活规律。风湿病人生活的环境是有一定的要求的，比如说要在通风向阳的房间，不能睡在地上或者是风口的地方，另外，还要特别注意保证正常的作息时间，早睡早起，并且保证每天睡眠时间要达到七八个小时，生活中的这些小细节做好对于病情来说也是十分的重要的一个方面。2.身体锻炼。风湿病人因为身体的疼痛并不愿意动，其实这样是不对的，不能因为有风湿病就一直躺在床上不动弹，要在自己能够承受的范围之内进行适量的活动和锻炼，也可以选择散步等消耗小的一些活动，坚持锻炼可以活动关节，保持关节活动度，促进血液循环，延缓病情等，如果有条件的话还可以请专业的医生进行每天有必要的物理按摩，对病情恢复是有一定的好处的。3.注意保暖。风湿病的发病原因有很多，其中与寒冷潮湿有着密切的关系，所以说风湿病不管什么时候都要防寒，保暖，防潮湿等等，另外，可以采用各种防护用具，保护四肢，这样可以有效的避免病情的加重，出汗后应该马上擦干，避免风寒入体，夏天也是病情相对缓解的时候，这个时候也是治疗风湿病的最佳时机。', 'img/ad/fengshi.png');
INSERT INTO `announce` VALUES ('7', '生西红柿的功效与作用', '西红柿是生活中比较常见的水果和蔬菜，而且营养价值也是非常多的，西红柿的做法是各式各样的，很多人喜欢生吃，还有些人喜欢炒着吃，其实西红柿怎么吃，完全是根据自己爱好的，而且平时生吃西红柿好处是非常多的，那生西红柿的功效与作用有哪些呢?下面具体介绍生西红柿的功效与作用。1、杭血栓.西红柿杭血栓的作用好、可预防冠心病、心肌梗塞等疾病。西红柿以生吃最具有养生效益，一天吃一个西红柿已足够。若饮用西红柿汁，一天最好不要超过250毫升，且以无盐处理为佳。晨起正值水分不足之际，血液较易凝结，而西红柿具有补充水分、清洁血液的作用，将它榨汁或制作成沙拉，是预防血栓的良方。2、保护心脏.生吃西红柿能保护心脏，降低心脏病发病率。其原因是番茄红素有较强的抗氧化特性，能阻止氧自由基对心肌细胞的损伤，从而防止血中胆固醇转化为黏附于动脉壁上的脂质代谢物，使血管狭窄、血流受阻而引发心脏病。3、预防前列腺癌.地中海沿岸国家的男士患前列腺癌较少，与经常生食西红柿有关。', 'img/ad/xihongshi.png');
INSERT INTO `announce` VALUES ('3', '熬夜如何调理', '在熬夜时，应该注重让室内空气保持通畅并有一定的湿度。如果无法改变身处的环境质量（如酒吧、饭店、工厂生产线等），就更要在护理上稍微用心，使用含有充足水分和养分的乳液，易于皮肤吸收。一般而言，皮肤的作息时间是在晚上10∶00～11∶00点之间进入晚间保养状态。这样皮肤在下一个阶段虽然不能正常进入睡眠，却也能正常得到养分与水分的补充。睡前或起床后利用五至十分钟敷一下脸（可使用保湿面膜），来补充缺水的肌肤；起床后洗脸时利用冷、热交替剌激脸部血液循环；涂抹保养品时，先按摩脸部五分钟；早上起床后先喝一杯枸杞茶，有补气养身之效；做个简易柔软操，活动一下筋骨，让精神旺起来；早饭一定要吃饱，但是不能吃凉的食物。', 'img/ad/aoyetiaoli.png');
INSERT INTO `announce` VALUES ('2', '长期熬夜的危害有哪些', '熬夜会带来哪些危害?1、胃肠道问题。熬夜的人，剥夺了胃肠道休息的机会，导致消化性胃溃疡、十二指肠溃疡、功能性消化不良、腹胀、腹痛等。2、诱发心脑血管疾病。熬夜时人处于紧张状态，得不到放松，造成血管收缩异常，血压比正常人高，容易诱发高血压或者加重病情。现在心脑血管疾病发病率逐渐增多且越来越年轻化，常熬夜或是诱因之一。3、提高患癌风险。熬夜会让内分泌激素水平紊乱，使得细胞代谢异常，影响人体细胞正常分裂，导致细胞突变，提高四、患癌风险。4、夺走好视力。熬夜等于是超负荷用眼，对眼睛的伤害不仅仅是变成“熊猫黑眼圈”，更重要的是，长期熬夜、超负荷用眼，导致视力功能性减退。', 'img/ad/aoyeweihai.png');
INSERT INTO `announce` VALUES ('1', '每天应该喝多少水 你真的会喝水吗', '1.饮好水。尽量避免常饮纯水或蒸馏水（一般蒸馏水的水性太酸，容易伤害身体，对肾脏较弱的人士则更为不利）可选择优质的矿泉水。如可以的话，饮用碱性水对人体最有利；否则，在家用检验合格的滤水器过滤后再喝,最好不过了。2.饮暖水。夏日炎炎，很多人都会选择饮冰水，又或特意在水中加冰饮用。其实冰水对胃脏功能不利，饮和暖开水更为有益，因为这特别有助身体吸收使用，更有助肠3.不要饮水过量。不要以为饮水好处多就来个多多益善。饮水过多，会增加有关器官负担，可能引起不良后果。但所谓饮水不可过量，这只是指一般情况而言，并非不能多量，有时如人体发 热、腹泻、呕吐、多尿或昏迷以及炎热出汗时，都会失去大量水分，这就要补充水量；早晨人的血液凝固度比晚上大20倍，早晨锻炼者应多喝水，这样能把血液中可能产生的活化因子加以稀释，并经血液的冲刷作用又可把局部的凝血物冲散。同时也能补充运动和夜晚丢失的水分。', 'img/ad/shui.png');
INSERT INTO `announce` VALUES ('8', '喝大蒜水的副作用', '喝大蒜水的副作用:1、大蒜能使胃酸分泌增多，辣素有刺激作用，因此有胃肠道疾病特别是有胃溃疡和十二指肠溃疡的人不宜吃蒜。有肝病的人也不可以过量食用大蒜，有可能造成肝功能障碍虽然大蒜对肝脏又保护作用，但是大蒜对肝炎病毒没什么作用，反而会对胃肠产生刺激作用，抑制消化液的分泌，从而加重肝炎病人的恶心等多种症状。此外，大蒜的挥发性成分可降低血液中的红细胞和血红蛋白等而引起贫血，不利于肝炎的治疗。2、过量食用大蒜会影响视力。中医认为，长期大量地食用大蒜会\"伤肝损眼\"，因此眼病患者吃大蒜要慎重。特别是身体差、气血虚弱的病人更应注意，否则时间长了会出现视力下降、耳鸣、头重脚轻、记忆力减退等现象。', 'img/ad/dasuan.png');
INSERT INTO `announce` VALUES ('9', '芹菜根泡水喝的功效', '芹菜根的功效和作用：芹菜根煮水有降压的作用.芹菜的药性甘，辛，微苦，凉它的功效是:平肝，清热，祛风，利水，止血，解毒.主要治疗肝阳眩晕，风热头痛，咳嗽，黄疸，小便不利，尿血，崩漏，带下等病，可以治疗高血压，高血压动脉硬化，也可以降低胆固醇.是个效果不错的日常降压的食疗方法。芹菜根是治疗高血压的良药，大多数人知道芹菜具降压的功效，其实芹菜根的降压功效比它的茎和叶都要高。用芹菜根治疗高血压的最好方法就是用把一百克左右的芹菜根与三十克大蓟一起用水煎制后服用。芹菜根具镇静安神的作用。 芹菜根营养丰富，含多种微量原素，具镇静安神的功效。可以缓解人们心烦气燥的状态，同时也可以治疗失眠症。在治疗失眠时可以把九十克芹菜根与九克酸枣仁一起用水煎服，效果十分不错。芹菜根的消炎作用。芹菜根的消炎作用。芹菜根是一种天然的消炎良药，特别是对顽固性的气管炎良好的治疗效果。大家取九十克的芹菜根，然后与九克桔皮一起，煎后煮水，然后加入适量的蜂蜜一起服用。它可以迅速缓解人们的气喘症状。', 'img/ad/qincaigen.png');

-- ----------------------------
-- Table structure for `healthadvice`
-- ----------------------------
DROP TABLE IF EXISTS `healthadvice`;
CREATE TABLE `healthadvice` (
  `item` varchar(45) NOT NULL,
  `eat` varchar(200) NOT NULL,
  `sport` varchar(200) NOT NULL,
  `food1` int(2) DEFAULT NULL,
  `food2` int(2) DEFAULT NULL,
  `food3` int(2) DEFAULT NULL,
  `food4` int(2) DEFAULT NULL,
  `sport1` varchar(20) DEFAULT NULL,
  `sport2` varchar(20) DEFAULT NULL,
  `sport3` varchar(20) DEFAULT NULL,
  `sport4` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`item`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of healthadvice
-- ----------------------------
INSERT INTO `healthadvice` VALUES ('fat', '宜控制饮食，少吃纯糖和甜食，多吃纤维多的粮食蔬菜水果。', '保持适当运动，可以通过快走运动消耗热量。', '1', '2', '7', '12', '慢跑 90min', '登山', '有氧舞蹈', '跳绳 30min');
INSERT INTO `healthadvice` VALUES ('healthy', '身体指标正常，饮食习惯良好，请继续保持。', '身体指标正常，运动习惯良好，请继续保持。', '1', '6', '9', '4', '跑步 30min', '仰卧起坐 30次/组', '俯卧撑 20个/组', '跳绳 30min');
INSERT INTO `healthadvice` VALUES ('hypertension', '血压偏高，饮食上减少钠盐摄入，其他含钠高的调味品，如味精、酱油等均需控制摄入。', '每周保持中等强度运动4-7次，每次30-60分钟，减轻精神压力，保持心理平衡。', '6', '7', '8', '10', '走路 30min', '慢跑 20min', '骑车 30min', '太极拳');
INSERT INTO `healthadvice` VALUES ('hypotension', '血压偏低，注意营养均衡，根据医嘱食用适量盐，少食多餐，每餐不宜吃太饱。', '适当加强锻炼，保持良好精神状态。', '13', '9', '11', '4', '跳绳 20min', '仰卧起坐 30次/组', '慢走 90min', '健身操');
INSERT INTO `healthadvice` VALUES ('pulse', '脉压差大，请根据医嘱合理安排饮食。', '根据医嘱适当锻炼，保持良好精神状态。', '6', '8', '7', '10', '慢走 30min', '慢跑 20min', '骑车 30min', '太极拳');
INSERT INTO `healthadvice` VALUES ('thin', '科学饮食，若有偏食习惯，应适当改变，增加食物品种，精心搭配，均衡膳食，保证营养充足。', '加强锻炼，增强体质，促进营养吸收。', '3', '4', '5', '7', '俯卧撑 20个/组', '仰卧起坐 30次/组', '举哑铃', '跑步 30min');

-- ----------------------------
-- Table structure for `healthdata`
-- ----------------------------
DROP TABLE IF EXISTS `healthdata`;
CREATE TABLE `healthdata` (
  `Username` varchar(45) NOT NULL,
  `temperature` float(5,1) NOT NULL,
  `spressure` int(5) NOT NULL,
  `dpressure` int(5) NOT NULL,
  `heartRate` int(5) NOT NULL,
  `height` float(5,1) NOT NULL,
  `weight` float(5,1) NOT NULL,
  `waist` float(5,1) NOT NULL,
  `date` date NOT NULL,
  PRIMARY KEY (`Username`,`date`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of healthdata
-- ----------------------------
INSERT INTO `healthdata` VALUES ('123456', '36.1', '115', '85', '64', '180.0', '69.0', '71.0', '2020-05-29');
INSERT INTO `healthdata` VALUES ('123456', '36.4', '110', '88', '62', '180.0', '69.5', '70.0', '2020-05-30');
INSERT INTO `healthdata` VALUES ('123456', '36.3', '120', '90', '60', '180.0', '70.0', '70.0', '2020-05-31');
INSERT INTO `healthdata` VALUES ('123456', '36.0', '120', '90', '61', '180.0', '70.0', '70.0', '2020-06-01');
INSERT INTO `healthdata` VALUES ('123456', '36.2', '120', '90', '64', '180.0', '75.0', '64.0', '2020-06-02');
INSERT INTO `healthdata` VALUES ('123456', '36.3', '123', '80', '70', '180.0', '65.0', '70.0', '2020-06-03');
INSERT INTO `healthdata` VALUES ('123456', '36.5', '120', '90', '73', '180.0', '70.0', '80.0', '2020-06-04');
INSERT INTO `healthdata` VALUES ('123456', '36.6', '144', '55', '75', '180.0', '69.0', '75.0', '2020-06-05');
INSERT INTO `healthdata` VALUES ('123456', '36.5', '144', '90', '75', '180.0', '70.0', '75.0', '2020-06-09');
INSERT INTO `healthdata` VALUES ('123456', '36.5', '140', '90', '70', '180.0', '70.0', '75.0', '2020-06-10');
INSERT INTO `healthdata` VALUES ('123456', '36.3', '130', '80', '75', '182.0', '69.5', '84.0', '2020-06-11');
INSERT INTO `healthdata` VALUES ('2018212212304', '36.6', '114', '80', '71', '182.0', '69.0', '81.0', '2020-06-11');

-- ----------------------------
-- Table structure for `manager`
-- ----------------------------
DROP TABLE IF EXISTS `manager`;
CREATE TABLE `manager` (
  `Username` varchar(25) NOT NULL,
  `Password` varchar(20) NOT NULL,
  `name` varchar(25) NOT NULL,
  `phone` char(11) NOT NULL,
  `IDcard` char(18) NOT NULL,
  PRIMARY KEY (`Username`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of manager
-- ----------------------------
INSERT INTO `manager` VALUES ('zhanglibo', '123456', '章力博', '12345678999', '331081199913124567');

-- ----------------------------
-- Table structure for `menu`
-- ----------------------------
DROP TABLE IF EXISTS `menu`;
CREATE TABLE `menu` (
  `id` int(5) NOT NULL,
  `fname` varchar(25) NOT NULL,
  `fprice` float(5,2) NOT NULL,
  `fpicture` varchar(45) NOT NULL,
  `feffect` varchar(200) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of menu
-- ----------------------------
INSERT INTO `menu` VALUES ('1', '燕麦粥', '8.00', 'img/food/yanmaizhou.jpg', '燕麦可以有效降低人体中的胆固醇，对心脑血管病起到一定预防作用。经常食用燕麦对糖尿病患者也有非常好的降糖、减肥的作用。');
INSERT INTO `menu` VALUES ('2', '红豆薏米水', '5.00', 'img/food/yimishui.jpg', '薏仁是纯天然的瘦身美容食品，常食可以保持人体皮肤光泽细腻、消除粉刺、雀斑等，且薏米具有降脂减肥的作用。');
INSERT INTO `menu` VALUES ('3', '冬瓜薏米排骨汤', '20.00', 'img/food/paigutang.jpg', '薏仁米是良药兼用食品，具有食用保健和医用治疗之功效。');
INSERT INTO `menu` VALUES ('4', '鸡蛋饼', '5.00', 'img/food/jidanbing.jpg', '鸡蛋营养丰富，是各种食物中优质蛋白质含量最高的。此外，鸡蛋还富含胆固醇、氨基酸、维生素A、维生素D等人体必需的元素。');
INSERT INTO `menu` VALUES ('5', '糖醋山药', '15.00', 'img/food/shanyao.jpg', '山药能补脾胃亏损，治气虚衰弱、消化不良等，除体内寒热邪气，补中，益气力，长肌肉。');
INSERT INTO `menu` VALUES ('6', '排骨海带汤', '20.00', 'img/food/haidaitang.jpg', '海带富含碘元素，对于合成甲状腺素有着非常明显的作用，进而促进机体合成代谢、促进营养素的合成方面作用会非常明显。');
INSERT INTO `menu` VALUES ('7', '牛油果烤蛋', '15.00', 'img/food/niuyouguokaodan.jpg', '牛油果肉富含以不饱和脂肪酸为主的油脂、多种矿物质和维生素等，且不含胆固醇，含糖量低，具有良好的护肤、防晒和保健作用。');
INSERT INTO `menu` VALUES ('8', '蔬菜鸡蛋沙拉', '10.00', 'img/food/jidanshala.jpg', '水果中含有丰富的维生素C、维生素A以及人体必需的各种矿物质、大量的水分和纤维质，可以促进健康，增强免疫力。');
INSERT INTO `menu` VALUES ('9', '温泉蛋牛肉丼饭', '25.00', 'img/food/niuroujingfan.jpg', '寒冬食牛肉，有暖胃作用，为寒冬补益佳品。中医认为：牛肉有补中益气、滋养脾胃、强健筋骨、化痰息风、止渴止涎的功能。适用于中气下陷、气短体虚，筋骨酸软和贫血久病及面黄目眩之人食用。');
INSERT INTO `menu` VALUES ('10', '胡萝卜玉米焖饭', '15.00', 'img/food/yumimenfan.jpg', '可增加冠状动脉血流量，促进肾上腺素合成，有降压、消炎之功效。提高机体防癌抗癌能力，益肝明目，抗氧化、延缓衰老，预防感冒。');
INSERT INTO `menu` VALUES ('11', '金银花炖鸡汤', '50.00', 'img/food/jitang.jpg', '能够温中益气，因为从中医食疗的角度上来讲鸡汤性味甘、温，对于手脚冰凉、腹寒胀气、气虚体弱、面色苍白的人，适当喝鸡汤有很好的温中益气、增进身体素质的作用。');
INSERT INTO `menu` VALUES ('12', '蔬菜汤', '15.00', 'img/food/shucaitang.jpg', '对预防疾病、提高自身免疫力和抗病力有显著的效果，还具有滋养五脏、理气消滞、调理阴阳、补肾益气、固本培元的功效。因其具有增强人体免疫和抗氧化之功能，故可强身健体、重现活力、延缓衰老。');
INSERT INTO `menu` VALUES ('13', '豉油鸡蛋', '3.00', 'img/food/dan.jpg', '鸡蛋营养丰富，是各种食物中优质蛋白质含量最高的。此外，鸡蛋还富含胆固醇、氨基酸、维生素A、维生素D等人体必需的元素。');

-- ----------------------------
-- Table structure for `orderhistory`
-- ----------------------------
DROP TABLE IF EXISTS `orderhistory`;
CREATE TABLE `orderhistory` (
  `username` varchar(45) NOT NULL,
  `food` varchar(45) NOT NULL,
  `date` date NOT NULL,
  PRIMARY KEY (`username`,`food`,`date`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of orderhistory
-- ----------------------------
INSERT INTO `orderhistory` VALUES ('123456', '11', '2020-06-11');
INSERT INTO `orderhistory` VALUES ('123456', '13', '2020-06-11');
INSERT INTO `orderhistory` VALUES ('123456', '5', '2020-06-11');
INSERT INTO `orderhistory` VALUES ('123456', '9', '2020-06-11');
INSERT INTO `orderhistory` VALUES ('2018212212304', '3', '2020-06-11');
INSERT INTO `orderhistory` VALUES ('2018212212304', '4', '2020-06-11');
INSERT INTO `orderhistory` VALUES ('2018212212304', '5', '2020-06-11');
INSERT INTO `orderhistory` VALUES ('2018212212304', '7', '2020-06-11');

-- ----------------------------
-- Table structure for `user`
-- ----------------------------
DROP TABLE IF EXISTS `user`;
CREATE TABLE `user` (
  `Username` varchar(45) NOT NULL,
  `Password` varchar(45) NOT NULL,
  `name` varchar(20) NOT NULL,
  `sex` char(5) DEFAULT NULL,
  `birthday` date DEFAULT NULL,
  `phone` char(11) NOT NULL,
  `Email` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`Username`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of user
-- ----------------------------
INSERT INTO `user` VALUES ('123456', '123456', '123', '男', '1999-12-07', '15824085190', null);
INSERT INTO `user` VALUES ('2018212212304', '212304', '谢声鹏', '男', '1999-12-07', '15824085190', '1104340863@qq.com');
