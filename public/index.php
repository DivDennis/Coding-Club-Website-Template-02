<?php session_start(); ?>
<?php include 'header.php' ?>

<style type="text/css">

html {
  height: 100%;
  background: radial-gradient(ellipse at bottom, #1b2735 7%, #0077B5 100%);
  overflow: hidden;
    }

#stars {
  width: 1px;
  height: 1px;
  background: transparent;
  box-shadow: 352px 788px #FFF , 1324px 1505px #FFF , 180px 261px #FFF , 337px 776px #FFF , 516px 1195px #FFF , 1532px 1313px #FFF , 759px 1033px #FFF , 269px 660px #FFF , 984px 1811px #FFF , 1978px 281px #FFF , 626px 1325px #FFF , 1794px 74px #FFF , 332px 494px #FFF , 780px 68px #FFF , 276px 1715px #FFF , 503px 1856px #FFF , 238px 592px #FFF , 1756px 935px #FFF , 817px 387px #FFF , 1474px 1059px #FFF , 1001px 1872px #FFF , 1234px 745px #FFF , 66px 1074px #FFF , 593px 205px #FFF , 1924px 1728px #FFF , 1923px 1487px #FFF , 1908px 1735px #FFF , 401px 1559px #FFF , 1811px 225px #FFF , 735px 1661px #FFF , 508px 47px #FFF , 1012px 1290px #FFF , 758px 1486px #FFF , 176px 240px #FFF , 1608px 1015px #FFF , 1008px 532px #FFF , 1511px 492px #FFF , 937px 946px #FFF , 751px 103px #FFF , 1288px 1044px #FFF , 283px 929px #FFF , 821px 975px #FFF , 1127px 346px #FFF , 751px 1417px #FFF , 1784px 712px #FFF , 1407px 1117px #FFF , 1537px 547px #FFF , 1755px 1083px #FFF , 17px 1671px #FFF , 411px 163px #FFF , 1779px 1622px #FFF , 1854px 248px #FFF , 1788px 1984px #FFF , 1089px 1619px #FFF , 1966px 1576px #FFF , 1383px 31px #FFF , 1079px 1227px #FFF , 550px 1257px #FFF , 1186px 1225px #FFF , 1298px 358px #FFF , 389px 1211px #FFF , 13px 1326px #FFF , 32px 1840px #FFF , 230px 241px #FFF , 680px 1720px #FFF , 345px 416px #FFF , 1128px 22px #FFF , 1566px 1648px #FFF , 1782px 1363px #FFF , 1022px 1673px #FFF , 1724px 1505px #FFF , 845px 1279px #FFF , 1015px 21px #FFF , 1078px 905px #FFF , 732px 1995px #FFF , 591px 10px #FFF , 1620px 1813px #FFF , 793px 1076px #FFF , 134px 503px #FFF , 1372px 38px #FFF , 222px 407px #FFF , 167px 165px #FFF , 34px 1241px #FFF , 995px 2000px #FFF , 1502px 1273px #FFF , 297px 1107px #FFF , 957px 1056px #FFF , 1609px 294px #FFF , 338px 1446px #FFF , 700px 1452px #FFF , 1785px 817px #FFF , 597px 1385px #FFF , 1940px 467px #FFF , 531px 1359px #FFF , 758px 857px #FFF , 1035px 828px #FFF , 1590px 839px #FFF , 975px 196px #FFF , 1821px 1868px #FFF , 900px 424px #FFF , 1512px 1169px #FFF , 1292px 375px #FFF , 451px 1280px #FFF , 1838px 845px #FFF , 897px 1173px #FFF , 261px 1863px #FFF , 1018px 1451px #FFF , 70px 1387px #FFF , 1518px 1846px #FFF , 1209px 488px #FFF , 814px 866px #FFF , 993px 750px #FFF , 1933px 2px #FFF , 1007px 614px #FFF , 471px 1326px #FFF , 1646px 46px #FFF , 1653px 1788px #FFF , 160px 1463px #FFF , 1300px 511px #FFF , 1538px 1202px #FFF , 50px 621px #FFF , 120px 223px #FFF , 1366px 484px #FFF , 1960px 1333px #FFF , 1864px 754px #FFF , 1351px 1267px #FFF , 1464px 1691px #FFF , 1815px 1316px #FFF , 1117px 1233px #FFF , 751px 288px #FFF , 127px 527px #FFF , 1196px 1152px #FFF , 1330px 911px #FFF , 264px 1589px #FFF , 813px 1918px #FFF , 1053px 1020px #FFF , 1042px 492px #FFF , 571px 1486px #FFF , 605px 104px #FFF , 1983px 65px #FFF , 1507px 437px #FFF , 459px 316px #FFF , 96px 178px #FFF , 98px 446px #FFF , 1833px 105px #FFF , 172px 1603px #FFF , 283px 849px #FFF , 1749px 1944px #FFF , 788px 232px #FFF , 1655px 1122px #FFF , 1193px 219px #FFF , 497px 477px #FFF , 238px 1629px #FFF , 310px 559px #FFF , 1901px 1160px #FFF , 379px 322px #FFF , 907px 1006px #FFF , 1699px 967px #FFF , 933px 1614px #FFF , 1956px 1583px #FFF , 1597px 1960px #FFF , 482px 1111px #FFF , 319px 1135px #FFF , 1797px 934px #FFF , 1921px 1259px #FFF , 1408px 831px #FFF , 1831px 1047px #FFF , 1170px 1388px #FFF , 970px 361px #FFF , 389px 410px #FFF , 43px 1294px #FFF , 196px 1015px #FFF , 819px 722px #FFF , 1950px 1816px #FFF , 1735px 72px #FFF , 618px 1589px #FFF , 165px 1037px #FFF , 1697px 1424px #FFF , 1807px 570px #FFF , 489px 1963px #FFF , 106px 217px #FFF , 698px 1663px #FFF , 1781px 1606px #FFF , 44px 73px #FFF , 901px 1096px #FFF , 1065px 1384px #FFF , 779px 1101px #FFF , 1619px 1987px #FFF , 256px 1981px #FFF , 422px 1274px #FFF , 188px 466px #FFF , 1112px 1593px #FFF , 1268px 460px #FFF , 907px 903px #FFF , 468px 655px #FFF , 422px 1319px #FFF , 462px 1696px #FFF , 1110px 1617px #FFF , 912px 335px #FFF , 1192px 1826px #FFF , 817px 1120px #FFF , 1887px 1519px #FFF , 889px 918px #FFF , 521px 340px #FFF , 128px 404px #FFF , 1885px 1787px #FFF , 202px 1486px #FFF , 352px 1150px #FFF , 689px 172px #FFF , 1068px 1333px #FFF , 886px 1956px #FFF , 1302px 935px #FFF , 983px 1559px #FFF , 1960px 1539px #FFF , 1319px 1672px #FFF , 94px 807px #FFF , 1208px 852px #FFF , 108px 1718px #FFF , 111px 1742px #FFF , 1551px 468px #FFF , 1227px 81px #FFF , 1836px 1095px #FFF , 324px 23px #FFF , 1856px 1312px #FFF , 1907px 1555px #FFF , 401px 80px #FFF , 872px 834px #FFF , 924px 1173px #FFF , 333px 955px #FFF , 1112px 59px #FFF , 512px 1881px #FFF , 926px 1374px #FFF , 1533px 402px #FFF , 580px 25px #FFF , 837px 834px #FFF , 1359px 201px #FFF , 1461px 100px #FFF , 1562px 195px #FFF , 938px 1540px #FFF , 1713px 1058px #FFF , 678px 1215px #FFF , 1387px 418px #FFF , 1621px 521px #FFF , 1968px 910px #FFF , 804px 890px #FFF , 1645px 1381px #FFF , 1893px 121px #FFF , 1823px 147px #FFF , 206px 451px #FFF , 1204px 394px #FFF , 1818px 119px #FFF , 585px 1087px #FFF , 1690px 410px #FFF , 692px 852px #FFF , 1152px 1185px #FFF , 1603px 152px #FFF , 70px 1428px #FFF , 1967px 387px #FFF , 943px 1552px #FFF , 1591px 1812px #FFF , 971px 1498px #FFF , 1045px 406px #FFF , 1225px 1890px #FFF , 442px 631px #FFF , 153px 828px #FFF , 1265px 1144px #FFF , 618px 105px #FFF , 1243px 699px #FFF , 178px 1460px #FFF , 1534px 1210px #FFF , 408px 1916px #FFF , 877px 424px #FFF , 1249px 1081px #FFF , 1444px 1684px #FFF , 964px 1331px #FFF , 1650px 1477px #FFF , 1449px 802px #FFF , 1044px 419px #FFF , 434px 1513px #FFF , 1847px 1173px #FFF , 762px 1285px #FFF , 1035px 1496px #FFF , 109px 803px #FFF , 1959px 1175px #FFF , 1262px 936px #FFF , 636px 1230px #FFF , 1772px 407px #FFF , 450px 572px #FFF , 1658px 730px #FFF , 54px 1141px #FFF , 1450px 102px #FFF , 58px 984px #FFF , 1311px 76px #FFF , 528px 501px #FFF , 715px 1610px #FFF , 741px 677px #FFF , 356px 844px #FFF , 729px 551px #FFF , 1988px 566px #FFF , 637px 556px #FFF , 1334px 370px #FFF , 1173px 344px #FFF , 1938px 1149px #FFF , 1315px 1220px #FFF , 1017px 420px #FFF , 1458px 696px #FFF , 210px 1223px #FFF , 1066px 458px #FFF , 1640px 1418px #FFF , 1309px 914px #FFF , 1370px 1332px #FFF , 1461px 240px #FFF , 22px 522px #FFF , 639px 809px #FFF , 1821px 2px #FFF , 823px 287px #FFF , 1408px 912px #FFF , 714px 1565px #FFF , 1513px 1332px #FFF , 423px 1202px #FFF , 835px 1144px #FFF , 1436px 880px #FFF , 1663px 870px #FFF , 1500px 1712px #FFF , 166px 415px #FFF , 885px 1486px #FFF , 855px 1477px #FFF , 1080px 802px #FFF , 475px 1574px #FFF , 874px 829px #FFF , 602px 1348px #FFF , 49px 289px #FFF , 1750px 1064px #FFF , 1530px 1234px #FFF , 872px 860px #FFF , 1549px 917px #FFF , 394px 214px #FFF , 770px 1655px #FFF , 182px 1722px #FFF , 708px 289px #FFF , 688px 1243px #FFF , 1284px 1714px #FFF , 1728px 1671px #FFF , 1231px 533px #FFF , 812px 1289px #FFF , 1247px 1294px #FFF , 30px 1046px #FFF , 568px 479px #FFF , 1836px 109px #FFF , 57px 294px #FFF , 1921px 202px #FFF , 122px 1346px #FFF , 1687px 1646px #FFF , 973px 414px #FFF , 591px 809px #FFF , 110px 967px #FFF , 1806px 330px #FFF , 1794px 637px #FFF , 1465px 110px #FFF , 1807px 1381px #FFF , 472px 1728px #FFF , 1471px 1542px #FFF , 116px 885px #FFF , 1629px 651px #FFF , 1696px 1156px #FFF , 1445px 688px #FFF , 1911px 1291px #FFF , 1173px 216px #FFF , 211px 1074px #FFF , 477px 1350px #FFF , 746px 910px #FFF , 1337px 443px #FFF , 286px 1807px #FFF , 808px 1533px #FFF , 1915px 1160px #FFF , 1315px 777px #FFF , 1960px 722px #FFF , 1396px 1024px #FFF , 340px 634px #FFF , 253px 449px #FFF , 96px 1166px #FFF , 1711px 3px #FFF , 1137px 1357px #FFF , 1094px 1141px #FFF , 1979px 605px #FFF , 1491px 1857px #FFF , 97px 1631px #FFF , 1979px 1929px #FFF , 896px 1406px #FFF , 462px 173px #FFF , 551px 194px #FFF , 1889px 614px #FFF , 567px 779px #FFF , 1405px 1601px #FFF , 1445px 1025px #FFF , 1980px 1436px #FFF , 794px 1446px #FFF , 309px 1450px #FFF , 152px 1765px #FFF , 332px 614px #FFF , 507px 872px #FFF , 1664px 1443px #FFF , 291px 138px #FFF , 423px 939px #FFF , 1736px 515px #FFF , 1950px 1260px #FFF , 1295px 760px #FFF , 1820px 967px #FFF , 325px 1504px #FFF , 477px 845px #FFF , 1780px 572px #FFF , 976px 429px #FFF , 1469px 1485px #FFF , 1670px 1315px #FFF , 1654px 495px #FFF , 1433px 1459px #FFF , 26px 483px #FFF , 1290px 696px #FFF , 137px 161px #FFF , 1838px 1448px #FFF , 633px 1388px #FFF , 1551px 1733px #FFF , 1131px 655px #FFF , 126px 1400px #FFF , 1569px 1849px #FFF , 1869px 1031px #FFF , 238px 1234px #FFF , 707px 1201px #FFF , 1644px 945px #FFF , 1219px 1104px #FFF , 1226px 1723px #FFF , 1678px 1323px #FFF , 958px 292px #FFF , 311px 1710px #FFF , 467px 1098px #FFF , 39px 1777px #FFF , 363px 494px #FFF , 490px 490px #FFF , 1481px 649px #FFF , 806px 127px #FFF , 851px 506px #FFF , 472px 783px #FFF , 195px 1877px #FFF , 270px 1719px #FFF , 1107px 726px #FFF , 1682px 1357px #FFF , 1036px 796px #FFF , 764px 1740px #FFF , 1401px 487px #FFF , 1455px 279px #FFF , 1232px 1798px #FFF , 875px 441px #FFF , 324px 1521px #FFF , 330px 1052px #FFF , 1772px 1110px #FFF , 1605px 1303px #FFF , 1531px 344px #FFF , 1534px 1311px #FFF , 683px 80px #FFF , 315px 413px #FFF , 1464px 1132px #FFF , 101px 618px #FFF , 769px 1071px #FFF , 1170px 1285px #FFF , 692px 997px #FFF , 1668px 1392px #FFF , 1074px 694px #FFF , 1854px 1463px #FFF , 1216px 1589px #FFF , 860px 1544px #FFF , 708px 637px #FFF , 1855px 183px #FFF , 1639px 368px #FFF , 1627px 1333px #FFF , 1225px 1973px #FFF , 1455px 916px #FFF , 264px 1057px #FFF , 1448px 329px #FFF , 1520px 221px #FFF , 1058px 266px #FFF , 1445px 1775px #FFF , 1558px 899px #FFF , 583px 420px #FFF , 865px 349px #FFF , 301px 273px #FFF , 1780px 1723px #FFF , 322px 1871px #FFF , 485px 1623px #FFF , 1664px 1342px #FFF , 468px 1331px #FFF , 618px 1952px #FFF , 412px 666px #FFF , 231px 1164px #FFF , 379px 1812px #FFF , 1388px 1615px #FFF , 1962px 583px #FFF , 627px 1440px #FFF , 1629px 1456px #FFF , 1186px 469px #FFF , 1743px 550px #FFF , 587px 1818px #FFF , 1208px 79px #FFF , 1497px 1194px #FFF , 753px 714px #FFF , 1250px 1603px #FFF , 968px 1318px #FFF , 1529px 1832px #FFF , 1589px 720px #FFF , 1584px 349px #FFF , 9px 418px #FFF , 190px 359px #FFF , 556px 497px #FFF , 1386px 761px #FFF , 342px 444px #FFF , 825px 363px #FFF , 378px 377px #FFF , 1134px 799px #FFF , 435px 576px #FFF , 1002px 506px #FFF , 1730px 422px #FFF , 1414px 903px #FFF , 741px 1050px #FFF , 270px 861px #FFF , 838px 1722px #FFF , 742px 1973px #FFF , 692px 1206px #FFF , 1964px 1579px #FFF , 1159px 76px #FFF , 785px 467px #FFF , 882px 320px #FFF , 1696px 850px #FFF , 210px 330px #FFF , 970px 1203px #FFF , 441px 83px #FFF , 1264px 865px #FFF , 189px 527px #FFF , 215px 1400px #FFF , 297px 1783px #FFF , 35px 372px #FFF , 1412px 1746px #FFF , 984px 211px #FFF , 1586px 436px #FFF , 1524px 122px #FFF , 309px 388px #FFF , 956px 1642px #FFF , 1409px 1987px #FFF , 1279px 108px #FFF , 986px 151px #FFF , 854px 248px #FFF , 322px 584px #FFF , 1714px 1107px #FFF , 1187px 1926px #FFF , 1535px 1537px #FFF , 245px 353px #FFF , 1472px 1931px #FFF , 1195px 1082px #FFF , 1779px 1286px #FFF , 1152px 1443px #FFF , 57px 258px #FFF , 335px 1254px #FFF , 1055px 635px #FFF , 1350px 456px #FFF , 1473px 713px #FFF , 1502px 1361px #FFF , 1990px 141px #FFF , 1608px 1237px #FFF , 714px 493px #FFF , 751px 1265px #FFF , 1901px 1554px #FFF , 1327px 885px #FFF , 591px 1907px #FFF , 1343px 1073px #FFF , 1469px 915px #FFF , 1734px 1941px #FFF , 1266px 1323px #FFF , 1568px 288px #FFF , 1734px 1922px #FFF , 625px 915px #FFF , 1181px 1724px #FFF , 222px 1186px #FFF , 1598px 1861px #FFF , 409px 1324px #FFF , 1754px 1559px #FFF , 708px 751px #FFF , 1926px 840px #FFF , 120px 950px #FFF , 733px 179px #FFF , 120px 491px #FFF , 964px 727px #FFF , 395px 1164px #FFF , 954px 796px #FFF , 733px 378px #FFF , 1901px 1666px #FFF , 1267px 787px #FFF , 736px 907px #FFF , 1328px 1061px #FFF , 439px 536px #FFF , 767px 901px #FFF , 1139px 634px #FFF , 1832px 66px #FFF , 990px 599px #FFF , 1884px 1127px #FFF , 1342px 472px #FFF , 480px 1017px #FFF , 1385px 958px #FFF , 1002px 672px #FFF , 889px 699px #FFF , 123px 1649px #FFF , 530px 860px #FFF , 1730px 153px #FFF , 639px 1538px #FFF , 404px 635px #FFF , 1586px 111px #FFF , 1765px 1932px #FFF , 591px 74px #FFF , 331px 541px #FFF , 734px 211px #FFF , 1041px 1406px #FFF , 629px 1866px #FFF , 313px 337px #FFF , 418px 1546px #FFF , 347px 25px #FFF , 304px 79px #FFF , 122px 469px #FFF , 375px 359px #FFF , 399px 1272px #FFF , 1704px 1013px #FFF , 489px 58px #FFF , 1062px 154px #FFF , 1510px 582px #FFF , 811px 1812px #FFF , 1888px 10px #FFF , 1161px 352px #FFF , 1079px 83px #FFF , 1499px 1387px #FFF , 1739px 25px #FFF , 24px 1789px #FFF , 940px 541px #FFF , 1626px 1185px #FFF , 935px 87px #FFF , 217px 780px #FFF , 1348px 1500px #FFF , 1816px 747px #FFF , 1830px 705px #FFF , 1231px 236px #FFF , 1032px 1011px #FFF , 1493px 367px #FFF , 9px 776px #FFF , 624px 1259px #FFF , 1777px 489px #FFF , 668px 1404px #FFF , 158px 952px #FFF , 1514px 1095px #FFF , 8px 1927px #FFF , 1413px 1919px #FFF , 1130px 1121px #FFF , 1608px 893px #FFF , 1377px 1344px #FFF , 1348px 235px #FFF , 989px 979px #FFF , 1117px 1536px #FFF , 175px 1340px #FFF , 763px 1651px #FFF , 1097px 1182px #FFF , 898px 1630px #FFF , 325px 440px #FFF , 1479px 648px #FFF , 821px 420px #FFF , 215px 585px #FFF , 648px 139px #FFF , 599px 1438px #FFF , 684px 1290px #FFF , 1602px 1659px #FFF , 1055px 1956px #FFF , 1625px 214px #FFF , 773px 914px #FFF , 341px 1587px #FFF , 1518px 538px #FFF , 1761px 119px #FFF , 1496px 1519px #FFF , 754px 1459px #FFF , 1151px 1907px #FFF , 619px 669px #FFF , 1867px 789px #FFF , 142px 245px #FFF , 618px 1401px #FFF , 131px 1839px #FFF , 1146px 1046px #FFF , 486px 711px #FFF , 529px 1992px #FFF , 302px 1397px #FFF , 1452px 883px #FFF , 542px 1787px #FFF , 584px 551px #FFF , 845px 1332px #FFF , 1046px 533px #FFF , 1307px 166px #FFF , 118px 1573px #FFF , 1324px 1731px #FFF , 736px 439px #FFF;
  animation: animStar 50s linear infinite;
}

