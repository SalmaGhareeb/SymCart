<?php

/* SonataAdminBundle:CRUD:base_edit_form.html.twig */
class __TwigTemplate_620b05a9648eef367900f29e26f50d4d041a6b618090fff5237219f47aaf1059 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'form' => array($this, 'block_form'),
            'sonata_pre_fieldsets' => array($this, 'block_sonata_pre_fieldsets'),
            'sonata_tab_content' => array($this, 'block_sonata_tab_content'),
            'sonata_post_fieldsets' => array($this, 'block_sonata_post_fieldsets'),
            'formactions' => array($this, 'block_formactions'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        $this->displayBlock('form', $context, $blocks);
    }

    public function block_form($context, array $blocks = array())
    {
        // line 2
        echo "    ";
        echo call_user_func_array($this->env->getFunction('sonata_block_render_event')->getCallable(), array("sonata.admin.edit.form.top", array("admin" => (isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "object" => (isset($context["object"]) ? $context["object"] : $this->getContext($context, "object")))));
        echo "

    ";
        // line 4
        $context["url"] = (((!(null === $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "id", array(0 => (isset($context["object"]) ? $context["object"] : $this->getContext($context, "object"))), "method")))) ? ("edit") : ("create"));
        // line 5
        echo "
    ";
        // line 6
        if ((!$this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "hasRoute", array(0 => (isset($context["url"]) ? $context["url"] : $this->getContext($context, "url"))), "method"))) {
            // line 7
            echo "        <div>
            ";
            // line 8
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("form_not_available", array(), "SonataAdminBundle"), "html", null, true);
            echo "
        </div>
    ";
        } else {
            // line 11
            echo "        <form
              ";
            // line 12
            if (($this->getAttribute((isset($context["admin_pool"]) ? $context["admin_pool"] : $this->getContext($context, "admin_pool")), "getOption", array(0 => "form_type"), "method") == "horizontal")) {
                echo "class=\"form-horizontal\"";
            }
            // line 13
            echo "              role=\"form\"
              action=\"";
            // line 14
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "generateUrl", array(0 => (isset($context["url"]) ? $context["url"] : $this->getContext($context, "url")), 1 => array("id" => $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "id", array(0 => (isset($context["object"]) ? $context["object"] : $this->getContext($context, "object"))), "method"), "uniqid" => $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "uniqid"), "subclass" => $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request"), "get", array(0 => "subclass"), "method"))), "method"), "html", null, true);
            echo "\" ";
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'enctype');
            echo "
              method=\"POST\"
              ";
            // line 16
            if ((!$this->getAttribute((isset($context["admin_pool"]) ? $context["admin_pool"] : $this->getContext($context, "admin_pool")), "getOption", array(0 => "html5_validate"), "method"))) {
                echo "novalidate=\"novalidate\"";
            }
            // line 17
            echo "              >
            ";
            // line 18
            if ((twig_length_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "vars"), "errors")) > 0)) {
                // line 19
                echo "                <div class=\"sonata-ba-form-error\">
                    ";
                // line 20
                echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
                echo "
                </div>
            ";
            }
            // line 23
            echo "
            ";
            // line 24
            $this->displayBlock('sonata_pre_fieldsets', $context, $blocks);
            // line 27
            echo "
            ";
            // line 28
            $this->displayBlock('sonata_tab_content', $context, $blocks);
            // line 56
            echo "
            ";
            // line 57
            $this->displayBlock('sonata_post_fieldsets', $context, $blocks);
            // line 60
            echo "
            ";
            // line 61
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'rest');
            echo "

            ";
            // line 63
            $this->displayBlock('formactions', $context, $blocks);
            // line 105
            echo "        </form>
    ";
        }
        // line 107
        echo "
    ";
        // line 108
        echo call_user_func_array($this->env->getFunction('sonata_block_render_event')->getCallable(), array("sonata.admin.edit.form.bottom", array("admin" => (isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "object" => (isset($context["object"]) ? $context["object"] : $this->getContext($context, "object")))));
        echo "

";
    }

    // line 24
    public function block_sonata_pre_fieldsets($context, array $blocks = array())
    {
        // line 25
        echo "                <div class=\"row\">
            ";
    }

    // line 28
    public function block_sonata_tab_content($context, array $blocks = array())
    {
        // line 29
        echo "                ";
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "formgroups"));
        foreach ($context['_seq'] as $context["name"] => $context["form_group"]) {
            // line 30
            echo "                    <div class=\"";
            echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["form_group"]) ? $context["form_group"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["form_group"]) ? $context["form_group"] : null), "class"), "col-md-12")) : ("col-md-12")), "html", null, true);
            echo "\">
                        <div class=\"box box-success\">
                            <div class=\"box-header\">
                                <h4 class=\"box-title\">
                                    ";
            // line 34
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "trans", array(0 => (isset($context["name"]) ? $context["name"] : $this->getContext($context, "name")), 1 => array(), 2 => $this->getAttribute((isset($context["form_group"]) ? $context["form_group"] : $this->getContext($context, "form_group")), "translation_domain")), "method"), "html", null, true);
            echo "
                                </h4>
                            </div>
                            ";
            // line 38
            echo "                                <div class=\"box-body\">
                                    <div class=\"sonata-ba-collapsed-fields\">
                                        ";
            // line 40
            if (($this->getAttribute((isset($context["form_group"]) ? $context["form_group"] : $this->getContext($context, "form_group")), "description") != false)) {
                // line 41
                echo "                                            <p>";
                echo $this->getAttribute((isset($context["form_group"]) ? $context["form_group"] : $this->getContext($context, "form_group")), "description");
                echo "</p>
                                        ";
            }
            // line 43
            echo "
                                        ";
            // line 44
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["form_group"]) ? $context["form_group"] : $this->getContext($context, "form_group")), "fields"));
            foreach ($context['_seq'] as $context["_key"] => $context["field_name"]) {
                // line 45
                echo "                                            ";
                if ($this->getAttribute($this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "formfielddescriptions", array(), "any", false, true), (isset($context["field_name"]) ? $context["field_name"] : $this->getContext($context, "field_name")), array(), "array", true, true)) {
                    // line 46
                    echo "                                                ";
                    echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), (isset($context["field_name"]) ? $context["field_name"] : $this->getContext($context, "field_name")), array(), "array"), 'row');
                    echo "
                                            ";
                }
                // line 48
                echo "                                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['field_name'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 49
            echo "                                    </div>
                                </div>
                            ";
            // line 52
            echo "                        </div>
                    </div>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['name'], $context['form_group'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 55
        echo "            ";
    }

    // line 57
    public function block_sonata_post_fieldsets($context, array $blocks = array())
    {
        // line 58
        echo "                </div>
            ";
    }

    // line 63
    public function block_formactions($context, array $blocks = array())
    {
        // line 64
        echo "                <div class=\"well well-small form-actions\">
                    ";
        // line 65
        if ($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request"), "isxmlhttprequest")) {
            // line 66
            echo "                        ";
            if ((!(null === $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "id", array(0 => (isset($context["object"]) ? $context["object"] : $this->getContext($context, "object"))), "method")))) {
                // line 67
                echo "                            <button type=\"submit\" class=\"btn btn-success\" name=\"btn_update\"><i class=\"fa fa-save\"></i> ";
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("btn_update", array(), "SonataAdminBundle"), "html", null, true);
                echo "</button>
                        ";
            } else {
                // line 69
                echo "                            <button type=\"submit\" class=\"btn btn-success\" name=\"btn_create\"><i class=\"fa fa-plus-circle\"></i> ";
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("btn_create", array(), "SonataAdminBundle"), "html", null, true);
                echo "</button>
                        ";
            }
            // line 71
            echo "                    ";
        } else {
            // line 72
            echo "                        ";
            if ($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "supportsPreviewMode")) {
                // line 73
                echo "                            <button class=\"btn btn-info persist-preview\" name=\"btn_preview\" type=\"submit\">
                                <i class=\"fa fa-eye\"></i>
                                ";
                // line 75
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("btn_preview", array(), "SonataAdminBundle"), "html", null, true);
                echo "
                            </button>
                        ";
            }
            // line 78
            echo "                        ";
            if ((!(null === $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "id", array(0 => (isset($context["object"]) ? $context["object"] : $this->getContext($context, "object"))), "method")))) {
                // line 79
                echo "                            <button type=\"submit\" class=\"btn btn-success\" name=\"btn_update_and_edit\"><i class=\"fa fa-save\"></i> ";
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("btn_update_and_edit_again", array(), "SonataAdminBundle"), "html", null, true);
                echo "</button>

                            ";
                // line 81
                if ($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "hasroute", array(0 => "list"), "method")) {
                    // line 82
                    echo "                                <button type=\"submit\" class=\"btn btn-success\" name=\"btn_update_and_list\"><i class=\"fa fa-save\"></i> <i class=\"fa fa-list\"></i> ";
                    echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("btn_update_and_return_to_list", array(), "SonataAdminBundle"), "html", null, true);
                    echo "</button>
                            ";
                }
                // line 84
                echo "
                            ";
                // line 85
                if (($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "hasroute", array(0 => "delete"), "method") && $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "isGranted", array(0 => "DELETE", 1 => (isset($context["object"]) ? $context["object"] : $this->getContext($context, "object"))), "method"))) {
                    // line 86
                    echo "                                ";
                    echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("delete_or", array(), "SonataAdminBundle"), "html", null, true);
                    echo "
                                <a class=\"btn btn-danger\" href=\"";
                    // line 87
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "generateObjectUrl", array(0 => "delete", 1 => (isset($context["object"]) ? $context["object"] : $this->getContext($context, "object"))), "method"), "html", null, true);
                    echo "\"><i class=\"fa fa-minus-circle\"></i> ";
                    echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("link_delete", array(), "SonataAdminBundle"), "html", null, true);
                    echo "</a>
                            ";
                }
                // line 89
                echo "
                            ";
                // line 90
                if ((($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "isAclEnabled", array(), "method") && $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "hasroute", array(0 => "acl"), "method")) && $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "isGranted", array(0 => "MASTER", 1 => (isset($context["object"]) ? $context["object"] : $this->getContext($context, "object"))), "method"))) {
                    // line 91
                    echo "                                <a class=\"btn btn-info\" href=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "generateObjectUrl", array(0 => "acl", 1 => (isset($context["object"]) ? $context["object"] : $this->getContext($context, "object"))), "method"), "html", null, true);
                    echo "\"><i class=\"fa fa-users\"></i> ";
                    echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("link_edit_acl", array(), "SonataAdminBundle"), "html", null, true);
                    echo "</a>
                            ";
                }
                // line 93
                echo "                        ";
            } else {
                // line 94
                echo "                            ";
                if ($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "hasroute", array(0 => "edit"), "method")) {
                    // line 95
                    echo "                                <button class=\"btn btn-success\" type=\"submit\" name=\"btn_create_and_edit\"><i class=\"fa fa-save\"></i> ";
                    echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("btn_create_and_edit_again", array(), "SonataAdminBundle"), "html", null, true);
                    echo "</button>
                            ";
                }
                // line 97
                echo "                            ";
                if ($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "hasroute", array(0 => "list"), "method")) {
                    // line 98
                    echo "                                <button type=\"submit\" class=\"btn btn-success\" name=\"btn_create_and_list\"><i class=\"fa fa-save\"></i> <i class=\"fa fa-list\"></i> ";
                    echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("btn_create_and_return_to_list", array(), "SonataAdminBundle"), "html", null, true);
                    echo "</button>
                            ";
                }
                // line 100
                echo "                            <button class=\"btn btn-success\" type=\"submit\" name=\"btn_create_and_create\"><i class=\"fa fa-plus-circle\"></i> ";
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("btn_create_and_create_a_new_one", array(), "SonataAdminBundle"), "html", null, true);
                echo "</button>
                        ";
            }
            // line 102
            echo "                    ";
        }
        // line 103
        echo "                </div>
            ";
    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:base_edit_form.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  321 => 100,  306 => 95,  303 => 94,  300 => 93,  287 => 89,  275 => 86,  12 => 36,  118 => 46,  327 => 102,  323 => 125,  319 => 124,  265 => 106,  262 => 81,  228 => 88,  213 => 82,  110 => 63,  23 => 27,  20 => 1,  270 => 84,  180 => 56,  175 => 45,  172 => 51,  160 => 40,  113 => 39,  100 => 57,  65 => 25,  58 => 24,  34 => 15,  1402 => 417,  1400 => 416,  1394 => 414,  1385 => 413,  1383 => 412,  1380 => 411,  1367 => 405,  1361 => 403,  1355 => 401,  1353 => 400,  1351 => 399,  1347 => 398,  1341 => 397,  1336 => 395,  1323 => 389,  1317 => 387,  1311 => 385,  1309 => 384,  1307 => 383,  1297 => 381,  1287 => 379,  1279 => 377,  1273 => 376,  1256 => 369,  1251 => 368,  1237 => 360,  1228 => 357,  1221 => 355,  1218 => 354,  1202 => 347,  1198 => 346,  1195 => 345,  1192 => 344,  1190 => 343,  1179 => 338,  1177 => 337,  1174 => 336,  1168 => 332,  1162 => 330,  1159 => 329,  1157 => 328,  1145 => 322,  1143 => 321,  1095 => 312,  1088 => 308,  1084 => 307,  1079 => 306,  1077 => 305,  1074 => 304,  1064 => 298,  1056 => 293,  1053 => 292,  1051 => 291,  1036 => 284,  1032 => 283,  1029 => 282,  1016 => 276,  1014 => 272,  1009 => 270,  982 => 261,  979 => 260,  976 => 259,  973 => 258,  970 => 257,  964 => 255,  961 => 254,  958 => 253,  952 => 251,  939 => 243,  936 => 242,  934 => 241,  931 => 240,  923 => 236,  920 => 235,  918 => 234,  915 => 233,  894 => 226,  889 => 224,  881 => 220,  878 => 219,  876 => 218,  873 => 217,  865 => 213,  862 => 212,  849 => 206,  846 => 205,  841 => 203,  833 => 199,  830 => 198,  828 => 197,  825 => 196,  817 => 192,  798 => 184,  796 => 183,  785 => 178,  783 => 177,  780 => 176,  772 => 172,  769 => 171,  764 => 169,  756 => 165,  753 => 164,  751 => 163,  746 => 161,  729 => 155,  715 => 151,  712 => 150,  710 => 149,  707 => 148,  699 => 142,  697 => 141,  696 => 140,  695 => 139,  694 => 138,  689 => 137,  678 => 133,  675 => 132,  662 => 125,  658 => 124,  654 => 123,  649 => 122,  643 => 120,  635 => 117,  619 => 113,  617 => 112,  614 => 111,  598 => 107,  576 => 101,  564 => 99,  557 => 96,  555 => 95,  547 => 93,  515 => 85,  512 => 84,  509 => 83,  503 => 81,  490 => 77,  478 => 74,  459 => 69,  456 => 68,  450 => 64,  442 => 62,  433 => 60,  426 => 58,  414 => 52,  408 => 50,  403 => 48,  377 => 37,  366 => 33,  350 => 26,  342 => 23,  335 => 21,  332 => 20,  311 => 14,  288 => 4,  281 => 110,  253 => 78,  248 => 100,  245 => 335,  210 => 73,  202 => 55,  186 => 47,  124 => 47,  81 => 20,  76 => 18,  1883 => 659,  1881 => 658,  1879 => 657,  1876 => 656,  1871 => 653,  1860 => 651,  1855 => 650,  1852 => 649,  1849 => 648,  1840 => 643,  1837 => 642,  1833 => 640,  1827 => 638,  1824 => 637,  1821 => 636,  1818 => 635,  1812 => 633,  1806 => 631,  1803 => 630,  1800 => 627,  1780 => 625,  1777 => 624,  1774 => 623,  1771 => 622,  1768 => 621,  1765 => 620,  1763 => 619,  1760 => 618,  1757 => 617,  1754 => 616,  1751 => 615,  1749 => 614,  1746 => 613,  1742 => 612,  1740 => 611,  1737 => 610,  1730 => 603,  1724 => 601,  1718 => 599,  1716 => 598,  1714 => 597,  1711 => 596,  1704 => 589,  1700 => 587,  1693 => 585,  1690 => 581,  1686 => 580,  1681 => 579,  1678 => 578,  1671 => 576,  1668 => 571,  1663 => 570,  1660 => 569,  1657 => 568,  1654 => 567,  1639 => 565,  1636 => 564,  1632 => 563,  1629 => 562,  1611 => 561,  1609 => 560,  1607 => 559,  1604 => 558,  1596 => 552,  1594 => 551,  1592 => 550,  1590 => 549,  1587 => 548,  1578 => 544,  1573 => 542,  1571 => 541,  1568 => 540,  1560 => 535,  1554 => 533,  1552 => 532,  1532 => 531,  1529 => 530,  1521 => 524,  1518 => 523,  1512 => 521,  1509 => 520,  1506 => 519,  1503 => 518,  1498 => 516,  1495 => 515,  1492 => 514,  1490 => 513,  1487 => 512,  1478 => 507,  1475 => 506,  1472 => 505,  1469 => 504,  1467 => 503,  1464 => 502,  1455 => 498,  1453 => 497,  1450 => 496,  1443 => 490,  1438 => 489,  1436 => 488,  1433 => 487,  1425 => 480,  1419 => 478,  1417 => 477,  1414 => 421,  1410 => 474,  1408 => 419,  1398 => 415,  1392 => 469,  1390 => 468,  1387 => 467,  1384 => 466,  1381 => 465,  1379 => 464,  1376 => 463,  1374 => 462,  1368 => 460,  1362 => 458,  1359 => 457,  1357 => 456,  1354 => 455,  1345 => 451,  1339 => 396,  1335 => 448,  1330 => 447,  1324 => 444,  1321 => 443,  1318 => 442,  1316 => 441,  1313 => 440,  1306 => 437,  1303 => 382,  1295 => 432,  1291 => 380,  1286 => 430,  1283 => 378,  1277 => 425,  1271 => 375,  1268 => 374,  1262 => 420,  1260 => 419,  1252 => 418,  1249 => 367,  1246 => 366,  1240 => 412,  1234 => 410,  1231 => 358,  1225 => 407,  1223 => 356,  1217 => 405,  1214 => 404,  1211 => 349,  1204 => 400,  1201 => 399,  1193 => 393,  1187 => 342,  1184 => 390,  1178 => 388,  1175 => 387,  1169 => 385,  1166 => 384,  1160 => 382,  1158 => 381,  1154 => 327,  1152 => 379,  1136 => 378,  1133 => 377,  1130 => 376,  1127 => 375,  1124 => 374,  1121 => 373,  1118 => 320,  1115 => 319,  1112 => 318,  1109 => 317,  1106 => 316,  1103 => 315,  1100 => 314,  1098 => 313,  1096 => 364,  1093 => 363,  1081 => 359,  1078 => 358,  1075 => 357,  1072 => 356,  1070 => 355,  1067 => 299,  1058 => 347,  1055 => 346,  1048 => 290,  1045 => 342,  1042 => 341,  1040 => 285,  1033 => 339,  1027 => 281,  1024 => 280,  1021 => 335,  1019 => 334,  1017 => 333,  1015 => 332,  1012 => 271,  1004 => 266,  1001 => 326,  999 => 325,  996 => 324,  988 => 320,  985 => 319,  983 => 318,  980 => 317,  971 => 311,  967 => 256,  963 => 309,  959 => 308,  955 => 252,  950 => 250,  947 => 249,  944 => 304,  938 => 302,  932 => 299,  924 => 298,  912 => 297,  903 => 229,  900 => 228,  897 => 227,  895 => 293,  892 => 225,  883 => 287,  880 => 286,  874 => 284,  872 => 283,  868 => 282,  863 => 281,  860 => 211,  857 => 210,  850 => 276,  844 => 204,  838 => 272,  826 => 271,  819 => 270,  816 => 269,  814 => 191,  812 => 190,  809 => 189,  801 => 185,  797 => 259,  795 => 258,  794 => 257,  793 => 182,  792 => 255,  789 => 254,  786 => 253,  779 => 250,  773 => 247,  767 => 170,  749 => 162,  742 => 244,  739 => 156,  737 => 242,  735 => 241,  732 => 240,  724 => 154,  721 => 153,  719 => 233,  711 => 229,  708 => 228,  706 => 227,  693 => 226,  685 => 224,  683 => 135,  680 => 134,  676 => 220,  674 => 219,  670 => 217,  668 => 216,  666 => 126,  663 => 214,  657 => 210,  655 => 209,  650 => 208,  644 => 207,  640 => 119,  638 => 118,  633 => 202,  629 => 201,  613 => 200,  607 => 198,  604 => 197,  599 => 196,  596 => 106,  593 => 105,  590 => 193,  587 => 192,  584 => 191,  582 => 190,  579 => 189,  570 => 184,  567 => 183,  558 => 181,  553 => 180,  550 => 94,  535 => 177,  532 => 176,  529 => 92,  527 => 91,  524 => 90,  521 => 172,  518 => 171,  516 => 170,  513 => 169,  510 => 164,  507 => 163,  504 => 162,  501 => 80,  498 => 160,  496 => 79,  493 => 78,  486 => 154,  470 => 73,  467 => 72,  464 => 71,  458 => 147,  447 => 143,  443 => 142,  439 => 141,  432 => 140,  428 => 59,  421 => 137,  411 => 132,  400 => 47,  388 => 42,  364 => 112,  359 => 110,  356 => 109,  346 => 107,  343 => 132,  338 => 130,  329 => 99,  326 => 98,  316 => 16,  301 => 117,  286 => 84,  271 => 108,  266 => 366,  255 => 353,  237 => 71,  225 => 67,  195 => 51,  174 => 42,  129 => 25,  70 => 27,  233 => 81,  211 => 81,  207 => 269,  198 => 66,  190 => 49,  126 => 24,  104 => 34,  418 => 136,  405 => 49,  395 => 125,  389 => 158,  378 => 151,  361 => 137,  358 => 139,  351 => 135,  348 => 132,  339 => 136,  333 => 132,  330 => 103,  325 => 128,  315 => 98,  308 => 13,  302 => 117,  299 => 116,  293 => 113,  290 => 90,  284 => 98,  280 => 87,  277 => 109,  260 => 104,  257 => 103,  250 => 341,  222 => 66,  206 => 57,  200 => 54,  191 => 246,  188 => 48,  185 => 61,  170 => 80,  167 => 56,  155 => 74,  150 => 34,  134 => 28,  97 => 56,  53 => 22,  445 => 126,  441 => 115,  438 => 114,  424 => 145,  422 => 110,  419 => 109,  415 => 107,  412 => 145,  406 => 130,  401 => 101,  390 => 43,  385 => 41,  382 => 92,  376 => 149,  371 => 35,  363 => 32,  353 => 82,  349 => 80,  347 => 134,  344 => 24,  336 => 135,  334 => 75,  331 => 74,  328 => 73,  324 => 71,  317 => 67,  313 => 15,  310 => 92,  307 => 91,  295 => 87,  292 => 91,  289 => 112,  279 => 54,  276 => 395,  263 => 365,  259 => 104,  256 => 79,  251 => 101,  249 => 96,  244 => 111,  239 => 97,  236 => 48,  234 => 64,  231 => 69,  226 => 62,  223 => 60,  218 => 59,  215 => 280,  212 => 74,  197 => 74,  194 => 52,  192 => 88,  184 => 48,  181 => 73,  178 => 46,  165 => 64,  161 => 202,  152 => 61,  148 => 49,  146 => 34,  137 => 29,  127 => 54,  114 => 39,  90 => 24,  84 => 40,  77 => 29,  480 => 75,  474 => 161,  469 => 158,  461 => 70,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 61,  435 => 146,  430 => 144,  427 => 116,  423 => 57,  413 => 134,  409 => 131,  407 => 144,  402 => 141,  398 => 100,  393 => 124,  387 => 122,  384 => 121,  381 => 119,  379 => 118,  374 => 36,  368 => 34,  365 => 141,  362 => 111,  360 => 77,  355 => 27,  341 => 131,  337 => 22,  322 => 96,  314 => 99,  312 => 97,  309 => 120,  305 => 119,  298 => 91,  294 => 90,  285 => 111,  283 => 83,  278 => 410,  268 => 107,  264 => 82,  258 => 354,  252 => 72,  247 => 75,  241 => 49,  229 => 101,  220 => 65,  214 => 63,  177 => 43,  169 => 66,  140 => 51,  132 => 28,  128 => 47,  107 => 37,  61 => 28,  273 => 85,  269 => 94,  254 => 102,  243 => 73,  240 => 72,  238 => 312,  235 => 311,  230 => 303,  227 => 301,  224 => 71,  221 => 79,  219 => 84,  217 => 64,  208 => 72,  204 => 78,  179 => 44,  159 => 196,  143 => 33,  135 => 44,  119 => 108,  102 => 60,  71 => 23,  67 => 26,  63 => 25,  59 => 13,  38 => 5,  94 => 30,  89 => 33,  85 => 31,  75 => 29,  68 => 22,  56 => 25,  87 => 23,  21 => 11,  26 => 2,  93 => 17,  88 => 37,  78 => 19,  46 => 8,  27 => 14,  44 => 18,  31 => 15,  28 => 14,  201 => 53,  196 => 52,  183 => 46,  171 => 44,  166 => 209,  163 => 58,  158 => 62,  156 => 38,  151 => 188,  142 => 30,  138 => 49,  136 => 58,  121 => 24,  117 => 57,  105 => 61,  91 => 37,  62 => 14,  49 => 9,  24 => 1,  25 => 12,  19 => 11,  79 => 35,  72 => 28,  69 => 16,  47 => 22,  40 => 17,  37 => 17,  22 => 12,  246 => 99,  157 => 56,  145 => 54,  139 => 59,  131 => 55,  123 => 48,  120 => 46,  115 => 45,  111 => 43,  108 => 42,  101 => 40,  98 => 31,  96 => 18,  83 => 32,  74 => 30,  66 => 30,  55 => 12,  52 => 11,  50 => 21,  43 => 7,  41 => 6,  35 => 17,  32 => 4,  29 => 3,  209 => 58,  203 => 55,  199 => 82,  193 => 51,  189 => 63,  187 => 60,  182 => 69,  176 => 58,  173 => 67,  168 => 43,  164 => 55,  162 => 41,  154 => 36,  149 => 62,  147 => 52,  144 => 48,  141 => 58,  133 => 49,  130 => 57,  125 => 46,  122 => 45,  116 => 107,  112 => 105,  109 => 43,  106 => 104,  103 => 41,  99 => 41,  95 => 28,  92 => 27,  86 => 28,  82 => 36,  80 => 13,  73 => 17,  64 => 24,  60 => 18,  57 => 27,  54 => 16,  51 => 15,  48 => 14,  45 => 20,  42 => 19,  39 => 16,  36 => 4,  33 => 16,  30 => 2,);
    }
}
