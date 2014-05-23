<?php

/* SensioDistributionBundle::Configurator/layout.html.twig */
class __TwigTemplate_8980d7d963441216667101933db2ca67cb9938e5e21a6e7b606aaca52a6f19ad extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("TwigBundle::layout.html.twig");

        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "TwigBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        // line 4
        echo "    <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/sensiodistribution/webconfigurator/css/configurator.css"), "html", null, true);
        echo "\" />
";
    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        echo "Web Configurator Bundle";
    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        // line 10
        echo "    <div class=\"block\">
        ";
        // line 11
        $this->displayBlock('content', $context, $blocks);
        // line 12
        echo "    </div>
    <div class=\"version\">Symfony Standard Edition v.";
        // line 13
        echo twig_escape_filter($this->env, (isset($context["version"]) ? $context["version"] : $this->getContext($context, "version")), "html", null, true);
        echo "</div>
";
    }

    // line 11
    public function block_content($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "SensioDistributionBundle::Configurator/layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  151 => 62,  182 => 80,  162 => 71,  563 => 188,  560 => 187,  555 => 185,  549 => 182,  543 => 179,  537 => 176,  528 => 173,  525 => 172,  523 => 171,  514 => 168,  511 => 167,  508 => 165,  495 => 158,  491 => 157,  487 => 156,  474 => 150,  460 => 143,  455 => 141,  449 => 138,  442 => 134,  436 => 132,  433 => 130,  426 => 126,  420 => 123,  403 => 117,  387 => 110,  384 => 109,  380 => 107,  366 => 106,  354 => 101,  337 => 97,  314 => 88,  304 => 85,  272 => 81,  267 => 78,  216 => 70,  213 => 69,  186 => 82,  175 => 77,  169 => 74,  159 => 70,  142 => 61,  320 => 92,  311 => 87,  309 => 117,  305 => 115,  288 => 107,  281 => 105,  275 => 103,  269 => 100,  265 => 99,  253 => 95,  243 => 89,  232 => 84,  228 => 83,  217 => 79,  210 => 75,  156 => 68,  153 => 56,  65 => 17,  119 => 28,  96 => 35,  160 => 64,  133 => 49,  124 => 31,  113 => 40,  95 => 34,  145 => 59,  136 => 58,  130 => 51,  118 => 49,  111 => 78,  108 => 19,  122 => 44,  100 => 36,  33 => 4,  144 => 62,  138 => 36,  116 => 43,  110 => 38,  76 => 28,  23 => 18,  78 => 24,  20 => 1,  99 => 26,  92 => 31,  89 => 30,  86 => 29,  81 => 25,  46 => 13,  37 => 7,  61 => 12,  47 => 9,  45 => 11,  36 => 9,  102 => 33,  68 => 12,  40 => 11,  58 => 13,  49 => 12,  38 => 7,  34 => 4,  21 => 12,  1883 => 659,  1881 => 658,  1879 => 657,  1876 => 656,  1871 => 653,  1860 => 651,  1855 => 650,  1852 => 649,  1849 => 648,  1840 => 643,  1837 => 642,  1833 => 640,  1827 => 638,  1824 => 637,  1821 => 636,  1818 => 635,  1812 => 633,  1806 => 631,  1803 => 630,  1800 => 627,  1780 => 625,  1777 => 624,  1774 => 623,  1771 => 622,  1768 => 621,  1765 => 620,  1763 => 619,  1760 => 618,  1757 => 617,  1754 => 616,  1751 => 615,  1749 => 614,  1746 => 613,  1742 => 612,  1740 => 611,  1737 => 610,  1730 => 603,  1724 => 601,  1718 => 599,  1716 => 598,  1714 => 597,  1711 => 596,  1704 => 589,  1700 => 587,  1693 => 585,  1690 => 581,  1686 => 580,  1681 => 579,  1678 => 578,  1671 => 576,  1668 => 571,  1663 => 570,  1660 => 569,  1657 => 568,  1654 => 567,  1639 => 565,  1636 => 564,  1632 => 563,  1629 => 562,  1611 => 561,  1609 => 560,  1607 => 559,  1604 => 558,  1596 => 552,  1594 => 551,  1592 => 550,  1590 => 549,  1587 => 548,  1578 => 544,  1573 => 542,  1571 => 541,  1568 => 540,  1560 => 535,  1554 => 533,  1552 => 532,  1532 => 531,  1529 => 530,  1521 => 524,  1518 => 523,  1512 => 521,  1509 => 520,  1506 => 519,  1503 => 518,  1498 => 516,  1495 => 515,  1492 => 514,  1490 => 513,  1487 => 512,  1478 => 507,  1475 => 506,  1472 => 505,  1469 => 504,  1467 => 503,  1464 => 502,  1455 => 498,  1453 => 497,  1450 => 496,  1443 => 490,  1438 => 489,  1436 => 488,  1433 => 487,  1425 => 480,  1419 => 478,  1417 => 477,  1414 => 476,  1410 => 474,  1408 => 473,  1398 => 471,  1392 => 469,  1390 => 468,  1387 => 467,  1384 => 466,  1381 => 465,  1379 => 464,  1376 => 463,  1374 => 462,  1368 => 460,  1362 => 458,  1359 => 457,  1357 => 456,  1354 => 455,  1345 => 451,  1339 => 449,  1335 => 448,  1330 => 447,  1324 => 444,  1321 => 443,  1318 => 442,  1316 => 441,  1313 => 440,  1306 => 437,  1303 => 436,  1295 => 432,  1291 => 431,  1286 => 430,  1283 => 429,  1277 => 425,  1271 => 423,  1268 => 422,  1262 => 420,  1260 => 419,  1252 => 418,  1249 => 417,  1246 => 416,  1240 => 412,  1234 => 410,  1231 => 409,  1225 => 407,  1223 => 406,  1217 => 405,  1214 => 404,  1211 => 403,  1204 => 400,  1201 => 399,  1193 => 393,  1187 => 391,  1184 => 390,  1178 => 388,  1175 => 387,  1169 => 385,  1166 => 384,  1160 => 382,  1158 => 381,  1154 => 380,  1152 => 379,  1136 => 378,  1133 => 377,  1130 => 376,  1127 => 375,  1124 => 374,  1121 => 373,  1118 => 372,  1115 => 371,  1112 => 370,  1109 => 369,  1106 => 368,  1103 => 367,  1100 => 366,  1098 => 365,  1096 => 364,  1093 => 363,  1081 => 359,  1078 => 358,  1075 => 357,  1072 => 356,  1070 => 355,  1067 => 354,  1058 => 347,  1055 => 346,  1048 => 343,  1045 => 342,  1042 => 341,  1040 => 340,  1033 => 339,  1027 => 337,  1024 => 336,  1021 => 335,  1019 => 334,  1017 => 333,  1015 => 332,  1012 => 331,  1004 => 327,  1001 => 326,  999 => 325,  996 => 324,  988 => 320,  985 => 319,  983 => 318,  980 => 317,  971 => 311,  967 => 310,  963 => 309,  959 => 308,  955 => 307,  950 => 306,  947 => 305,  944 => 304,  938 => 302,  932 => 299,  924 => 298,  912 => 297,  903 => 296,  900 => 295,  897 => 294,  895 => 293,  892 => 292,  883 => 287,  880 => 286,  874 => 284,  872 => 283,  868 => 282,  863 => 281,  860 => 280,  857 => 279,  850 => 276,  844 => 273,  838 => 272,  826 => 271,  819 => 270,  816 => 269,  814 => 268,  812 => 267,  809 => 266,  801 => 261,  797 => 259,  795 => 258,  794 => 257,  793 => 256,  792 => 255,  789 => 254,  786 => 253,  779 => 250,  773 => 247,  767 => 246,  749 => 245,  742 => 244,  739 => 243,  737 => 242,  735 => 241,  732 => 240,  724 => 235,  721 => 234,  719 => 233,  711 => 229,  708 => 228,  706 => 227,  693 => 226,  685 => 224,  683 => 223,  680 => 222,  676 => 220,  674 => 219,  670 => 217,  668 => 216,  666 => 215,  663 => 214,  657 => 210,  655 => 209,  650 => 208,  644 => 207,  640 => 205,  638 => 204,  633 => 202,  629 => 201,  613 => 200,  607 => 198,  604 => 197,  599 => 196,  596 => 195,  593 => 194,  590 => 193,  587 => 192,  584 => 191,  582 => 190,  579 => 189,  570 => 184,  567 => 183,  558 => 186,  553 => 184,  550 => 179,  535 => 177,  532 => 174,  529 => 175,  527 => 174,  524 => 173,  521 => 172,  518 => 170,  516 => 170,  513 => 169,  510 => 164,  507 => 163,  504 => 162,  501 => 161,  498 => 160,  496 => 159,  493 => 158,  486 => 154,  470 => 153,  467 => 152,  464 => 151,  458 => 147,  447 => 143,  443 => 142,  439 => 133,  432 => 140,  428 => 139,  423 => 138,  421 => 137,  411 => 120,  409 => 131,  400 => 116,  388 => 122,  379 => 118,  364 => 112,  362 => 111,  359 => 110,  356 => 109,  346 => 107,  343 => 106,  338 => 104,  329 => 99,  326 => 98,  316 => 94,  301 => 89,  286 => 84,  271 => 79,  266 => 77,  255 => 73,  240 => 72,  237 => 86,  225 => 61,  195 => 51,  174 => 59,  171 => 63,  163 => 58,  157 => 56,  154 => 67,  147 => 52,  129 => 57,  109 => 40,  91 => 34,  83 => 32,  80 => 30,  70 => 20,  233 => 71,  230 => 46,  220 => 80,  214 => 42,  211 => 41,  207 => 40,  198 => 52,  196 => 68,  193 => 35,  190 => 34,  149 => 60,  126 => 42,  123 => 59,  120 => 20,  104 => 37,  87 => 33,  75 => 24,  60 => 20,  54 => 19,  27 => 14,  418 => 136,  407 => 144,  405 => 118,  402 => 141,  395 => 125,  389 => 158,  381 => 119,  378 => 151,  374 => 116,  361 => 137,  358 => 103,  351 => 108,  348 => 132,  339 => 136,  333 => 132,  330 => 131,  325 => 94,  322 => 93,  315 => 120,  312 => 121,  308 => 86,  302 => 117,  299 => 112,  293 => 109,  290 => 111,  284 => 106,  280 => 82,  277 => 81,  268 => 78,  260 => 98,  257 => 74,  252 => 72,  250 => 93,  247 => 120,  238 => 105,  235 => 103,  227 => 45,  222 => 81,  206 => 55,  203 => 54,  200 => 91,  191 => 69,  188 => 83,  185 => 68,  179 => 66,  176 => 77,  170 => 74,  167 => 57,  164 => 72,  155 => 62,  150 => 65,  140 => 58,  134 => 59,  131 => 61,  128 => 54,  115 => 40,  106 => 45,  103 => 37,  97 => 41,  94 => 34,  88 => 30,  85 => 23,  73 => 23,  66 => 25,  63 => 21,  56 => 16,  53 => 11,  445 => 126,  441 => 115,  438 => 114,  427 => 116,  424 => 145,  422 => 110,  419 => 109,  415 => 121,  412 => 145,  406 => 130,  401 => 101,  398 => 115,  393 => 112,  390 => 96,  385 => 121,  382 => 92,  376 => 149,  371 => 115,  368 => 140,  363 => 78,  360 => 104,  355 => 85,  353 => 82,  349 => 80,  347 => 77,  344 => 140,  341 => 105,  336 => 135,  334 => 75,  331 => 96,  328 => 73,  324 => 71,  317 => 91,  313 => 93,  310 => 92,  307 => 91,  295 => 87,  292 => 86,  289 => 82,  283 => 83,  279 => 104,  276 => 53,  263 => 76,  259 => 104,  256 => 96,  254 => 100,  251 => 99,  249 => 74,  246 => 68,  244 => 111,  241 => 49,  239 => 90,  236 => 48,  234 => 64,  231 => 63,  229 => 101,  226 => 62,  223 => 60,  221 => 56,  218 => 59,  215 => 78,  212 => 57,  209 => 94,  204 => 73,  201 => 72,  197 => 70,  194 => 89,  192 => 85,  189 => 65,  187 => 51,  184 => 50,  181 => 61,  178 => 46,  173 => 43,  168 => 60,  165 => 72,  161 => 54,  158 => 79,  152 => 61,  148 => 64,  146 => 60,  143 => 59,  139 => 63,  137 => 55,  135 => 62,  132 => 58,  127 => 60,  125 => 45,  121 => 47,  117 => 19,  114 => 45,  112 => 39,  107 => 37,  105 => 18,  101 => 33,  98 => 44,  93 => 32,  90 => 32,  84 => 27,  82 => 26,  79 => 25,  77 => 25,  74 => 22,  72 => 21,  69 => 24,  67 => 18,  62 => 16,  59 => 13,  57 => 19,  52 => 14,  50 => 10,  71 => 23,  64 => 11,  55 => 12,  48 => 9,  30 => 7,  39 => 10,  29 => 3,  26 => 9,  51 => 37,  44 => 11,  42 => 8,  35 => 5,  31 => 3,  43 => 11,  41 => 7,  28 => 3,  24 => 14,  32 => 4,  25 => 35,  22 => 12,  19 => 1,);
    }
}