#stars:after {
  content: " ";
  position: absolute;
  top: 2000px;
  width: 1px;
  height: 1px;
  background: transparent;
  box-shadow: 352px 788px #FFF , 1324px 1505px #FFF , 180px 261px #FFF , 337px 776px #FFF , 516px 1195px #FFF , 1532px 1313px #FFF , 759px 1033px #FFF , 269px 660px #FFF , 984px 1811px #FFF , 1978px 281px #FFF , 626px 1325px #FFF , 1794px 74px #FFF , 332px 494px #FFF , 780px 68px #FFF , 276px 1715px #FFF , 503px 1856px #FFF , 238px 592px #FFF , 1756px 935px #FFF , 817px 387px #FFF , 1474px 1059px #FFF , 1001px 1872px #FFF , 1234px 745px #FFF , 66px 1074px #FFF , 593px 205px #FFF , 1924px 1728px #FFF , 1923px 1487px #FFF , 1908px 1735px #FFF , 401px 1559px #FFF , 1811px 225px #FFF , 735px 1661px #FFF , 508px 47px #FFF , 1012px 1290px #FFF , 758px 1486px #FFF , 176px 240px #FFF , 1608px 1015px #FFF , 1008px 532px #FFF , 1511px 492px #FFF , 937px 946px #FFF , 751px 103px #FFF , 1288px 1044px #FFF , 283px 929px #FFF , 821px 975px #FFF , 1127px 346px #FFF , 751px 1417px #FFF , 1784px 712px #FFF , 1407px 1117px #FFF , 1537px 547px #FFF , 1755px 1083px #FFF , 17px 1671px #FFF , 411px 163px #FFF , 1779px 1622px #FFF , 1854px 248px #FFF , 1788px 1984px #FFF , 1089px 1619px #FFF , 1966px 1576px #FFF , 1383px 31px #FFF , 1079px 1227px #FFF , 550px 1257px #FFF , 1186px 1225px #FFF , 1298px 358px #FFF , 389px 1211px #FFF , 13px 1326px #FFF , 32px 1840px #FFF , 230px 241px #FFF , 680px 1720px #FFF , 345px 416px #FFF , 1128px 22px #FFF , 1566px 1648px #FFF , 1782px 1363px #FFF , 1022px 1673px #FFF , 1724px 1505px #FFF , 845px 1279px #FFF , 1015px 21px #FFF , 1078px 905px #FFF , 732px 1995px #FFF , 591px 10px #FFF , 1620px 1813px #FFF , 793px 1076px #FFF , 134px 503px #FFF , 1372px 38px #FFF , 222px 407px #FFF , 167px 165px #FFF , 34px 1241px #FFF , 995px 2000px #FFF , 1502px 1273px #FFF , 297px 1107px #FFF , 957px 1056px #FFF , 1609px 294px #FFF , 338px 1446px #FFF , 700px 1452px #FFF , 1785px 817px #FFF , 597px 1385px #FFF , 1940px 467px #FFF , 531px 1359px #FFF , 758px 857px #FFF , 1035px 828px #FFF , 1590px 839px #FFF , 975px 196px #FFF , 1821px 1868px #FFF , 900px 424px #FFF , 1512px 1169px #FFF , 1292px 375px #FFF , 451px 1280px #FFF , 1838px 845px #FFF , 897px 1173px #FFF , 261px 1863px #FFF , 1018px 1451px #FFF , 70px 1387px #FFF , 1518px 1846px #FFF , 1209px 488px #FFF , 814px 866px #FFF , 993px 750px #FFF , 1933px 2px #FFF , 1007px 614px #FFF , 471px 1326px #FFF , 1646px 46px #FFF , 1653px 1788px #FFF , 160px 1463px #FFF , 1300px 511px #FFF , 1538px 1202px #FFF , 50px 621px #FFF , 120px 223px #FFF , 1366px 484px #FFF , 1960px 1333px #FFF , 1864px 754px #FFF , 1351px 1267px #FFF , 1464px 1691px #FFF , 1815px 1316px #FFF , 1117px 1233px #FFF , 751px 288px #FFF , 127px 527px #FFF , 1196px 1152px #FFF , 1330px 911px #FFF , 264px 1589px #FFF , 813px 1918px #FFF , 1053px 1020px #FFF , 1042px 492px #FFF , 571px 1486px #FFF , 605px 104px #FFF , 1983px 65px #FFF , 1507px 437px #FFF , 459px 316px #FFF , 96px 178px #FFF , 98px 446px #FFF , 1833px 105px #FFF , 172px 1603px #FFF , 283px 849px #FFF , 1749px 1944px #FFF , 788px 232px #FFF , 1655px 1122px #FFF , 1193px 219px #FFF , 497px 477px #FFF , 238px 1629px #FFF , 310px 559px #FFF , 1901px 1160px #FFF , 379px 322px #FFF , 907px 1006px #FFF , 1699px 967px #FFF , 933px 1614px #FFF , 1956px 1583px #FFF , 1597px 1960px #FFF , 482px 1111px #FFF , 319px 1135px #FFF , 1797px 934px #FFF , 1921px 1259px #FFF , 1408px 831px #FFF , 1831px 1047px #FFF , 1170px 1388px #FFF , 970px 361px #FFF , 389px 410px #FFF , 43px 1294px #FFF , 196px 1015px #FFF , 819px 722px #FFF , 1950px 1816px #FFF , 1735px 72px #FFF , 618px 1589px #FFF , 165px 1037px #FFF , 1697px 1424px #FFF , 1807px 570px #FFF , 489px 1963px #FFF , 106px 217px #FFF , 698px 1663px #FFF , 1781px 1606px #FFF , 44px 73px #FFF , 901px 1096px #FFF , 1065px 1384px #FFF , 779px 1101px #FFF , 1619px 1987px #FFF , 256px 1981px #FFF , 422px 1274px #FFF , 188px 466px #FFF , 1112px 1593px #FFF , 1268px 460px #FFF , 907px 903px #FFF , 468px 655px #FFF , 422px 1319px #FFF , 462px 1696px #FFF , 1110px 1617px #FFF , 912px 335px #FFF , 1192px 1826px #FFF , 817px 1120px #FFF , 1887px 1519px #FFF , 889px 918px #FFF , 521px 340px #FFF , 128px 404px #FFF , 1885px 1787px #FFF , 202px 1486px #FFF , 352px 1150px #FFF , 689px 172px #FFF , 1068px 1333px #FFF , 886px 1956px #FFF , 1302px 935px #FFF , 983px 1559px #FFF , 1960px 1539px #FFF , 1319px 1672px #FFF , 94px 807px #FFF , 1208px 852px #FFF , 108px 1718px #FFF , 111px 1742px #FFF , 1551px 468px #FFF , 1227px 81px #FFF , 1836px 1095px #FFF , 324px 23px #FFF , 1856px 1312px #FFF , 1907px 1555px #FFF , 401px 80px #FFF , 872px 834px #FFF , 924px 1173px #FFF , 333px 955px #FFF , 1112px 59px #FFF , 512px 1881px #FFF , 926px 1374px #FFF , 1533px 402px #FFF , 580px 25px #FFF , 837px 834px #FFF , 1359px 201px #FFF , 1461px 100px #FFF , 1562px 195px #FFF , 938px 1540px #FFF , 1713px 1058px #FFF , 678px 1215px #FFF , 1387px 418px #FFF , 1621px 521px #FFF , 1968px 910px #FFF , 804px 890px #FFF , 1645px 1381px #FFF , 1893px 121px #FFF , 1823px 147px #FFF , 206px 451px #FFF , 1204px 394px #FFF , 1818px 119px #FFF , 585px 1087px #FFF , 1690px 410px #FFF , 692px 852px #FFF , 1152px 1185px #FFF , 1603px 152px #FFF , 70px 1428px #FFF , 1967px 387px #FFF , 943px 1552px #FFF , 1591px 1812px #FFF , 971px 1498px #FFF , 1045px 406px #FFF , 1225px 1890px #FFF , 442px 631px #FFF , 153px 828px #FFF , 1265px 1144px #FFF , 618px 105px #FFF , 1243px 699px #FFF , 178px 1460px #FFF , 1534px 1210px #FFF , 408px 1916px #FFF , 877px 424px #FFF , 1249px 1081px #FFF , 1444px 1684px #FFF , 964px 1331px #FFF , 1650px 1477px #FFF , 1449px 802px #FFF , 1044px 419px #FFF , 434px 1513px #FFF , 1847px 1173px #FFF , 762px 1285px #FFF , 1035px 1496px #FFF , 109px 803px #FFF , 1959px 1175px #FFF , 1262px 936px #FFF , 636px 1230px #FFF , 1772px 407px #FFF , 450px 572px #FFF , 1658px 730px #FFF , 54px 1141px #FFF , 1450px 102px #FFF , 58px 984px #FFF , 1311px 76px #FFF , 528px 501px #FFF , 715px 1610px #FFF , 741px 677px #FFF , 356px 844px #FFF , 729px 551px #FFF , 1988px 566px #FFF , 637px 556px #FFF , 1334px 370px #FFF , 1173px 344px #FFF , 1938px 1149px #FFF , 1315px 1220px #FFF , 1017px 420px #FFF , 1458px 696px #FFF , 210px 1223px #FFF , 1066px 458px #FFF , 1640px 1418px #FFF , 1309px 914px #FFF , 1370px 1332px #FFF , 1461px 240px #FFF , 22px 522px #FFF , 639px 809px #FFF , 1821px 2px #FFF , 823px 287px #FFF , 1408px 912px #FFF , 714px 1565px #FFF , 1513px 1332px #FFF , 423px 1202px #FFF , 835px 1144px #FFF , 1436px 880px #FFF , 1663px 870px #FFF , 1500px 1712px #FFF , 166px 415px #FFF , 885px 1486px #FFF , 855px 1477px #FFF , 1080px 802px #FFF , 475px 1574px #FFF , 874px 829px #FFF , 602px 1348px #FFF , 49px 289px #FFF , 1750px 1064px #FFF , 1530px 1234px #FFF , 872px 860px #FFF , 1549px 917px #FFF , 394px 214px #FFF , 770px 1655px #FFF , 182px 1722px #FFF , 708px 289px #FFF , 688px 1243px #FFF , 1284px 1714px #FFF , 1728px 1671px #FFF , 1231px 533px #FFF , 812px 1289px #FFF , 1247px 1294px #FFF , 30px 1046px #FFF , 568px 479px #FFF , 1836px 109px #FFF , 57px 294px #FFF , 1921px 202px #FFF , 122px 1346px #FFF , 1687px 1646px #FFF , 973px 414px #FFF , 591px 809px #FFF , 110px 967px #FFF , 1806px 330px #FFF , 1794px 637px #FFF , 1465px 110px #FFF , 1807px 1381px #FFF , 472px 1728px #FFF , 1471px 1542px #FFF , 116px 885px #FFF , 1629px 651px #FFF , 1696px 1156px #FFF , 1445px 688px #FFF , 1911px 1291px #FFF , 1173px 216px #FFF , 211px 1074px #FFF , 477px 1350px #FFF , 746px 910px #FFF , 1337px 443px #FFF , 286px 1807px #FFF , 808px 1533px #FFF , 1915px 1160px #FFF , 1315px 777px #FFF , 1960px 722px #FFF , 1396px 1024px #FFF , 340px 634px #FFF , 253px 449px #FFF , 96px 1166px #FFF , 1711px 3px #FFF , 1137px 1357px #FFF , 1094px 1141px #FFF , 1979px 605px #FFF , 1491px 1857px #FFF , 97px 1631px #FFF , 1979px 1929px #FFF , 896px 1406px #FFF , 462px 173px #FFF , 551px 194px #FFF , 1889px 614px #FFF , 567px 779px #FFF , 1405px 1601px #FFF , 1445px 1025px #FFF , 1980px 1436px #FFF , 794px 1446px #FFF , 309px 1450px #FFF , 152px 1765px #FFF , 332px 614px #FFF , 507px 872px #FFF , 1664px 1443px #FFF , 291px 138px #FFF , 423px 939px #FFF , 1736px 515px #FFF , 1950px 1260px #FFF , 1295px 760px #FFF , 1820px 967px #FFF , 325px 1504px #FFF , 477px 845px #FFF , 1780px 572px #FFF , 976px 429px #FFF , 1469px 1485px #FFF , 1670px 1315px #FFF , 1654px 495px #FFF , 1433px 1459px #FFF , 26px 483px #FFF , 1290px 696px #FFF , 137px 161px #FFF , 1838px 1448px #FFF , 633px 1388px #FFF , 1551px 1733px #FFF , 1131px 655px #FFF , 126px 1400px #FFF , 1569px 1849px #FFF , 1869px 1031px #FFF , 238px 1234px #FFF , 707px 1201px #FFF , 1644px 945px #FFF , 1219px 1104px #FFF , 1226px 1723px #FFF , 1678px 1323px #FFF , 958px 292px #FFF , 311px 1710px #FFF , 467px 1098px #FFF , 39px 1777px #FFF , 363px 494px #FFF , 490px 490px #FFF , 1481px 649px #FFF , 806px 127px #FFF , 851px 506px #FFF , 472px 783px #FFF , 195px 1877px #FFF , 270px 1719px #FFF , 1107px 726px #FFF , 1682px 1357px #FFF , 1036px 796px #FFF , 764px 1740px #FFF , 1401px 487px #FFF , 1455px 279px #FFF , 1232px 1798px #FFF , 875px 441px #FFF , 324px 1521px #FFF , 330px 1052px #FFF , 1772px 1110px #FFF , 1605px 1303px #FFF , 1531px 344px #FFF , 1534px 1311px #FFF , 683px 80px #FFF , 315px 413px #FFF , 1464px 1132px #FFF , 101px 618px #FFF , 769px 1071px #FFF , 1170px 1285px #FFF , 692px 997px #FFF , 1668px 1392px #FFF , 1074px 694px #FFF , 1854px 1463px #FFF , 1216px 1589px #FFF , 860px 1544px #FFF , 708px 637px #FFF , 1855px 183px #FFF , 1639px 368px #FFF , 1627px 1333px #FFF , 1225px 1973px #FFF , 1455px 916px #FFF , 264px 1057px #FFF , 1448px 329px #FFF , 1520px 221px #FFF , 1058px 266px #FFF , 1445px 1775px #FFF , 1558px 899px #FFF , 583px 420px #FFF , 865px 349px #FFF , 301px 273px #FFF , 1780px 1723px #FFF , 322px 1871px #FFF , 485px 1623px #FFF , 1664px 1342px #FFF , 468px 1331px #FFF , 618px 1952px #FFF , 412px 666px #FFF , 231px 1164px #FFF , 379px 1812px #FFF , 1388px 1615px #FFF , 1962px 583px #FFF , 627px 1440px #FFF , 1629px 1456px #FFF , 1186px 469px #FFF , 1743px 550px #FFF , 587px 1818px #FFF , 1208px 79px #FFF , 1497px 1194px #FFF , 753px 714px #FFF , 1250px 1603px #FFF , 968px 1318px #FFF , 1529px 1832px #FFF , 1589px 720px #FFF , 1584px 349px #FFF , 9px 418px #FFF , 190px 359px #FFF , 556px 497px #FFF , 1386px 761px #FFF , 342px 444px #FFF , 825px 363px #FFF , 378px 377px #FFF , 1134px 799px #FFF , 435px 576px #FFF , 1002px 506px #FFF , 1730px 422px #FFF , 1414px 903px #FFF , 741px 1050px #FFF , 270px 861px #FFF , 838px 1722px #FFF , 742px 1973px #FFF , 692px 1206px #FFF , 1964px 1579px #FFF , 1159px 76px #FFF , 785px 467px #FFF , 882px 320px #FFF , 1696px 850px #FFF , 210px 330px #FFF , 970px 1203px #FFF , 441px 83px #FFF , 1264px 865px #FFF , 189px 527px #FFF , 215px 1400px #FFF , 297px 1783px #FFF , 35px 372px #FFF , 1412px 1746px #FFF , 984px 211px #FFF , 1586px 436px #FFF , 1524px 122px #FFF , 309px 388px #FFF , 956px 1642px #FFF , 1409px 1987px #FFF , 1279px 108px #FFF , 986px 151px #FFF , 854px 248px #FFF , 322px 584px #FFF , 1714px 1107px #FFF , 1187px 1926px #FFF , 1535px 1537px #FFF , 245px 353px #FFF , 1472px 1931px #FFF , 1195px 1082px #FFF , 1779px 1286px #FFF , 1152px 1443px #FFF , 57px 258px #FFF , 335px 1254px #FFF , 1055px 635px #FFF , 1350px 456px #FFF , 1473px 713px #FFF , 1502px 1361px #FFF , 1990px 141px #FFF , 1608px 1237px #FFF , 714px 493px #FFF , 751px 1265px #FFF , 1901px 1554px #FFF , 1327px 885px #FFF , 591px 1907px #FFF , 1343px 1073px #FFF , 1469px 915px #FFF , 1734px 1941px #FFF , 1266px 1323px #FFF , 1568px 288px #FFF , 1734px 1922px #FFF , 625px 915px #FFF , 1181px 1724px #FFF , 222px 1186px #FFF , 1598px 1861px #FFF , 409px 1324px #FFF , 1754px 1559px #FFF , 708px 751px #FFF , 1926px 840px #FFF , 120px 950px #FFF , 733px 179px #FFF , 120px 491px #FFF , 964px 727px #FFF , 395px 1164px #FFF , 954px 796px #FFF , 733px 378px #FFF , 1901px 1666px #FFF , 1267px 787px #FFF , 736px 907px #FFF , 1328px 1061px #FFF , 439px 536px #FFF , 767px 901px #FFF , 1139px 634px #FFF , 1832px 66px #FFF , 990px 599px #FFF , 1884px 1127px #FFF , 1342px 472px #FFF , 480px 1017px #FFF , 1385px 958px #FFF , 1002px 672px #FFF , 889px 699px #FFF , 123px 1649px #FFF , 530px 860px #FFF , 1730px 153px #FFF , 639px 1538px #FFF , 404px 635px #FFF , 1586px 111px #FFF , 1765px 1932px #FFF , 591px 74px #FFF , 331px 541px #FFF , 734px 211px #FFF , 1041px 1406px #FFF , 629px 1866px #FFF , 313px 337px #FFF , 418px 1546px #FFF , 347px 25px #FFF , 304px 79px #FFF , 122px 469px #FFF , 375px 359px #FFF , 399px 1272px #FFF , 1704px 1013px #FFF , 489px 58px #FFF , 1062px 154px #FFF , 1510px 582px #FFF , 811px 1812px #FFF , 1888px 10px #FFF , 1161px 352px #FFF , 1079px 83px #FFF , 1499px 1387px #FFF , 1739px 25px #FFF , 24px 1789px #FFF , 940px 541px #FFF , 1626px 1185px #FFF , 935px 87px #FFF , 217px 780px #FFF , 1348px 1500px #FFF , 1816px 747px #FFF , 1830px 705px #FFF , 1231px 236px #FFF , 1032px 1011px #FFF , 1493px 367px #FFF , 9px 776px #FFF , 624px 1259px #FFF , 1777px 489px #FFF , 668px 1404px #FFF , 158px 952px #FFF , 1514px 1095px #FFF , 8px 1927px #FFF , 1413px 1919px #FFF , 1130px 1121px #FFF , 1608px 893px #FFF , 1377px 1344px #FFF , 1348px 235px #FFF , 989px 979px #FFF , 1117px 1536px #FFF , 175px 1340px #FFF , 763px 1651px #FFF , 1097px 1182px #FFF , 898px 1630px #FFF , 325px 440px #FFF , 1479px 648px #FFF , 821px 420px #FFF , 215px 585px #FFF , 648px 139px #FFF , 599px 1438px #FFF , 684px 1290px #FFF , 1602px 1659px #FFF , 1055px 1956px #FFF , 1625px 214px #FFF , 773px 914px #FFF , 341px 1587px #FFF , 1518px 538px #FFF , 1761px 119px #FFF , 1496px 1519px #FFF , 754px 1459px #FFF , 1151px 1907px #FFF , 619px 669px #FFF , 1867px 789px #FFF , 142px 245px #FFF , 618px 1401px #FFF , 131px 1839px #FFF , 1146px 1046px #FFF , 486px 711px #FFF , 529px 1992px #FFF , 302px 1397px #FFF , 1452px 883px #FFF , 542px 1787px #FFF , 584px 551px #FFF , 845px 1332px #FFF , 1046px 533px #FFF , 1307px 166px #FFF , 118px 1573px #FFF , 1324px 1731px #FFF , 736px 439px #FFF;
}

