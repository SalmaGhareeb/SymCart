<?php

/* ApplicationSonataUserBundle:Profile:edit_authentication.html.twig */
class __TwigTemplate_a5bcc05d40d0e497f1f556809fa299002774c43d0f5950042be838d034159356 extends Twig_Template
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
        // line 11
        echo "
<div class=\"row\">
    <div class=\"span6 col-lg-6\">
        <div class=\"panel panel-warning\">
            <div class=\"panel-heading\">
                <h3 class=\"panel-title\">";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("title_user_edit_authentication", array(), "SonataUserBundle"), "html", null, true);
        echo "</h3>
            </div>
            <div class=\"panel-body\">
                <form action=\"";
        // line 19
        echo $this->env->getExtension('routing')->getPath("sonata_user_profile_edit_authentication");
        echo "\" method=\"POST\" class=\"form-horizontal\">
                    ";
        // line 20
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "

                    <button type=\"submit\" name=\"submit\" class=\"btn btn-primary pull-right\">";
        // line 22
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("sonata_user_submit", array(), "SonataUserBundle"), "html", null, true);
        echo "</button>
                </form>
            </div>
        </div>
    </div>
    <div class=\"span6 col-lg-6\">
        <div class=\"panel panel-danger\">
            <div class=\"panel-heading\">
                <h3 class=\"panel-title\">";
        // line 30
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("sonata_change_password_link", array(), "SonataUserBundle"), "html", null, true);
        echo "</h3>
            </div>
            <div class=\"panel-body\">
                ";
        // line 33
        echo $this->env->getExtension('actions')->renderUri($this->env->getExtension('routing')->getUrl("sonata_user_change_password"), array());
        // line 34
        echo "            </div>
        </div>
    </div>
