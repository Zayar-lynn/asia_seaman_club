-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 14, 2019 at 08:00 PM
-- Server version: 10.1.31-MariaDB
-- PHP Version: 7.2.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `laravel_ascyyk`
--

-- --------------------------------------------------------

--
-- Table structure for table `accounts`
--

CREATE TABLE `accounts` (
  `id` int(10) UNSIGNED NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `data_id` int(11) NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `admin_blogs`
--

CREATE TABLE `admin_blogs` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `photo` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `admin_blogs`
--

INSERT INTO `admin_blogs` (`id`, `title`, `photo`, `description`, `created_at`, `updated_at`) VALUES
(1, 'Maritime Industry Eyes Blockchain for Seafarer Certification', '5cb2b9de9d7f5_blockchain1-320x192.jpg', 'The consortium brings together multiple stakeholders who either rely on, or support crew certification. These include shipping companies, including Danish shipping major, Maersk, tanker operator Heidmar, and PTC Holdings Corp. Also included are technology enablers Hanseaticsoft, maritime platforms providers Navozyme and C-LOG, as well as international seafarer welfare charity The Mission to Seafarers.\r\n\r\nThe demonstrator scope will focus on an end-to-end demonstration of a digital certification and endorsement process utilising a digital repository for verified crew documentation, training logs and approval system.\r\n\r\nSpecifically, the focus will be upon the STCW certificate issuance and relevant supporting documentation from engineering officers located in multiple jurisdictions and the endorsement of recognition from a maritime authority for vessel embarkation and disembarkation.\r\n\r\nUpon validation and scaling, the final solution would enable individual seafarers to manage their certificate repository from original issuance, for maritime administrations to manage the renewal and endorsement across jurisdictions, for crew management organizations to manage seafarers for crewing of vessels and for vessel owners to receive an overview of their crew, certificates and endorsements.\r\n\r\n“Building and maintaining an intuitive and user-friendly platform for the management of crew certification will bring hugely significant benefits to all stakeholders. We are looking forward to developing and building the solutions with the consortium,” Graeme Thomson, Head of Northern Europe Manning Office from Maersk, said.', '2019-04-13 22:11:02', '2019-04-13 22:11:02'),
(2, '700 Jobs Safe as Norway Says No to Color Line Reflagging', '5cb2ba11b091a_seafarer-1-320x235.jpg', 'The Norwegian Seafarers Union (NSU), an affiliate of the International Transport Workers’ Federation, won the fight to keep the vessels under the Norwegian Ordinary Ship Register (NOR), securing the jobs and maintaining the wages and conditions of the country’s seafarers.“This result means that Color Line – a profitable shipping company – cannot replace national seafarers with cheaper foreign labour,” Johnny Hansen, NSU president, told the ITF.', '2019-04-13 22:11:53', '2019-04-13 22:11:53'),
(3, 'Deal Reached on Higher Seafarer Wages', '5cb2ba728554f_seafarers-320x221.jpg', 'Following two days of negotiations, the International Transport Workers’ Federation (ITF) and the International Chamber of Shipping (ICS), convened in Geneva at the Joint Maritime Commission (JMC) subcommittee on seafarers wages to review the International Labour Organization (ILO)’s minimum seafarer wage\r\n\r\nIt has been agreed to update the minimum wage for an able seafarer by USD 27 over the next three years. The wages will provide an overall increase of 4.5 percent on the current rate of USD 614, with an increase of USD 4 as of  July 1, 2019, followed by an increase of USD 7 as of January 1, 2020 and a final increase of USD 16 as of January 1, 2021.\r\n\r\nThe change was ascribed due to the calculation that the USD 614 wage was below the purchasing power stated in the ILO report prepared for the meeting. This is in particular due to economic forecasts and the volatility of the shipping industry.\r\n\r\n“This was a difficult negotiation with two very different assessments about what the future holds for shipping and seafarers,” admitted Mark Dickinson, spokesperson for the seafarers’ group.\r\n\r\n“There was strong opposition from the shipowners’ side for a significant increase. However, I am pleased that at the end pragmatism and common sense prevailed and the social partners worked their way forward to recognise the fundamental role seafarers play within the industry.\r\n\r\n“We will continue to work together to find ways to ensure that the ILO formula used as the basis for these negotiations is fair and reflects the reality for seafarers, but the impact of this session of the JMC negotiation on the global seafaring community is undoubtedly a good and equitable result,” he added.', '2019-04-13 22:13:30', '2019-04-13 22:13:30'),
(4, 'APM Terminals Launches The Gothenburg Gateway', '5cb2ba9eb17b3_apm-terminals-gothenburg-320x219.jpg', 'The Gothenburg Gateway combines fast, efficient freight trains from all over Sweden to Gothenburg, an efficient container port that loads between trains and ships, as well as more ocean-going vessels calling the port.\r\n\r\n“Via The Gothenburg Gateway it should take a maximum of 24 hours to reach Gothenburg by freight train, and a maximum of 48 hours in total to place a container on an ocean-going vessel,” Henrik Kristensen, CEO APM Terminals Gothenburg, said.\r\n\r\nAsian markets one week closer\r\n\r\n“We analyzed how long it takes for a container to reach Shanghai – an important Asian market for Sweden. The Gothenburg Gateway will help reduce this time by at least one week, as well as offering an efficient and climate-smart solution.”\r\n\r\nIn the future, APM Terminals wants to service Sweden with three ocean-going vessels per week in order to provide the most competitive delivery solution.\r\n\r\n“We now want to take the next step and further develop our port, develop logistics to and from the port, and develop logistics solutions around the port,” continues Kristensen.\r\n\r\n“The Gothenburg Gateway is a concept to ensure future growth for Swedish industry and trade,” he concludes.\r\n\r\nDuring the launch of the concept, the mayor of Gothenburg, Axel Josefson, said that he believed the initiative in Gothenburg should be given priority. He emphasised the importance of planned investments for dredging and the rail network happening as soon as possible.', '2019-04-13 22:14:14', '2019-04-13 22:14:14'),
(5, 'Pacific Basin to Add Supramax Trio', '5cb2bac981336_img34_o-1024x683-1-320x213.jpg', 'During the first quarter of 2018, the shipping company also took delivery of two secondhand vessels – one Handysize and one Supramax. What is more, Pacific Basin accepted delivery of a Supramax bought in late 2018 and completed the sale of an older, small Handysize bulker.\r\n\r\nThese acquisitions will increase the company’s owned fleet to 115 units by July. Including chartered ships, Pacific Basin operated an average of 220 ships overall during the first quarter of this year.\r\n\r\nFrom January to March this year, the company generated average Handysize and Supramax daily time-charter equivalent (TCE) earnings of USD 9,080 and USD 10,400 per day net, representing a 3% and 8% reduction compared to the same period in 2018.\r\n\r\nAs of April 9, Pacific Basin has secured 36% of its 29,410 contracted Handysize revenue days at around USD 9,360 per day net and 58% of its 14,020 contracted Supramax revenue days at around USD 10,690 per day net for the remaining three quarters of 2019.\r\n\r\nAs explained, the dry bulk freight market in 2019 has started weaker than the last two years due to trade war uncertainty and Chinese import policies. This led to weak spot market rates in the first quarter overall.\r\n\r\nHowever, the company’s Handysize and Supramax markets improved significantly during the second half of the quarter with marked increases of 58% in the Baltic Handysize Index (BHSI) and 38% in the Baltic Supramax Index (BSI).\r\n\r\nIn contrast, the larger Capesize vessel segment has seen little recovery and continued to weaken throughout the first quarter.\r\n\r\nReferring to the outlook for 2019 which has been revised downwards due to the softening market, Pacific Basin said that a resolution to the trade conflict between the US and China would provide “a welcome boost to the market”.\r\n\r\nThe company added that IMO 2020 sulphur preparations should lead to increased supply disruptions in H2, which could compound dry bulk market strength that typically builds in Q3 and Q4.\r\n\r\n“Despite short term volatility and in view of the combination of continued healthy growth in minor bulk demand and reducing Handysize and Supramax fleet growth, we continue to believe that the longer term fundamentals for our vessel segments are positive,” Pacific Basin concluded.', '2019-04-13 22:14:57', '2019-04-13 22:14:57'),
(6, 'Port Houston Speeds Up Widening of Houston Ship Channel', '5cb2baeff10fb_jms1947-768x513-1-320x214.jpg', 'This project will be the eleventh significant widening and deepening of the channel since its conception, Houston port said.\r\n\r\n“The Houston Ship Channel is open for business for all and will continue to be,” said Chairman Ric Campo.\r\n\r\nThe commission was briefed on measures to make sure widening of the entire Galveston Bay reach of the ship channel is part of the next Houston Ship Channel dredging project. The commission also directed staff to bring it proposals for port authority and industry funding to support the accelerated effort.\r\n\r\nIn addition, after careful consideration of interim measures to address growing traffic, the commission adopted a resolution to further maximize current two-way traffic transiting the Houston Ship Channel.\r\n\r\nThe commission also budgeted USD 500,000 to support a traffic efficiency group for the channel.', '2019-04-13 22:15:36', '2019-04-13 22:15:36'),
(7, 'Stolt-Nielsen Foresees Impact from Houston Ship Channel Fire', '5cb2bb1a0b075_stolt-nielsen-foresees-impact-from-houston-ship-channel-fire-320x205.jpg', 'already impacting the local chemical industry, including both transportation and storage,” Niels G. Stolt-Nielsen, CEO of Stolt-Nielsen Limited, commented.\r\n\r\n“We are at a minimum expecting a negative impact on Stolt Tankers, as parts of the Houston Ship Channel have been closed to traffic, causing delays. We continue to follow the situation closely, as the full impact is unclear at this point.”\r\n\r\nThe Oslo-listed company reported USD 501.9 million of revenue for the first quarter ended February 28, 2019, compared to a revenue of USD 515.3 million reported in the same period a year earlier.\r\n\r\nStolt-Nielsen’s net profit dropped to USD 6.6 million in the period from USD 38.8 million delivered in the first quarter of 2018.\r\n\r\n“Stolt-Nielsen Limited’s first-quarter results were in line with expectations,” Stolt-Nielsen said.\r\n\r\n“Freight rates and volumes overall were stable at Stolt Tankers. Results at Stolthaven Terminals were steady when excluding the impairments taken in the prior quarter, reflecting stable market conditions and operations. At Stolt Tank Containers, first-quarter results were down in line with seasonal expectations, though market softness remains, with intensified price competition.”\r\n\r\nStolt Tankers reported an operating profit of USD 14.3 million, up from USD 7.7 million delivered in the previous quarter, mainly reflecting a USD 3.4 million bunker-hedge gain in the quarter.\r\n\r\nStolthaven Terminals’ operating profit was at USD 18 million, up from USD 11.7 million in the fourth quarter of 2018, while Stolt Tank Containers reported an operating profit of USD 15.7 million down from USD 18.1 million quarter-on-quarter.', '2019-04-13 22:16:18', '2019-04-13 22:16:18'),
(8, 'Avenir LNG Finalizes USD 110 Mn Private Placement', '5cb2bb54e6aed_flex-lng-to-buy-five-lng-newbuildings-300x160.jpg', 'he private placement of 110 million new shares, at a par price of USD 1 per share, represents the first step in the capitalisation of Avenir.\r\n\r\nThe placement was split in two tranches, with tranche A consisting of 99 million new shares that were subscribed for by Stolt-Nielsen (49.5 million shares), Golar LNG (24.75 million shares) and Höegh LNG (24.75 million shares). This tranche has closed.\r\n\r\nTranche B consisted of 11 million new shares and was placed with a group of institutional and other professional investors on November 8. It was scheduled to close on November 13, 2018.\r\n\r\nStolt-Nielsen will hold 45% of the shares, each of Golar LNG and Höegh LNG will hold 22.5% while the remainder will be initially held by the subscribers in tranche B.\r\n\r\nThe company’s shares will be listed on the N-OTC list with effect from November 14, 2018.\r\n\r\nAt the beginning of October 2018, Stolt-Nielsen, Golar LNG and Höegh LNG announced a combined investment commitment of USD 182 million in Avenir LNG Ltd and a contemplated subsequent equity raise in the company.\r\n\r\nThe parties explained that the investment would be contributed as cash and equity-in-kind and would partly fund the construction of four 7,500 cbm small-scale LNG carriers currently under construction at Keppel Singmarine in Nantong, China, two 20,000 cbm small-scale LNG carriers on order from Sinopacific Offshore Engineering in Nantong, China and 80% ownership in an LNG terminal and distribution facility under development in the Italian port of Oristano, Sardinia.', '2019-04-13 22:17:17', '2019-04-13 22:17:17'),
(9, 'Drewry: Proposed US Auto Tariffs to Affect East-West Trade Routes', '5cb2bb7513df4_car-carrier-320x219.jpg', 'We also assume some US importers will absorb all or part of the extra cost, while others will delay their decision and that some foreign finished vehicle producers may lower their prices to protect sales.”\r\n\r\nDrewry’s study explored the impact of three different tariff scenarios; a low-intensity scenario with 5% tariffs imposed on all US imports of finished vehicles and auto parts, a medium-intensity scenario at 15% and a high-intensity scenario with 25% tariffs imposed.\r\n\r\nThe results showed that the volume of US finished vehicle and auto parts imports will likely be adversely impacted, with the most negative effect expected between 2020-2021. The US ports which would be most affected include Baltimore, Los Angeles/Long Beach and the Port of New York/New Jersey, Drewry said.\r\n\r\nRegarding eastbound Transpacific trade routes, Japan, which holds 67% of the eastbound finished vehicle imports trade, is the sourcing country most exposed to tariffs. China is most exposed to the auto parts tariffs, holding 61% of the eastbound auto parts imports trade;\r\n\r\nIn the westbound Transatlantic trade route, Germany is the sourcing country most exposed to the Trump auto tariffs as it holds 63% of the westbound finished vehicle imports trade, and 78% of the westbound auto parts westbound trade.\r\n\r\n“Any imposition of US tariffs on European cars and auto parts would represent a significant escalation of transatlantic tensions between the US and the EU and given the importance of these commodities could lead to a serious escalation,” Martin Dixon, Drewry’s director of research products, said.', '2019-04-13 22:17:49', '2019-04-13 22:17:49'),
(10, 'BIMCO: Tariffs Affect 27.4 Mn Tonnes of US Imports', '5cb2bbac85afd_containership-320x195.jpg', 'With many stocks full and uncertainty regarding the outcome of ongoing trade talks between China and the US, it seems doubtful that the levels of frontloading seen at the end of 2018 will continue into 2019,” the shipping association said.\r\n\r\nAdditionally, any future fall in container imports by the US and in particular the US West Coast, which is where most of the tariffed goods from China are discharged, “will be particularly harmful for the container shipping industry.”\r\n\r\nThis is because the volume of containers will be reduced on the fronthaul leg of the transpacific trade lane. The fronthaul volumes are the capacity setters as they are much higher than those on the backhaul leg. Any lowering of volumes on the trade lane from the Far East to the US will reduce the shipping capacity needed, the shipping association explained.\r\n\r\n“A decrease in fronthaul volumes would result in excess capacity leading to lower utilisation which would in turn reduce freight rates and earnings on the transpacific network,” Peter Sand, BIMCO’s Chief Shipping Analyst, said.', '2019-04-13 22:18:44', '2019-04-13 22:18:44'),
(11, 'ႏိုင္ငံျခားခရီးမွာ ပတ္စပိုစ့္ ေပ်ာက္သြားခဲ့ရင္', '5cb3434d73066_img34_o-1024x683-1-320x213.jpg', '💪🏻 ဘယ္လိုလုပ္ရမလဲ .. 💪👇👇👇\r\n\r\nေတြးၾကည့္တာနဲ႔တင္ ေတာ္ေတာ္ေလးစိတ္ညစ္စရာေကာင္းတယ္မဟုတ္လား.. ငါဟာ ျမန္မာျပည္ကို ဘယ္လိုျပန္ရမလဲ ဆိုတဲ့အေတြးေတြ အရင္ဆံုးဝင္လာၿပီး သြားေနတဲ့ ခရီးမွာ မေပ်ာ္ေတာ့ စိတ္မပါေတာ့တာေတြ ျဖစ္လာေရာ.. ဒါေၾကာင့္ မေပ်ာက္ေအာင္ေတာ့ ေသခ်ာေလး ထိန္းသိမ္းဖို႔လိုတယ္.. သတိထားဖို႔လိုတယ္.. ထိန္းသိမ္းေနတဲ့ ၾကားက ေပ်ာက္သြားတာတို႔ ခါးပိုက္ႏိူက္ခံရတာတို႔လဲ ျဖတ္တတ္ပါေသးတယ္..\r\n\r\nဘယ္လိုမ်ိဳးျပင္ဆင္ထားသင့္သလဲ.. 👇👇👇\r\n\r\nခရီး မထြက္ခင္ထဲက မိမိ ပတ္စပိုစ့္ စာအုပ္ရဲ႕ ဓါတ္ပံုပါတဲ့ စာမ်က္ႏွာကို ဓါတ္ပံု႐ိုက္ပါ.. ဗီဇာလိုတဲ့တိုင္းျပည္ ဆိုရင္ ဗီဇာစာမ်က္ႏွာကိုပါ ဓါတ္ပံု႐ိုက္ထားပါ.. ေလယာဥ္လက္မွတ္ အသြားအျပန္ကိုလဲ ဓါတ္ပံု႐ိုက္ပါ..အဲ့ဒီဓါတ္ပံုေတြကို ဖုန္းထဲမွာတင္မက email ထဲမွာ ပါ save ထားပါ..\r\n\r\nေပ်ာက္သြားခဲ့ၿပီဆိုရင္.. 👌🏻👌🏻\r\n\r\n1. အရင္ဆံုး စိတ္ၿငိမ္ၿငိမ္ထားပါ.. \r\n2. ေဘးနားက ခရီးသြားေဖာ္ ျဖစ္ျဖစ္ တိုးနဲ႔သြားေနတဲ့ သူဆိုရင္ တိုးလီဒါကို ေျပာျပလိုက္ပါ \r\n3. Google Maps မွာ Police station လို႔ ႐ိုက္ထည့္ၿပီး အနီးဆံုးရဲစခန္းကို သြားလိုက္ပါ \r\n4. မသြားတတ္ရင္ ကိုယ္ေနတဲ့ ဟိုတယ္ကို police station ဘယ္မွာလဲလို႔ေမးၾကည့္လို႔ရပါတယ္ \r\n5. ရဲစခန္း ေရာက္ရင္ ကိုယ္ေပ်ာက္သြားတဲ့ ေနရာနဲ႔ ေပ်ာက္သြားတဲ့ အေၾကာင္း ( အခိုးခံရရင္ ) ကို ေျပာျပပါ.. ဖုန္းထဲက ပတ္စပိုစ့္ ဓါတ္ပံု ႐ိုက္ထားတဲ့ အခ်က္အလက္ေတြနဲ႔ ျပန္မယ့္ရက္ ေလယာဥ္လက္မွတ္ကို ျပၿပီး ပ်ာက္ဆံုးေၾကာင္းေထာက္ခံစာ ေတာင္းပါ.. \r\n6. ဖုန္းထဲက ဓါတ္ပံု႐ိုက္ထားတဲ့ ပတ္စပိုစ့္ ကို print ထုတ္ပါ.. ျဖစ္ႏိုင္ရင္ မိမိဓါတ္ပံု တစ္ပံုပါ ထုတ္ပါ \r\n7. ရဲစခန္း ေထာက္ခံစာ.. ေလယာဥ္လက္မွတ္.. ပတ္စပိုစ့္ မိတၱဴတို႔နဲ႔ အတူ ျမန္မာသံရံုးသို႔သြားပါ\r\n\r\nသံရံုးမွာ ျမန္မာျပည္ ျပန္လို႔ရေအာင္ စာရြက္ထုတ္ေပးပါလိမ့္မယ္.. သံရံုး ေပၚမူတည္ၿပီး ၾကာခ်ိန္ နဲ႔ ကုန္က် စရိတ္ ကြာပါမယ္.. ျပင္သစ္မွာေတာ့ ယူ႐ို ၁၀ ပဲေပးရပါတယ္.. သံရံုးမသြားခင္ ႀကိဳတင္ ဖုန္းဆက္ၿပီး လိုအပ္မယ့္ အခ်က္အလက္ေတြ နဲ႔ သံရံုး ဖြင့္ပိတ္ခ်ိန္မ်ားကို အရင္ ေမးျမန္းလို႔ရပါတယ္.. အကယ္လို႔ ကိုယ္က ျမန္မာသံရံုးမရွိတဲ့ ၿမိဳ႕မွာ ေရာက္ေနရင္ေတာ့ရဲစခန္း ေထာက္ခံစာ ကို ရေအာင္ယူၿပီး ျမန္မာသံရံုးကို အရင္ဖုန္းဆက္အေၾကာင္းၾကားထားဖို႔လိုပါမယ္..\r\n\r\n📍📍📍 သံရံုးမရွိတဲ့ ႏိုင္ငံကိုသြားမယ္ဆိုရင္ေတာ့ ပတ္စပိုစ့္ကို လံုးဝမေပ်ာက္ေအာင္ ထိန္းသိမ္းဖို႔လိုတယ္. ဘာလို႔လဲ ဆိုေတာ့ ေပ်ာက္ၿပီဆို အရမ္းအလုပ္႐ူပ္တယ္.. ပိုက္ဆံလဲကုန္.. အခ်ိန္လဲ ယူရတယ္..\r\n\r\nေပ်ာက္ၿပီဆိုရငိ .. ဥပမာ အာဖရိကဆိုရင္ ေတာင္အာဖရိကမွာပဲ သံရံုးရွိတယ္ထင္တယ္ သူနဲ့တြဲကိုင္တဲ့ သံရံုးေတြရွိတယ္ အဲ့ကိုအေၾကာင္းၾကားရတယ္..\r\n\r\nဥပမာ ေတာင္အေမရိကမွာဆို ဘရာဇီးမွာပဲသံအမတ္ႀကီးရွိတယ္ .. သူက ကိုလံဘိယာ ခ်ီလီ အာဂ်င္တီနားစတဲ့နိုင္ငံေတြနဲ႔ တြဲကိုင္တယ္..\r\n\r\nအေပၚမွာေျပာတဲ့ အခ်က္အလက္ေတြ နဲ႔သူတို့ကို စာတိုက္ကေနပို့ေပးရင္ရတယ္.. DHL နဲ႔ျဖစ္ျဖစ္ေပါ့.. ျပန္လို႔ရတဲ့ စာကို သူတို႔က လဲ စာတိုက္ကေနျပန္ပို႔ေပးပါတယ္ .. တပတ္ေလာက္ေတာ့ ၾကာႏိုင္ပါတယ္.. ဒါေၾကာင့္ သံရံုးမရွိတဲ့ႏိုင္ငံမွာ လံုးဝ မေပ်ာက္ပါေစနဲ႔ ❌❌❌', '2019-04-14 07:57:25', '2019-04-14 07:57:25'),
(12, 'ျမန္မာေတြအသြားမ်ားတဲ့ ႏိုင္ငံေတြရဲ႕ ျမန္မာသံရံုး ဖုန္းနံပါတ္ နဲ႔ လိပ္စ', '5cb3439d1c084_images (11).jpg', 'ျမန္မာေတြအသြားမ်ားတဲ့ ႏိုင္ငံေတြရဲ႕ ျမန္မာသံရံုး ဖုန္းနံပါတ္ နဲ႔ လိပ္စာေတြပါ ေဖာ္ျပေပးလိုက္ပါတယ္..\r\n\r\nThe Embassy of the Union of Myanmar\r\n\r\n1 ) Thailand - Address: 110 Sathon Nua Road,Bangkok 10500,Thailand/\r\nPhone : (+66) 2233 2237 / 2234 4698\r\n\r\n2) Singapore – Address: 15 St. Martin\'s Drive,Singapore 257996, Singapore\r\nPhone : (+65) 6735 0209\r\n\r\n3) Vietnam , Hanoi – Address: 298 A, Kim Ma Street,Hanoi,Vietnam \r\nPhone : (+84) (24) 3845 3369\r\n\r\n4) Cambodia, Phnom Penh – Address: 181 Preah, Norodon Boulevard,Boeung Keng Kang 1,Khan Chamcarmon,Phnom Penh,Cambodia \r\nPhone: (+855) (23) 223 761 / 2\r\n\r\n5) China, Beijing – Address: No. 6, Dong Zhi Men Wai Da Jie, Chao Yang District, Beijing 100600,China\r\nPhone: (+86) 10 6532 0351 ext: 24\r\n\r\n6) Hong Kong –Address: Rooms 2401-2405, Sun Hung Kai Centre 30, Harbour Road,Wanchai,Hong Kong\r\nPhone: (+852) 2845 0810 / 1\r\n\r\n7) Malaysia,Kuala Lumpar – Address: No. 8, Jalan Ampang Hilir, 55000 Kuala Lumpur, Malaysia\r\nPhone: (+60) 3 4251 6355/ (+60) 3 4251 5595\r\n\r\n😎 Indonesia, Jakarta – Address: 109 Jalan Haji Agus Salim,Menteng,Jakarta Pusat 10350, Indonesia\r\nPhone: (+62) (21) 315 8908/ (+62) (21) 315 9095\r\n\r\n9) Laos, Vientiane – Address: Lao-Thai Road,Watnak Village,Sisattanak District,P.O. Box No. 11,Vientiane, Laos\r\nPhone: (+856) (21) 314 910 / 1\r\n\r\n10) India, Delhi – Address: 3/50 F, Nyaya Marg,Chanakyapuri,New Delhi 110021,India\r\nPhone: (+91) 11 2467 8822 / 3\r\n\r\n11) Nepal, Kathmandu – Address: Plot No. 997, Nakkhu Height,Sainbu Bhainsepati 4/Ga, Lalitpur,P.O.Box 2437,Kathmandu, Nepal\r\nPhone: (+977) (1) 559 2774 / (+977) (1) 559 2841\r\n\r\n12) Japan, Tokyo- Address: Shinagawa-ku, 4-8-26 Kita-Shinagawa, Tokyo 140-0001,Japan\r\nPhone: (+81) (3) 3441-9291\r\n\r\n13) Korea, Seoul – Address: Hannam-daero 28 – gil 12, Yongsan-gu, Seoul 140-210, Korea (Republic)\r\nPhone: (+82) (2) 790 3814\r\n\r\n14) France, Paris – Address: 60, Rue de Courcelles, 75008 Paris, France\r\nPhone: (+33) 1 5688 1590 / 1\r\n\r\n15) Belgium, Brussels – Address: Boulevard Général Wahis 9,1030 Brussels,Belgium \r\nPhone: (+32) 2-701 9381 / 7 / 8\r\n\r\n16) Germany, Berlin – Address: Thielallee 19,14195 Berlin,Germany \r\nPhone: (+49) 30 206 15 70\r\n\r\n17) Italy,Rome – Address: Villa Myanmar, Viale Cortina D\'Ampezzo No. 50, 00135, Rome,Italy\r\nPhone: (+39) 06 363 03 753 (+39) 06 363 04 056\r\n\r\n18) Austria,Vienna – Address: Donau-City-Strasse 6, Top 9.OG/1 (Andromeda Tower),1220 Vienna\r\nAustria\r\nPhone: (+43) 1 26 69 105\r\n\r\n19) UK, London – Address: 19A Charles Street,London W1J 5DX,United Kingdom\r\nPhone: (+44) 20 7499 4340\r\n\r\n20) Ausstralia , Canberra – Address: 22 Arkana Street, Yarralumla, Canberra ,A.C.T 2600, Australia\r\nPhone: 2733811,2733751\r\n\r\n21) Egypt, Cairo –Address: No. 24, Mohamed Mazhar St.Zamalek, Cairo 11211\r\nPhone: (202) 736 2644, 735 4176, 735 1568\r\n\r\n22) Israel, TelAviv – Address: 26 Hayarkon Tel-Aviv 68011\r\nPhone: +972-3-517 0760, 517 0761\r\n\r\n23) Brazil, Brasilia – Address: SHIS QL 08, Conjunto 14 Casa 05, Lago Sul 71620-245 Brasilia-DF\r\nPhone: 00-55-61-2483747, 00-55-61-3643145\r\n\r\n24) Canada, Ottawa – Address: The Sandringham Building ,85 Range Road, Suite 902-903, Ontario KIN 8J6\r\nPhone: (613) 232-6434\r\n\r\n25) Russia, Moscow - Address: 41. Ul. B. Nikitskaya (Gertsena), Moscow, Russia\r\nPhone: (007) (095) 291 05 34\r\n\r\n26) South Africa, Pretoria – Address: 319 Murray St., Brooklyn, Pretoria, P.O. Box 12121\r\nPhone: 27-12-460 6544, 27-12-460 4333\r\n\r\n27) Switzerland, Geneva – Address: Permanent Mission of the Union of Myanmar to the United Nations\r\n47, Avenue Blanc, 1202 Geneva, Switzerland\r\nPhone: (0041-22) 731 75 40/731 75 49\r\n\r\n28) United States, Washington DC – Address: Embassy of Myanmar in Washington, United States\r\n2300 S Street, NW, Washington DC 20008, United States\r\nPhone: (202) 332-3344, (202)332-4350, (202)332-4352\r\n\r\n29) New York – Address: 10 East 77th Street, New York 10021, United States\r\nPhone: (+1) (212) 744-1271\r\n\r\n30) Philippines, Manila - Address: 4th Floor, XANLAND Centre, 152, Amorsolo Street\r\nLegaspi Village, Makati City, Manila, Philippines\r\nPhone: (0063-2) 817-2373, 812-9587\r\n\r\nအခုေလာက္ဆိုရင္ေတာ့ ပတ္စပိုစ့္ ေပ်ာက္ခဲ့ရင္ စိတ္ေအးေအးထားလို႔ ရေလာက္ပါၿပီ.. သို႔ေပမယ့္ ကိုယ့္ရဲ႕ တန္ဖိုးရွိလွတဲ့ ခရီးသြားရက္ေလးေတြထဲက ၂ ရက္ေလာက္ကို အနည္းဆံုးေပးရမွာမို႔ မေပ်ာက္ေအာင္ေတာ့ အတတ္ႏိုင္ဆံုးသတိထားဖို႔လိုပါတယ္..\r\n\r\nကဲ သံရံုးလိပ္စာေလးေတြပါတဲ့ ဒီပိုစ့္ေလးကို screenshoot (သို႔) Share ထားၾကကုန္..\r\n\r\nစိတ္ခ်မ္းသာစြာ ခရီးထြက္ႏိုင္ၾကပါေစ', '2019-04-14 07:58:45', '2019-04-14 07:58:45'),
(13, 'How do we determine Max Loading rate of a tanker ship?', '5cb3440dbf051_56161822_2226539127400539_6029253099892244480_n.jpg', 'How do we determine Max Loading rate of a tanker ship?\r\n\r\nYE Nyein Kyaw\r\n\r\nTanker သေဘၤာတစီး ဆိပ္ကမ္းကပ္ၿပီး ကုန္တင္မယ္ဆိုရင္ သက္ဆိုင္ရာဆိပ္ကမ္းက Loading Master နဲ႔ သေဘၤာက Chief mate တို႔ Safety meeting လုပ္ၾကရပါတယ္။ Operation နဲ႔ ပတ္သက္ၿပီး အေသးစိတ္ေဆြးေႏြးဖို႔ပါ။ ဒီေနရာမွာ ကုန္အမ်ိဳးအစားဟာ Petroleum or Chemical Liquid ျဖစ္တဲ့ အတြက္၊ ကိုယ့္သေဘၤာကုန္တနာရီ ဘယ္ေလာက္ Volume တင္ႏိုင္လဲဆိုတာရယ္ Loading rate ေပါ့ m3/hr or Bbls/hr (in US) လို႔ေျပာပါတယ္၊ Shore ကလဲ သူ႔ရဲ႕ Max Loading rate ကို ေျပာပါတယ္။ သူ႔ Loading rate က ကိုယ့္သေဘၤာထက္မ်ားေနရင္ သေဘၤာက Max acceptable loading rate ပဲ ယူရပါမယ္။ ဘယ္လိုရလဲ ဘယ္လိုတြက္ထားလဲဆိုတာ ေမးဖို႔ရွိပါတယ္။ အခု ကၽြန္ေတာ္ေဆြးေႏြးခ်င္တဲ့ အေၾကာင္းအရာက Inerted tanks ေတြမွာ အမ်ားဆုံး တင္ႏိုင္တဲ့ Max loading rate အေၾကာင္းေလးပါ။\r\n\r\nISGOTT (International safety guide for oil tankers and terminals ) 7.3.3.2 မွာ ေျပာထားပါတယ္။\r\n\r\n■Tanks ေတြ အမ်ားႀကီးကို Manifold တစ္ခုတည္းကေန Commom line ကို သုံးၿပီး တင္မယ္ဆိုရင္ေတာ့ Max loading rate ကို Consider လုပ္တဲ့အခါမွာ Piping system တစ္ခုလုံးမွာ ရွိတဲ့ အေသးဆုံး Pipe ရဲ႕ Diameter in mm နဲ႔ ဆက္စပ္ေနတဲ့ Flow rate အေပၚမူတည္ၿပီး စဥ္းစားရမယ္လို႔ ေယဘူယ်ေျပာပါတယ္။ သေဘၤာ အတြက္ဆိုရင္ ကုန္တင္ရင္ သုံးတဲ့ Drop line ကို ေျပာျခင္းပါ။\r\n\r\n■A loading rate based on a linear velocity of 7 meters/sec for bulk loading Static accumulator cargo\r\ninto non inerted tanks လို႔ေျပာပါတယ္။\r\n\r\n■ A loading rate based on linear velocity of 12 meters/sec for loading Non static accumulator cargo and also for loading Static accumulator cargo in inerted cargo tanks လို႔ေျပာပါတယ္။\r\n\r\nStatic accumulator cargo (Conductivity of less than 50 picoSiemens/meter) ေတြဟာ Inerted လုပ္ထားတဲ့ Tank ေတြမွာ တင္ရင္ Static electricity precaution ျဖစ္တဲ့ initial loading rate ျဖစ္တဲ့ Linear velocity 1meter/sec rule ကို လိုက္နာစရာ မလိုပါဘူးလို႔ ISGOTT( 11.1.7.4 ) က Fig 11.1 ပါ ေျပာထားပါတယ္။\r\n\r\nဒါေပမယ့္ ယခုတင္ျပမယ့္ Loading static accumulator in Inerted \r\ntanks with 12meter/sec Linear velocity rate ကို ရရွိဖို႔အတြက္ ISGOTT (11.1.7.3) က Reference လုပ္ဖို႔ ေပးထားတဲ့ 1meter/sec ကို Table 11.1 မွာ ၾကည့္ရပါမယ္။ က္ိုယ့္သေဘၤာရဲ႕ drop line diameter က 200 mm ဆိုရင္ Applied flow rate က 116m3/hr ရပါတယ္။ \r\nတင္မယ့္ Tank အေရအတြက္က 6 ခုဆိုရင္ (116 x 6 x 12= 8352 m3/hr) ရပါတယ္။ အဲဒါဆိုရင္ ဒါေလာက္မ်ားလွတဲ့ တနာရီ 8352 m3/hr နဲ႔ တင္မွာလား ေမးစရာရွိပါတယ္။ မတင္ပါဘူး သူက Generally အေနနဲ႔ပဲ ေျပာထားျခင္းပါ။\r\n\r\n●တကယ့္တကယ္မွာေတာ့ ကုန္တင္ရင္ Tank ေတြက Ineted condition မွာပါ။ ကုန္ျဖစ္တဲ့ Liquid ေတြ ဝင္လာခဲ့ရင္ အရင္အထဲမွာရွိေနတဲ့ ေလထု Inert gas ေတြကို ဖယ္ထုတ္ဖို႔ Tank တခုစီတိုင္းမွာ Pressure /Vacuum (P/V) ေတြ တပ္ဆင္ထားပါတယ္။ သူ႔ရဲ႕ ဖယ္ထုတ္အားကို Venting capacity လုိေခၚပါတယ္။ ကိုယ့္သေဘၤာရဲ႕ တစ္Tank ခ်င္းစီတိုင္းရဲ႕ Venting capacity ကို VEC MANUAL (Vapour emiision control Manual) မွာ ၾကည့္ရပါမယ္။\r\n\r\n●ကၽြန္ေတာ့ သေဘၤာဆိုရင္ Loading capacity for each tank က 760m3/hr ပါ။ 6 tanks with using 3 manifold ကို တၿပိဳင္တည္းတင္ႏိုင္ဖို႔ အတြက္ Design လုပ္ထားလို႔ 760 x 6 = 4560 m3/hr ရပါတယ္။ သူကသာလ်င္ ကၽြန္ေတာ့ သေဘၤာ အတြက္ Max Design Loading rate ပါ။ ျဖစ္လာမယ့္ Gas flow rate in 100% = Vapour growth rate x Max loading rate = 1.25 x 4560 = 5700 m3 /hr ပါ။ 80% ဆိုရင္ Gas flow rate = 1.25 x 3648 m3/hr =4435m3/hr ပါ။\r\n\r\n● ဒီ့အတြက္ေၾကာင့္ Manifold 1 ခု ပဲ ျဖစ္ျဖစ္ 2 ခု ဒါမွမဟုတ္ 3 ခုပဲ ျဖစ္ျဖစ္ Loading arms or cargo hose သုံးၿပီး၊ Common line ကေန တင္မယ္ဆိုရင္ သူတို႔ အားလုံးရဲ႕ Total Flow rate က 4560m3/hr ထပ္ ပိုလို႔မရပါဘူး။\r\n\r\n● ဒီအတြက္ေၾကာင့္ Chief mate တေယာက္အေနနဲ႔ Duty officer ေတြကို Cargo Loading rate ေပၚမူတည္ၿပီး Minimum nos.of tanks to be opened ကို based on venting capacity အရ clearly specified လုပ္ေပးရပါမယ္။\r\n\r\n●Design loading rate ကို ဘယ္လိုတြက္ထုတ္လဲ??\r\n\r\nNaval architech ေတြက သေဘၤာ စေဆာက္ၿပီဆိုတာနဲ႔ သေဘၤာမွာ တပ္ဆင္ထားတဲ့ pipeline ေတြ Fitting ေတြေၾကာင့္ Pressure drop တနည္းအားျဖင့္ Tank ေတြထဲမွာ ျဖစ္လာမယ့္ Pressure bulit up ကို Pipeline Dimensions, Inside dia of pipe, pipe length, Flow rate, Friction loss ေတြရယ္၊ Cargo က ထုတ္လႊတ္မယ့္ Vapour ေၾကာင့္ ေလနဲ႔ေရာၿပီး ျဖစ္လာတဲ့ Vapour density ရယ္၊ Max Vapour growth rate ( 1.25 mostly has taken for Gasoline vapour) ေတြရယ္ ေပၚမူတည္ၿပီး LOADING RATE CONDITION 3ခု 100%, 80%, 50% စသျဖင့္ 3 မ်ိဳး တြက္ထုတ္ပါတယ္။\r\n\r\n●Eg. No.1 Cargo tank မွာရွိတဲ့ Piping ေတြရဲ႕ Friction loss in fitting such as elbow, butterfly valve, expension coupling, branches, reducer , friction loss in piping, ေတြေၾကာင့္ ျဖစ္လာမယ့္ Pressure built up in tank ကို Formula နဲ႔ Section တခုအတြက္ Loading rate Condition 3 ခု ( 100% , 80% and 50%) ေတြမွာ tank ေတြထဲမွာ တက္လာမယ့္ ျဖစ္လာမယ္ Pressure drop ကို တြက္ထုတ္ပါတယ္\r\n\r\n●From No.1 cargo tank to No.2 Cargo tanks လဲ တြက္ပါတယ္။\r\n\r\n●From No.3 cargo tank to Manifold ထိလဲ တြက္ပါတယ္။\r\n\r\n●ၿပီးရင္ Section အားလုံးေပါင္း\r\n( ကၽြန္ေတာ့ သေဘၤာဆို Max 6 tanks, 1 wings to 3 wings) ကို Manifold အထိ တြက္ထုတ္ၿပီး Loading rate Condition 1 ခု ခ်င္းစီအတြက္ \r\nအားလုံးေပါင္းပါတယ္။ 100% ဆို ဘယ္ေလာက္ ၊ 80% ဆို ဘယ္ေလာက္၊ 50%ဆို ဘယ္ေလာက္ စသျဖင့္ပါ။\r\n\r\n♤ရလာတဲ့ Pressure built up က Loading rate 100% ဆို i.e 6 tanks with 4560 m3/hr ဆို ရင္ Pressure built up in tank က +560.218 mmWg/mmAg ။\r\n\r\n♤Loading rate 80% i.e, 3648 m3/hr ဆို pressure built up က +358.539 mmWg/mmAg\r\n\r\n♤Loading rate 50% i.e, +2280m3/hr ဆို pressure built up က +140.054 mmWg/mmAg ရပါတယ္။\r\n\r\n●ျပန္ဆက္ရရင္ မူလကတည္းက Inerting လုပ္ထားတဲ့ tankေတြ ထဲကို (ISGOTT Recommendation အရ not more than 1000 mmWg/mmAg ထဲကို ) Loading rate 4560m3/hr i.e100% နဲ ကုန္တင္ရင္ ေနာက္တနာရီမွာ Total pressure in loading tank ေတြမွာ 1000 mmWg+560 mmWg 1560mmWG ျဖစ္လာပါမယ္။ (တကယ္တမ္းေတာ့ တနာရီထက္ပိုၾကာႏိုင္ပါတယ္ Same cargo grade တခုတည္း ျဖစ္တယ္၊ Cargo tanks 12 tanks အကုန္လဲ တင္မယ္၊ ဒါ့ေၾကာင့္ 12 nos.of IG branches အားလုံးကို ဖြင့္ထားခဲ့ရင္ ေျပာတာပါ။) အထက္ပါ ေျပာထားတာေတြက Loading rate 100% ကို ေျပာထားတာပါ။ 80% ဆို တမ်ိဳး 50% ဆို တမ်ိဳး ရပါမယ္။ Loading rate ေၾကာင့္ ျဖစ္လာမယ့္ Pressure bulit up in tanks နဲ႔ Venting capacity ဆက္စပ္ေနတာကို ေျပာျပခ်င္လို႔ ရွည္သြားတာပါ။\r\n\r\n● ဒီအတြက္ေၾကာင့္ Vapour Manifold ဆက္ၿပီး VEC system သုံးခိုင္းတဲ့ တခ်ိဳ႕ Terminal ေတြ မ်ားေသာအားျဖင့္ US port ေတြမွာ VEC သုံးမယ္ဆိုရင္ ကၽြန္ေတာ့္ သေဘၤာဆို 80% ျဖစ္တဲ့ 3650 m3/hr ကို Declare လုပ္ပါတယ္။ Cargo tank Pressure ကို Cargo operation မစခင္ မူလ 1000 mmWg/mmAg ကေန almost 200 to 300 mmWg ထိ depressurize လုပ္ေပးပါတယ္။မ်ားေသာအားျဖင့္ Terminal ရဲ႕ Shore vapour tank capacity ေပၚမူတည္ၿပီး သူတို႔ ေတာင္းဆိုတဲ့ Pressure အတိုင္း ေလ်ာ့ေပးရပါတယ္။\r\nဒါမွသာလ်င္ 80% ႏႈန္းနဲ႔ကုန္တင္ရင္ ျဖစ္လာမယ့္ 358 mmWg Pressure နား ပတ္လည္မွာMaintain လုပ္ႏိုင္မယ္ built up နည္းပါးမွာ ျဖစ္ပါတယ္။\r\n\r\n●Safety precaution အေနနဲ႔ secondary venting alarm systemကို P/V valve 1800mmWg/mmAg and -350mmWg/mmAg အစား ISGOTT AND SIRE Requirement အရ 80% ျဖစ္တဲ့ +1600mmWg/mmAg and +100mmWg/mmAg i.e, above zero မွာ ထားေပးရပါတယ္။ ဒါမွ သာလ်င္ အခန္႔မသင့္လို႔ Pressure 1600 mmWg ေက်ာ္ရင္ အျပင္ကို Vapour release မျဖစ္ေအာင္ Alarm ၾကားၿပီး ႀကိဳတင္ Action ယူႏိုင္ဖို႔ပါ။ Shore ကို အေၾကာင္းၾကားမယ္ လိုအပ္ရင္ Loading rate ေလ်ာ့ေပးရမယ္ စသျဖင့္ပါ။\r\n\r\n●P/V valve က ဘယ္လို လာဆက္စပ္ေနလဲ??\r\n\r\n●Pressure side of P/V valve\r\n\r\nP/V valve အေၾကာင္း အေသးစိတ္ထပ္ေျပာရရင္ Tank တခုစီတိုင္းမွာ တနာရီမွာ P/V က velocity min . 30m/sec နဲ႔ 800-900Nm3/hr နဲ႔ ဖယ္ထုတ္ေပးႏိုင္ပါတယ္။\r\n\r\n●ဘယ္အခ်ိန္မွာ သူက စ အလုပ္လုပ္မွာလဲ ဆိုရင္ သူ႔ကို Automatic release လုပ္ဖို႔ Design pressure 1800 mmWg or mmAg မွာ setting လုပ္ထားပါတယ္။ ဒါမွသာလ်င္ ကုန္တင္ရင္ Over pressurization မျဖစ္ပဲ Tank ေတြ Rupture ျဖစ္ျခင္းမွ ကာကြယ္ဖို႔ အတြက္ ျဖစ္ပါတယ္။\r\n\r\n● တခ်ိန္လုံး 800-900Nm3/hr နဲ႔ ထြက္ေနမွာလား 1800mmWg ဆိုရင္ေတာ့ ဟုတ္ပါတယ္ ဒါေပမယ့္ Pressure release လုပ္ရင္ေတာ့ Tank pressure က်သြားၿပီး ထြက္မယ့္ Volume လဲ က်သြားပါမယ္။ 1700mmWg ဆိုရင္ 500Nm3/hr ေလာက္က်မယ္ ၊ 1500mmWg ဆိုရင္ 140Nm3/hr ပဲ ထြက္ပါေတာ့တယ္။ 1300-1400mm Wg ေလာက္ဆိုရင္ ျပန္ပိတ္သြားပါၿပီ။ ေနာက္တခါ 1800 mmWg ေရာက္မွ ျပန္ပြင့္ပါမယ္။ Design graph ကို VEC Manual မွာ ၾကည့္လို႔ရပါတယ္။ See Figure pls.\r\n\r\n●Vacuum side of P/V valve ကိုေတာ့ Tank ေတြကို depressurization ျဖစ္ျခင္းမွ ကာကြယ္ဖို႔ တပ္ဆင္ထားပါတယ္။ ကၽြန္ေတာ့ သေဘၤာက\r\nသူရဲ႕ Setting က - 350mmWg မွာ ဆို စ အလုပ္လုပ္ပါတယ္။ -370mmWg ဆို 100 Nm3/hr၊ -380 mmWg ဆို 200Nm3/hr၊ -400 mmWgဆို 400 Nm3/hr စသျဖင့္ ျပင္ပေလကို ဆြဲသြင္းပါမယ္။ ကုန္ခ်ေနတုန္း Sensor alarm ပ်က္ၿပီး IG plant failure ျဖစ္တာကို မသိလိုက္လို႔ ကုန္ဆက္ခ်မိလို႔ Tank depressurrization ျဖစ္ျခင္းမွ ကာကြယ္ဖို႔ တပ္ဆင္ထားျခင္း သို႔မဟုတ္ Voyage မွာ Cargo temp က်လို႔ Cargo tank Pressure က်လာရင္ Negative ျဖစ္လာရင္ ျပင္ပေလကို Automatic ဆြဲသြင္းႏိုင္တဲ့အတြက္ Oxygen % in cargo tanks ေတြ increase ျဖစ္လာႏိုင္ပါတယ္ ထို႔အတြက္ Chief mate က Voyage တေလ်ာက္ လိုအပ္ရင္ pressure Top up လုပ္ေပးရပါတယ္။ Positive pressure at least 300 mmWgကိုISGOTT Requirement အရ Maintain လုပ္ေပးရပါတယ္ ။\r\n\r\n● ဒါ့အျပင္ ကၽြန္ေတာ့ သေဘၤာမွာေတာ့ IG line မွာ Pressure /Vacuum braker တို႔ကိုလဲ Setting 2160 mmWg and -750 mmWg အေနနဲ႔ Secondary safety measure အျဖစ္ တပ္ဆင္ထားပါတယ္။\r\n● Mast riser လို႔ေခၚတဲ့ Pressure relase unit ကိုလဲ တခ်ိဳ႕သေဘၤာေတြမွာတပ္ဆင္ထားပါတယ္။ Common venting အတြက္ေပါ့။ ကၽြန္ေတာ့္သေဘၤာမွာေတာ့ မပါလို႔ မေဖာ္ျပေတာ့ပါဘူး။\r\n\r\n● Vapour density တို႔၊Vapour growth rate တို႔၊ pressure drop claculation ေတြကိုေတာ့ ပုံမ်ားမွာ ၾကည့္ရႈ့ႏိုင္ပါတယ္။ အၾကမ္းဖ်ဥ္း သိထားဖို႔ အတြက္ပဲလိုအပ္ပါတယ္။\r\n\r\nအားလုံးပဲ အဆင္ေျပၾကပါေစ။😊\r\nဆရာ့ဆရာမ်ားမွလဲ လိုအပ္ရင္ ေထာက္ျပေပးေစလိုပါတယ္။ အမွားပါခဲ့ရင္လဲ ကၽြန္ေတာ့္ရဲ႕ ေလ့လာမႈ အားနည္းမႈ့လို႔ပဲ ဆိုခ်င္ပါတယ္။\r\n#Following pictures are used for education purpose only and copyright to ISGOTT.\r\n\r\nYNK@ Gulf of Mexico\r\n04.04.2019', '2019-04-14 08:00:37', '2019-04-14 08:00:37');

-- --------------------------------------------------------

--
-- Table structure for table `ads`
--

CREATE TABLE `ads` (
  `id` int(10) UNSIGNED NOT NULL,
  `photo` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `link` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `start_date` date NOT NULL,
  `end_date` date NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `ads`
--

INSERT INTO `ads` (`id`, `photo`, `link`, `start_date`, `end_date`, `created_at`, `updated_at`) VALUES
(3, '5cb36f4466784_download (1).jpg', 'http://localhost/promotion/public/', '2019-04-15', '2019-05-29', '2019-04-14 11:05:00', '2019-04-14 11:05:00'),
(4, '5cb36f87df502_download (2).jpg', 'http://localhost/renomyanmar/public/', '2019-04-14', '2019-05-31', '2019-04-14 11:06:07', '2019-04-14 11:06:07'),
(5, '5cb36f99058cc_download (3).jpg', 'http://localhost/promotion/public/', '2019-04-15', '2019-07-17', '2019-04-14 11:06:25', '2019-04-14 11:06:25'),
(6, '5cb36fa8def51_download (4).jpg', 'http://localhost/renomyanmar/public/', '2019-04-14', '2019-06-19', '2019-04-14 11:06:40', '2019-04-14 11:06:40'),
(7, '5cb36fba9e88e_download.jpg', 'http://localhost/renomyanmar/public/', '2019-04-16', '2019-04-30', '2019-04-14 11:06:58', '2019-04-14 11:06:58'),
(8, '5cb36fcc04da0_download.png', 'http://localhost/promotion/public/', '2019-04-14', '2019-06-26', '2019-04-14 11:07:16', '2019-04-14 11:07:16'),
(9, '5cb36fdd9ec63_images (1).jpg', 'http://localhost/promotion/public/', '2019-04-15', '2019-06-12', '2019-04-14 11:07:33', '2019-04-14 11:07:33'),
(10, '5cb3704164ccb_download (1).jpg', 'http://localhost/promotion/public/', '2019-04-01', '2019-04-07', '2019-04-14 11:09:13', '2019-04-14 11:09:13'),
(11, '5cb37050ccb44_images (2).jpg', 'http://localhost/renomyanmar/public/', '2019-04-14', '2019-06-19', '2019-04-14 11:09:28', '2019-04-14 11:09:28'),
(12, '5cb370619ec47_images.jpg', 'http://localhost/renomyanmar/public/', '2019-04-14', '2019-05-29', '2019-04-14 11:09:45', '2019-04-14 11:09:45');

-- --------------------------------------------------------

--
-- Table structure for table `ads_webpages`
--

CREATE TABLE `ads_webpages` (
  `id` int(10) UNSIGNED NOT NULL,
  `webpage_id` int(11) NOT NULL,
  `ads_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `ads_webpages`
--

INSERT INTO `ads_webpages` (`id`, `webpage_id`, `ads_id`, `created_at`, `updated_at`) VALUES
(5, 1, 3, '2019-04-14 11:05:00', '2019-04-14 11:05:00'),
(6, 2, 3, '2019-04-14 11:05:00', '2019-04-14 11:05:00'),
(7, 1, 4, '2019-04-14 11:06:07', '2019-04-14 11:06:07'),
(8, 2, 4, '2019-04-14 11:06:08', '2019-04-14 11:06:08'),
(9, 3, 4, '2019-04-14 11:06:08', '2019-04-14 11:06:08'),
(10, 1, 5, '2019-04-14 11:06:25', '2019-04-14 11:06:25'),
(11, 2, 5, '2019-04-14 11:06:25', '2019-04-14 11:06:25'),
(12, 3, 5, '2019-04-14 11:06:25', '2019-04-14 11:06:25'),
(13, 4, 5, '2019-04-14 11:06:25', '2019-04-14 11:06:25'),
(14, 1, 6, '2019-04-14 11:06:40', '2019-04-14 11:06:40'),
(15, 2, 6, '2019-04-14 11:06:41', '2019-04-14 11:06:41'),
(16, 3, 6, '2019-04-14 11:06:41', '2019-04-14 11:06:41'),
(17, 4, 6, '2019-04-14 11:06:41', '2019-04-14 11:06:41'),
(18, 1, 7, '2019-04-14 11:06:58', '2019-04-14 11:06:58'),
(19, 2, 7, '2019-04-14 11:06:58', '2019-04-14 11:06:58'),
(20, 3, 7, '2019-04-14 11:06:58', '2019-04-14 11:06:58'),
(21, 4, 7, '2019-04-14 11:06:58', '2019-04-14 11:06:58'),
(22, 1, 8, '2019-04-14 11:07:16', '2019-04-14 11:07:16'),
(23, 2, 8, '2019-04-14 11:07:16', '2019-04-14 11:07:16'),
(24, 3, 8, '2019-04-14 11:07:16', '2019-04-14 11:07:16'),
(25, 4, 8, '2019-04-14 11:07:16', '2019-04-14 11:07:16'),
(26, 1, 9, '2019-04-14 11:07:33', '2019-04-14 11:07:33'),
(27, 2, 9, '2019-04-14 11:07:33', '2019-04-14 11:07:33'),
(28, 3, 9, '2019-04-14 11:07:34', '2019-04-14 11:07:34'),
(29, 4, 9, '2019-04-14 11:07:34', '2019-04-14 11:07:34'),
(30, 1, 10, '2019-04-14 11:09:13', '2019-04-14 11:09:13'),
(31, 1, 11, '2019-04-14 11:09:28', '2019-04-14 11:09:28'),
(32, 2, 11, '2019-04-14 11:09:28', '2019-04-14 11:09:28'),
(33, 3, 11, '2019-04-14 11:09:29', '2019-04-14 11:09:29'),
(34, 4, 11, '2019-04-14 11:09:29', '2019-04-14 11:09:29'),
(35, 1, 12, '2019-04-14 11:09:45', '2019-04-14 11:09:45'),
(36, 2, 12, '2019-04-14 11:09:45', '2019-04-14 11:09:45'),
(37, 3, 12, '2019-04-14 11:09:45', '2019-04-14 11:09:45'),
(38, 4, 12, '2019-04-14 11:09:45', '2019-04-14 11:09:45');

-- --------------------------------------------------------

--
-- Table structure for table `companies`
--

CREATE TABLE `companies` (
  `id` int(10) UNSIGNED NOT NULL,
  `company_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `company_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `what_we_do` text COLLATE utf8mb4_unicode_ci,
  `why_join_us` text COLLATE utf8mb4_unicode_ci,
  `workplace_and_culture` text COLLATE utf8mb4_unicode_ci,
  `photo` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `facebook_url` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `website_url` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `companies`
--

INSERT INTO `companies` (`id`, `company_name`, `phone`, `email`, `company_type`, `what_we_do`, `why_join_us`, `workplace_and_culture`, `photo`, `address`, `facebook_url`, `website_url`, `created_at`, `updated_at`) VALUES
(1, 'Star', '097778766', 'star@gmail.com', 'company', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quia minima earum illo quas asperiores cum. Ipsam, eos officia autem vitae, tempora repellendus ex eligendi aliquam voluptatem. Labore, dicta corporis laudantium.', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quia minima earum illo quas asperiores cum. Ipsam, eos officia autem vitae, tempora repellendus ex eligendi aliquam voluptatem. Labore, dicta corporis laudantium.', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quia minima earum illo quas asperiores cum. Ipsam, eos officia autem vitae, tempora repellendus ex eligendi aliquam voluptatem. Labore, dicta corporis laudantium.', '5cb2e14c63247_star.png', 'Yangon, Myamo bla bla...no 44 blabla steet', 'https://www.facebook.com/?ref=tn_tnmn', 'https://www.facebook.com/?ref=tn_tnmn', '2019-04-14 00:59:16', '2019-04-14 00:59:16'),
(2, 'Diamond', '0967787634455', 'diamond@gmail.com', 'training', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quia minima earum illo quas asperiores cum. Ipsam, eos officia autem vitae, tempora repellendus ex eligendi aliquam voluptatem. Labore, dicta corporis laudantium.', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quia minima earum illo quas asperiores cum. Ipsam, eos officia autem vitae, tempora repellendus ex eligendi aliquam voluptatem. Labore, dicta corporis laudantium.', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quia minima earum illo quas asperiores cum. Ipsam, eos officia autem vitae, tempora repellendus ex eligendi aliquam voluptatem. Labore, dicta corporis laudantium.', '5cb34ce08ee0f_diamond.png', 'ay Kyaw Street\r\nYangon 11221', 'https://www.facebook.com/myanmarseamanjob/?epa=SEARCH_BOX', 'https://www.facebook.com/myanmarseamanjob/?epa=SEARCH_BOX', '2019-04-14 08:38:16', '2019-04-14 08:38:16');

-- --------------------------------------------------------

--
-- Table structure for table `company_photos`
--

CREATE TABLE `company_photos` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `photo` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'no_image.png',
  `company_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `company_photos`
--

INSERT INTO `company_photos` (`id`, `title`, `photo`, `company_id`, `created_at`, `updated_at`) VALUES
(1, 'bla bla', '5cb2ec9f11653_download.jpg', 1, '2019-04-14 00:59:17', '2019-04-14 01:47:35'),
(2, 'start ship', '5cb2eae522a58_download (1).jpg', 1, '2019-04-14 00:59:17', '2019-04-14 01:40:13'),
(3, 'bla bla', '5cb2edf67c1c9_download (3).jpg', 1, '2019-04-14 00:59:17', '2019-04-14 01:53:18'),
(4, 'bbbb', '5cb2f216877fc_download (4).jpg', 1, '2019-04-14 00:59:17', '2019-04-14 02:10:54'),
(5, 'blbla', '5cb2f22ee02b7_download (5).jpg', 1, '2019-04-14 00:59:17', '2019-04-14 02:11:18'),
(6, 'bla bla', '5cb2f24e4677b_download (6).jpg', 1, '2019-04-14 00:59:17', '2019-04-14 02:11:50'),
(7, 'bla bla', '5cb2f267478b8_download (7).jpg', 1, '2019-04-14 00:59:17', '2019-04-14 02:12:15'),
(8, 'bb', '5cb2f279dbfdf_download (8).jpg', 1, '2019-04-14 00:59:17', '2019-04-14 02:12:33'),
(9, 'bla bla', '5cb350172536c_images.jpg', 2, '2019-04-14 08:38:16', '2019-04-14 08:51:59'),
(10, 'bla bla', '5cb351f99197c_images (29).jpg', 2, '2019-04-14 08:38:16', '2019-04-14 09:00:01'),
(11, 'bla bla', '5cb35205a88a5_images (28).jpg', 2, '2019-04-14 08:38:17', '2019-04-14 09:00:13'),
(12, 'bla bla', '5cb35210b3986_images (27).jpg', 2, '2019-04-14 08:38:17', '2019-04-14 09:00:24'),
(13, 'bla bla', '5cb3521aa1af1_images (24).jpg', 2, '2019-04-14 08:38:17', '2019-04-14 09:00:34'),
(14, 'bla bla', '5cb352246a80b_images (25).jpg', 2, '2019-04-14 08:38:17', '2019-04-14 09:00:44'),
(15, 'bla bla', '5cb3522d7ec3f_images (26).jpg', 2, '2019-04-14 08:38:17', '2019-04-14 09:00:53'),
(16, 'bla bla', '5cb35234f00ca_download (7).jpg', 2, '2019-04-14 08:38:17', '2019-04-14 09:01:01');

-- --------------------------------------------------------

--
-- Table structure for table `contacts`
--

CREATE TABLE `contacts` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `message` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `contacts`
--

INSERT INTO `contacts` (`id`, `name`, `phone`, `email`, `message`, `created_at`, `updated_at`) VALUES
(1, 'Zayy', '09978699298', 'zay0935@gmail.com', 'Hay! I miss you.', '2019-03-29 01:05:58', '2019-03-29 01:05:58'),
(2, 'Lynn Lynn', '09771672511', 'linninn12@yahoo.com', 'This is Testing message.', '2019-03-29 01:08:54', '2019-03-29 01:08:54');

-- --------------------------------------------------------

--
-- Table structure for table `courses`
--

CREATE TABLE `courses` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `teacher_id` int(11) NOT NULL,
  `photo` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `courses`
--

INSERT INTO `courses` (`id`, `title`, `description`, `price`, `teacher_id`, `photo`, `created_at`, `updated_at`) VALUES
(11, 'Able Seafarer Deck (ASD) – San Diego, CA', 'Mariner must hold or meet the requires to obtain a national endorsement as Able Seaman, entry level is not considered the appropriate national endorsement. Licensed Deck Officer’s without AB is not acceptable', '$1,040', 8, '5cb2c15d368af_0177-300x300.jpg', '2019-04-13 22:43:01', '2019-04-13 22:43:01'),
(13, 'Able Seafarer Engine (ASE) – San Diego, CA', 'Course Length:\r\n40 hours - Monday to Friday, 8:00 a.m. to 4:30 p.m.\r\nClass Requirements:\r\nMariner must hold a national endorsement as QMED, entry level is not considered the appropriate national endorsement.\r\n\r\n* Any Unlicensed Rating In The Engine Department will convert to QMED and is acceptable\r\n\r\n* Licensed Engineer Officer’s without QMED is not acceptable', '$1,040', 8, '5cb2cc677ce4f_Small-Engines.jpg', '2019-04-13 23:30:07', '2019-04-13 23:30:07');

-- --------------------------------------------------------

--
-- Table structure for table `course_categories`
--

CREATE TABLE `course_categories` (
  `id` int(10) UNSIGNED NOT NULL,
  `category_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `course_categories`
--

INSERT INTO `course_categories` (`id`, `category_name`, `created_at`, `updated_at`) VALUES
(1, 'category1', NULL, NULL),
(2, 'cateogory2', NULL, NULL),
(3, 'category3', NULL, NULL),
(4, 'category4', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `course__course_categories`
--

CREATE TABLE `course__course_categories` (
  `id` int(10) UNSIGNED NOT NULL,
  `course_id` int(11) NOT NULL,
  `category_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `course__course_categories`
--

INSERT INTO `course__course_categories` (`id`, `course_id`, `category_id`, `created_at`, `updated_at`) VALUES
(18, 11, 1, '2019-04-13 22:43:01', '2019-04-13 22:43:01'),
(19, 13, 1, '2019-04-13 23:30:08', '2019-04-13 23:30:08'),
(20, 13, 2, '2019-04-13 23:30:08', '2019-04-13 23:30:08'),
(21, 13, 3, '2019-04-13 23:30:09', '2019-04-13 23:30:09'),
(22, 13, 4, '2019-04-13 23:30:09', '2019-04-13 23:30:09');

-- --------------------------------------------------------

--
-- Table structure for table `job_posts`
--

CREATE TABLE `job_posts` (
  `id` int(10) UNSIGNED NOT NULL,
  `company_id` int(11) NOT NULL,
  `rank` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `salary` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `contract_time` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `vessel_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `shiptype_id` int(11) NOT NULL,
  `grt` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `flag_of_vessel` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `navigation_area` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `request_certificates` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `english_level` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `job_posts`
--

INSERT INTO `job_posts` (`id`, `company_id`, `rank`, `salary`, `contract_time`, `vessel_name`, `shiptype_id`, `grt`, `flag_of_vessel`, `navigation_area`, `request_certificates`, `description`, `english_level`, `created_at`, `updated_at`) VALUES
(1, 1, 'G.P.Rating', '$1000', '2019-04-17', 'bla bla', 1, 'bla bla', 'blabla', 'bla', 'bla', 's doubtful that the levels of frontloading seen at the end of 2018 will continue into 2019,” the shipping association said. Additionally, any future fall in container imports by the US and in particular the US West Coast, which is where most of the tariffed goods from China are discharged, “will be particularly harmful for the container shipping industry.” This is because the volume of containers will be reduced on the fronthaul leg of the transpacific trade lane. The fronthaul volumes are the capacity setters as they are much higher than those on the backh', 'mediumlevel', '2019-04-14 07:45:34', '2019-04-14 07:48:04'),
(2, 1, 'CHINA BULK CARRIER', '$10000', '2019-04-19', 'bla bla', 3, 'bla bla', 'blabla', 'bla', 'bla', '(2/o တုန္း႐ွိရမည္။age under 40။ sea time gap ျဖစ္ေနသူမ်ားအတြက္သင့္ေတာ္ပါသည္)', 'mediumlevel', '2019-04-14 08:16:32', '2019-04-14 08:16:32');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2019_01_11_174825_create_companies_table', 1),
(3, '2019_01_11_175355_create_teachers_table', 1),
(4, '2019_01_11_175749_create_seafarers_table', 1),
(5, '2019_01_11_190618_create_accounts_table', 1),
(6, '2019_01_14_033928_create_courses_table', 2),
(7, '2019_01_14_034906_create_courses_table', 3),
(8, '2019_01_14_035401_create_course_categories_table', 4),
(9, '2019_01_14_040504_create_course__course_categories_table', 5),
(10, '2019_01_16_133930_create_admin_blogs_table', 6),
(11, '2019_02_12_090757_create_company_photos_table', 7),
(12, '2019_02_12_161532_create_ship_types_table', 8),
(13, '2019_02_12_163806_create_job_posts_table', 9),
(14, '2019_02_13_083400_create_training_posts_table', 10),
(15, '2019_02_15_080902_create_seafarer_requests_table', 11),
(16, '2019_02_25_142203_create_testimonials_table', 12),
(17, '2019_03_19_102036_create_freeagents_table', 13),
(18, '2019_03_22_042820_create_ads_table', 14),
(19, '2019_03_29_071530_create_contacts_table', 15),
(20, '2019_04_14_170934_create_webpages_table', 16),
(21, '2019_04_14_171211_create_ads_webpages_table', 16);

-- --------------------------------------------------------

--
-- Table structure for table `seafarers`
--

CREATE TABLE `seafarers` (
  `id` int(10) UNSIGNED NOT NULL,
  `employee_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `desired_salary` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `citizanship` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `seafarer_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `english_level` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `rank` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `birthday` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `place_of_birth` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `country_of_residence` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `seafarer_requests`
--

CREATE TABLE `seafarer_requests` (
  `id` int(10) UNSIGNED NOT NULL,
  `company_id` int(11) NOT NULL,
  `seafarer_id` int(11) NOT NULL,
  `post_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `ship_types`
--

CREATE TABLE `ship_types` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `ship_types`
--

INSERT INTO `ship_types` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'Cargo Ships', NULL, NULL),
(2, 'RoRo (Roll on Roll Off)', NULL, NULL),
(3, 'Tankers', NULL, NULL),
(4, 'Passenger Ships', NULL, NULL),
(5, 'Fishing Vessel', NULL, NULL),
(6, 'High Speed Craft', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `teachers`
--

CREATE TABLE `teachers` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `teacher_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `teachers`
--

INSERT INTO `teachers` (`id`, `name`, `phone`, `email`, `teacher_type`, `created_at`, `updated_at`) VALUES
(8, 'Khin Moe Aye', '09771672511', 'khinmoeaye@gmail.com', 'teacher', '2019-04-13 22:33:15', '2019-04-13 22:33:15'),
(9, 'Naing Lin', '098789999', 'nainglin@gmail.com', 'teacher', '2019-04-13 22:34:02', '2019-04-13 22:34:02');

-- --------------------------------------------------------

--
-- Table structure for table `testimonials`
--

CREATE TABLE `testimonials` (
  `id` int(10) UNSIGNED NOT NULL,
  `photo` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `testimonials`
--

INSERT INTO `testimonials` (`id`, `photo`, `name`, `description`, `created_at`, `updated_at`) VALUES
(2, '5c7414be67bca_Penguins.jpg', 'Testimonial 1', 'Eiusmod tempor incidiunt labore velit dolore magna aliqu sed eniminim veniam quis nostrud exercition eullamco laborisaa', '2019-02-25 08:30:10', '2019-02-25 09:45:58'),
(3, '5c7403087aa45_Tulips.jpg', 'Testimonial 5', 'Eiusmod tempor incidiunt labore velit dolore magna aliqu sed eniminim veniam quis nostrud exercition eullamco laborisaa', '2019-02-25 08:30:24', '2019-02-25 09:46:42'),
(4, '5c740e8748fb6_Hydrangeas.jpg', 'Testimonial 4', 'Eiusmod tempor incidiunt labore velit dolore magna aliqu sed eniminim veniam quis nostrud exercition eullamco laborisaa', '2019-02-25 09:19:27', '2019-02-25 09:47:49'),
(5, '5c74151a1d2f5_Jellyfish.jpg', 'Testimonial 2', 'Eiusmod tempor incidiunt labore velit dolore magna aliqu sed eniminim veniam quis nostrud exercition eullamco laborisaa', '2019-02-25 09:47:30', '2019-02-25 09:47:30');

-- --------------------------------------------------------

--
-- Table structure for table `training_posts`
--

CREATE TABLE `training_posts` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `company_id` int(11) NOT NULL,
  `photo` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `start_date` date NOT NULL,
  `end_date` date NOT NULL,
  `time` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `training_posts`
--

INSERT INTO `training_posts` (`id`, `title`, `description`, `company_id`, `photo`, `start_date`, `end_date`, `time`, `created_at`, `updated_at`) VALUES
(1, 'ဆယ္တန္းေအာင္ျမင္ၿပီး ေရေၾကာင္းပညာရပ္ကို စိတ္ပါဝင္စားတဲ့ ေက်ာင္းသားမ်ားအတြက္ သိေကာင္းစရာ', 'Poseidon Maritime College! သည္ ျမန္မာ့ေရေၾကာင္းေလာက၌ ပထမဦးဆံုးဖြင့္ လွစ္ေသာ ျပည္ပအေျခစိုက္ ေရေၾကာင္းေကာလိပ္ျဖစ္ပါသည္။ Liberian flag state မွ တရားဝင္ အသိအမွတ္ျပဳထားေသာ သင္႐ိုးၫႊန္းတမ္း မ်ားျဖင့္သင္ၾကားေပးမည္။ ေရေၾကာင္းႏွင့္ပတ္သတ္ေသာ ျပည္ပႏိုင္ငံ မွ လက္မွတ္မ်ားအား မိမိတို႔၏မိသားစုမ်ားႏွင့္ မခြဲခြာရပဲ ေငြကုန္ေၾကးက်သက္သာစြာျဖင့္ သင္ၾကားတတ္ေျမာက္ႏိုင္မည့္ အျပင ္အလုပ္အကိုင္ ပါရရွိမည္ျဖစ္သည္။\r\n\r\nPoseidon Maritime College မွ ေရေၾကာင္းႏွင့္ပတ္သတ္ေသာ Diploma သင္တန္းမ်ား၊ဘြဲ႔လြန္Diploma သင္တန္းမ်ား ႏွင့္ အျခား ေရေၾကာင္းႏွင့္ပတ္သတ္ေသာ သင္တန္းမ်ားအား Singapore, UK, Australia ႏွင့္ အျခားျပည္ပႏိုင္ငံမ်ားမွေရေၾကာင္း ေကာလိပ္မ်ား ၊ေရေၾကာင္းတကၠသိုလ္မ်ားႏွင့္ခ်ိတ္ဆက္၍ မၾကာမွီကာလ အတြင္းဖြင့္လွစ္သြားပါမည္။\r\n\r\nPMC မွ ေအာက္ပါသင္တန္းမ်ားအားဖြင့္လွစ္သြားပါမည္။\r\n\r\nေရေၾကာင္းအရာ႐ွိေလာင္း အပတ္စဥ္ PCD-01(Deck Cadet) (12 monhts)\r\nေရေၾကာင္း အင္ဂ်င္နီယာ အရာ႐ွိေလာင္း PCE-01(Engine Cadet) (12 monhts)\r\nPre sea deck (4 months)\r\nPre sea engine (4 months + Workshop skill training 5 months)\r\n\r\nပညာအရည္အခ်င္းကန္႔သတ္ခ်က္\r\nသင္တန္းတက္ေရာက္လိုသူသည္ တကၠသိုလ္ဝင္တန္းေအာင္ျမင္ၿပီးသူ သို့မဟုတ္ GCSE \'O\' level ေအာင္ျမင္ၿပီးသူျဖစ္ရမည္။\r\n\r\nအသက္အရြယ္ ကန့္သက္ခ်က္\r\nသင္တန္းတက္ေရာက္လိုသူသည္ အသက္ ၁၇ ႏွစ္မွ ၂၅ အတြင္း ျဖစ္ရမည္။\r\n\r\nသင္ၾကားမည့္ဆရာမ်ား\r\nWorld Maritime University မွဘြဲ႔ရထားေသာ ဆရာမ်ား, ဝါရင့္သေဘၤာ Captain မ်ား ႏွင့္ Chief engineer မ်ားမွ စာေတြ႔လက္ေတြ႔. ျဖင့္သင္ၾကားေပးမည္ျဖစ္ပါသည္\r\nေဖာ္ျပပါ သင္တန္းမ်ားတြင္ BST,SSA,DSDႏွင့္ Tanker Familiarization အစ႐ွိေသာ သင္တန္းမ်ားအပါအဝင္သင္ၾကားမည္ျဖစ္ေသာေၾကာင့္ သင္တန္း ၿပီးဆံုးသည့္အခ်ိန္တြင္ သင္တန္းသားမ်ားအေနျဖင့္ sea service 12 months, Seaman book ႏွင့္ အျခား short course certificates ကိုင္ေဆာင္ရ႐ွိၿပီးသေဘၤာတက္ရန္ အသင့္ အေနအထားေရာက္႐ွိေနမည္ျဖစ္ပါသည္။\r\n\r\nသင္တန္းသားဦးေရကန့္သက္ခ်က္\r\nDeck Cadet Officer ၃၅ ေယာက္\r\nEngine Cadet Officer ၃၅ ေယာက္\r\n\r\nသင္တန္းေၾကး\r\n\r\nသင္တန္းေၾကးေပးသြင္းရာတြင္ မိဘအုပ္ထိန္း သူမ်ားအား ဝန္ထုပ္ဝန္ပိုးမျဖစ္ေစရန္ ဧရာဝတီဘဏ္ႏွင့္ခၽိတ္ဆက္ၿပီး သင္တန္းေၾကးအား သင္တန္းကာလ အတြင္း အရစ္က်ေပးသြင္းႏိုင္ရန္စီစဥ္ထားပါသည္။\r\nသို႔မဟုတ္\r\n\r\nကနဦး ေပးသြင္းေငြ အျဖစ္ စုစုေပါင္းသင္တန္း ေၾကး၏ ၃၀% အား ေပးသြင္းၿပီး က်န္ သင္တန္းေၾကး ၇၀% အား သင္တန္းကာလ အတြင္း လစဥ္ေပးသြင္း.ႏိုင္ပါသည္။\r\n\r\nသို႔မဟုတ္\r\n\r\nကနဦးေပးသြင္းေငြ မလို ပဲ လစဥ္ တစ္လျခင္း ၉ သိန္း ႏႈန္းျဖင့္လည္း ေပးသြင္း ႏိုင္ပါသည္\r\n\r\nသင္တန္းသားမ်ားစတင္လက္ခံေနပါၿပီ!!!\r\n\r\nဆက္သြယ္ရမည့္လိပ္စာ\r\nျခံအမွတ္ D5, မဂၤလာလမ္း၊ မင္းရဲေကၽာ္စြာအိမ္ရာ၊ တာေမြကေလး ရပ္ကြက္ \r\nတာေမြၿမိဳ႕နယ္ ၊ရန္ကုန္ၿမိဳ႕။\r\n\r\nဖုန္း 09799994947,09400930738\r\n\r\nWebsite- www.poseidonmaritimecollege.com\r\nemail-info@poseidonmaritimecollege.com', 2, '5cb355125a934_27332208_1654987774555680_2654964505308068259_n.jpg', '2019-04-17', '2019-08-13', 'မနက္ ၉ နာရီမွ ညေန ၄ နာရီထိ', '2019-04-14 09:13:14', '2019-04-14 09:13:14'),
(2, 'ေရေၾကာင္းအရာ႐ွိေလာင္း အပတ္စဥ္ PCD-01(Deck Cadet)', 'ညာအရည္အခ်င္းကန္႔သတ္ခ်က္\r\nသင္တန္းတက္ေရာက္လိုသူသည္ တကၠသိုလ္ဝင္တန္းေအာင္ျမင္ၿပီးသူ သို့မဟုတ္ GCSE \'O\' level ေအာင္ျမင္ၿပီးသူျဖစ္ရမည္။\r\n\r\nအသက္အရြယ္ ကန့္သက္ခ်က္\r\nသင္တန္းတက္ေရာက္လိုသူသည္ အသက္ ၁၇ ႏွစ္မွ ၂၅ အတြင္း ျဖစ္ရမည္။\r\n\r\nသင္ၾကားမည့္ဆရာမ်ား\r\nWorld Maritime University မွဘြဲ႔ရထားေသာ ဆရာမ်ား, ဝါရင့္သေဘၤာ Captain မ်ား ႏွင့္ Chief engineer မ်ားမွ စာေတြ႔လက္ေတြ႔. ျဖင့္သင္ၾကားေပးမည္ျဖစ္ပါသည္\r\nေဖာ္ျပပါ သင္တန္းမ်ားတြင္ BST,SSA,DSDႏွင့္ Tanker Familiarization အစ႐ွိေသာ သင္တန္းမ်ားအပါအဝင္သင္ၾကားမည္ျဖစ္ေသာေၾကာင့္ သင္တန္း ၿပီးဆံုးသည့္အခ်ိန္တြင္ သင္တန္းသားမ်ားအေနျဖင့္ sea service 12 months, Seaman book ႏွင့္ အျခား short course certificates ကိုင္ေဆာင္ရ႐ွိၿပီးသေဘၤာတက္ရန္ အသင့္ အေနအထားေရာက္႐ွိေနမည္ျဖစ္ပါသည္။\r\n\r\nသင္တန္းသားဦးေရကန့္သက္ခ်က္\r\nDeck Cadet Officer ၃၅ ေယာက္\r\nEngine Cadet Officer ၃၅ ေယာက္\r\n\r\nသင္တန္းေၾကး\r\n\r\nသင္တန္းေၾကးေပးသြင္းရာတြင္ မိဘအုပ္ထိန္း သူမ်ားအား ဝန္ထုပ္ဝန္ပိုးမျဖစ္ေစရန္ ဧရာဝတီဘဏ္ႏွင့္ခၽိတ္ဆက္ၿပီး သင္တန္းေၾကးအား သင္တန္းကာလ အတြင္း အရစ္က်ေပးသြင္းႏိုင္ရန္စီစဥ္ထားပါသည္။\r\nသို႔မဟုတ္\r\n\r\nကနဦး ေပးသြင္းေငြ အျဖစ္ စုစုေပါင္းသင္တန္း ေၾကး၏ ၃၀% အား ေပးသြင္းၿပီး က်န္ သင္တန္းေၾကး ၇၀% အား သင္တန္းကာလ အတြင္း လစဥ္ေပးသြင္း.ႏိုင္ပါသည္။\r\n\r\nသို႔မဟုတ္\r\n\r\nကနဦးေပးသြင္းေငြ မလို ပဲ လစဥ္ တစ္လျခင္း ၉ သိန္း ႏႈန္းျဖင့္လည္း ေပးသြင္း ႏိုင္ပါသည္\r\n\r\nသင္တန္းသားမ်ားစတင္လက္ခံေနပါၿပီ!!!', 2, '5cb35560a7f55_27459899_1654987777889013_1802114806415682297_n.jpg', '2019-04-30', '2019-09-26', 'မနက္ ၉ နာရီမွ ညေန ၄ နာရီထိ', '2019-04-14 09:14:32', '2019-04-14 09:14:32'),
(3, 'ေရေၾကာင္း အင္ဂ်င္နီယာ အရာ႐ွိေလာင္း PCE-01(Engine Cadet)', 'ညာအရည္အခ်င္းကန္႔သတ္ခ်က္\r\nသင္တန္းတက္ေရာက္လိုသူသည္ တကၠသိုလ္ဝင္တန္းေအာင္ျမင္ၿပီးသူ သို့မဟုတ္ GCSE \'O\' level ေအာင္ျမင္ၿပီးသူျဖစ္ရမည္။\r\n\r\nအသက္အရြယ္ ကန့္သက္ခ်က္\r\nသင္တန္းတက္ေရာက္လိုသူသည္ အသက္ ၁၇ ႏွစ္မွ ၂၅ အတြင္း ျဖစ္ရမည္။\r\n\r\nသင္ၾကားမည့္ဆရာမ်ား\r\nWorld Maritime University မွဘြဲ႔ရထားေသာ ဆရာမ်ား, ဝါရင့္သေဘၤာ Captain မ်ား ႏွင့္ Chief engineer မ်ားမွ စာေတြ႔လက္ေတြ႔. ျဖင့္သင္ၾကားေပးမည္ျဖစ္ပါသည္\r\nေဖာ္ျပပါ သင္တန္းမ်ားတြင္ BST,SSA,DSDႏွင့္ Tanker Familiarization အစ႐ွိေသာ သင္တန္းမ်ားအပါအဝင္သင္ၾကားမည္ျဖစ္ေသာေၾကာင့္ သင္တန္း ၿပီးဆံုးသည့္အခ်ိန္တြင္ သင္တန္းသားမ်ားအေနျဖင့္ sea service 12 months, Seaman book ႏွင့္ အျခား short course certificates ကိုင္ေဆာင္ရ႐ွိၿပီးသေဘၤာတက္ရန္ အသင့္ အေနအထားေရာက္႐ွိေနမည္ျဖစ္ပါသည္။\r\n\r\nသင္တန္းသားဦးေရကန့္သက္ခ်က္\r\nDeck Cadet Officer ၃၅ ေယာက္\r\nEngine Cadet Officer ၃၅ ေယာက္\r\n\r\nသင္တန္းေၾကး\r\n\r\nသင္တန္းေၾကးေပးသြင္းရာတြင္ မိဘအုပ္ထိန္း သူမ်ားအား ဝန္ထုပ္ဝန္ပိုးမျဖစ္ေစရန္ ဧရာဝတီဘဏ္ႏွင့္ခၽိတ္ဆက္ၿပီး သင္တန္းေၾကးအား သင္တန္းကာလ အတြင္း အရစ္က်ေပးသြင္းႏိုင္ရန္စီစဥ္ထားပါသည္။\r\nသို႔မဟုတ္\r\n\r\nကနဦး ေပးသြင္းေငြ အျဖစ္ စုစုေပါင္းသင္တန္း ေၾကး၏ ၃၀% အား ေပးသြင္းၿပီး က်န္ သင္တန္းေၾကး ၇၀% အား သင္တန္းကာလ အတြင္း လစဥ္ေပးသြင္း.ႏိုင္ပါသည္။\r\n\r\nသို႔မဟုတ္\r\n\r\nကနဦးေပးသြင္းေငြ မလို ပဲ လစဥ္ တစ္လျခင္း ၉ သိန္း ႏႈန္းျဖင့္လည္း ေပးသြင္း ႏိုင္ပါသည္\r\n\r\nသင္တန္းသားမ်ားစတင္လက္ခံေနပါၿပီ!!!', 2, '5cb3559acf5ac_27072405_1654987874555670_9304692789626741_n.jpg', '2019-04-23', '2019-08-21', 'မနက္ ၉ နာရီမွ ညေန ၄ နာရီထိ', '2019-04-14 09:15:30', '2019-04-14 09:15:30'),
(4, 'Pre sea engine (4 months + Workshop skill training 5 months)', 'ပညာအရည္အခ်င္းကန္႔သတ္ခ်က္\r\nသင္တန္းတက္ေရာက္လိုသူသည္ တကၠသိုလ္ဝင္တန္းေအာင္ျမင္ၿပီးသူ သို့မဟုတ္ GCSE \'O\' level ေအာင္ျမင္ၿပီးသူျဖစ္ရမည္။\r\n\r\nအသက္အရြယ္ ကန့္သက္ခ်က္\r\nသင္တန္းတက္ေရာက္လိုသူသည္ အသက္ ၁၇ ႏွစ္မွ ၂၅ အတြင္း ျဖစ္ရမည္။\r\n\r\nသင္ၾကားမည့္ဆရာမ်ား\r\nWorld Maritime University မွဘြဲ႔ရထားေသာ ဆရာမ်ား, ဝါရင့္သေဘၤာ Captain မ်ား ႏွင့္ Chief engineer မ်ားမွ စာေတြ႔လက္ေတြ႔. ျဖင့္သင္ၾကားေပးမည္ျဖစ္ပါသည္\r\nေဖာ္ျပပါ သင္တန္းမ်ားတြင္ BST,SSA,DSDႏွင့္ Tanker Familiarization အစ႐ွိေသာ သင္တန္းမ်ားအပါအဝင္သင္ၾကားမည္ျဖစ္ေသာေၾကာင့္ သင္တန္း ၿပီးဆံုးသည့္အခ်ိန္တြင္ သင္တန္းသားမ်ားအေနျဖင့္ sea service 12 months, Seaman book ႏွင့္ အျခား short course certificates ကိုင္ေဆာင္ရ႐ွိၿပီးသေဘၤာတက္ရန္ အသင့္ အေနအထားေရာက္႐ွိေနမည္ျဖစ္ပါသည္။\r\n\r\nသင္တန္းသားဦးေရကန့္သက္ခ်က္\r\nDeck Cadet Officer ၃၅ ေယာက္\r\nEngine Cadet Officer ၃၅ ေယာက္\r\n\r\nသင္တန္းေၾကး\r\n\r\nသင္တန္းေၾကးေပးသြင္းရာတြင္ မိဘအုပ္ထိန္း သူမ်ားအား ဝန္ထုပ္ဝန္ပိုးမျဖစ္ေစရန္ ဧရာဝတီဘဏ္ႏွင့္ခၽိတ္ဆက္ၿပီး သင္တန္းေၾကးအား သင္တန္းကာလ အတြင္း အရစ္က်ေပးသြင္းႏိုင္ရန္စီစဥ္ထားပါသည္။\r\nသို႔မဟုတ္\r\n\r\nကနဦး ေပးသြင္းေငြ အျဖစ္ စုစုေပါင္းသင္တန္း ေၾကး၏ ၃၀% အား ေပးသြင္းၿပီး က်န္ သင္တန္းေၾကး ၇၀% အား သင္တန္းကာလ အတြင္း လစဥ္ေပးသြင္း.ႏိုင္ပါသည္။\r\n\r\nသို႔မဟုတ္\r\n\r\nကနဦးေပးသြင္းေငြ မလို ပဲ လစဥ္ တစ္လျခင္း ၉ သိန္း ႏႈန္းျဖင့္လည္း ေပးသြင္း ႏိုင္ပါသည္\r\n\r\nသင္တန္းသားမ်ားစတင္လက္ခံေနပါၿပီ!!!\r\n\r\nဆက္သြယ္ရမည့္လိပ္စာ\r\nျခံအမွတ္ D5, မဂၤလာလမ္း၊ မင္းရဲေကၽာ္စြာအိမ္ရာ၊ တာေမြကေလး ရပ္ကြက္ \r\nတာေမြၿမိဳ႕နယ္ ၊ရန္ကုန္ၿမိဳ႕။', 2, '5cb355c810283_27459505_1654987871222337_374711752791046263_n.jpg', '2019-05-02', '2019-12-24', 'မနက္ ၉ နာရီမွ ညေန ၄ နာရီထိ', '2019-04-14 09:16:16', '2019-04-14 09:16:16');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `data_id` int(11) NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `email`, `email_verified_at`, `password`, `type`, `data_id`, `remember_token`, `created_at`, `updated_at`) VALUES
(10, 'admin@gmail.com', NULL, '$2y$10$UsP7qDUizSpQq1jDETeBK.ZlZWyX6npYtoK7//oiRBZzx9hUa6SKW', 'admin', 0, NULL, '2019-01-30 23:14:02', '2019-01-30 23:14:02'),
(32, 'khinmoeaye@gmail.com', NULL, '$2y$10$54k79TNgswbhWyOIPYKRJOiX4yu2ARz0PnkAL7sElrOaYMdtAc.z2', 'teacher', 8, NULL, '2019-04-13 22:33:16', '2019-04-13 22:33:16'),
(33, 'nainglin@gmail.com', NULL, '$2y$10$FDF55LjHOsIJZCQbB0zAgOo6gBFci7WY2yMpzSxOc7DXRHi2F66zK', 'teacher', 9, NULL, '2019-04-13 22:34:02', '2019-04-13 22:34:02'),
(34, 'star@gmail.com', NULL, '$2y$10$DTtPmWqSwNXTYME9SzkiNeSn1h.ico53rPHTs5kp171N7kucMdK2i', 'company', 1, NULL, '2019-04-14 00:59:17', '2019-04-14 00:59:17'),
(35, 'diamond@gmail.com', NULL, '$2y$10$5MBZtxzZU2Kky0C6OIcoN.ZcYr3kYnd5qRyAWjajzpmG.giwHwsDW', 'training', 2, NULL, '2019-04-14 08:38:16', '2019-04-14 08:38:16');

-- --------------------------------------------------------

--
-- Table structure for table `webpages`
--

CREATE TABLE `webpages` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `webpages`
--

INSERT INTO `webpages` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'area1', NULL, NULL),
(2, 'area1', NULL, NULL),
(3, 'area3', NULL, NULL),
(4, 'area4', NULL, NULL),
(5, 'area5', NULL, NULL),
(6, 'area6', NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `accounts`
--
ALTER TABLE `accounts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `admin_blogs`
--
ALTER TABLE `admin_blogs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ads`
--
ALTER TABLE `ads`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ads_webpages`
--
ALTER TABLE `ads_webpages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `companies`
--
ALTER TABLE `companies`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `company_photos`
--
ALTER TABLE `company_photos`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contacts`
--
ALTER TABLE `contacts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `courses`
--
ALTER TABLE `courses`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `course_categories`
--
ALTER TABLE `course_categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `course__course_categories`
--
ALTER TABLE `course__course_categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `job_posts`
--
ALTER TABLE `job_posts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `seafarers`
--
ALTER TABLE `seafarers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `seafarer_requests`
--
ALTER TABLE `seafarer_requests`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ship_types`
--
ALTER TABLE `ship_types`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `teachers`
--
ALTER TABLE `teachers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `testimonials`
--
ALTER TABLE `testimonials`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `training_posts`
--
ALTER TABLE `training_posts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `webpages`
--
ALTER TABLE `webpages`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `accounts`
--
ALTER TABLE `accounts`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `admin_blogs`
--
ALTER TABLE `admin_blogs`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `ads`
--
ALTER TABLE `ads`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `ads_webpages`
--
ALTER TABLE `ads_webpages`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;

--
-- AUTO_INCREMENT for table `companies`
--
ALTER TABLE `companies`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `company_photos`
--
ALTER TABLE `company_photos`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `contacts`
--
ALTER TABLE `contacts`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `courses`
--
ALTER TABLE `courses`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `course_categories`
--
ALTER TABLE `course_categories`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `course__course_categories`
--
ALTER TABLE `course__course_categories`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `job_posts`
--
ALTER TABLE `job_posts`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `seafarers`
--
ALTER TABLE `seafarers`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `seafarer_requests`
--
ALTER TABLE `seafarer_requests`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `ship_types`
--
ALTER TABLE `ship_types`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `teachers`
--
ALTER TABLE `teachers`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `testimonials`
--
ALTER TABLE `testimonials`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `training_posts`
--
ALTER TABLE `training_posts`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT for table `webpages`
--
ALTER TABLE `webpages`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