#stars2 {
  width: 2px;
  height: 2px;
  background: transparent;
  box-shadow: 72px 554px #FFF , 962px 872px #FFF , 986px 455px #FFF , 1579px 929px #FFF , 1381px 629px #FFF , 1352px 518px #FFF , 996px 401px #FFF , 1082px 487px #FFF , 1045px 369px #FFF , 1884px 1969px #FFF , 788px 1001px #FFF , 1893px 1551px #FFF , 1713px 1347px #FFF , 1952px 390px #FFF , 1316px 593px #FFF , 1997px 452px #FFF , 441px 798px #FFF , 1643px 452px #FFF , 1473px 1710px #FFF , 387px 1815px #FFF , 1785px 1985px #FFF , 1174px 59px #FFF , 603px 1418px #FFF , 952px 1302px #FFF , 444px 1339px #FFF , 128px 1031px #FFF , 1827px 29px #FFF , 640px 82px #FFF , 206px 757px #FFF , 1928px 120px #FFF , 232px 13px #FFF , 1130px 1623px #FFF , 1033px 58px #FFF , 470px 332px #FFF , 909px 1577px #FFF , 6px 333px #FFF , 1278px 1525px #FFF , 1168px 1277px #FFF , 258px 1515px #FFF , 1634px 1847px #FFF , 91px 280px #FFF , 434px 2000px #FFF , 536px 1014px #FFF , 664px 782px #FFF , 338px 151px #FFF , 1382px 793px #FFF , 1215px 1189px #FFF , 1683px 44px #FFF , 380px 511px #FFF , 1089px 213px #FFF , 1812px 1609px #FFF , 411px 445px #FFF , 270px 1232px #FFF , 632px 1622px #FFF , 1572px 721px #FFF , 844px 677px #FFF , 1843px 937px #FFF , 1959px 1386px #FFF , 1646px 1165px #FFF , 64px 1769px #FFF , 1632px 255px #FFF , 1506px 1253px #FFF , 45px 58px #FFF , 1555px 1426px #FFF , 737px 1008px #FFF , 1725px 1886px #FFF , 1934px 246px #FFF , 1084px 1271px #FFF , 416px 1031px #FFF , 1391px 1114px #FFF , 1859px 1018px #FFF , 835px 1757px #FFF , 659px 242px #FFF , 266px 611px #FFF , 1062px 641px #FFF , 432px 1306px #FFF , 1342px 1273px #FFF , 1722px 241px #FFF , 1970px 185px #FFF , 733px 4px #FFF , 1934px 1896px #FFF , 794px 58px #FFF , 1856px 1317px #FFF , 186px 1908px #FFF , 898px 627px #FFF , 1752px 1080px #FFF , 631px 1756px #FFF , 436px 117px #FFF , 1319px 747px #FFF , 640px 1357px #FFF , 1371px 791px #FFF , 1436px 992px #FFF , 334px 930px #FFF , 1780px 1996px #FFF , 1828px 1681px #FFF , 732px 538px #FFF , 981px 1233px #FFF , 427px 1583px #FFF , 49px 500px #FFF , 1096px 629px #FFF , 1518px 1762px #FFF , 784px 1705px #FFF , 1818px 903px #FFF , 1598px 1463px #FFF , 1782px 471px #FFF , 749px 592px #FFF , 546px 225px #FFF , 251px 1345px #FFF , 1471px 108px #FFF , 650px 767px #FFF , 1517px 1764px #FFF , 1811px 1307px #FFF , 1523px 1680px #FFF , 1555px 1342px #FFF , 1238px 488px #FFF , 1799px 1633px #FFF , 1857px 667px #FFF , 1950px 51px #FFF , 608px 444px #FFF , 1152px 817px #FFF , 1693px 818px #FFF , 13px 348px #FFF , 1669px 265px #FFF , 536px 1513px #FFF , 143px 529px #FFF , 1761px 846px #FFF , 1179px 1818px #FFF , 1110px 108px #FFF , 794px 1220px #FFF , 887px 775px #FFF , 1782px 596px #FFF , 630px 1974px #FFF , 116px 1924px #FFF , 96px 1227px #FFF , 1541px 892px #FFF , 1911px 18px #FFF , 819px 1992px #FFF , 1893px 1104px #FFF , 866px 1524px #FFF , 174px 125px #FFF , 784px 1887px #FFF , 196px 830px #FFF , 811px 1122px #FFF , 386px 1755px #FFF , 817px 1646px #FFF , 1556px 783px #FFF , 1928px 25px #FFF , 1707px 937px #FFF , 153px 1988px #FFF , 1143px 174px #FFF , 1862px 481px #FFF , 1773px 227px #FFF , 1632px 467px #FFF , 1696px 1808px #FFF , 1567px 15px #FFF , 1263px 1594px #FFF , 1396px 1908px #FFF , 1792px 1055px #FFF , 1349px 313px #FFF , 1082px 1812px #FFF , 1021px 1812px #FFF , 27px 1972px #FFF , 73px 1376px #FFF , 216px 42px #FFF , 1795px 1955px #FFF , 1690px 1080px #FFF , 1338px 893px #FFF , 693px 708px #FFF , 274px 1799px #FFF , 190px 579px #FFF , 983px 746px #FFF , 1278px 1613px #FFF , 1642px 1384px #FFF , 850px 430px #FFF , 697px 595px #FFF , 764px 341px #FFF , 759px 129px #FFF , 225px 529px #FFF , 388px 303px #FFF , 617px 1600px #FFF , 1268px 854px #FFF , 985px 836px #FFF , 1754px 1882px #FFF , 1093px 27px #FFF , 444px 1188px #FFF , 1736px 415px #FFF , 1830px 1532px #FFF , 1692px 48px #FFF , 836px 1563px #FFF , 416px 1673px #FFF , 125px 1982px #FFF , 1458px 349px #FFF , 1482px 1684px #FFF , 646px 624px #FFF , 1924px 76px #FFF , 1298px 10px #FFF , 896px 1009px #FFF , 367px 1365px #FFF , 1498px 1636px #FFF , 447px 1534px #FFF;
  animation: animStar 100s linear infinite;
}
#stars2:after {
  content: " ";
  position: absolute;
  top: 2000px;
  width: 2px;
  height: 2px;
  background: transparent;
  box-shadow: 72px 554px #FFF , 962px 872px #FFF , 986px 455px #FFF , 1579px 929px #FFF , 1381px 629px #FFF , 1352px 518px #FFF , 996px 401px #FFF , 1082px 487px #FFF , 1045px 369px #FFF , 1884px 1969px #FFF , 788px 1001px #FFF , 1893px 1551px #FFF , 1713px 1347px #FFF , 1952px 390px #FFF , 1316px 593px #FFF , 1997px 452px #FFF , 441px 798px #FFF , 1643px 452px #FFF , 1473px 1710px #FFF , 387px 1815px #FFF , 1785px 1985px #FFF , 1174px 59px #FFF , 603px 1418px #FFF , 952px 1302px #FFF , 444px 1339px #FFF , 128px 1031px #FFF , 1827px 29px #FFF , 640px 82px #FFF , 206px 757px #FFF , 1928px 120px #FFF , 232px 13px #FFF , 1130px 1623px #FFF , 1033px 58px #FFF , 470px 332px #FFF , 909px 1577px #FFF , 6px 333px #FFF , 1278px 1525px #FFF , 1168px 1277px #FFF , 258px 1515px #FFF , 1634px 1847px #FFF , 91px 280px #FFF , 434px 2000px #FFF , 536px 1014px #FFF , 664px 782px #FFF , 338px 151px #FFF , 1382px 793px #FFF , 1215px 1189px #FFF , 1683px 44px #FFF , 380px 511px #FFF , 1089px 213px #FFF , 1812px 1609px #FFF , 411px 445px #FFF , 270px 1232px #FFF , 632px 1622px #FFF , 1572px 721px #FFF , 844px 677px #FFF , 1843px 937px #FFF , 1959px 1386px #FFF , 1646px 1165px #FFF , 64px 1769px #FFF , 1632px 255px #FFF , 1506px 1253px #FFF , 45px 58px #FFF , 1555px 1426px #FFF , 737px 1008px #FFF , 1725px 1886px #FFF , 1934px 246px #FFF , 1084px 1271px #FFF , 416px 1031px #FFF , 1391px 1114px #FFF , 1859px 1018px #FFF , 835px 1757px #FFF , 659px 242px #FFF , 266px 611px #FFF , 1062px 641px #FFF , 432px 1306px #FFF , 1342px 1273px #FFF , 1722px 241px #FFF , 1970px 185px #FFF , 733px 4px #FFF , 1934px 1896px #FFF , 794px 58px #FFF , 1856px 1317px #FFF , 186px 1908px #FFF , 898px 627px #FFF , 1752px 1080px #FFF , 631px 1756px #FFF , 436px 117px #FFF , 1319px 747px #FFF , 640px 1357px #FFF , 1371px 791px #FFF , 1436px 992px #FFF , 334px 930px #FFF , 1780px 1996px #FFF , 1828px 1681px #FFF , 732px 538px #FFF , 981px 1233px #FFF , 427px 1583px #FFF , 49px 500px #FFF , 1096px 629px #FFF , 1518px 1762px #FFF , 784px 1705px #FFF , 1818px 903px #FFF , 1598px 1463px #FFF , 1782px 471px #FFF , 749px 592px #FFF , 546px 225px #FFF , 251px 1345px #FFF , 1471px 108px #FFF , 650px 767px #FFF , 1517px 1764px #FFF , 1811px 1307px #FFF , 1523px 1680px #FFF , 1555px 1342px #FFF , 1238px 488px #FFF , 1799px 1633px #FFF , 1857px 667px #FFF , 1950px 51px #FFF , 608px 444px #FFF , 1152px 817px #FFF , 1693px 818px #FFF , 13px 348px #FFF , 1669px 265px #FFF , 536px 1513px #FFF , 143px 529px #FFF , 1761px 846px #FFF , 1179px 1818px #FFF , 1110px 108px #FFF , 794px 1220px #FFF , 887px 775px #FFF , 1782px 596px #FFF , 630px 1974px #FFF , 116px 1924px #FFF , 96px 1227px #FFF , 1541px 892px #FFF , 1911px 18px #FFF , 819px 1992px #FFF , 1893px 1104px #FFF , 866px 1524px #FFF , 174px 125px #FFF , 784px 1887px #FFF , 196px 830px #FFF , 811px 1122px #FFF , 386px 1755px #FFF , 817px 1646px #FFF , 1556px 783px #FFF , 1928px 25px #FFF , 1707px 937px #FFF , 153px 1988px #FFF , 1143px 174px #FFF , 1862px 481px #FFF , 1773px 227px #FFF , 1632px 467px #FFF , 1696px 1808px #FFF , 1567px 15px #FFF , 1263px 1594px #FFF , 1396px 1908px #FFF , 1792px 1055px #FFF , 1349px 313px #FFF , 1082px 1812px #FFF , 1021px 1812px #FFF , 27px 1972px #FFF , 73px 1376px #FFF , 216px 42px #FFF , 1795px 1955px #FFF , 1690px 1080px #FFF , 1338px 893px #FFF , 693px 708px #FFF , 274px 1799px #FFF , 190px 579px #FFF , 983px 746px #FFF , 1278px 1613px #FFF , 1642px 1384px #FFF , 850px 430px #FFF , 697px 595px #FFF , 764px 341px #FFF , 759px 129px #FFF , 225px 529px #FFF , 388px 303px #FFF , 617px 1600px #FFF , 1268px 854px #FFF , 985px 836px #FFF , 1754px 1882px #FFF , 1093px 27px #FFF , 444px 1188px #FFF , 1736px 415px #FFF , 1830px 1532px #FFF , 1692px 48px #FFF , 836px 1563px #FFF , 416px 1673px #FFF , 125px 1982px #FFF , 1458px 349px #FFF , 1482px 1684px #FFF , 646px 624px #FFF , 1924px 76px #FFF , 1298px 10px #FFF , 896px 1009px #FFF , 367px 1365px #FFF , 1498px 1636px #FFF , 447px 1534px #FFF;
}

