<?php

/* DoctrineMongoDBBundle:Collector:mongodb.html.twig */
class __TwigTemplate_c433b7a2354e01c20bafcd0995a3068f6504c357f22ea84252679da8408d895b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("WebProfilerBundle:Profiler:layout.html.twig");

        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
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
        echo "    ";
        ob_start();
        // line 5
        echo "        <img width=\"20\" height=\"28\" alt=\"Mongo\" src=\"data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABQAAAAcCAYAAABh2p9gAAAAGXRFWHRTb2Z0d2FyZQBBZG9iZSBJbWFnZVJlYWR5ccllPAAAAQRJREFUeNpi/P//PwM1ARMDlcGogZQDlpMnT7pxc3NbA9nhQKxOpL5rQLwJiPeBsI6Ozl+YBOOOHTv+AOllQNwtLS39F2owKYZ/gRq8G4i3ggxEToggWzvc3d2Pk+1lNL4fFAs6ODi8JzdS7mMRVyDVoAMHDsANdAPiOCC+jCQvQKqBQB/BDbwBxK5AHA3E/kB8nKJkA8TMQBwLxaBIKQbi70AvTADSBiSadwFXpCikpKQU8PDwkGTaly9fHFigkaKIJid4584dkiMFFI6jkTJII0WVmpHCAixZQEXWYhDeuXMnyLsVlEQKI45qFBQZ8eRECi4DBaAlDqle/8A48ip6gAADANdQY88Uc0oGAAAAAElFTkSuQmCC\"/>
        <span class=\"sf-toolbar-status\">";
        // line 6
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "collector"), "queryCount"), "html", null, true);
        echo "</span>
    ";
        $context["icon"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 8
        echo "    ";
        ob_start();
        // line 9
        echo "        <div class=\"sf-toolbar-info-piece\">
            <b>DB Queries</b>
            <span>";
        // line 11
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "collector"), "queryCount"), "html", null, true);
        echo "</span>
        </div>
    ";
        $context["text"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 14
        echo "    ";
        $this->env->loadTemplate("WebProfilerBundle:Profiler:toolbar_item.html.twig")->display(array_merge($context, array("link" => $this->getContext($context, "profiler_url"))));
    }

    // line 17
    public function block_menu($context, array $blocks = array())
    {
        // line 18
        echo "<span class=\"label\">
    <span class=\"icon\"><img src=\"data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABoAAAAcCAYAAAB/E6/TAAABLUlEQVR42u3TP0vDQBiA8UK/gDiLzi0IhU4OEunk5OQUAhGSOBUCzqWfIKSzX8DRySF0URCcMjWLIJjFD9Cpk/D6HITecEPUuzhIAz8CIdyTP/f2iqI4qaqqDx8l5Ic2uIeP/bquezCokOAFF+oCN3t4gPzSEjc4NEPaCldQbzjELTYW0RJzHDchwwem+ons6ZBpLSJ7nueJC22h0V+FzmwWV0ee59vQNV67CGVZJmEYbkNjfpY6X6I0Qo4/3RMmTdDDspuQVsJvgkP3IdMbIkIjLPBoadG2646iKJI0Ta2wxm6OdnP0/Tk6DYJgHcfxpw21RtscDTDDnaVZ26474GkkSRIrrPEv5sgMTfHe+cA2O6wPH6vOBpYQNALneHb96XTEDI6dzpEZ0VzO0Rf3pP5LMLI4tAAAAABJRU5ErkJggg==\" alt=\"Mongo\" /></span>
    <strong>Doctrine MongoDB</strong>
    <span class=\"count\">
        <span>";
        // line 22
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "collector"), "queryCount"), "html", null, true);
        echo "</span>
    </span>
