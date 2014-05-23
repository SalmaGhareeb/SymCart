<?php

/* SonataUserBundle:Profile:action.html.twig */
class __TwigTemplate_3c18e89e0cb744bb60032ad2edbaa31b8da01ef1674c7557816095f525b72a82 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("::base.html.twig");

        $this->blocks = array(
            'body' => array($this, 'block_body'),
            'sonata_page_breadcrumb' => array($this, 'block_sonata_page_breadcrumb'),
            'title' => array($this, 'block_title'),
            'sonata_profile_menu' => array($this, 'block_sonata_profile_menu'),
            'sonata_profile_content' => array($this, 'block_sonata_profile_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 15
    public function block_body($context, array $blocks = array())
    {
        // line 16
        $this->displayBlock('sonata_page_breadcrumb', $context, $blocks);
        // line 24
        echo "
<h2>";
        // line 25
        $this->displayBlock('title', $context, $blocks);
        echo "</h2>

  
<div class=\"sonata-user-show row row-fluid\">

    <div class=\"span2 col-lg-2\" style=\"padding: 8px 0;\">
        ";
        // line 31
        $this->displayBlock('sonata_profile_menu', $context, $blocks);
        // line 34
        echo "    </div>

    <div class=\"span10 col-lg-10\">
        ";
        // line 37
        $this->env->loadTemplate("SonataCoreBundle:FlashMessage:render.html.twig")->display($context);
        // line 38
        echo "
        ";
        // line 39
        $this->displayBlock('sonata_profile_content', $context, $blocks);
        // line 40
        echo "    </div>

</div>
  ";
    }

    // line 16
    public function block_sonata_page_breadcrumb($context, array $blocks = array())
    {
        // line 17
        echo "    ";
        if ((!array_key_exists("breadcrumb_context", $context))) {
            // line 18
            echo "        ";
            $context["breadcrumb_context"] = "user_index";
            // line 19
            echo "    ";
        }
        // line 20
        echo "    <div class=\"row-fluid clearfix\">
        ";
        // line 21
        echo call_user_func_array($this->env->getFunction('sonata_block_render_event')->getCallable(), array("breadcrumb", array("context" => (isset($context["breadcrumb_context"]) ? $context["breadcrumb_context"] : $this->getContext($context, "breadcrumb_context")), "current_uri" => $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request"), "requestUri"))));
        echo "
    </div>
";
    }

    // line 25
    public function block_title($context, array $blocks = array())
    {
        echo $this->env->getExtension('translator')->getTranslator()->trans("sonata_profile_title", array(), "SonataUserBundle");
    }

    // line 31
    public function block_sonata_profile_menu($context, array $blocks = array())
    {
        // line 32
        echo "            ";
        echo call_user_func_array($this->env->getFunction('sonata_block_render')->getCallable(), array(array("type" => "sonata.user.block.menu"), array("current_uri" => $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request"), "requestUri"))));
        echo "
        ";
    }

    // line 39
    public function block_sonata_profile_content($context, array $blocks = array())
    {
        echo "";
    }

    public function getTemplateName()
    {
        return "SonataUserBundle:Profile:action.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  23 => 3,  20 => 1,  270 => 4,  180 => 56,  175 => 53,  172 => 51,  160 => 44,  113 => 31,  100 => 23,  65 => 25,  58 => 38,  34 => 4,  1402 => 417,  1400 => 416,  1394 => 414,  1385 => 413,  1383 => 412,  1380 => 411,  1367 => 405,  1361 => 403,  1355 => 401,  1353 => 400,  1351 => 399,  1347 => 398,  1341 => 397,  1336 => 395,  1323 => 389,  1317 => 387,  1311 => 385,  1309 => 384,  1307 => 383,  1297 => 381,  1287 => 379,  1279 => 377,  1273 => 376,  1256 => 369,  1251 => 368,  1237 => 360,  1228 => 357,  1221 => 355,  1218 => 354,  1202 => 347,  1198 => 346,  1195 => 345,  1192 => 344,  1190 => 343,  1179 => 338,  1177 => 337,  1174 => 336,  1168 => 332,  1162 => 330,  1159 => 329,  1157 => 328,  1145 => 322,  1143 => 321,  1095 => 312,  1088 => 308,  1084 => 307,  1079 => 306,  1077 => 305,  1074 => 304,  1064 => 298,  1056 => 293,  1053 => 292,  1051 => 291,  1036 => 284,  1032 => 283,  1029 => 282,  1016 => 276,  1014 => 272,  1009 => 270,  982 => 261,  979 => 260,  976 => 259,  973 => 258,  970 => 257,  964 => 255,  961 => 254,  958 => 253,  952 => 251,  939 => 243,  936 => 242,  934 => 241,  931 => 240,  923 => 236,  920 => 235,  918 => 234,  915 => 233,  894 => 226,  889 => 224,  881 => 220,  878 => 219,  876 => 218,  873 => 217,  865 => 213,  862 => 212,  849 => 206,  846 => 205,  841 => 203,  833 => 199,  830 => 198,  828 => 197,  825 => 196,  817 => 192,  798 => 184,  796 => 183,  785 => 178,  783 => 177,  780 => 176,  772 => 172,  769 => 171,  764 => 169,  756 => 165,  753 => 164,  751 => 163,  746 => 161,  729 => 155,  715 => 151,  712 => 150,  710 => 149,  707 => 148,  699 => 142,  697 => 141,  696 => 140,  695 => 139,  694 => 138,  689 => 137,  678 => 133,  675 => 132,  662 => 125,  658 => 124,  654 => 123,  649 => 122,  643 => 120,  635 => 117,  619 => 113,  617 => 112,  614 => 111,  598 => 107,  576 => 101,  564 => 99,  557 => 96,  555 => 95,  547 => 93,  515 => 85,  512 => 84,  509 => 83,  503 => 81,  490 => 77,  478 => 74,  459 => 69,  456 => 68,  450 => 64,  442 => 62,  433 => 60,  426 => 58,  414 => 52,  408 => 50,  403 => 48,  377 => 37,  366 => 33,  350 => 26,  342 => 23,  335 => 21,  332 => 20,  311 => 14,  288 => 4,  281 => 411,  253 => 1,  248 => 336,  245 => 335,  210 => 73,  202 => 68,  186 => 239,  124 => 42,  81 => 24,  76 => 18,  1883 => 659,  1881 => 658,  1879 => 657,  1876 => 656,  1871 => 653,  1860 => 651,  1855 => 650,  1852 => 649,  1849 => 648,  1840 => 643,  1837 => 642,  1833 => 640,  1827 => 638,  1824 => 637,  1821 => 636,  1818 => 635,  1812 => 633,  1806 => 631,  1803 => 630,  1800 => 627,  1780 => 625,  1777 => 624,  1774 => 623,  1771 => 622,  1768 => 621,  1765 => 620,  1763 => 619,  1760 => 618,  1757 => 617,  1754 => 616,  1751 => 615,  1749 => 614,  1746 => 613,  1742 => 612,  1740 => 611,  1737 => 610,  1730 => 603,  1724 => 601,  1718 => 599,  1716 => 598,  1714 => 597,  1711 => 596,  1704 => 589,  1700 => 587,  1693 => 585,  1690 => 581,  1686 => 580,  1681 => 579,  1678 => 578,  1671 => 576,  1668 => 571,  1663 => 570,  1660 => 569,  1657 => 568,  1654 => 567,  1639 => 565,  1636 => 564,  1632 => 563,  1629 => 562,  1611 => 561,  1609 => 560,  1607 => 559,  1604 => 558,  1596 => 552,  1594 => 551,  1592 => 550,  1590 => 549,  1587 => 548,  1578 => 544,  1573 => 542,  1571 => 541,  1568 => 540,  1560 => 535,  1554 => 533,  1552 => 532,  1532 => 531,  1529 => 530,  1521 => 524,  1518 => 523,  1512 => 521,  1509 => 520,  1506 => 519,  1503 => 518,  1498 => 516,  1495 => 515,  1492 => 514,  1490 => 513,  1487 => 512,  1478 => 507,  1475 => 506,  1472 => 505,  1469 => 504,  1467 => 503,  1464 => 502,  1455 => 498,  1453 => 497,  1450 => 496,  1443 => 490,  1438 => 489,  1436 => 488,  1433 => 487,  1425 => 480,  1419 => 478,  1417 => 477,  1414 => 421,  1410 => 474,  1408 => 419,  1398 => 415,  1392 => 469,  1390 => 468,  1387 => 467,  1384 => 466,  1381 => 465,  1379 => 464,  1376 => 463,  1374 => 462,  1368 => 460,  1362 => 458,  1359 => 457,  1357 => 456,  1354 => 455,  1345 => 451,  1339 => 396,  1335 => 448,  1330 => 447,  1324 => 444,  1321 => 443,  1318 => 442,  1316 => 441,  1313 => 440,  1306 => 437,  1303 => 382,  1295 => 432,  1291 => 380,  1286 => 430,  1283 => 378,  1277 => 425,  1271 => 375,  1268 => 374,  1262 => 420,  1260 => 419,  1252 => 418,  1249 => 367,  1246 => 366,  1240 => 412,  1234 => 410,  1231 => 358,  1225 => 407,  1223 => 356,  1217 => 405,  1214 => 404,  1211 => 349,  1204 => 400,  1201 => 399,  1193 => 393,  1187 => 342,  1184 => 390,  1178 => 388,  1175 => 387,  1169 => 385,  1166 => 384,  1160 => 382,  1158 => 381,  1154 => 327,  1152 => 379,  1136 => 378,  1133 => 377,  1130 => 376,  1127 => 375,  1124 => 374,  1121 => 373,  1118 => 320,  1115 => 319,  1112 => 318,  1109 => 317,  1106 => 316,  1103 => 315,  1100 => 314,  1098 => 313,  1096 => 364,  1093 => 363,  1081 => 359,  1078 => 358,  1075 => 357,  1072 => 356,  1070 => 355,  1067 => 299,  1058 => 347,  1055 => 346,  1048 => 290,  1045 => 342,  1042 => 341,  1040 => 285,  1033 => 339,  1027 => 281,  1024 => 280,  1021 => 335,  1019 => 334,  1017 => 333,  1015 => 332,  1012 => 271,  1004 => 266,  1001 => 326,  999 => 325,  996 => 324,  988 => 320,  985 => 319,  983 => 318,  980 => 317,  971 => 311,  967 => 256,  963 => 309,  959 => 308,  955 => 252,  950 => 250,  947 => 249,  944 => 304,  938 => 302,  932 => 299,  924 => 298,  912 => 297,  903 => 229,  900 => 228,  897 => 227,  895 => 293,  892 => 225,  883 => 287,  880 => 286,  874 => 284,  872 => 283,  868 => 282,  863 => 281,  860 => 211,  857 => 210,  850 => 276,  844 => 204,  838 => 272,  826 => 271,  819 => 270,  816 => 269,  814 => 191,  812 => 190,  809 => 189,  801 => 185,  797 => 259,  795 => 258,  794 => 257,  793 => 182,  792 => 255,  789 => 254,  786 => 253,  779 => 250,  773 => 247,  767 => 170,  749 => 162,  742 => 244,  739 => 156,  737 => 242,  735 => 241,  732 => 240,  724 => 154,  721 => 153,  719 => 233,  711 => 229,  708 => 228,  706 => 227,  693 => 226,  685 => 224,  683 => 135,  680 => 134,  676 => 220,  674 => 219,  670 => 217,  668 => 216,  666 => 126,  663 => 214,  657 => 210,  655 => 209,  650 => 208,  644 => 207,  640 => 119,  638 => 118,  633 => 202,  629 => 201,  613 => 200,  607 => 198,  604 => 197,  599 => 196,  596 => 106,  593 => 105,  590 => 193,  587 => 192,  584 => 191,  582 => 190,  579 => 189,  570 => 184,  567 => 183,  558 => 181,  553 => 180,  550 => 94,  535 => 177,  532 => 176,  529 => 92,  527 => 91,  524 => 90,  521 => 172,  518 => 171,  516 => 170,  513 => 169,  510 => 164,  507 => 163,  504 => 162,  501 => 80,  498 => 160,  496 => 79,  493 => 78,  486 => 154,  470 => 73,  467 => 72,  464 => 71,  458 => 147,  447 => 143,  443 => 142,  439 => 141,  432 => 140,  428 => 59,  421 => 137,  411 => 132,  400 => 47,  388 => 42,  364 => 112,  359 => 110,  356 => 109,  346 => 107,  343 => 106,  338 => 104,  329 => 99,  326 => 98,  316 => 16,  301 => 89,  286 => 84,  271 => 374,  266 => 366,  255 => 353,  237 => 65,  225 => 298,  195 => 51,  174 => 217,  129 => 148,  70 => 16,  233 => 81,  211 => 41,  207 => 269,  198 => 66,  190 => 34,  126 => 147,  104 => 90,  418 => 136,  405 => 49,  395 => 125,  389 => 158,  378 => 151,  361 => 137,  358 => 136,  351 => 108,  348 => 132,  339 => 136,  333 => 132,  330 => 131,  325 => 128,  315 => 122,  308 => 13,  302 => 117,  299 => 8,  293 => 6,  290 => 5,  284 => 98,  280 => 82,  277 => 81,  260 => 363,  257 => 74,  250 => 341,  222 => 297,  206 => 71,  200 => 91,  191 => 246,  188 => 87,  185 => 59,  170 => 80,  167 => 48,  155 => 74,  150 => 71,  134 => 161,  97 => 47,  53 => 22,  445 => 126,  441 => 115,  438 => 114,  424 => 145,  422 => 110,  419 => 109,  415 => 107,  412 => 145,  406 => 130,  401 => 101,  390 => 43,  385 => 41,  382 => 92,  376 => 149,  371 => 35,  363 => 32,  353 => 82,  349 => 80,  347 => 77,  344 => 24,  336 => 135,  334 => 75,  331 => 74,  328 => 73,  324 => 71,  317 => 67,  313 => 15,  310 => 92,  307 => 91,  295 => 87,  292 => 86,  289 => 85,  279 => 54,  276 => 395,  263 => 365,  259 => 104,  256 => 52,  251 => 99,  249 => 96,  244 => 111,  239 => 90,  236 => 48,  234 => 64,  231 => 63,  226 => 62,  223 => 60,  218 => 59,  215 => 280,  212 => 74,  197 => 249,  194 => 248,  192 => 64,  184 => 233,  181 => 232,  178 => 46,  165 => 47,  161 => 202,  152 => 26,  148 => 48,  146 => 181,  137 => 37,  127 => 43,  114 => 39,  90 => 40,  84 => 31,  77 => 27,  480 => 75,  474 => 161,  469 => 158,  461 => 70,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 61,  435 => 146,  430 => 144,  427 => 116,  423 => 57,  413 => 134,  409 => 131,  407 => 144,  402 => 141,  398 => 100,  393 => 124,  387 => 122,  384 => 121,  381 => 119,  379 => 118,  374 => 36,  368 => 34,  365 => 111,  362 => 111,  360 => 77,  355 => 27,  341 => 105,  337 => 22,  322 => 96,  314 => 99,  312 => 121,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 3,  283 => 83,  278 => 410,  268 => 3,  264 => 2,  258 => 354,  252 => 72,  247 => 120,  241 => 49,  229 => 101,  220 => 290,  214 => 42,  177 => 54,  169 => 49,  140 => 22,  132 => 27,  128 => 57,  107 => 13,  61 => 39,  273 => 394,  269 => 94,  254 => 100,  243 => 83,  240 => 326,  238 => 312,  235 => 311,  230 => 303,  227 => 301,  224 => 71,  221 => 79,  219 => 76,  217 => 289,  208 => 72,  204 => 267,  179 => 224,  159 => 196,  143 => 23,  135 => 44,  119 => 117,  102 => 12,  71 => 6,  67 => 4,  63 => 40,  59 => 13,  38 => 6,  94 => 19,  89 => 17,  85 => 21,  75 => 11,  68 => 5,  56 => 37,  87 => 33,  21 => 2,  26 => 2,  93 => 21,  88 => 12,  78 => 22,  46 => 21,  27 => 4,  44 => 7,  31 => 15,  28 => 14,  201 => 53,  196 => 65,  183 => 82,  171 => 216,  166 => 209,  163 => 45,  158 => 28,  156 => 41,  151 => 188,  142 => 46,  138 => 54,  136 => 168,  121 => 131,  117 => 34,  105 => 36,  91 => 56,  62 => 24,  49 => 31,  24 => 3,  25 => 3,  19 => 1,  79 => 19,  72 => 10,  69 => 9,  47 => 20,  40 => 25,  37 => 24,  22 => 2,  246 => 68,  157 => 33,  145 => 46,  139 => 45,  131 => 160,  123 => 24,  120 => 40,  115 => 33,  111 => 30,  108 => 39,  101 => 32,  98 => 31,  96 => 33,  83 => 10,  74 => 11,  66 => 7,  55 => 4,  52 => 3,  50 => 21,  43 => 19,  41 => 3,  35 => 16,  32 => 15,  29 => 3,  209 => 94,  203 => 54,  199 => 265,  193 => 35,  189 => 61,  187 => 60,  182 => 57,  176 => 223,  173 => 43,  168 => 41,  164 => 203,  162 => 57,  154 => 49,  149 => 182,  147 => 28,  144 => 176,  141 => 175,  133 => 55,  130 => 41,  125 => 56,  122 => 43,  116 => 116,  112 => 52,  109 => 105,  106 => 104,  103 => 16,  99 => 18,  95 => 22,  92 => 25,  86 => 30,  82 => 20,  80 => 28,  73 => 17,  64 => 21,  60 => 20,  57 => 80,  54 => 12,  51 => 34,  48 => 13,  45 => 28,  42 => 19,  39 => 5,  36 => 16,  33 => 4,  30 => 3,);
    }
}