#stars3 {
  width: 3px;
  height: 3px;
  background: transparent;
  box-shadow: 170px 1902px #FFF , 312px 786px #FFF , 584px 1914px #FFF , 1540px 1935px #FFF , 1323px 1940px #FFF , 890px 1792px #FFF , 1209px 801px #FFF , 435px 599px #FFF , 1025px 988px #FFF , 337px 699px #FFF , 668px 1182px #FFF , 675px 1577px #FFF , 1157px 1494px #FFF , 1682px 124px #FFF , 759px 961px #FFF , 1495px 642px #FFF , 1641px 1013px #FFF , 1713px 1560px #FFF , 270px 1655px #FFF , 1743px 84px #FFF , 10px 994px #FFF , 1001px 694px #FFF , 1077px 30px #FFF , 1827px 522px #FFF , 248px 186px #FFF , 211px 1770px #FFF , 1980px 168px #FFF , 544px 2px #FFF , 592px 620px #FFF , 979px 344px #FFF , 151px 1094px #FFF , 895px 684px #FFF , 678px 1457px #FFF , 905px 883px #FFF , 889px 1007px #FFF , 787px 1167px #FFF , 912px 1072px #FFF , 1075px 674px #FFF , 1589px 1940px #FFF , 1252px 1394px #FFF , 1683px 1503px #FFF , 1932px 1461px #FFF , 1785px 162px #FFF , 662px 1356px #FFF , 595px 848px #FFF , 649px 128px #FFF , 146px 213px #FFF , 761px 1538px #FFF , 1549px 1656px #FFF , 1096px 497px #FFF , 383px 362px #FFF , 452px 1957px #FFF , 1161px 1333px #FFF , 742px 1403px #FFF , 958px 1784px #FFF , 269px 1089px #FFF , 1888px 1169px #FFF , 1804px 1622px #FFF , 1108px 716px #FFF , 12px 1504px #FFF , 1509px 1610px #FFF , 329px 556px #FFF , 76px 505px #FFF , 1229px 1265px #FFF , 1645px 269px #FFF , 1151px 1968px #FFF , 1567px 1817px #FFF , 178px 421px #FFF , 512px 132px #FFF , 1811px 1409px #FFF , 80px 563px #FFF , 665px 1910px #FFF , 1561px 751px #FFF , 1084px 937px #FFF , 1247px 105px #FFF , 1837px 576px #FFF , 169px 796px #FFF , 1540px 1454px #FFF , 740px 249px #FFF , 1659px 366px #FFF , 471px 667px #FFF , 295px 843px #FFF , 1889px 28px #FFF , 401px 1300px #FFF , 1311px 185px #FFF , 236px 1127px #FFF , 1695px 1976px #FFF , 905px 1176px #FFF , 1951px 366px #FFF , 1079px 866px #FFF , 1895px 151px #FFF , 654px 398px #FFF , 1032px 432px #FFF , 299px 1237px #FFF , 789px 1764px #FFF , 1679px 1356px #FFF , 1705px 665px #FFF , 930px 638px #FFF , 676px 1767px #FFF , 1881px 1566px #FFF;
  animation: animStar 150s linear infinite;
}
#stars3:after {
  content: " ";
  position: absolute;
  top: 2000px;
  width: 3px;
  height: 3px;
  background: transparent;
  box-shadow: 170px 1902px #FFF , 312px 786px #FFF , 584px 1914px #FFF , 1540px 1935px #FFF , 1323px 1940px #FFF , 890px 1792px #FFF , 1209px 801px #FFF , 435px 599px #FFF , 1025px 988px #FFF , 337px 699px #FFF , 668px 1182px #FFF , 675px 1577px #FFF , 1157px 1494px #FFF , 1682px 124px #FFF , 759px 961px #FFF , 1495px 642px #FFF , 1641px 1013px #FFF , 1713px 1560px #FFF , 270px 1655px #FFF , 1743px 84px #FFF , 10px 994px #FFF , 1001px 694px #FFF , 1077px 30px #FFF , 1827px 522px #FFF , 248px 186px #FFF , 211px 1770px #FFF , 1980px 168px #FFF , 544px 2px #FFF , 592px 620px #FFF , 979px 344px #FFF , 151px 1094px #FFF , 895px 684px #FFF , 678px 1457px #FFF , 905px 883px #FFF , 889px 1007px #FFF , 787px 1167px #FFF , 912px 1072px #FFF , 1075px 674px #FFF , 1589px 1940px #FFF , 1252px 1394px #FFF , 1683px 1503px #FFF , 1932px 1461px #FFF , 1785px 162px #FFF , 662px 1356px #FFF , 595px 848px #FFF , 649px 128px #FFF , 146px 213px #FFF , 761px 1538px #FFF , 1549px 1656px #FFF , 1096px 497px #FFF , 383px 362px #FFF , 452px 1957px #FFF , 1161px 1333px #FFF , 742px 1403px #FFF , 958px 1784px #FFF , 269px 1089px #FFF , 1888px 1169px #FFF , 1804px 1622px #FFF , 1108px 716px #FFF , 12px 1504px #FFF , 1509px 1610px #FFF , 329px 556px #FFF , 76px 505px #FFF , 1229px 1265px #FFF , 1645px 269px #FFF , 1151px 1968px #FFF , 1567px 1817px #FFF , 178px 421px #FFF , 512px 132px #FFF , 1811px 1409px #FFF , 80px 563px #FFF , 665px 1910px #FFF , 1561px 751px #FFF , 1084px 937px #FFF , 1247px 105px #FFF , 1837px 576px #FFF , 169px 796px #FFF , 1540px 1454px #FFF , 740px 249px #FFF , 1659px 366px #FFF , 471px 667px #FFF , 295px 843px #FFF , 1889px 28px #FFF , 401px 1300px #FFF , 1311px 185px #FFF , 236px 1127px #FFF , 1695px 1976px #FFF , 905px 1176px #FFF , 1951px 366px #FFF , 1079px 866px #FFF , 1895px 151px #FFF , 654px 398px #FFF , 1032px 432px #FFF , 299px 1237px #FFF , 789px 1764px #FFF , 1679px 1356px #FFF , 1705px 665px #FFF , 930px 638px #FFF , 676px 1767px #FFF , 1881px 1566px #FFF;
}