</span>
";
    }

    // line 27
    public function block_panel($context, array $blocks = array())
    {
        // line 28
        echo "    <h2>Queries</h2>

    ";
        // line 30
        if (twig_test_empty($this->getAttribute($this->getContext($context, "collector"), "queries"))) {
            // line 31
            echo "        <p>
            <em>No queries.</em>
        </p>
    ";
        } else {
            // line 35
            echo "        <ul class=\"alt\">
            ";
            // line 36
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getContext($context, "collector"), "queries"));
            $context['loop'] = array(
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            );
            if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
                $length = count($context['_seq']);
                $context['loop']['revindex0'] = $length - 1;
                $context['loop']['revindex'] = $length;
                $context['loop']['length'] = $length;
                $context['loop']['last'] = 1 === $length;
            }
            foreach ($context['_seq'] as $context["_key"] => $context["query"]) {
                // line 37
                echo "                <li class=\"";
                echo twig_escape_filter($this->env, twig_cycle(array(0 => "odd", 1 => "even"), $this->getAttribute($this->getContext($context, "loop"), "index")), "html", null, true);
                echo "\">
                    <div>
                        <code>";
                // line 39
                echo twig_escape_filter($this->env, $this->getContext($context, "query"), "html", null, true);
                echo "</code>
                    </div>
                </li>
            ";
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['length'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['query'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 43
            echo "        </ul>
    ";
        }
    }

    public function getTemplateName()
    {
        return "DoctrineMongoDBBundle:Collector:mongodb.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  97 => 36,  65 => 18,  608 => 225,  602 => 224,  597 => 221,  589 => 218,  585 => 216,  581 => 214,  572 => 212,  568 => 211,  558 => 207,  555 => 206,  541 => 197,  537 => 195,  535 => 194,  526 => 192,  521 => 189,  515 => 185,  512 => 184,  509 => 183,  507 => 182,  504 => 181,  502 => 180,  499 => 179,  496 => 178,  494 => 177,  491 => 176,  489 => 175,  486 => 174,  483 => 173,  481 => 172,  478 => 171,  476 => 170,  473 => 169,  470 => 168,  468 => 167,  463 => 164,  457 => 160,  454 => 159,  451 => 158,  444 => 154,  438 => 150,  435 => 149,  432 => 148,  430 => 147,  425 => 144,  411 => 143,  406 => 140,  390 => 137,  382 => 135,  377 => 133,  366 => 127,  362 => 126,  339 => 121,  295 => 107,  285 => 105,  250 => 100,  239 => 95,  218 => 82,  205 => 76,  169 => 66,  160 => 59,  148 => 53,  142 => 49,  114 => 37,  107 => 33,  273 => 96,  254 => 92,  240 => 86,  238 => 85,  230 => 82,  221 => 77,  219 => 76,  217 => 75,  204 => 72,  179 => 69,  171 => 64,  159 => 61,  138 => 43,  135 => 53,  78 => 22,  71 => 22,  209 => 82,  193 => 73,  149 => 51,  133 => 42,  103 => 31,  95 => 28,  86 => 30,  57 => 14,  48 => 8,  1077 => 657,  1073 => 656,  1069 => 654,  1064 => 651,  1055 => 648,  1051 => 647,  1048 => 646,  1044 => 645,  1035 => 639,  1026 => 633,  1023 => 632,  1021 => 631,  1018 => 630,  1013 => 627,  1004 => 624,  1000 => 623,  997 => 622,  993 => 621,  984 => 615,  975 => 609,  972 => 608,  970 => 607,  967 => 606,  963 => 604,  959 => 602,  955 => 600,  947 => 597,  941 => 595,  937 => 593,  935 => 592,  930 => 590,  926 => 589,  923 => 588,  919 => 587,  911 => 581,  909 => 580,  905 => 579,  896 => 573,  893 => 572,  891 => 571,  888 => 570,  884 => 568,  880 => 566,  874 => 562,  870 => 560,  864 => 558,  862 => 557,  854 => 552,  848 => 548,  844 => 546,  838 => 544,  836 => 543,  830 => 539,  828 => 538,  824 => 537,  815 => 531,  812 => 530,  800 => 523,  790 => 519,  780 => 513,  774 => 509,  770 => 507,  764 => 505,  762 => 504,  754 => 499,  745 => 493,  742 => 492,  740 => 491,  737 => 490,  732 => 487,  724 => 484,  718 => 482,  705 => 480,  696 => 476,  692 => 474,  678 => 468,  676 => 467,  671 => 465,  668 => 464,  664 => 463,  655 => 457,  646 => 451,  642 => 449,  640 => 448,  636 => 446,  628 => 444,  626 => 443,  616 => 440,  603 => 439,  591 => 436,  587 => 434,  578 => 432,  574 => 431,  565 => 210,  563 => 209,  559 => 427,  553 => 425,  551 => 205,  546 => 423,  542 => 421,  536 => 419,  534 => 418,  530 => 193,  514 => 415,  280 => 103,  271 => 190,  251 => 182,  249 => 181,  93 => 27,  77 => 20,  51 => 11,  34 => 5,  31 => 4,  810 => 529,  807 => 528,  796 => 521,  792 => 488,  788 => 518,  775 => 485,  749 => 479,  746 => 478,  727 => 476,  710 => 475,  706 => 473,  702 => 479,  698 => 477,  694 => 470,  690 => 469,  686 => 472,  682 => 470,  679 => 466,  677 => 465,  660 => 464,  649 => 462,  634 => 456,  629 => 454,  625 => 453,  622 => 442,  620 => 451,  606 => 449,  601 => 446,  567 => 414,  549 => 411,  532 => 410,  529 => 409,  527 => 416,  522 => 406,  517 => 404,  199 => 71,  196 => 92,  188 => 75,  182 => 70,  173 => 68,  68 => 30,  62 => 17,  28 => 3,  357 => 123,  344 => 119,  341 => 118,  332 => 116,  327 => 114,  324 => 113,  318 => 114,  306 => 110,  297 => 200,  291 => 106,  263 => 95,  258 => 187,  243 => 88,  231 => 83,  224 => 79,  212 => 78,  202 => 94,  190 => 76,  187 => 70,  174 => 65,  143 => 55,  136 => 71,  122 => 37,  117 => 39,  112 => 35,  104 => 32,  85 => 23,  75 => 19,  58 => 25,  44 => 8,  161 => 63,  158 => 80,  154 => 58,  151 => 59,  140 => 58,  125 => 38,  121 => 50,  118 => 49,  100 => 39,  87 => 24,  49 => 14,  46 => 7,  27 => 3,  91 => 27,  88 => 31,  63 => 13,  389 => 160,  386 => 159,  378 => 157,  371 => 156,  367 => 155,  363 => 126,  358 => 151,  353 => 125,  345 => 147,  343 => 146,  340 => 145,  334 => 141,  331 => 140,  328 => 139,  326 => 138,  321 => 112,  309 => 108,  307 => 128,  302 => 125,  296 => 121,  293 => 198,  290 => 119,  288 => 101,  283 => 100,  281 => 114,  276 => 102,  274 => 97,  269 => 94,  265 => 96,  259 => 103,  255 => 93,  253 => 100,  235 => 94,  232 => 88,  227 => 81,  222 => 83,  210 => 77,  208 => 73,  189 => 71,  184 => 73,  175 => 65,  170 => 84,  166 => 61,  163 => 60,  155 => 47,  152 => 54,  144 => 49,  127 => 35,  109 => 34,  94 => 35,  82 => 28,  76 => 18,  61 => 15,  39 => 6,  36 => 5,  79 => 27,  72 => 17,  69 => 16,  54 => 10,  47 => 9,  42 => 7,  40 => 11,  37 => 10,  22 => 1,  164 => 60,  157 => 56,  145 => 74,  139 => 48,  131 => 44,  120 => 39,  115 => 39,  111 => 47,  108 => 36,  106 => 33,  101 => 30,  98 => 45,  92 => 27,  83 => 33,  80 => 20,  74 => 14,  66 => 14,  60 => 13,  55 => 24,  52 => 12,  50 => 10,  41 => 8,  32 => 4,  29 => 3,  462 => 202,  453 => 199,  449 => 157,  446 => 197,  441 => 196,  439 => 195,  431 => 189,  429 => 188,  422 => 184,  415 => 180,  408 => 176,  401 => 172,  394 => 168,  387 => 164,  380 => 134,  373 => 131,  361 => 152,  355 => 150,  351 => 124,  348 => 140,  342 => 137,  338 => 135,  335 => 120,  329 => 117,  325 => 129,  323 => 116,  320 => 127,  315 => 110,  312 => 113,  303 => 106,  300 => 109,  298 => 120,  289 => 196,  286 => 112,  278 => 98,  275 => 105,  270 => 102,  267 => 101,  262 => 188,  256 => 96,  248 => 97,  246 => 99,  241 => 93,  233 => 87,  229 => 91,  226 => 84,  220 => 81,  216 => 79,  213 => 78,  207 => 75,  203 => 78,  200 => 72,  197 => 69,  194 => 68,  191 => 67,  185 => 74,  181 => 72,  178 => 66,  176 => 64,  172 => 64,  168 => 62,  165 => 83,  162 => 59,  156 => 62,  153 => 77,  150 => 55,  147 => 50,  141 => 48,  134 => 45,  130 => 41,  123 => 41,  119 => 42,  116 => 41,  113 => 48,  105 => 25,  102 => 32,  99 => 31,  96 => 37,  90 => 26,  84 => 40,  81 => 23,  73 => 17,  70 => 16,  67 => 17,  64 => 15,  59 => 14,  53 => 12,  45 => 8,  43 => 12,  38 => 6,  35 => 5,  33 => 4,  30 => 3,);
    }
}
