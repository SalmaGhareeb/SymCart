<?php

/* SonataBlockBundle:Profiler:block.html.twig */
class __TwigTemplate_3e381bec50bf99f291a8e4ddae46c2f53d634aa3cd7f484ea202c53d8e7d093b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("WebProfilerBundle:Profiler:layout.html.twig");

        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
            'table' => array($this, 'block_table'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "WebProfilerBundle:Profiler:layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        // line 4
        echo "    <div class=\"sf-toolbar-block\">
        <div class=\"sf-toolbar-icon\">
            <a href=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_profiler", array("token" => (isset($context["token"]) ? $context["token"] : null), "panel" => (isset($context["name"]) ? $context["name"] : null))), "html", null, true);
        echo "\">
                ";
        // line 7
        echo "<span style=\"width:0px; height: 28px; vertical-align: middle;\"></span>
                <span class=\"sf-toolbar-status\">";
        // line 8
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["collector"]) ? $context["collector"] : null), "getTotalBlock", array(), "method"), "html", null, true);
        echo "</span> blocks
                ";
        // line 9
        if ((twig_length_filter($this->env, $this->getAttribute((isset($context["collector"]) ? $context["collector"] : null), "events")) > 0)) {
            echo "<strong>*</strong>";
        }
        // line 10
        echo "            </a>
        </div>
        <div class=\"sf-toolbar-info\">
            <div class=\"sf-toolbar-info-piece\">
                <b>Real Blocks</b>
                <span>";
        // line 15
        echo twig_escape_filter($this->env, twig_length_filter($this->env, $this->getAttribute((isset($context["collector"]) ? $context["collector"] : null), "realBlocks")), "html", null, true);
        echo "</span>
            </div>
            <div class=\"sf-toolbar-info-piece\">
                <b>Containers</b>
                <span>";
        // line 19
        echo twig_escape_filter($this->env, twig_length_filter($this->env, $this->getAttribute((isset($context["collector"]) ? $context["collector"] : null), "containers")), "html", null, true);
        echo "</span>
            </div>
            <div class=\"sf-toolbar-info-piece\">
                <b>Total Blocks</b>
                <span>";
        // line 23
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["collector"]) ? $context["collector"] : null), "getTotalBlock", array(), "method"), "html", null, true);
        echo "</span>
            </div>
            <div class=\"sf-toolbar-info-piece\">
                <hr />
                <b>Events</b>
                <span>";
        // line 28
        echo twig_escape_filter($this->env, twig_length_filter($this->env, $this->getAttribute((isset($context["collector"]) ? $context["collector"] : null), "events")), "html", null, true);
        echo "</span>
            </div>
        </div>
    </div>
";
    }

    // line 34
    public function block_menu($context, array $blocks = array())
    {
        // line 35
        echo "    <span class=\"label\">
        <span class=\"icon\"><img src=\"data:image/png;base64,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\" alt=\"\" /></span>
        <strong>Blocks";
        // line 37
        if ((twig_length_filter($this->env, $this->getAttribute((isset($context["collector"]) ? $context["collector"] : null), "events")) > 0)) {
            echo "<strong>*</strong>";
        }
        echo "</strong>
        <span class=\"count\">
            <span>";
        // line 39
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["collector"]) ? $context["collector"] : null), "getTotalBlock", array(), "method"), "html", null, true);
        echo "</span>
        </span>
    </span>
