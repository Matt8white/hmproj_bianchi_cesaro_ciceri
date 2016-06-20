-- phpMyAdmin SQL Dump
-- version 4.5.2
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jun 20, 2016 at 02:06 PM
-- Server version: 5.7.9
-- PHP Version: 5.6.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `timhypproj`
--

-- --------------------------------------------------------

--
-- Table structure for table `assdvrelation`
--

DROP TABLE IF EXISTS `assdvrelation`;
CREATE TABLE IF NOT EXISTS `assdvrelation` (
  `idass` int(10) UNSIGNED NOT NULL,
  `iddevice` int(10) UNSIGNED NOT NULL,
  PRIMARY KEY (`idass`,`iddevice`),
  KEY `iddevice` (`iddevice`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `assistance`
--

DROP TABLE IF EXISTS `assistance`;
CREATE TABLE IF NOT EXISTS `assistance` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `category` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `name` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `description` text COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `devices`
--

DROP TABLE IF EXISTS `devices`;
CREATE TABLE IF NOT EXISTS `devices` (
  `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT,
  `category` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `brand` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `model` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `price` decimal(10,2) UNSIGNED NOT NULL,
  `promotion` tinyint(1) UNSIGNED NOT NULL,
  `shortedprice` decimal(10,2) UNSIGNED DEFAULT NULL,
  `image` varchar(80) COLLATE utf8_unicode_ci NOT NULL,
  `pres_it` text COLLATE utf8_unicode_ci NOT NULL,
  `descr_it` text COLLATE utf8_unicode_ci NOT NULL,
  `spec_it` text COLLATE utf8_unicode_ci NOT NULL,
  `pres_en` text COLLATE utf8_unicode_ci NOT NULL,
  `desc_en` text COLLATE utf8_unicode_ci NOT NULL,
  `spec_en` text COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `devices`
--

INSERT INTO `devices` (`id`, `category`, `brand`, `model`, `price`, `promotion`, `shortedprice`, `image`, `pres_it`, `descr_it`, `spec_it`, `pres_en`, `desc_en`, `spec_en`) VALUES
(1, 'Smartphones', 'LG', 'G5', '699.90', 0, NULL, 'assets/images/devices/LG_G5.jpg', 'Sistema Operativo Android 6.0\r\nDisplay 5.3”\r\nProcessore Snapdragon™ 820 QuadCore 2.15 GHz - 4G LTE', 'LG G5\r\n\r\nIl nuovo LG G5 è uno nuovo tipo di smartphone che supera tutti i limiti, con un design modulare completamete in metallo che rivoluziona i canoni di design. Espandi le funzioni, interagisci con gli innovativi LG Friends e prova un''esperienza smartphone realmente innovativa. La rivoluzione di G5 continua con la doppia fotocamera grandangolare, che cattura più di quanto i tuoi occhi riescano a vedere. Anche sotto il sole, perché il nuovo display IPS Quantum è più ricco, luminoso e colorato anche sotto la luce diretta del sole. E ti mostra sempre le notifiche principali anche quando non è attivo. Nuovo LG G5: quello che non ti aspetti, nel palmo della tua mano.\r\n\r\nCOMPLETAMENTE IN METALLO\r\n\r\nBellezza e raffinatezza nel palmo della tua mano. Cerchi da sempre la cura nei dettagli e l''eleganza dei materiali, ed eccoli qui. Il metallo e il vetro si uniscono morbidamente in una forma semplicemente iconica. Che ti dà sensazioni tutte da provare.\r\n\r\nDESIGN MODULARE\r\n\r\nLiberati dalle convenzioni. Il nuovo design modulare con batteria a slitta ti permettere di avere tutto quello che gli altri non hanno mai saputo darti. La libertà di avere uno smartphone in metallo e di poter cambiare la batteria quando desideri. E di espandere le funzioni con nuovi moduli.\r\n\r\nDOPPIA FOTOCAMERA CON LENTI GRANDANGOLARI\r\n\r\nCattura tutto ciò che vedi! I nostri occhi vedono più di quanto una fotocamera convenzionale riesca a catturare. Ma con LG G5 puoi fare anche di più, perché ha due fotocamere. Con la prima cogli tutti i dettagli. Con la lente grandangolare a 135° della seconda, invece, catturi perfino più di quanto vedono i tuoi occhi. Grattacieli, un concerto o l''intera spiaggia dove ti trovi vivranno nitidi sul tuo nuovo G5\r\n\r\nLUMINOSITÀ ESTREMA\r\n\r\nEcco uno schermo davvero intelligente. Che riconosce quando sei sotto la luce diretta del sole per offrirti una leggibilità sempre ottimale. Il nuovo display IPS Quantum è più luminoso, più colorato e più chiaro anche in pieno sole.\r\n', 'Tecnologia: 4G cat6 /HSDPA42/UMTS/EDGE/GPRS Frequenze 850/900/1800/1900/2100\r\n\r\nConnettività: Wi-Fi - Bluetooth – Infrarosso - USB tipo C – NFC\r\n\r\nGPS: Integrato\r\n\r\nDisplay: 5.3” 16 Milioni colori Touch\r\n\r\nFotocamera: 2 Fotocamere Posteriori da 16 Mpxl con flash e Fotocamera frontale 8 Mpx\r\n\r\nMemoria Interna: 32GB\r\nSlot Memory Card Micro SD fino a 2TB\r\n\r\nProcessore: Processore Snapdragon™ 820 QuadCore 2.15 GHz - 4G LTE\r\n\r\nFormato SIM: Nano\r\n\r\nVideo: Video Recorder&Playback\r\n\r\nMusica: MP3 Player\r\n\r\nIn dotazione: Caricabatteria\r\nCavo dati USB tipo C\r\nAuricolare stereo\r\nManuale d’uso rapido\r\n\r\nDimensioni: 149,4x73,9x7,3 mm\r\n\r\nPeso: 159 gr.\r\n\r\nAutonomia(*): Stand-by fino a 100 ore - ?Conversazione fino a 240 min.\r\n\r\n(*) Le prestazioni delle batterie dipendono da vari fattori tra cui la vicinanza delle antenne, lo stato delle batterie, la posizione geografica e il tipo di rete utilizzata.\r\n', 'TBT', 'TBT', 'TBT'),
(2, 'Smartphones', 'Samsung', 'Galaxy J5', '269.90', 1, '229.90', 'assets/images/devices/GALAXY_J5.jpg', 'Sistema Operativo Android 5.1\r\nDisplay 5.2” 16 Milioni colori Touch\r\nProcessore QuadCore 1.2 Ghz', 'NULL', 'Tecnologia: 4G/HSDPA42/UMTS/EDGE/GPRS Frequenze 850/900/1800/1900/2100\r\n\r\nConnettività: Wi-Fi - Bluetooth - Micro USB - NFC\r\n\r\nGPS: Ricevitore GPS Integrato\r\n\r\nDisplay: Display 5.2” 16 Milioni colori Touch\r\n\r\nFotocamera: Fotocamera 13 Mpixel/Flash\r\n\r\nMemoria: Memoria interna 16GB - Slot Memory Card Micro SD fino a 128GB\r\n\r\nProcessore: Processore QuadCore 1.2 Ghz\r\n\r\nFormato SIM: SIM Micro\r\n\r\nVideo: Video Recorder&Playback\r\n\r\nMusica: MP3 Player - Radio FM\r\n\r\nIn dotazione: Caricabatteria - Cavo dati - Auricolare - Manuale d’uso rapido\r\n\r\nDimensioni: 145,8x72,3x8,1 mm\r\n\r\nPeso: 158 gr\r\n\r\n(*) Le prestazioni delle batterie dipendono da vari fattori tra cui la vicinanza delle antenne, lo stato delle batterie, la posizione geografica e il tipo di rete utilizzata.', 'TBT', 'TBT', 'TBT'),
(3, 'Smartphones', 'Huawei', 'P9 Plus', '749.90', 0, NULL, 'assets/images/devices/HUAWEI_P9_PLUS.jpg', 'Sistema Operativo Android 6.0\r\nDisplay Full HD Amoled da 5.5’’\r\nDoppia Fotocamera Leica da 12 Mpxl Dual Flash + anteriore da 8 Mpxl\r\nProcessore Kirin 955 - Octa-Core (4x2,5 GHz + 4x1,8 GHz)', 'DESIGN ELEGANTE, CURA NEI DETTAGLI\r\n\r\nL’esperienza di Huawei P9 si eleva ad un livello superiore con Huawei P9 Plus grazie al luminoso display da 5.5” e l’elegante corpo in metallo\r\n\r\nREINVENT SMARTPHONE PHOTOGRAPHY\r\n\r\nGrazie al perfetto connubio tra hardware e software di classe superiore della doppia fotocamera Leica, P9 Plus consente di catturare immagini di assoluta qualità senza rinunciare al design compatto ed elegante.\r\n\r\nUN INNOVATIVO SISTEMA A DOPPIA FOTOCAMERA\r\n\r\nP9 Plus è in grado di catturare immagini dai colori luminosi e garantire al contempo una resa in bianco e nero straordinaria; il tutto con lo stile senza tempo di Leica.La tecnologia con doppia fotocamera di P9 Plus consente di catturare una maggiore quantità di luce, combinando al meglio la qualità del colore acquisito dal sensore RGB con i dettagli ottenuti dal sensore in bianco e nero. Il tutto per garantire il massimo risultato ad ogni scatto.La doppia fotocamera da 12MP con pixel da 1,25µm ottimizza gli scatti in condizioni di scarsa illuminazione, mentre la tecnologia IMAGEsmart 5.0 di P9 Plus garantisce la massima qualità di immagine in ogni circostanza.L’algoritmo sviluppato in collaborazione con Leica assicura una qualità di immagine propria di una macchina fotografica, anche in condizioni di scarsa illuminazione.\r\n\r\nUN DISPLAY FULL HD DA 5,5", PIÙ AMPIO E PIÙ LUMINOSO\r\n\r\nGrazie alla tecnologia AMOLED, l’ampio display Full HD da 5,5" offre una maggiore saturazione del colore e un contrasto più elevato, per un’esperienza visiva sempre più intensa.\r\n\r\nMAGGIORE AUTONOMIA E RICARICA RAPIDA\r\n\r\nLa batteria da 3400mAh con di ricarica rapida garantisce un’autonomia più elevata.\r\n\r\nAVANZATA TECNOLOGIA ‘PRESS TOUCH’\r\n\r\nP9 Plus è dotato dell’innovativa tecnologia ‘Press Touch’, basata sul riconoscimento della pressione effettuata sul display.La nuova e ottimizzata tecnologia ‘Press Touch’ rileva le più impercettibili variazioni di pressione sullo schermo garantendo la massima interattività e reattività dello smartphone.Visualizza le anteprime delle immagini, ingrandiscine i dettagli, ed accedi rapidamente alle applicazioni con il menu di scelta rapida a comparsa.', 'Connettività: 4G cat.6/HSPA+/EDGE/GPRS Frequenze 850/900/1800/1900Wi-Fi 802.11 a/b/g/n/ac Wi-Fi Direct, Bluetooth 4.2, NFC, Sensore d''impronta, Infrarosso\r\n\r\nGPS: GPS Integrato, A-GPS, Glonass, BDS\r\n\r\nDisplay: Display Full HD Amoled da 5.5’’’\r\n\r\nFotocamera: Doppia Fotocamera Leica da 12 Mpxl Dual Flash + anteriore da 8 Mpxl\r\n\r\nMemoria Interna: 64GB, Micro SD fino a 128 GB\r\n\r\nProcessore: Processore Kirin 955 - Octa-Core (4x2,5 GHz + 4x1,8 GHz)\r\n\r\nIn dotazione: Smartphone Auricolari stereo - Caricabatteria Cavo USB Type-C - Estrattore SIM Guida rapida\r\n\r\nDimensioni: 152.3 x 75.3 x 6.98 mm\r\n\r\nPeso: 162 grammi', 'tbt', 'tbt', 'tbt'),
(4, 'Smartphones', 'Apple', 'iPhone SE', '509.90', 0, NULL, 'assets/images/devices/APPLE_IPHONE_SE.jpg', 'Display Retina da 4" con risoluzione di 1136x640 pixel" HD\r\nChip A9 con architettura a 64 bit\r\nFotocamera iSight da 12MP con Focus Pixels e flash True Tone\r\nRegistrazione video 4K a 30fps, moviola a 240 fps\r\nVideocamera FaceTime HD (foto da 1,2 MP) con Retina Flash\r\nSensore di impronte digitali Touch ID', 'Il telefono da 4" più potente di sempre. iPhone SE riprende un design compatto di grande successo aggiungendovi due fotocamere evolute e una potenza di elaborazione incredibile.Disegnato per stare comodamente in mano e risultare piacevole al tatto, grazie alla finitura satinata del guscio in alluminio microsabbiato.\r\n\r\niPhone SE ha un display Retina da 4’’, chip A9 con archittetura a 64 bit di livello desktop, sensore di impronte digitali Touch ID, fotocamera iSight da 12MP, videocamera FaceTime HD con Retina flash, Live Photos e connessioni Wi-Fi e 4G veloci. E ancora, iOS 9 e iCloud.', 'Display: Retina Multi-Touch widescreen retroilluminato LED da 4" (diagonale) 1136x640 pixel a 326 ppi\r\n\r\nProcessore: Chip A9 con architettura a 64 bit, Coprocessore di movimento M9 integrato\r\n\r\nFotocamera: Fotocamera iSight da 12 megapixel\r\n\r\nVideocamera: FaceTime HD\r\n\r\nSensori: Sensore di impronte digitali Touch ID\r\n\r\nConnettività: 4G LTE(*)\r\n\r\nSistema Operativo: iOS 9 e iCloud\r\n\r\nColori: Disponibile in Space Grey, Silver, Gold e Rose Gold\r\n\r\n(*) Richiede un piano dati. La tecnologia 4G LTE è supportata solo in alcuni Paesi e solo da alcuni operatori. La velocità varia a seconda delle condizioni ambientali. Per sapere dove sono disponibili le reti 4G LTE, chiedi al tuo operatore e guarda su www.apple.com/iphone/LTE.', 'TBT', 'TBT', 'TBT'),
(5, 'Smartphones', 'LG', 'K8', '179.90', 0, NULL, 'assets/images/devices/LG_K8.jpg', '4G LTE - NFC\r\nSistema Operativo Android 6\r\nDisplay 5”\r\nProcessore QuadCore 1.3 GHz', 'SCEGLI IL TUO STILE\r\n\r\nLa nuova serie K di LG ti offre una gamma di smartphone che rispecchiano la tua personalità. LG K8 ti accompagna nei tuoi viaggi e ti sorprenderà con selfie dettagliati tutti da condividere con la velocità della rete 4G LTE\r\n\r\nDESIGN CON VETRO SMUSSATO\r\n\r\nDatti un tono! LG K8 ha un design che lascia a bocca aperta grazie al profilo del vetro smussato e alla forma arrotondata. In più è più ergonomico e garantisce una presa più salda grazie alla lavorazione della cover posteriore.\r\n\r\nFOTOCAMERA E FLASH VIRTUALE\r\n\r\nCattura i le situazioni più divertenti della giornata con la fotocamera da 8 Megapixel. E'' sufficiente un tocco sul display e K8 mette a fuoco e scatta immediatamente. Anche per i selfie puoi contare sulla fotocamera frontale da 5 Megapixel con la funzione flash virtuale che illumina il tuo volto, così i tuoi selfie saranno illuminati come si deve, mentre tutti gli altri... scatteranno selfie scuri!\r\n\r\nDISPLAY DA 5"\r\n\r\nGuarda le tue foto e i tuoi video sul display ampio da ben 5".\r\n\r\n', 'Tecnologia: 4G cat.4/HSDPA42/UMTS/EDGE/GPRS Frequenze 850/900/1800/1900/2100\r\n\r\nConnettiviTà: Wi-Fi - Bluetooth - Micro USB - NFC\r\n\r\nGPS: Integrato\r\n\r\nDisplay: 5” 16 Milioni colori Touch\r\n\r\nFotocamera: Posteriore da 8 Mpxl con flash\r\n\r\nMemoria Interna: 8GB con Slot Memory Card Micro SD fino a 32GB\r\n\r\nProcessore: Processore QuadCore 1.3 GHz\r\n\r\nFormato SIM: Nano-sim\r\n\r\nAudio e Video: Video Recorder&Playback - MP3 Player - Radio FM\r\n\r\nIn dotazione: Caricabatteria, Cavo dati USB, Manuale d’uso rapido, Auricolare stereo\r\n\r\nDimensioni: 144,6x71,5x8,7 mm\r\n\r\nPeso: 142 gr.\r\n\r\nAutonomia: Stand-by fino a 100 ore -  Conversazione fino a 240 min.', 'TBT', 'TBT', 'TBT'),
(6, 'Smartphones', 'Samsung', 'S7 edge', '829.90', 0, NULL, 'assets/images/devices/SAMSUNG_S7EDGE.jpg', 'Sistema Operativo Android 6.0\r\nDisplay 5.5”\r\nProcessore OctaCore (QuadCore 2.3 Ghz + QuadCore 1.6 Ghz)', 'null', 'Tecnologia: 4G cat.9/HSDPA42UMTS/EDGE/GPRS Frequenze 850/900/1800/1900/2100\r\n\r\nConnettività: Wi-Fi - Bluetooth - Micro USB - NFC\r\n\r\nGPS: Integrato\r\n\r\nDisplay: 5.5” 16 Milioni colori Touch\r\n\r\nFotocamera: 12 Mpixel/Flash\r\n\r\nMemoria Interna: 32GB\r\n\r\nProcessore: OctaCore: (QuadCore 2.3 Ghz+QuadCore 1.6 Ghz)\r\n\r\nFormato SIM: Nano\r\n\r\nVideo: Video Recorder&Playback\r\n\r\nMusica: MP3 Player\r\n\r\nIn dotazione: Caricabatteria - Cavo Dati MicroUSB - Auricolare stereo - Guida di riferimento rapido\r\n\r\nDimensioni: 150,9x72,6x7,7 mm\r\n\r\nPeso: 157 gr.\r\n\r\nAutonomia: Stand-by fino a TBD ore - Conversazione fino a TBD min\r\n\r\n', 'tbt', 'tbt', 'tbt'),
(7, 'Smartphones', 'Apple', 'iPhone 5s', '479.90', 1, '329.90', 'assets/images/devices/APPLE_IPHONE_5S.jpg', 'Sistema Operativo iOS 8\r\nDisplay Retina da 4"\r\nChip A7 con coprocessore di movimento M7\r\nFotocamera iSight da 8 megapixel', 'Chip A7 con architettura a 64 bit, sensore di impronte digitali Touch ID,nuova fotocamera iSight da 8 megapixel e nuova videocamera FaceTime HD,reti 4G LTE1 ultraveloci, iOS 8 e iCloud: iPhone 5s è davvero all’avanguardia.Eppure è sottile e leggero come sempre.', 'Display: Retina da 4"\r\n\r\nProcessore: Chip A7 con coprocessore di movimento M7\r\n\r\nSensori: impronte digitali Touch ID\r\n\r\nFotocamera: iSight da 8 megapixel con flash True Tone - Registrazione video HD a 1080p - Videocamera FaceTime\r\n\r\nConnettività: Reti 4G LTE ultraveloci1\r\n\r\nApplicazioni: Oltre 900.000 app sull’App Store2\r\n\r\nSistema Operativo: iOS 8: l’OS mobile più evoluto al mondo\r\n\r\nCloud: iCloud: I tuoi contenuti, su tutti i tuoi dispositivi', 'TBT', 'TBT', 'TBT'),
(8, 'Smartphones', 'Microsoft', 'Lumia 950', '599.90', 1, '499.90', 'assets/images/devices/MICROSOFT_LUMIA_950.jpg', '4GPLUS\r\nSistema Operativo Windows 10 Mobile\r\nDisplay 5.2”\r\nProcessore Snapdragon™ 808 HexaCore 1.8 Ghz  - 4G  ', 'Funzionalità di livello superiore, design eccellente e la migliore esperienza con Windows 10: scegli Lumia 950 e trasforma un momento qualsiasi in una grande conquista.', 'Tecnologia: 4G cat.6/HSDPA 42/UMTS/EDGE/GPRS Frequenze 850/900/1800/1900\r\n\r\nConnettività: Wi-Fi - Bluetooth - Micro USB - NFC \r\n\r\nGPS: Integrato\r\n\r\nDisplay: 5.2” 16 Milioni colori Touch\r\n\r\nFotocamera: 20 Mpixel/Flash\r\n\r\nMemoria Interna: 32 GB\r\n\r\nSlot Memory Card: Micro SD fino a 2TB\r\n\r\nProcessore: HexaCore 1.8 GHz\r\n\r\nFormato SIM: Nano\r\n\r\nVideo: Video Recorder&Playback\r\n\r\nMusica: MP3 Player\r\n\r\nIn dotazione: Caricabatteria standard\r\nAuricolare stereo \r\nCavo Dati  USB Type C \r\nManuale d’uso\r\n\r\nDimensioni: 45x73,2x8,25 mm\r\n\r\nPeso: 150 grammi\r\n\r\nAutonomia: Stand-by fino a 275 ore - Conversazione fino a 1080 min.', 'tbt', 'tbt', 'tbt'),
(9, 'Smartphones', 'Sony', 'XPERIA X', '629.90', 0, NULL, 'assets/images/devices/SONY_XPERIA_X.jpg', 'Sistema Operativo Android 6.0\r\nDisplay HD 5"\r\nProcessore Snapdragon® 650 HexaCore 1.8+1.4 Ghz\r\nFotocamera da 23 Mpxl Exmor, anteriore da 13 Mpxl', 'Il capolavoro\r\n\r\nUno smartphone dalle prestazioni inimitabili che integra una sensazionale fotocamera in grado di predire il prossimo movimento del soggetto..\r\n\r\nUna fotocamera senza rivali\r\n\r\nXperia X Performance integra la nuova fotocamera firmata Sony, più veloce e smart che mai. Tempi di risposta più rapidi, messa a fuoco più intelligente e rivoluzionaria velocità di otturazione adattiva: avrai tutto il necessario per scatti incredibilmente nitidi, in qualsiasi condizione. La messa a fuoco automatica ibrida intuitiva di Xperia X Performance utilizza le tecnologie delle fotocamere Sony e ti permette di cogliere qualsiasi movimento. Basta scegliere il soggetto da mettere a fuoco e la fotocamera lo seguirà automaticamente, anche quando si muove. La messa a fuoco è sempre chiara e il soggetto sempre nitido: non dovrai più preoccuparti di seguire la scena. Pensa a tutto il tuo smartphone.\r\n\r\nLa fotocamera da 23 MP che non teme i movimenti improvvisi\r\n\r\nLa nostra rapidissima fotocamera è in grado di passare dallo standby allo scatto in meno di 0,6 secondi. Grazie all''incredibile rapidità di avvio, messa a fuoco automatica ibrida ed elaborazione dell''immagine, potrai cogliere i momenti più inattesi.\r\n\r\nUn tocco di classe\r\n\r\nBasta prendere Xperia X Performance in mano per accorgersi di quanto sia speciale: lasciati conquistare dal display curvo e dalla parte posteriore monoblocco in metallo. Scegli fra Nero grafite o Bianco per un esclusivo effetto satinato. Oppure le versioni Oro lime e Oro rosa per un tocco di eleganza. Xperia X Performance riflette i tuoi gusti e il tuo stile di vita. L''ultima versione del classico modello Sony è caratterizzata da un design straordinariamente semplice, ancora più comodo grazie ai bordi ricurvi e al display da 5". E l''interfaccia utente non è da meno, con un look sempre più personalizzato e un approccio più intuitivo.\r\n\r\nInarrestabile potenza\r\n\r\nXperia X Performance è dotato di un rapidissimo processore Snapdragon 820 e di velocità di connessione Cat91 per prestazioni senza rivali. Preparati a restare a bocca aperta.\r\n\r\nStreaming alla velocità della luce\r\n\r\nConnettività ultra rapida per un intrattenimento ininterrotto. Vuoi guardare un film in streaming su Netflix o scaricare il tuo podcast preferito? Dì addio ai tempi di attesa. Grazie all''ultimo processore Snapdragon 820 e a una connettività senza rivali, Xperia X Performance ti permette di accedere ai contenuti multimediali desiderati in un batter d''occhio e con estrema facilità, senza buffering o ritardi.', 'Tecnologia: Abilitato tecnologia 4G/HSDPA 42/UMTS/EDGE/GPRS Frequenze 850/900/1800/1900\r\n\r\nConnettività: Wi-Fi - Bluetooth - Micro USB - NFC\r\n\r\nGPS: Integrato\r\n\r\nDisplay: Full HD da 5” 1080p, Display TRILUMINOS\r\n\r\nFotocamera: Posteriore da 23 Mpixel Exmor, Anteriore da 13 Mpxl\r\n\r\nMemoria: Interna 3GB - Slot Memory Card Micro SD fino a 200GB\r\n\r\nProcessore: Processore Qualcomm® Snapdragon™ 650 Hexa-Core (1.8 GHz + 1.4 GHz)\r\n\r\nVideo: Video Recorder&Playback\r\n\r\nMusica: MP3 Player - Radio FM\r\n\r\nIn dotazione: Auricolare stereo - Caricabatteria - Cavo dati - Guida di riferimento rapido\r\n\r\nDimensioni: 143,7 x 70,5 x 8,6 mm\r\n\r\nPeso: 165 grammi\r\n\r\nAutonomia: Stand-by fino a 779 ore - Conversazione fino a 790 min', 'tbt', 'tbt', 'tbt'),
(10, 'Smartphones', 'ZTE', 'Blade L5', '79.90', 0, NULL, 'assets/images/devices/ZTE_BLADE_L5', 'Sistema Operativo Android 5.1\r\nDisplay 5”\r\nProcessore DualCore 1.3 GHz\r\nFotocamera 8 Mpixel/Flash', 'null', 'Connettività: HSDPA21/UMTS/EDGE/GPRS - Wi-Fi - Bluetooth - Micro USB - Ricevitore GPS Integrato\r\n\r\nFrequenze: 850/900/1800/1900/2100\r\n\r\nDisplay: 5” 16 Milioni colori Touch\r\n\r\nFotocamera: 8 Mpixel/Flash\r\n\r\nMemoria: 8GB - Slot Memory Card Micro SD fino a 32GB\r\n\r\nProcessore: DualCore 1.3 GHz\r\n\r\nMultimedia: Video Recorder&Playback - MP3 Player - Radio FM\r\n\r\nIn dotazione: Caricabatteria - Cavo Dati – Auricolare stereo - Guida di riferimento rapido\r\n\r\nDimensioni: 143,5 x 71,8 x 8,6 mm\r\n\r\nPeso: 142 gr.\r\n\r\nAutonomia: Stand-by fino a 500 ore - Conversazione fino a 240 min', 'tbt', 'tbt', 'tbt');

-- --------------------------------------------------------

--
-- Table structure for table `dvslrelations`
--

DROP TABLE IF EXISTS `dvslrelations`;
CREATE TABLE IF NOT EXISTS `dvslrelations` (
  `iddevice` int(11) UNSIGNED NOT NULL,
  `idslservice` int(11) UNSIGNED NOT NULL,
  PRIMARY KEY (`iddevice`,`idslservice`),
  KEY `idslservice` (`idslservice`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `slservices`
--

DROP TABLE IF EXISTS `slservices`;
CREATE TABLE IF NOT EXISTS `slservices` (
  `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT,
  `category` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `name` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `description` text COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `assdvrelation`
--
ALTER TABLE `assdvrelation`
  ADD CONSTRAINT `assdvrelation_ibfk_1` FOREIGN KEY (`idass`) REFERENCES `assistance` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `assdvrelation_ibfk_2` FOREIGN KEY (`iddevice`) REFERENCES `devices` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `dvslrelations`
--
ALTER TABLE `dvslrelations`
  ADD CONSTRAINT `dvslrelations_ibfk_1` FOREIGN KEY (`iddevice`) REFERENCES `devices` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `dvslrelations_ibfk_2` FOREIGN KEY (`idslservice`) REFERENCES `slservices` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
