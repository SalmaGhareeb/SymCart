<?php

/* WebProfilerBundle:Profiler:toolbar_item.html.twig */
class __TwigTemplate_af9dec51d782004f7ed08260b8e5b89b8c60d520596e517bffe56f44e40be3b3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        if ((isset($context["link"]) ? $context["link"] : $this->getContext($context, "link"))) {
            // line 2
            echo "    ";
            ob_start();
            // line 3
            echo "        <a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_profiler", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")), "panel" => (isset($context["name"]) ? $context["name"] : $this->getContext($context, "name")))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, (isset($context["icon"]) ? $context["icon"] : $this->getContext($context, "icon")), "html", null, true);
            echo "</a>
    ";
            $context["icon"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        }
        // line 6
        echo "<div class=\"sf-toolbar-block\">
     <div class=\"sf-toolbar-icon\">";
        // line 7
        echo twig_escape_filter($this->env, ((array_key_exists("icon", $context)) ? (_twig_default_filter((isset($context["icon"]) ? $context["icon"] : $this->getContext($context, "icon")), "")) : ("")), "html", null, true);
        echo "</div>
     <div class=\"sf-toolbar-info\">";
        // line 8
        echo twig_escape_filter($this->env, ((array_key_exists("text", $context)) ? (_twig_default_filter((isset($context["text"]) ? $context["text"] : $this->getContext($context, "text")), "")) : ("")), "html", null, true);
        echo "</div>
</div>
";
    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:toolbar_item.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  775 => 485,  727 => 476,  702 => 472,  698 => 471,  690 => 469,  686 => 468,  677 => 465,  634 => 456,  517 => 404,  386 => 159,  357 => 123,  672 => 345,  664 => 342,  651 => 337,  622 => 452,  609 => 319,  606 => 449,  602 => 317,  591 => 309,  552 => 293,  541 => 290,  533 => 284,  519 => 278,  505 => 270,  489 => 262,  483 => 258,  465 => 249,  397 => 213,  383 => 207,  367 => 339,  297 => 104,  205 => 108,  462 => 202,  446 => 197,  431 => 189,  394 => 168,  549 => 411,  508 => 165,  491 => 157,  487 => 156,  449 => 198,  436 => 235,  267 => 101,  692 => 399,  652 => 376,  645 => 369,  631 => 327,  625 => 453,  615 => 354,  583 => 334,  575 => 328,  569 => 300,  565 => 324,  500 => 291,  495 => 158,  452 => 268,  282 => 161,  763 => 244,  748 => 242,  745 => 241,  736 => 238,  734 => 237,  714 => 232,  703 => 226,  661 => 380,  656 => 378,  653 => 218,  595 => 205,  581 => 305,  578 => 200,  573 => 198,  560 => 187,  534 => 162,  528 => 173,  499 => 268,  475 => 169,  473 => 254,  429 => 188,  420 => 123,  417 => 243,  399 => 139,  396 => 138,  380 => 158,  345 => 147,  272 => 134,  242 => 113,  232 => 88,  153 => 77,  956 => 271,  953 => 270,  946 => 302,  942 => 300,  933 => 296,  925 => 292,  917 => 291,  914 => 290,  909 => 288,  901 => 285,  898 => 284,  890 => 281,  887 => 280,  879 => 277,  870 => 274,  853 => 261,  848 => 258,  840 => 253,  834 => 249,  832 => 248,  822 => 244,  820 => 243,  810 => 492,  807 => 491,  805 => 236,  802 => 235,  799 => 234,  791 => 262,  788 => 486,  778 => 251,  771 => 232,  768 => 231,  765 => 230,  760 => 243,  757 => 221,  743 => 217,  738 => 214,  720 => 211,  717 => 233,  713 => 209,  700 => 225,  688 => 202,  682 => 467,  679 => 466,  673 => 198,  665 => 196,  660 => 464,  647 => 336,  641 => 368,  632 => 187,  626 => 325,  616 => 207,  610 => 181,  603 => 179,  600 => 178,  597 => 342,  588 => 308,  561 => 161,  554 => 224,  548 => 292,  546 => 166,  543 => 179,  540 => 308,  537 => 176,  531 => 283,  525 => 280,  522 => 406,  482 => 285,  479 => 256,  471 => 253,  468 => 160,  460 => 143,  454 => 244,  451 => 120,  448 => 240,  434 => 256,  373 => 156,  370 => 101,  304 => 181,  296 => 121,  291 => 102,  274 => 110,  216 => 79,  624 => 224,  620 => 451,  612 => 220,  601 => 446,  594 => 176,  585 => 307,  580 => 207,  577 => 303,  574 => 205,  572 => 204,  566 => 203,  563 => 298,  559 => 296,  551 => 221,  545 => 291,  536 => 306,  526 => 190,  523 => 171,  514 => 168,  511 => 167,  497 => 267,  485 => 124,  463 => 248,  455 => 141,  410 => 221,  404 => 90,  391 => 163,  369 => 148,  354 => 101,  340 => 145,  320 => 127,  318 => 111,  261 => 50,  321 => 135,  306 => 286,  303 => 106,  300 => 105,  287 => 77,  275 => 105,  12 => 36,  118 => 49,  327 => 114,  323 => 128,  319 => 124,  265 => 105,  262 => 98,  228 => 83,  213 => 78,  110 => 22,  23 => 18,  20 => 1,  270 => 102,  180 => 66,  175 => 58,  172 => 57,  160 => 76,  113 => 48,  100 => 39,  65 => 11,  58 => 18,  34 => 5,  1402 => 417,  1400 => 416,  1394 => 414,  1385 => 413,  1383 => 412,  1380 => 411,  1367 => 405,  1361 => 403,  1355 => 401,  1353 => 400,  1351 => 399,  1347 => 398,  1341 => 397,  1336 => 395,  1323 => 389,  1317 => 387,  1311 => 385,  1309 => 384,  1307 => 383,  1297 => 381,  1287 => 379,  1279 => 377,  1273 => 376,  1256 => 369,  1251 => 368,  1237 => 360,  1228 => 357,  1221 => 355,  1218 => 354,  1202 => 347,  1198 => 346,  1195 => 345,  1192 => 344,  1190 => 343,  1179 => 338,  1177 => 337,  1174 => 336,  1168 => 332,  1162 => 330,  1159 => 329,  1157 => 328,  1145 => 322,  1143 => 321,  1095 => 312,  1088 => 308,  1084 => 307,  1079 => 306,  1077 => 305,  1074 => 304,  1064 => 298,  1056 => 293,  1053 => 292,  1051 => 291,  1036 => 284,  1032 => 283,  1029 => 282,  1016 => 276,  1014 => 272,  1009 => 270,  982 => 261,  979 => 260,  976 => 259,  973 => 258,  970 => 257,  964 => 255,  961 => 254,  958 => 253,  952 => 251,  939 => 243,  936 => 297,  934 => 241,  931 => 295,  923 => 236,  920 => 235,  918 => 234,  915 => 233,  894 => 226,  889 => 224,  881 => 278,  878 => 219,  876 => 276,  873 => 217,  865 => 272,  862 => 212,  849 => 206,  846 => 205,  841 => 203,  833 => 199,  830 => 198,  828 => 246,  825 => 196,  817 => 192,  798 => 184,  796 => 489,  785 => 232,  783 => 177,  780 => 303,  772 => 248,  769 => 247,  764 => 169,  756 => 165,  753 => 220,  751 => 163,  746 => 478,  729 => 235,  715 => 151,  712 => 150,  710 => 475,  707 => 208,  699 => 142,  697 => 141,  696 => 204,  695 => 139,  694 => 470,  689 => 137,  678 => 390,  675 => 132,  662 => 125,  658 => 124,  654 => 123,  649 => 462,  643 => 120,  635 => 365,  619 => 183,  617 => 112,  614 => 111,  598 => 107,  576 => 199,  564 => 193,  557 => 295,  555 => 185,  547 => 93,  515 => 276,  512 => 84,  509 => 272,  503 => 81,  490 => 287,  478 => 74,  459 => 246,  456 => 68,  450 => 114,  442 => 134,  433 => 130,  426 => 126,  414 => 144,  408 => 176,  403 => 117,  377 => 129,  366 => 106,  350 => 327,  342 => 137,  335 => 134,  332 => 116,  311 => 87,  288 => 118,  281 => 114,  253 => 100,  248 => 97,  245 => 83,  210 => 77,  202 => 94,  186 => 82,  124 => 47,  81 => 23,  76 => 28,  1883 => 659,  1881 => 658,  1879 => 657,  1876 => 656,  1871 => 653,  1860 => 651,  1855 => 650,  1852 => 649,  1849 => 648,  1840 => 643,  1837 => 642,  1833 => 640,  1827 => 638,  1824 => 637,  1821 => 636,  1818 => 635,  1812 => 633,  1806 => 631,  1803 => 630,  1800 => 627,  1780 => 625,  1777 => 624,  1774 => 623,  1771 => 622,  1768 => 621,  1765 => 620,  1763 => 619,  1760 => 618,  1757 => 617,  1754 => 616,  1751 => 615,  1749 => 614,  1746 => 613,  1742 => 612,  1740 => 611,  1737 => 610,  1730 => 603,  1724 => 601,  1718 => 599,  1716 => 598,  1714 => 597,  1711 => 596,  1704 => 589,  1700 => 587,  1693 => 585,  1690 => 581,  1686 => 580,  1681 => 579,  1678 => 578,  1671 => 576,  1668 => 571,  1663 => 570,  1660 => 569,  1657 => 568,  1654 => 567,  1639 => 565,  1636 => 564,  1632 => 563,  1629 => 562,  1611 => 561,  1609 => 560,  1607 => 559,  1604 => 558,  1596 => 552,  1594 => 551,  1592 => 550,  1590 => 549,  1587 => 548,  1578 => 544,  1573 => 542,  1571 => 541,  1568 => 540,  1560 => 535,  1554 => 533,  1552 => 532,  1532 => 531,  1529 => 530,  1521 => 524,  1518 => 523,  1512 => 521,  1509 => 520,  1506 => 519,  1503 => 518,  1498 => 516,  1495 => 515,  1492 => 514,  1490 => 513,  1487 => 512,  1478 => 507,  1475 => 506,  1472 => 505,  1469 => 504,  1467 => 503,  1464 => 502,  1455 => 498,  1453 => 497,  1450 => 496,  1443 => 490,  1438 => 489,  1436 => 488,  1433 => 487,  1425 => 480,  1419 => 478,  1417 => 477,  1414 => 421,  1410 => 474,  1408 => 419,  1398 => 415,  1392 => 469,  1390 => 468,  1387 => 467,  1384 => 466,  1381 => 465,  1379 => 464,  1376 => 463,  1374 => 462,  1368 => 460,  1362 => 458,  1359 => 457,  1357 => 456,  1354 => 455,  1345 => 451,  1339 => 396,  1335 => 448,  1330 => 447,  1324 => 444,  1321 => 443,  1318 => 442,  1316 => 441,  1313 => 440,  1306 => 437,  1303 => 382,  1295 => 432,  1291 => 380,  1286 => 430,  1283 => 378,  1277 => 425,  1271 => 375,  1268 => 374,  1262 => 420,  1260 => 419,  1252 => 418,  1249 => 367,  1246 => 366,  1240 => 412,  1234 => 410,  1231 => 358,  1225 => 407,  1223 => 356,  1217 => 405,  1214 => 404,  1211 => 349,  1204 => 400,  1201 => 399,  1193 => 393,  1187 => 342,  1184 => 390,  1178 => 388,  1175 => 387,  1169 => 385,  1166 => 384,  1160 => 382,  1158 => 381,  1154 => 327,  1152 => 379,  1136 => 378,  1133 => 377,  1130 => 376,  1127 => 375,  1124 => 374,  1121 => 373,  1118 => 320,  1115 => 319,  1112 => 318,  1109 => 317,  1106 => 316,  1103 => 315,  1100 => 314,  1098 => 313,  1096 => 364,  1093 => 363,  1081 => 359,  1078 => 358,  1075 => 357,  1072 => 356,  1070 => 355,  1067 => 299,  1058 => 347,  1055 => 346,  1048 => 290,  1045 => 342,  1042 => 341,  1040 => 285,  1033 => 339,  1027 => 281,  1024 => 280,  1021 => 335,  1019 => 334,  1017 => 333,  1015 => 332,  1012 => 271,  1004 => 266,  1001 => 326,  999 => 325,  996 => 324,  988 => 320,  985 => 319,  983 => 318,  980 => 317,  971 => 311,  967 => 256,  963 => 309,  959 => 308,  955 => 252,  950 => 269,  947 => 249,  944 => 304,  938 => 302,  932 => 299,  924 => 298,  912 => 289,  903 => 286,  900 => 228,  897 => 227,  895 => 293,  892 => 282,  883 => 287,  880 => 286,  874 => 284,  872 => 283,  868 => 273,  863 => 269,  860 => 268,  857 => 267,  850 => 276,  844 => 204,  838 => 272,  826 => 271,  819 => 270,  816 => 241,  814 => 191,  812 => 190,  809 => 189,  801 => 185,  797 => 259,  795 => 258,  794 => 257,  793 => 182,  792 => 488,  789 => 254,  786 => 253,  779 => 250,  773 => 264,  767 => 246,  749 => 479,  742 => 240,  739 => 239,  737 => 242,  735 => 241,  732 => 213,  724 => 154,  721 => 153,  719 => 233,  711 => 231,  708 => 228,  706 => 473,  693 => 226,  685 => 224,  683 => 393,  680 => 134,  676 => 385,  674 => 219,  670 => 217,  668 => 344,  666 => 382,  663 => 195,  657 => 193,  655 => 209,  650 => 217,  644 => 335,  640 => 334,  638 => 210,  633 => 209,  629 => 454,  613 => 320,  607 => 349,  604 => 197,  599 => 206,  596 => 106,  593 => 310,  590 => 338,  587 => 203,  584 => 202,  582 => 190,  579 => 332,  570 => 164,  567 => 414,  558 => 186,  553 => 184,  550 => 187,  535 => 177,  532 => 410,  529 => 409,  527 => 408,  524 => 297,  521 => 182,  518 => 170,  516 => 294,  513 => 179,  510 => 293,  507 => 156,  504 => 292,  501 => 161,  498 => 160,  496 => 172,  493 => 171,  486 => 286,  470 => 278,  467 => 72,  464 => 275,  458 => 147,  447 => 113,  443 => 142,  439 => 195,  432 => 140,  428 => 230,  421 => 244,  411 => 120,  400 => 214,  388 => 42,  364 => 112,  359 => 144,  356 => 126,  346 => 107,  343 => 146,  338 => 135,  329 => 188,  326 => 138,  316 => 16,  301 => 144,  286 => 112,  271 => 108,  266 => 366,  255 => 101,  237 => 86,  225 => 67,  195 => 54,  174 => 65,  129 => 45,  70 => 24,  233 => 87,  211 => 81,  207 => 75,  198 => 55,  190 => 76,  126 => 42,  104 => 32,  418 => 224,  405 => 118,  395 => 125,  389 => 160,  378 => 157,  361 => 152,  358 => 151,  351 => 120,  348 => 140,  339 => 191,  333 => 132,  330 => 112,  325 => 129,  315 => 131,  308 => 287,  302 => 125,  299 => 112,  293 => 120,  290 => 119,  284 => 106,  280 => 87,  277 => 136,  260 => 98,  257 => 103,  250 => 93,  222 => 83,  206 => 74,  200 => 72,  191 => 67,  188 => 90,  185 => 74,  170 => 84,  167 => 63,  155 => 47,  150 => 55,  134 => 39,  97 => 41,  53 => 15,  445 => 152,  441 => 196,  438 => 236,  424 => 114,  422 => 226,  419 => 109,  415 => 180,  412 => 222,  406 => 111,  401 => 172,  390 => 136,  385 => 225,  382 => 92,  376 => 205,  371 => 156,  363 => 153,  353 => 328,  349 => 80,  347 => 191,  344 => 119,  336 => 135,  334 => 141,  331 => 140,  328 => 139,  324 => 113,  317 => 185,  313 => 183,  310 => 171,  307 => 128,  295 => 178,  292 => 91,  289 => 113,  279 => 104,  276 => 111,  263 => 95,  259 => 103,  256 => 96,  251 => 101,  249 => 74,  244 => 140,  239 => 64,  236 => 109,  234 => 64,  231 => 83,  226 => 84,  223 => 60,  218 => 59,  215 => 78,  212 => 78,  197 => 69,  194 => 68,  192 => 88,  184 => 63,  181 => 65,  178 => 59,  165 => 83,  161 => 63,  152 => 46,  148 => 59,  146 => 60,  137 => 22,  127 => 35,  114 => 45,  90 => 37,  84 => 27,  77 => 20,  480 => 75,  474 => 150,  469 => 158,  461 => 70,  457 => 245,  453 => 199,  444 => 238,  440 => 148,  437 => 61,  435 => 146,  430 => 255,  427 => 116,  423 => 250,  413 => 241,  409 => 131,  407 => 238,  402 => 215,  398 => 115,  393 => 211,  387 => 164,  384 => 109,  381 => 105,  379 => 104,  374 => 217,  368 => 126,  365 => 197,  362 => 148,  360 => 104,  355 => 329,  341 => 118,  337 => 97,  322 => 93,  314 => 88,  312 => 130,  309 => 129,  305 => 115,  298 => 120,  294 => 90,  285 => 175,  283 => 115,  278 => 98,  268 => 107,  264 => 74,  258 => 94,  252 => 85,  247 => 84,  241 => 93,  229 => 87,  220 => 81,  214 => 99,  177 => 65,  169 => 74,  140 => 58,  132 => 59,  128 => 54,  107 => 41,  61 => 23,  273 => 174,  269 => 107,  254 => 147,  243 => 92,  240 => 72,  238 => 84,  235 => 89,  230 => 106,  227 => 86,  224 => 81,  221 => 38,  219 => 101,  217 => 79,  208 => 76,  204 => 73,  179 => 98,  159 => 90,  143 => 51,  135 => 62,  119 => 40,  102 => 33,  71 => 23,  67 => 22,  63 => 21,  59 => 22,  38 => 12,  94 => 21,  89 => 30,  85 => 23,  75 => 24,  68 => 12,  56 => 16,  87 => 32,  21 => 2,  26 => 6,  93 => 38,  88 => 25,  78 => 18,  46 => 12,  27 => 7,  44 => 11,  31 => 8,  28 => 3,  201 => 106,  196 => 92,  183 => 50,  171 => 75,  166 => 54,  163 => 82,  158 => 80,  156 => 62,  151 => 59,  142 => 58,  138 => 54,  136 => 71,  121 => 50,  117 => 39,  105 => 25,  91 => 33,  62 => 27,  49 => 14,  24 => 3,  25 => 35,  19 => 1,  79 => 18,  72 => 27,  69 => 26,  47 => 21,  40 => 8,  37 => 7,  22 => 2,  246 => 136,  157 => 89,  145 => 74,  139 => 49,  131 => 45,  123 => 61,  120 => 31,  115 => 50,  111 => 47,  108 => 47,  101 => 43,  98 => 34,  96 => 30,  83 => 35,  74 => 27,  66 => 18,  55 => 38,  52 => 12,  50 => 18,  43 => 12,  41 => 19,  35 => 9,  32 => 7,  29 => 3,  209 => 96,  203 => 73,  199 => 93,  193 => 51,  189 => 66,  187 => 75,  182 => 87,  176 => 86,  173 => 85,  168 => 61,  164 => 72,  162 => 59,  154 => 60,  149 => 63,  147 => 75,  144 => 42,  141 => 73,  133 => 51,  130 => 46,  125 => 42,  122 => 41,  116 => 57,  112 => 36,  109 => 52,  106 => 51,  103 => 56,  99 => 23,  95 => 39,  92 => 28,  86 => 29,  82 => 19,  80 => 29,  73 => 33,  64 => 24,  60 => 14,  57 => 20,  54 => 19,  51 => 37,  48 => 16,  45 => 9,  42 => 11,  39 => 10,  36 => 7,  33 => 6,  30 => 5,);
    }
}