";
    }

    // line 44
    public function block_panel($context, array $blocks = array())
    {
        // line 45
        echo "    <h2>Events Blocks</h2>
    <table>
        <tr>
            <th>code name</th>
            <th>listener tag</th>
            <th>Block types</th>
            <th>Listeners</th>
        </tr>

        ";
        // line 54
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["collector"]) ? $context["collector"] : null), "events"));
        foreach ($context['_seq'] as $context["_key"] => $context["event"]) {
            // line 55
            echo "            <tr>
                <td>";
            // line 56
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["event"]) ? $context["event"] : null), "template_code", array(), "array"), "html", null, true);
            echo "</td>
                <td>";
            // line 57
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["event"]) ? $context["event"] : null), "event_name", array(), "array"), "html", null, true);
            echo "</td>
                <td>
                    ";
            // line 59
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["event"]) ? $context["event"] : null), "blocks", array(), "array"));
            $context['_iterated'] = false;
            foreach ($context['_seq'] as $context["_key"] => $context["type"]) {
                // line 60
                echo "                        ";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["type"]) ? $context["type"] : null), 1), "html", null, true);
                echo " (id:";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["type"]) ? $context["type"] : null), 0), "html", null, true);
                echo ")
                    ";
                $context['_iterated'] = true;
            }
            if (!$context['_iterated']) {
                // line 62
                echo "                        no block returned
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['type'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 64
            echo "                </td>
                <td>
                    ";
            // line 66
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["event"]) ? $context["event"] : null), "listeners", array(), "array"));
            $context['_iterated'] = false;
            foreach ($context['_seq'] as $context["_key"] => $context["listener"]) {
                // line 67
                echo "                        ";
                echo twig_escape_filter($this->env, (isset($context["listener"]) ? $context["listener"] : null), "html", null, true);
                echo "
                    ";
                $context['_iterated'] = true;
            }
            if (!$context['_iterated']) {
                // line 69
                echo "                        no listener registered
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['listener'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 71
            echo "                </td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['event'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 74
        echo "    </table>

    <h2>Real Blocks</h2>
    ";
        // line 77
        $context["blocks"] = $this->getAttribute((isset($context["collector"]) ? $context["collector"] : null), "realBlocks");
        // line 78
        echo "    ";
        $this->displayBlock("table", $context, $blocks);
        echo "

    <h2>Containers Blocks</h2>
    ";
        // line 81
        $context["blocks"] = $this->getAttribute((isset($context["collector"]) ? $context["collector"] : null), "containers");
        // line 82
        echo "    ";
        $this->displayBlock("table", $context, $blocks);
        echo "

    ";
        // line 84
        $this->displayBlock("javascript", $context, $blocks);
        echo "
";
    }

    // line 87
    public function block_table($context, array $blocks = array())
    {
        // line 88
        echo "    <table>
        <tr>
            <th>Id</th>
            <th>Name</th>
            <th>Type</th>
            <th>Mem. (diff)</th>
            <th>Mem. (peak)</th>
            <th>Duration</th>
        </tr>
        ";
        // line 97
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["blocks"]) ? $context["blocks"] : null));
        foreach ($context['_seq'] as $context["id"] => $context["block"]) {
            // line 98
            echo "
            ";
            // line 99
            $context["rowspan"] = 1;
            // line 100
            echo "            ";
            if ($this->getAttribute($this->getAttribute((isset($context["block"]) ? $context["block"] : null), "cache"), "handler")) {
                // line 101
                echo "                ";
                $context["rowspan"] = ((isset($context["rowspan"]) ? $context["rowspan"] : null) + 1);
                // line 102
                echo "            ";
            }
            // line 103
            echo "
            ";
            // line 104
            if (((twig_length_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["block"]) ? $context["block"] : null), "assets"), "js")) > 0) || (twig_length_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["block"]) ? $context["block"] : null), "assets"), "css")) > 0))) {
                // line 105
                echo "                ";
                $context["rowspan"] = ((isset($context["rowspan"]) ? $context["rowspan"] : null) + 1);
                // line 106
                echo "            ";
            }
            // line 107
            echo "            <tr>
                <th style=\"vertical-align: top\" rowspan=\"";
            // line 108
            echo twig_escape_filter($this->env, (isset($context["rowspan"]) ? $context["rowspan"] : null), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : null), "html", null, true);
            echo "</th>
                <td>";
            // line 109
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["block"]) ? $context["block"] : null), "name"), "html", null, true);
            echo "</td>
                <td>";
            // line 110
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["block"]) ? $context["block"] : null), "type"), "html", null, true);
            echo "</td>
                <td>";
            // line 111
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, (($this->getAttribute((isset($context["block"]) ? $context["block"] : null), "memory_end") - $this->getAttribute((isset($context["block"]) ? $context["block"] : null), "memory_start")) / 1000), 0), "html", null, true);
            echo " Kb</td>
                <td>";
            // line 112
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, ($this->getAttribute((isset($context["block"]) ? $context["block"] : null), "memory_peak") / 1000), 0), "html", null, true);
            echo " Kb</td>
                <td>";
            // line 113
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, $this->getAttribute((isset($context["block"]) ? $context["block"] : null), "duration"), 2), "html", null, true);
            echo " ms</td>
            </tr>

            ";
            // line 116
            if ($this->getAttribute($this->getAttribute((isset($context["block"]) ? $context["block"] : null), "cache"), "handler")) {
                // line 117
                echo "                <tr style=\"vertical-align: top\">
                    <td colspan=\"3\">
                        Cache Keys: <pre>";
                // line 119
                echo twig_escape_filter($this->env, twig_jsonencode_filter($this->getAttribute($this->getAttribute((isset($context["block"]) ? $context["block"] : null), "cache"), "keys")), "html", null, true);
                echo "</pre> <br />
                        Contextual Keys: <pre>";
                // line 120
                echo twig_escape_filter($this->env, twig_jsonencode_filter($this->getAttribute($this->getAttribute((isset($context["block"]) ? $context["block"] : null), "cache"), "contextual_keys")), "html", null, true);
                echo "</pre>
                    </td>
                    <td colspan=\"2\">
                        TTL: ";
                // line 123
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["block"]) ? $context["block"] : null), "cache"), "ttl"), "html", null, true);
                echo "s. <br />
                        Lifetime: ";
                // line 124
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["block"]) ? $context["block"] : null), "cache"), "lifetime"), "html", null, true);
                echo "s. <br />
                        Backend: ";
                // line 125
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["block"]) ? $context["block"] : null), "cache"), "handler"), "html", null, true);
                echo " <br />
                        Loading from cache: ";
                // line 126
                if ($this->getAttribute($this->getAttribute((isset($context["block"]) ? $context["block"] : null), "cache"), "from_cache")) {
                    echo "YES";
                } else {
                    echo "NO";
                }
                echo " <br />
                    </td>
                </tr>
            ";
            }
            // line 130
            echo "
            ";
            // line 131
            if (((twig_length_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["block"]) ? $context["block"] : null), "assets"), "js")) > 0) || (twig_length_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["block"]) ? $context["block"] : null), "assets"), "css")) > 0))) {
                // line 132
                echo "                <tr>
                    <td colspan=\"5\">
                        Javascripts: <pre>";
                // line 134
                echo twig_escape_filter($this->env, twig_jsonencode_filter($this->getAttribute($this->getAttribute((isset($context["block"]) ? $context["block"] : null), "assets"), "js")), "html", null, true);
                echo "</pre><br />
                        Stylesheets: <pre>";
                // line 135
                echo twig_escape_filter($this->env, twig_jsonencode_filter($this->getAttribute($this->getAttribute((isset($context["block"]) ? $context["block"] : null), "assets"), "css")), "html", null, true);
                echo "</pre>
                    </td>
                </tr>
            ";
            }
            // line 139
            echo "
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['id'], $context['block'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 141
        echo "    </table>
";
    }

    public function getTemplateName()
    {
        return "SonataBlockBundle:Profiler:block.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  327 => 126,  323 => 125,  319 => 124,  265 => 106,  262 => 105,  228 => 88,  213 => 82,  118 => 40,  110 => 39,  23 => 27,  20 => 11,  270 => 4,  180 => 56,  175 => 53,  172 => 51,  160 => 44,  113 => 44,  100 => 23,  65 => 22,  37 => 18,  58 => 22,  34 => 4,  1402 => 417,  1400 => 416,  1394 => 414,  1385 => 413,  1383 => 412,  1380 => 411,  1367 => 405,  1361 => 403,  1355 => 401,  1353 => 400,  1351 => 399,  1347 => 398,  1341 => 397,  1336 => 395,  1323 => 389,  1317 => 387,  1311 => 385,  1309 => 384,  1307 => 383,  1297 => 381,  1287 => 379,  1279 => 377,  1273 => 376,  1256 => 369,  1251 => 368,  1237 => 360,  1228 => 357,  1221 => 355,  1218 => 354,  1202 => 347,  1198 => 346,  1195 => 345,  1192 => 344,  1190 => 343,  1179 => 338,  1177 => 337,  1174 => 336,  1168 => 332,  1162 => 330,  1159 => 329,  1157 => 328,  1145 => 322,  1143 => 321,  1095 => 312,  1088 => 308,  1084 => 307,  1079 => 306,  1077 => 305,  1074 => 304,  1064 => 298,  1056 => 293,  1053 => 292,  1051 => 291,  1036 => 284,  1032 => 283,  1029 => 282,  1016 => 276,  1014 => 272,  1009 => 270,  982 => 261,  979 => 260,  976 => 259,  973 => 258,  970 => 257,  964 => 255,  961 => 254,  958 => 253,  952 => 251,  939 => 243,  936 => 242,  934 => 241,  931 => 240,  923 => 236,  920 => 235,  918 => 234,  915 => 233,  894 => 226,  889 => 224,  881 => 220,  878 => 219,  876 => 218,  873 => 217,  865 => 213,  862 => 212,  849 => 206,  846 => 205,  841 => 203,  833 => 199,  830 => 198,  828 => 197,  825 => 196,  817 => 192,  798 => 184,  796 => 183,  785 => 178,  783 => 177,  780 => 176,  772 => 172,  769 => 171,  764 => 169,  756 => 165,  753 => 164,  751 => 163,  746 => 161,  729 => 155,  715 => 151,  712 => 150,  710 => 149,  707 => 148,  699 => 142,  697 => 141,  696 => 140,  695 => 139,  694 => 138,  689 => 137,  678 => 133,  675 => 132,  662 => 125,  658 => 124,  654 => 123,  649 => 122,  643 => 120,  635 => 117,  619 => 113,  617 => 112,  614 => 111,  598 => 107,  576 => 101,  564 => 99,  557 => 96,  555 => 95,  547 => 93,  515 => 85,  512 => 84,  509 => 83,  503 => 81,  490 => 77,  478 => 74,  459 => 69,  456 => 68,  450 => 64,  442 => 62,  433 => 60,  426 => 58,  414 => 52,  408 => 50,  403 => 48,  377 => 37,  366 => 33,  350 => 26,  342 => 23,  335 => 21,  332 => 20,  311 => 14,  288 => 4,  281 => 110,  253 => 1,  248 => 100,  245 => 335,  210 => 73,  202 => 77,  186 => 239,  124 => 43,  96 => 67,  81 => 24,  76 => 18,  1883 => 659,  1881 => 658,  1879 => 657,  1876 => 656,  1871 => 653,  1860 => 651,  1855 => 650,  1852 => 649,  1849 => 648,  1840 => 643,  1837 => 642,  1833 => 640,  1827 => 638,  1824 => 637,  1821 => 636,  1818 => 635,  1812 => 633,  1806 => 631,  1803 => 630,  1800 => 627,  1780 => 625,  1777 => 624,  1774 => 623,  1771 => 622,  1768 => 621,  1765 => 620,  1763 => 619,  1760 => 618,  1757 => 617,  1754 => 616,  1751 => 615,  1749 => 614,  1746 => 613,  1742 => 612,  1740 => 611,  1737 => 610,  1730 => 603,  1724 => 601,  1718 => 599,  1716 => 598,  1714 => 597,  1711 => 596,  1704 => 589,  1700 => 587,  1693 => 585,  1690 => 581,  1686 => 580,  1681 => 579,  1678 => 578,  1671 => 576,  1668 => 571,  1663 => 570,  1660 => 569,  1657 => 568,  1654 => 567,  1639 => 565,  1636 => 564,  1632 => 563,  1629 => 562,  1611 => 561,  1609 => 560,  1607 => 559,  1604 => 558,  1596 => 552,  1594 => 551,  1592 => 550,  1590 => 549,  1587 => 548,  1578 => 544,  1573 => 542,  1571 => 541,  1568 => 540,  1560 => 535,  1554 => 533,  1552 => 532,  1532 => 531,  1529 => 530,  1521 => 524,  1518 => 523,  1512 => 521,  1509 => 520,  1506 => 519,  1503 => 518,  1498 => 516,  1495 => 515,  1492 => 514,  1490 => 513,  1487 => 512,  1478 => 507,  1475 => 506,  1472 => 505,  1469 => 504,  1467 => 503,  1464 => 502,  1455 => 498,  1453 => 497,  1450 => 496,  1443 => 490,  1438 => 489,  1436 => 488,  1433 => 487,  1425 => 480,  1419 => 478,  1417 => 477,  1414 => 421,  1410 => 474,  1408 => 419,  1398 => 415,  1392 => 469,  1390 => 468,  1387 => 467,  1384 => 466,  1381 => 465,  1379 => 464,  1376 => 463,  1374 => 462,  1368 => 460,  1362 => 458,  1359 => 457,  1357 => 456,  1354 => 455,  1345 => 451,  1339 => 396,  1335 => 448,  1330 => 447,  1324 => 444,  1321 => 443,  1318 => 442,  1316 => 441,  1313 => 440,  1306 => 437,  1303 => 382,  1295 => 432,  1291 => 380,  1286 => 430,  1283 => 378,  1277 => 425,  1271 => 375,  1268 => 374,  1262 => 420,  1260 => 419,  1252 => 418,  1249 => 367,  1246 => 366,  1240 => 412,  1234 => 410,  1231 => 358,  1225 => 407,  1223 => 356,  1217 => 405,  1214 => 404,  1211 => 349,  1204 => 400,  1201 => 399,  1193 => 393,  1187 => 342,  1184 => 390,  1178 => 388,  1175 => 387,  1169 => 385,  1166 => 384,  1160 => 382,  1158 => 381,  1154 => 327,  1152 => 379,  1136 => 378,  1133 => 377,  1130 => 376,  1127 => 375,  1124 => 374,  1121 => 373,  1118 => 320,  1115 => 319,  1112 => 318,  1109 => 317,  1106 => 316,  1103 => 315,  1100 => 314,  1098 => 313,  1096 => 364,  1093 => 363,  1081 => 359,  1078 => 358,  1075 => 357,  1072 => 356,  1070 => 355,  1067 => 299,  1058 => 347,  1055 => 346,  1048 => 290,  1045 => 342,  1042 => 341,  1040 => 285,  1033 => 339,  1027 => 281,  1024 => 280,  1021 => 335,  1019 => 334,  1017 => 333,  1015 => 332,  1012 => 271,  1004 => 266,  1001 => 326,  999 => 325,  996 => 324,  988 => 320,  985 => 319,  983 => 318,  980 => 317,  971 => 311,  967 => 256,  963 => 309,  959 => 308,  955 => 252,  950 => 250,  947 => 249,  944 => 304,  938 => 302,  932 => 299,  924 => 298,  912 => 297,  903 => 229,  900 => 228,  897 => 227,  895 => 293,  892 => 225,  883 => 287,  880 => 286,  874 => 284,  872 => 283,  868 => 282,  863 => 281,  860 => 211,  857 => 210,  850 => 276,  844 => 204,  838 => 272,  826 => 271,  819 => 270,  816 => 269,  814 => 191,  812 => 190,  809 => 189,  801 => 185,  797 => 259,  795 => 258,  794 => 257,  793 => 182,  792 => 255,  789 => 254,  786 => 253,  779 => 250,  773 => 247,  767 => 170,  749 => 162,  742 => 244,  739 => 156,  737 => 242,  735 => 241,  732 => 240,  724 => 154,  721 => 153,  719 => 233,  711 => 229,  708 => 228,  706 => 227,  693 => 226,  685 => 224,  683 => 135,  680 => 134,  676 => 220,  674 => 219,  670 => 217,  668 => 216,  666 => 126,  663 => 214,  657 => 210,  655 => 209,  650 => 208,  644 => 207,  640 => 119,  638 => 118,  633 => 202,  629 => 201,  613 => 200,  607 => 198,  604 => 197,  599 => 196,  596 => 106,  593 => 105,  590 => 193,  587 => 192,  584 => 191,  582 => 190,  579 => 189,  570 => 184,  567 => 183,  558 => 181,  553 => 180,  550 => 94,  535 => 177,  532 => 176,  529 => 92,  527 => 91,  524 => 90,  521 => 172,  518 => 171,  516 => 170,  513 => 169,  510 => 164,  507 => 163,  504 => 162,  501 => 80,  498 => 160,  496 => 79,  493 => 78,  486 => 154,  470 => 73,  467 => 72,  464 => 71,  458 => 147,  447 => 143,  443 => 142,  439 => 141,  432 => 140,  428 => 59,  421 => 137,  411 => 132,  400 => 47,  388 => 42,  364 => 112,  359 => 110,  356 => 109,  346 => 107,  343 => 132,  338 => 130,  329 => 99,  326 => 98,  316 => 16,  301 => 117,  286 => 84,  271 => 108,  266 => 366,  255 => 353,  237 => 65,  225 => 87,  195 => 51,  174 => 67,  157 => 33,  129 => 59,  83 => 10,  70 => 16,  233 => 81,  211 => 81,  207 => 269,  198 => 66,  190 => 34,  126 => 147,  120 => 42,  104 => 37,  418 => 136,  405 => 49,  395 => 125,  389 => 158,  378 => 151,  361 => 137,  358 => 139,  351 => 135,  348 => 132,  339 => 136,  333 => 132,  330 => 131,  325 => 128,  315 => 123,  308 => 13,  302 => 117,  299 => 116,  293 => 113,  290 => 5,  284 => 98,  280 => 82,  277 => 109,  260 => 104,  257 => 103,  250 => 341,  222 => 297,  206 => 71,  200 => 91,  191 => 246,  188 => 87,  185 => 59,  170 => 80,  167 => 48,  155 => 74,  150 => 49,  134 => 56,  97 => 47,  53 => 10,  445 => 126,  441 => 115,  438 => 114,  424 => 145,  422 => 110,  419 => 109,  415 => 107,  412 => 145,  406 => 130,  401 => 101,  390 => 43,  385 => 41,  382 => 92,  376 => 149,  371 => 35,  363 => 32,  353 => 82,  349 => 80,  347 => 134,  344 => 24,  336 => 135,  334 => 75,  331 => 74,  328 => 73,  324 => 71,  317 => 67,  313 => 15,  310 => 92,  307 => 91,  295 => 87,  292 => 86,  289 => 112,  279 => 54,  276 => 395,  263 => 365,  259 => 104,  256 => 52,  251 => 101,  249 => 96,  244 => 111,  239 => 97,  236 => 48,  234 => 64,  231 => 63,  226 => 62,  223 => 60,  218 => 59,  215 => 280,  212 => 74,  197 => 74,  194 => 248,  192 => 64,  184 => 233,  181 => 232,  178 => 46,  165 => 64,  161 => 202,  152 => 26,  148 => 60,  146 => 181,  139 => 169,  137 => 37,  127 => 54,  114 => 111,  90 => 40,  84 => 40,  77 => 36,  74 => 23,  52 => 43,  480 => 75,  474 => 161,  469 => 158,  461 => 70,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 61,  435 => 146,  430 => 144,  427 => 116,  423 => 57,  413 => 134,  409 => 131,  407 => 144,  402 => 141,  398 => 100,  393 => 124,  387 => 122,  384 => 121,  381 => 119,  379 => 118,  374 => 36,  368 => 34,  365 => 141,  362 => 111,  360 => 77,  355 => 27,  341 => 131,  337 => 22,  322 => 96,  314 => 99,  312 => 121,  309 => 120,  305 => 119,  298 => 91,  294 => 90,  285 => 111,  283 => 83,  278 => 410,  268 => 107,  264 => 2,  258 => 354,  252 => 72,  247 => 120,  241 => 49,  229 => 101,  220 => 290,  214 => 42,  177 => 54,  169 => 66,  140 => 22,  132 => 27,  128 => 57,  111 => 36,  107 => 52,  61 => 39,  273 => 394,  269 => 94,  254 => 102,  246 => 99,  243 => 98,  240 => 326,  238 => 312,  235 => 311,  230 => 303,  227 => 301,  224 => 71,  221 => 79,  219 => 84,  217 => 289,  208 => 72,  204 => 78,  179 => 224,  159 => 69,  143 => 59,  135 => 45,  131 => 55,  119 => 117,  108 => 39,  102 => 33,  71 => 6,  67 => 19,  63 => 40,  59 => 13,  47 => 7,  38 => 6,  94 => 35,  89 => 43,  85 => 21,  79 => 37,  75 => 30,  68 => 5,  56 => 23,  50 => 22,  29 => 15,  87 => 33,  72 => 33,  55 => 24,  21 => 11,  26 => 14,  98 => 37,  93 => 45,  88 => 31,  78 => 31,  46 => 21,  27 => 13,  40 => 19,  44 => 18,  35 => 14,  31 => 3,  43 => 20,  41 => 18,  28 => 44,  201 => 53,  196 => 65,  183 => 82,  171 => 76,  166 => 209,  163 => 45,  158 => 62,  156 => 41,  151 => 188,  142 => 59,  138 => 57,  136 => 168,  123 => 43,  121 => 131,  117 => 57,  115 => 33,  105 => 39,  101 => 49,  91 => 34,  69 => 31,  66 => 29,  62 => 27,  49 => 9,  24 => 6,  32 => 16,  25 => 12,  22 => 1,  19 => 11,  209 => 94,  203 => 54,  199 => 265,  193 => 35,  189 => 71,  187 => 60,  182 => 69,  176 => 223,  173 => 43,  168 => 41,  164 => 203,  162 => 59,  154 => 40,  149 => 182,  147 => 28,  144 => 48,  141 => 175,  133 => 55,  130 => 41,  125 => 56,  122 => 43,  116 => 45,  112 => 52,  109 => 53,  106 => 104,  103 => 50,  99 => 18,  95 => 22,  92 => 29,  86 => 41,  82 => 28,  80 => 81,  73 => 27,  64 => 28,  60 => 15,  57 => 25,  54 => 13,  51 => 22,  48 => 21,  45 => 8,  42 => 7,  39 => 17,  36 => 16,  33 => 11,  30 => 1,);
    }
}