#title {
  position: absolute;
  top: 50%;
  left: 0;
  right: 0;
  color: #FFF;
  text-align: center;
  font-family: "lato", sans-serif;
  font-weight: 600;
  font-size: 50px;
  letter-spacing: 10px;
  margin-top: -60px;
  padding-left: 10px;
}
#title span {
  background: -webkit-linear-gradient(white, #38495a);
  -webkit-background-clip: text;
  -webkit-text-fill-color: transparent;
}

@keyframes animStar {
  from {
    transform: translateY(0px);
  }
  to {
    transform: translateY(-2000px);
  }
}

.nav{
    float:left; 
    text-align:left;
    }

#hashtag{
    font-size: 30px;
    margin: 50px;
    font-weight: 400;
}

img{
    height: 40px;
    width: 40px;
}

.words{
    color: white;
    text-shadow: 1px 1px 2px white;
}



.glow img {
    opacity: 0.8;
      
    /*Transition*/
    -webkit-transition: all 0.5s ease;
    -moz-transition: all 0.5s ease;
    -o-transition: all 0.5s ease;
    
    /*Reflection*/
    -webkit-box-reflect: below 0px -webkit-gradient(linear, left top, left bottom, from(transparent), color-stop(.7, transparent), to(rgba(0,0,0,0.1)));
}