</div>";
    }

    public function getTemplateName()
    {
        return "ApplicationSonataUserBundle:Profile:edit_authentication.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  549 => 182,  508 => 165,  491 => 157,  487 => 156,  449 => 138,  436 => 132,  267 => 78,  692 => 399,  652 => 376,  645 => 369,  631 => 364,  625 => 361,  615 => 354,  583 => 334,  575 => 328,  569 => 325,  565 => 324,  500 => 291,  495 => 158,  452 => 268,  282 => 161,  763 => 244,  748 => 242,  745 => 241,  736 => 238,  734 => 237,  714 => 232,  703 => 226,  661 => 380,  656 => 378,  653 => 218,  595 => 205,  581 => 201,  578 => 200,  573 => 198,  560 => 187,  534 => 162,  528 => 173,  499 => 173,  475 => 169,  473 => 168,  429 => 148,  420 => 123,  417 => 243,  399 => 139,  396 => 138,  380 => 107,  345 => 116,  272 => 134,  242 => 113,  232 => 84,  153 => 72,  956 => 271,  953 => 270,  946 => 302,  942 => 300,  933 => 296,  925 => 292,  917 => 291,  914 => 290,  909 => 288,  901 => 285,  898 => 284,  890 => 281,  887 => 280,  879 => 277,  870 => 274,  853 => 261,  848 => 258,  840 => 253,  834 => 249,  832 => 248,  822 => 244,  820 => 243,  810 => 238,  807 => 237,  805 => 236,  802 => 235,  799 => 234,  791 => 262,  788 => 233,  778 => 251,  771 => 232,  768 => 231,  765 => 230,  760 => 243,  757 => 221,  743 => 217,  738 => 214,  720 => 211,  717 => 233,  713 => 209,  700 => 225,  688 => 202,  682 => 201,  679 => 200,  673 => 198,  665 => 196,  660 => 194,  647 => 191,  641 => 368,  632 => 187,  626 => 184,  616 => 207,  610 => 181,  603 => 179,  600 => 178,  597 => 342,  588 => 175,  561 => 161,  554 => 224,  548 => 313,  546 => 166,  543 => 179,  540 => 308,  537 => 176,  531 => 161,  525 => 172,  522 => 156,  482 => 285,  479 => 135,  471 => 129,  468 => 160,  460 => 143,  454 => 156,  451 => 120,  448 => 153,  434 => 256,  373 => 102,  370 => 101,  304 => 85,  296 => 167,  291 => 99,  274 => 135,  216 => 100,  624 => 224,  620 => 223,  612 => 220,  601 => 216,  594 => 176,  585 => 209,  580 => 207,  577 => 329,  574 => 205,  572 => 204,  566 => 203,  563 => 188,  559 => 201,  551 => 221,  545 => 198,  536 => 306,  526 => 190,  523 => 171,  514 => 168,  511 => 167,  497 => 156,  485 => 124,  463 => 117,  455 => 141,  410 => 110,  404 => 90,  391 => 163,  369 => 148,  354 => 101,  340 => 114,  320 => 92,  318 => 86,  261 => 50,  321 => 152,  306 => 95,  303 => 94,  300 => 102,  287 => 77,  275 => 103,  12 => 36,  118 => 49,  327 => 154,  323 => 85,  319 => 124,  265 => 130,  262 => 88,  228 => 83,  213 => 69,  110 => 51,  23 => 18,  20 => 1,  270 => 157,  180 => 66,  175 => 77,  172 => 51,  160 => 76,  113 => 41,  100 => 34,  65 => 39,  58 => 33,  34 => 17,  1402 => 417,  1400 => 416,  1394 => 414,  1385 => 413,  1383 => 412,  1380 => 411,  1367 => 405,  1361 => 403,  1355 => 401,  1353 => 400,  1351 => 399,  1347 => 398,  1341 => 397,  1336 => 395,  1323 => 389,  1317 => 387,  1311 => 385,  1309 => 384,  1307 => 383,  1297 => 381,  1287 => 379,  1279 => 377,  1273 => 376,  1256 => 369,  1251 => 368,  1237 => 360,  1228 => 357,  1221 => 355,  1218 => 354,  1202 => 347,  1198 => 346,  1195 => 345,  1192 => 344,  1190 => 343,  1179 => 338,  1177 => 337,  1174 => 336,  1168 => 332,  1162 => 330,  1159 => 329,  1157 => 328,  1145 => 322,  1143 => 321,  1095 => 312,  1088 => 308,  1084 => 307,  1079 => 306,  1077 => 305,  1074 => 304,  1064 => 298,  1056 => 293,  1053 => 292,  1051 => 291,  1036 => 284,  1032 => 283,  1029 => 282,  1016 => 276,  1014 => 272,  1009 => 270,  982 => 261,  979 => 260,  976 => 259,  973 => 258,  970 => 257,  964 => 255,  961 => 254,  958 => 253,  952 => 251,  939 => 243,  936 => 297,  934 => 241,  931 => 295,  923 => 236,  920 => 235,  918 => 234,  915 => 233,  894 => 226,  889 => 224,  881 => 278,  878 => 219,  876 => 276,  873 => 217,  865 => 272,  862 => 212,  849 => 206,  846 => 205,  841 => 203,  833 => 199,  830 => 198,  828 => 246,  825 => 196,  817 => 192,  798 => 184,  796 => 233,  785 => 232,  783 => 177,  780 => 303,  772 => 248,  769 => 247,  764 => 169,  756 => 165,  753 => 220,  751 => 163,  746 => 161,  729 => 235,  715 => 151,  712 => 150,  710 => 149,  707 => 208,  699 => 142,  697 => 141,  696 => 204,  695 => 139,  694 => 138,  689 => 137,  678 => 390,  675 => 132,  662 => 125,  658 => 124,  654 => 123,  649 => 122,  643 => 120,  635 => 365,  619 => 183,  617 => 112,  614 => 111,  598 => 107,  576 => 199,  564 => 193,  557 => 96,  555 => 185,  547 => 93,  515 => 180,  512 => 84,  509 => 228,  503 => 81,  490 => 287,  478 => 74,  459 => 273,  456 => 68,  450 => 114,  442 => 134,  433 => 130,  426 => 126,  414 => 144,  408 => 142,  403 => 117,  377 => 129,  366 => 106,  350 => 26,  342 => 23,  335 => 133,  332 => 88,  311 => 87,  288 => 107,  281 => 105,  253 => 95,  248 => 116,  245 => 83,  210 => 75,  202 => 55,  186 => 82,  124 => 31,  81 => 25,  76 => 30,  1883 => 659,  1881 => 658,  1879 => 657,  1876 => 656,  1871 => 653,  1860 => 651,  1855 => 650,  1852 => 649,  1849 => 648,  1840 => 643,  1837 => 642,  1833 => 640,  1827 => 638,  1824 => 637,  1821 => 636,  1818 => 635,  1812 => 633,  1806 => 631,  1803 => 630,  1800 => 627,  1780 => 625,  1777 => 624,  1774 => 623,  1771 => 622,  1768 => 621,  1765 => 620,  1763 => 619,  1760 => 618,  1757 => 617,  1754 => 616,  1751 => 615,  1749 => 614,  1746 => 613,  1742 => 612,  1740 => 611,  1737 => 610,  1730 => 603,  1724 => 601,  1718 => 599,  1716 => 598,  1714 => 597,  1711 => 596,  1704 => 589,  1700 => 587,  1693 => 585,  1690 => 581,  1686 => 580,  1681 => 579,  1678 => 578,  1671 => 576,  1668 => 571,  1663 => 570,  1660 => 569,  1657 => 568,  1654 => 567,  1639 => 565,  1636 => 564,  1632 => 563,  1629 => 562,  1611 => 561,  1609 => 560,  1607 => 559,  1604 => 558,  1596 => 552,  1594 => 551,  1592 => 550,  1590 => 549,  1587 => 548,  1578 => 544,  1573 => 542,  1571 => 541,  1568 => 540,  1560 => 535,  1554 => 533,  1552 => 532,  1532 => 531,  1529 => 530,  1521 => 524,  1518 => 523,  1512 => 521,  1509 => 520,  1506 => 519,  1503 => 518,  1498 => 516,  1495 => 515,  1492 => 514,  1490 => 513,  1487 => 512,  1478 => 507,  1475 => 506,  1472 => 505,  1469 => 504,  1467 => 503,  1464 => 502,  1455 => 498,  1453 => 497,  1450 => 496,  1443 => 490,  1438 => 489,  1436 => 488,  1433 => 487,  1425 => 480,  1419 => 478,  1417 => 477,  1414 => 421,  1410 => 474,  1408 => 419,  1398 => 415,  1392 => 469,  1390 => 468,  1387 => 467,  1384 => 466,  1381 => 465,  1379 => 464,  1376 => 463,  1374 => 462,  1368 => 460,  1362 => 458,  1359 => 457,  1357 => 456,  1354 => 455,  1345 => 451,  1339 => 396,  1335 => 448,  1330 => 447,  1324 => 444,  1321 => 443,  1318 => 442,  1316 => 441,  1313 => 440,  1306 => 437,  1303 => 382,  1295 => 432,  1291 => 380,  1286 => 430,  1283 => 378,  1277 => 425,  1271 => 375,  1268 => 374,  1262 => 420,  1260 => 419,  1252 => 418,  1249 => 367,  1246 => 366,  1240 => 412,  1234 => 410,  1231 => 358,  1225 => 407,  1223 => 356,  1217 => 405,  1214 => 404,  1211 => 349,  1204 => 400,  1201 => 399,  1193 => 393,  1187 => 342,  1184 => 390,  1178 => 388,  1175 => 387,  1169 => 385,  1166 => 384,  1160 => 382,  1158 => 381,  1154 => 327,  1152 => 379,  1136 => 378,  1133 => 377,  1130 => 376,  1127 => 375,  1124 => 374,  1121 => 373,  1118 => 320,  1115 => 319,  1112 => 318,  1109 => 317,  1106 => 316,  1103 => 315,  1100 => 314,  1098 => 313,  1096 => 364,  1093 => 363,  1081 => 359,  1078 => 358,  1075 => 357,  1072 => 356,  1070 => 355,  1067 => 299,  1058 => 347,  1055 => 346,  1048 => 290,  1045 => 342,  1042 => 341,  1040 => 285,  1033 => 339,  1027 => 281,  1024 => 280,  1021 => 335,  1019 => 334,  1017 => 333,  1015 => 332,  1012 => 271,  1004 => 266,  1001 => 326,  999 => 325,  996 => 324,  988 => 320,  985 => 319,  983 => 318,  980 => 317,  971 => 311,  967 => 256,  963 => 309,  959 => 308,  955 => 252,  950 => 269,  947 => 249,  944 => 304,  938 => 302,  932 => 299,  924 => 298,  912 => 289,  903 => 286,  900 => 228,  897 => 227,  895 => 293,  892 => 282,  883 => 287,  880 => 286,  874 => 284,  872 => 283,  868 => 273,  863 => 269,  860 => 268,  857 => 267,  850 => 276,  844 => 204,  838 => 272,  826 => 271,  819 => 270,  816 => 241,  814 => 191,  812 => 190,  809 => 189,  801 => 185,  797 => 259,  795 => 258,  794 => 257,  793 => 182,  792 => 255,  789 => 254,  786 => 253,  779 => 250,  773 => 264,  767 => 246,  749 => 218,  742 => 240,  739 => 239,  737 => 242,  735 => 241,  732 => 213,  724 => 154,  721 => 153,  719 => 233,  711 => 231,  708 => 228,  706 => 227,  693 => 226,  685 => 224,  683 => 393,  680 => 134,  676 => 385,  674 => 219,  670 => 217,  668 => 197,  666 => 382,  663 => 195,  657 => 193,  655 => 209,  650 => 217,  644 => 213,  640 => 211,  638 => 210,  633 => 209,  629 => 186,  613 => 200,  607 => 349,  604 => 197,  599 => 206,  596 => 106,  593 => 105,  590 => 338,  587 => 203,  584 => 202,  582 => 190,  579 => 332,  570 => 164,  567 => 183,  558 => 186,  553 => 184,  550 => 187,  535 => 177,  532 => 174,  529 => 299,  527 => 91,  524 => 297,  521 => 182,  518 => 170,  516 => 294,  513 => 179,  510 => 293,  507 => 156,  504 => 292,  501 => 161,  498 => 160,  496 => 172,  493 => 171,  486 => 286,  470 => 278,  467 => 72,  464 => 275,  458 => 147,  447 => 113,  443 => 142,  439 => 133,  432 => 140,  428 => 116,  421 => 244,  411 => 120,  400 => 116,  388 => 42,  364 => 112,  359 => 144,  356 => 126,  346 => 107,  343 => 115,  338 => 113,  329 => 130,  326 => 86,  316 => 16,  301 => 144,  286 => 98,  271 => 108,  266 => 366,  255 => 353,  237 => 86,  225 => 67,  195 => 54,  174 => 59,  129 => 57,  70 => 17,  233 => 71,  211 => 81,  207 => 33,  198 => 55,  190 => 66,  126 => 42,  104 => 49,  418 => 112,  405 => 118,  395 => 125,  389 => 158,  378 => 151,  361 => 207,  358 => 103,  351 => 120,  348 => 118,  339 => 191,  333 => 132,  330 => 112,  325 => 94,  315 => 150,  308 => 86,  302 => 168,  299 => 112,  293 => 109,  290 => 90,  284 => 106,  280 => 87,  277 => 136,  260 => 98,  257 => 103,  250 => 93,  222 => 81,  206 => 74,  200 => 70,  191 => 69,  188 => 83,  185 => 86,  170 => 79,  167 => 57,  155 => 52,  150 => 65,  134 => 21,  97 => 63,  53 => 14,  445 => 152,  441 => 115,  438 => 114,  424 => 114,  422 => 147,  419 => 109,  415 => 121,  412 => 126,  406 => 111,  401 => 89,  390 => 136,  385 => 225,  382 => 92,  376 => 103,  371 => 35,  363 => 32,  353 => 82,  349 => 80,  347 => 140,  344 => 193,  336 => 135,  334 => 75,  331 => 96,  328 => 73,  324 => 179,  317 => 91,  313 => 84,  310 => 171,  307 => 104,  295 => 142,  292 => 91,  289 => 140,  279 => 104,  276 => 395,  263 => 365,  259 => 149,  256 => 96,  251 => 101,  249 => 74,  244 => 140,  239 => 64,  236 => 109,  234 => 64,  231 => 133,  226 => 131,  223 => 60,  218 => 59,  215 => 78,  212 => 76,  197 => 90,  194 => 52,  192 => 88,  184 => 68,  181 => 61,  178 => 48,  165 => 77,  161 => 54,  152 => 51,  148 => 64,  146 => 49,  137 => 22,  127 => 32,  114 => 71,  90 => 29,  84 => 26,  77 => 58,  480 => 75,  474 => 150,  469 => 158,  461 => 70,  457 => 153,  453 => 151,  444 => 263,  440 => 148,  437 => 61,  435 => 146,  430 => 255,  427 => 116,  423 => 250,  413 => 241,  409 => 131,  407 => 238,  402 => 237,  398 => 115,  393 => 112,  387 => 110,  384 => 109,  381 => 105,  379 => 104,  374 => 217,  368 => 126,  365 => 141,  362 => 148,  360 => 104,  355 => 122,  341 => 131,  337 => 97,  322 => 93,  314 => 88,  312 => 149,  309 => 148,  305 => 115,  298 => 101,  294 => 90,  285 => 78,  283 => 138,  278 => 160,  268 => 107,  264 => 74,  258 => 72,  252 => 85,  247 => 84,  241 => 49,  229 => 101,  220 => 80,  214 => 99,  177 => 65,  169 => 74,  140 => 47,  132 => 59,  128 => 58,  107 => 41,  61 => 15,  273 => 85,  269 => 133,  254 => 147,  243 => 89,  240 => 72,  238 => 84,  235 => 63,  230 => 106,  227 => 80,  224 => 103,  221 => 38,  219 => 101,  217 => 79,  208 => 124,  204 => 73,  179 => 66,  159 => 70,  143 => 24,  135 => 35,  119 => 28,  102 => 38,  71 => 18,  67 => 17,  63 => 14,  59 => 16,  38 => 25,  94 => 40,  89 => 50,  85 => 34,  75 => 39,  68 => 31,  56 => 15,  87 => 33,  21 => 12,  26 => 16,  93 => 34,  88 => 60,  78 => 40,  46 => 28,  27 => 16,  44 => 19,  31 => 4,  28 => 3,  201 => 72,  196 => 68,  183 => 50,  171 => 63,  166 => 100,  163 => 40,  158 => 75,  156 => 68,  151 => 52,  142 => 61,  138 => 61,  136 => 60,  121 => 46,  117 => 45,  105 => 27,  91 => 39,  62 => 34,  49 => 20,  24 => 14,  25 => 12,  19 => 11,  79 => 20,  72 => 37,  69 => 38,  47 => 12,  40 => 7,  37 => 6,  22 => 12,  246 => 67,  157 => 57,  145 => 52,  139 => 60,  131 => 20,  123 => 57,  120 => 56,  115 => 50,  111 => 78,  108 => 39,  101 => 37,  98 => 47,  96 => 37,  83 => 46,  74 => 40,  66 => 25,  55 => 13,  52 => 30,  50 => 11,  43 => 8,  41 => 22,  35 => 5,  32 => 19,  29 => 15,  209 => 96,  203 => 93,  199 => 82,  193 => 51,  189 => 65,  187 => 87,  182 => 85,  176 => 82,  173 => 46,  168 => 60,  164 => 72,  162 => 71,  154 => 67,  149 => 35,  147 => 69,  144 => 68,  141 => 67,  133 => 50,  130 => 57,  125 => 45,  122 => 44,  116 => 44,  112 => 52,  109 => 40,  106 => 64,  103 => 56,  99 => 26,  95 => 51,  92 => 45,  86 => 30,  82 => 33,  80 => 41,  73 => 18,  64 => 16,  60 => 34,  57 => 32,  54 => 12,  51 => 24,  48 => 26,  45 => 9,  42 => 8,  39 => 17,  36 => 20,  33 => 16,  30 => 15,);
    }
}