.glow img:hover {  
   opacity: 1;
   border-radius: 50%;
       /*Reflection*/
  -webkit-box-reflect: below 0px -webkit-gradient(linear, left top, left bottom, from(transparent), color-stop(.7, transparent), to(rgba(0,0,0,0.4)));
 
   /*Glow*/
  -webkit-box-shadow: 0px 0px 20px rgba(255,255,255,0.8);
  -moz-box-shadow: 0px 0px 20px rgba(255,255,255,0.8);
  box-shadow: 0px 0px 20px rgba(255,255,255,0.8);
}  


.ghost-button {
  display: inline-block;
  min-width: 250px;
  padding: 14px 16px;
  text-decoration: none;
  color: #FFFFFF;
  font-family: arial;
  border: 1px solid #fff;
  text-align: center;
  outline: none;
  text-decoration: none;
  font-size: 12px;  
  border-radius: 25px;
  text-decoration: none;
  text-transform: uppercase;
  transition: all 0.2s ease-in-out;
}

.ghost-button:hover {
 opacity: 1;
 box-shadow: 0px 0px 10px rgba(255,255,255,0.8);
}

/* Full-width input fields */
input[type=text], input[type=password] {
    width: 100%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    box-sizing: border-box;
}

/* Set a style for all buttons */
button {
    padding: 14px 20px;
    margin: 5px 0;
    border: 1px;
    cursor: pointer;
    width: 100%;
    float: right;
    border-radius: 25px;

}

/* Extra styles for the cancel button */
.cancelbtn {
    width: 200px;
    padding: 10px 18px;
    background-color: #2980b9;
    text-align: center;
}

/* Center the image and position the close button */
.imgcontainer {
    text-align: center;
    margin: 24px 0 12px 0;
    position: relative;
}

img.avatar {
    width: 50px;
    height: 50px;
    border-radius: 50%;
}

.container {
    padding: 16px;
}

span.psw {
    float: right;
    padding-top: 16px;
}

/* The Modal (background) */
.modal {
    display: none; /* Hidden by default */
    position: fixed; /* Stay in place */
    z-index: 1; /* Sit on top */
    left: 0;
    top: 0;
    width: 300px; /* Full width */
    height: 1000px; /* Full height */
    overflow: auto; /* Enable scroll if needed */
    background-color: rgb(0,0,0); /* Fallback color */
    background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
    padding-top: 60px;
}

/* Modal Content/Box */
.modal-content {
    background-color: #fefefe;
    margin: 2% auto 20% auto; /* 5% from the top, 15% from the bottom and centered */
    border: 1px solid #888;
    width: 80%; /* Could be more or less, depending on screen size */
    height: 60%;
}

/* The Close Button (x) */
.close {
    position: absolute;
    right: 25px;
    top: 0;
    color: #000;
    font-size: 35px;
    font-weight: bold;
}

.close:hover,
.close:focus {
    color: red;
    cursor: pointer;
}

/* Add Zoom Animation */
.animate {
    -webkit-animation: animatezoom 0.6s;
    animation: animatezoom 0.6s
}

@-webkit-keyframes animatezoom {
    from {-webkit-transform: scale(0)} 
    to {-webkit-transform: scale(1)}
}
    
@keyframes animatezoom {
    from {transform: scale(0)} 
    to {transform: scale(1)}
}

/* Change styles for span and cancel button on extra small screens */
@media screen and (max-width: 300px) {
    span.psw {
       display: block;
       float: none;
    }
    .cancelbtn {
       width: 100%;
    }
}

</style>

<body>

<?php include 'navbar.php'; ?>

      <div id='stars'></div>
      <div id='stars2'></div>
      <div id='stars3'></div>
      <div id='title'>
        <span class="words">
          CODING CLUB
        </span>
        <br>
        <span class="words" id="hashtag">
        	#COMECODEWITHUS
        </span>
        <br>
        <span>
        	<a href="https://www.facebook.com/CodeClubVTDI/" class="glow"><img src="img/facebook.png"></a>
        	<a href="https://plus.google.com/101421869968347346310" class="glow"><img src="img/plus.png"></a>
        	<a href="https://www.instagram.com/vtdi_code_club/" class="glow"><img src="img/insta.png"></a>
        	<a href="twitter.com" class="glow"><img src="img/twitter.png"></a>
        </span>
        <br>
        <br>
        <a class="ghost-button" href="https://goo.gl/forms/0Flo9zEQriG7z7oC3">Get Involved</a>
        <a class="ghost-button" href="https://codeclubvtdi.wordpress.com/">News</a>
      </div>
    
    <!-- SCRIPTS -->
<script type="text/javascript" src="js/signup.js"></script>
<script type="text/javascript" src="js/login.js"></script>
<script type="text/javascript">
  function check(input){
    if (input.value != document.getElementById('passwordID').value){
      input.setCustomValidity('Password Must Be Matching.');
    }else{
      //input is valid -- reset the error message
    input.setCustomValidity('');
    }
  }
</script>

<?php if(isset($_GET['error'])):?>
    <script>
      document.getElementById('id02').style.display='block';
      document.getElementById('errText').style.display='block';
    </script>
<?php endIf;?>

</body>

<?php include 'modals/login_signup.php' ?>