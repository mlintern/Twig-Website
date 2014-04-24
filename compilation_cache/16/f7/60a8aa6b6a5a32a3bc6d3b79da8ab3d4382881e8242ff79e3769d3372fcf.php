<?php

/* default.html */
class __TwigTemplate_16f760a8aa6b6a5a32a3bc6d3b79da8ab3d4382881e8242ff79e3769d3372fcf extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("layout.html");

        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "layout.html";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        // line 3
        echo "
<div style=\"height: 70px;\"></div>

<div class=\"fog50\"> 
  <div class=\"panel-group\" id=\"accordion\">
    <div id=\"local-one\" class=\"panel\">
      <div class=\"panel-heading container\">
        <div class=\"row\">
          <div class=\"panel-title\">
            <h1 class=\"text-center\"><a data-toggle=\"collapse\" data-parent=\"#accordion\" data-nav-active=\"NavOne\" href=\"#collapseOne\">Carousel</a></h1>
          </div>
        </div>
      </div>
      <div id=\"collapseOne\" class=\"panel-collapse collapse\">
        <div class=\"panel-body\">
          <div class=\"container\">
            <div id=\"carousel-example-generic\" class=\"carousel slide bs-docs-carousel-example\">
                  <ol class=\"carousel-indicators\">
                <li data-target=\"#carousel-example-generic\" data-slide-to=\"0\" class=\"active\"></li>
                <li data-target=\"#carousel-example-generic\" data-slide-to=\"1\" class=\"\"></li>
                <li data-target=\"#carousel-example-generic\" data-slide-to=\"2\" class=\"\"></li>
                <li data-target=\"#carousel-example-generic\" data-slide-to=\"3\" class=\"\"></li>
                <li data-target=\"#carousel-example-generic\" data-slide-to=\"4\" class=\"\"></li>
                  </ol>
                  <div class=\"carousel-inner\">
                <div class=\"item active\">
                  <img src=\"img/boot-1.png\"/>
                  <div class=\"carousel-caption\"></div>
                </div>
                <div class=\"item\">
                  <img src=\"img/boot-2.png\"/>
                  <div class=\"carousel-caption\"></div>
                </div>
                <div class=\"item\">
                  <img src=\"img/boot-3.png\"/>
                  <div class=\"carousel-caption\"></div>
                </div>
                <div class=\"item\">
                  <img src=\"img/boot-4.png\"/>
                  <div class=\"carousel-caption\"></div>
                </div>
                <div class=\"item\">
                  <img src=\"img/boot-5.png\"/>
                  <div class=\"carousel-caption\"></div>
                </div>
                  </div>
                  <a class=\"left carousel-control\" href=\"#carousel-example-generic\" data-slide=\"prev\">
                <span class=\"icon-prev\"></span>
                  </a>
                  <a class=\"right carousel-control\" href=\"#carousel-example-generic\" data-slide=\"next\">
                <span class=\"icon-next\"></span>
                  </a>
            </div>
          </div>
        </div> <!-- panel-body -->
      </div> <!-- colapse -->
    </div> <!-- panel -->

    <div id=\"local-two\" class=\"panel\">
      <div class=\"panel-heading container\">
        <div class=\"row\">
          <div class=\"panel-title\">
            <h1 class=\"text-center\"><a data-toggle=\"collapse\" data-parent=\"#accordion\" data-nav-active=\"NavTwo\" href=\"#collapseTwo\">Area Two</a></h1>
          </div>
        </div>
      </div>
      <div id=\"collapseTwo\" class=\"panel-collapse collapse\">
        <div class=\"panel-body\">
          <div class=\"container\">
            <img src=\"http://placehold.it/1170x550/0F0/FF0&text=[Area Two]\"/>
          </div>
        </div> <!-- panel-body -->
      </div> <!-- colapse -->
    </div> <!-- panel -->


    <div id=\"local-three\" class=\"panel\">
      <div class=\"panel-heading container\">
        <div class=\"row\">
          <div class=\"panel-title\">
            <h1 class=\"text-center\"><a data-toggle=\"collapse\" data-parent=\"#accordion\" data-nav-active=\"NavThree\" href=\"#collapseThree\">Thumbnails</a></h1>
          </div>
        </div>
      </div>
      <div id=\"collapseThree\" class=\"panel-collapse collapse\">
        <div class=\"panel-body\">
          <div class=\"container\">
            <div class=\"row\">
              <div class=\"col-xs-6 col-sm-4 col-md-3\">
                <div class=\"thumbnail\">
                  <a href=\"img/thumbnails/walken-1.png\"><img src=\"img/thumbnails/walken-1.png\" alt=\"...\"/></a>
                  <div class=\"caption\">
                    <h3>Walking Boots</h3>
                    <p><a href=\"javascript:void(0)\" class=\"btn btn-success plusOne\" role=\"button\"><i class=\"fa fa-thumbs-o-up fa-2x\"></i></a> <a href=\"javascript:void(0)\" class=\"btn btn-danger minusOne\" role=\"button\"><i class=\"fa fa-thumbs-o-down fa-2x\"></i></a></p>
                  </div>
                </div>
              </div>
              <div class=\"col-xs-6 col-sm-4 col-md-3\">
                <div class=\"thumbnail\">
                  <a href=\"http://placehold.it/1000&text=Thumbnail\"><img src=\"http://placehold.it/1000&text=Thumbnail\" alt=\"...\"/></a>
                  <div class=\"caption\">
                    <h3>Thumbnail Title</h3>
                    <p><a href=\"javascript:void(0)\" class=\"btn btn-success plusOne\" role=\"button\"><i class=\"fa fa-thumbs-o-up fa-2x\"></i></a> <a href=\"javascript:void(0)\" class=\"btn btn-danger minusOne\" role=\"button\"><i class=\"fa fa-thumbs-o-down fa-2x\"></i></a></p>
                  </div>
                </div>
              </div>
              <div class=\"col-xs-6 col-sm-4 col-md-3\">
                <div class=\"thumbnail\">
                  <a href=\"http://placehold.it/1000&text=Thumbnail\"><img src=\"http://placehold.it/1000&text=Thumbnail\" alt=\"...\"/></a>
                  <div class=\"caption\">
                    <h3>Thumbnail Title</h3>
                    <p><a href=\"javascript:void(0)\" class=\"btn btn-success plusOne\" role=\"button\"><i class=\"fa fa-thumbs-o-up fa-2x\"></i></a> <a href=\"javascript:void(0)\" class=\"btn btn-danger minusOne\" role=\"button\"><i class=\"fa fa-thumbs-o-down fa-2x\"></i></a></p>
                  </div>
                </div>
              </div>
              <div class=\"col-xs-6 col-sm-4 col-md-3\">
                <div class=\"thumbnail\">
                  <a href=\"http://placehold.it/1000&text=Thumbnail\"><img src=\"http://placehold.it/1000&text=Thumbnail\" alt=\"...\"/></a>
                  <div class=\"caption\">
                    <h3>Thumbnail Title</h3>
                    <p><a href=\"javascript:void(0)\" class=\"btn btn-success plusOne\" role=\"button\"><i class=\"fa fa-thumbs-o-up fa-2x\"></i></a> <a href=\"javascript:void(0)\" class=\"btn btn-danger minusOne\" role=\"button\"><i class=\"fa fa-thumbs-o-down fa-2x\"></i></a></p>
                  </div>
                </div>
              </div>
              <div class=\"col-xs-6 col-sm-4 col-md-3\">
                <div class=\"thumbnail\">
                  <a href=\"http://placehold.it/1000&text=Thumbnail\"><img src=\"http://placehold.it/1000&text=Thumbnail\" alt=\"...\"/></a>
                  <div class=\"caption\">
                    <h3>Thumbnail Title</h3>
                    <p><a href=\"javascript:void(0)\" class=\"btn btn-success plusOne\" role=\"button\"><i class=\"fa fa-thumbs-o-up fa-2x\"></i></a> <a href=\"javascript:void(0)\" class=\"btn btn-danger minusOne\" role=\"button\"><i class=\"fa fa-thumbs-o-down fa-2x\"></i></a></p>
                  </div>
                </div>
              </div>
              <div class=\"col-xs-6 col-sm-4 col-md-3\">
                <div class=\"thumbnail\">
                  <a href=\"http://placehold.it/1000&text=Thumbnail\"><img src=\"http://placehold.it/1000&text=Thumbnail\" alt=\"...\"/></a>
                  <div class=\"caption\">
                    <h3>Thumbnail Title</h3>
                    <p><a href=\"javascript:void(0)\" class=\"btn btn-success plusOne\" role=\"button\"><i class=\"fa fa-thumbs-o-up fa-2x\"></i></a> <a href=\"javascript:void(0)\" class=\"btn btn-danger minusOne\" role=\"button\"><i class=\"fa fa-thumbs-o-down fa-2x\"></i></a></p>
                  </div>
                </div>
              </div>
              <div class=\"col-xs-6 col-sm-4 col-md-3\">
                <div class=\"thumbnail\">
                  <a href=\"http://placehold.it/1000&text=Thumbnail\"><img src=\"http://placehold.it/1000&text=Thumbnail\" alt=\"...\"/></a>
                  <div class=\"caption\">
                    <h3>Thumbnail Title</h3>
                    <p><a href=\"javascript:void(0)\" class=\"btn btn-success plusOne\" role=\"button\"><i class=\"fa fa-thumbs-o-up fa-2x\"></i></a> <a href=\"javascript:void(0)\" class=\"btn btn-danger minusOne\" role=\"button\"><i class=\"fa fa-thumbs-o-down fa-2x\"></i></a></p>
                  </div>
                </div>
              </div>
              <div class=\"col-xs-6 col-sm-4 col-md-3\">
                <div class=\"thumbnail\">
                  <a href=\"http://placehold.it/1000&text=Thumbnail\"><img src=\"http://placehold.it/1000&text=Thumbnail\" alt=\"...\"/></a>
                  <div class=\"caption\">
                    <h3>Thumbnail Title</h3>
                    <p><a href=\"javascript:void(0)\" class=\"btn btn-success plusOne\" role=\"button\"><i class=\"fa fa-thumbs-o-up fa-2x\"></i></a> <a href=\"javascript:void(0)\" class=\"btn btn-danger minusOne\" role=\"button\"><i class=\"fa fa-thumbs-o-down fa-2x\"></i></a></p>
                  </div>
                </div>
              </div>  
            </div>
          </div>
        </div> <!-- panel-body -->
      </div> <!-- colapse -->
    </div> <!-- panel -->
    
    <div id=\"local-four\" class=\"panel\">
      <div class=\"panel-heading container\">
        <div class=\"row\">
          <div class=\"panel-title\">
            <h1 class=\"text-center\"><a data-toggle=\"collapse\" data-parent=\"#accordion\" data-nav-active=\"NavFour\" href=\"#collapseFour\">Social</a></h1>
          </div>
        </div>
      </div>
      <div id=\"collapseFour\" class=\"panel-collapse collapse\">   
        <div class=\"panel-body\">
          <div class=\"container\">
            <div style=\"height: 50px;\"></div>
            <div class=\"row\">
              <ul class=\"nav nav-tabs nav-justified\">
                <li class=\"active\"><a href=\".twitter\" data-toggle=\"tab\"><i class=\"fa fa-twitter fa-lg\"></i> Twitter</a></li>
                <li><a href=\".facebook\" data-toggle=\"tab\"><i class=\"fa fa-facebook fa-lg\"></i> Facebook</a></li>
                <li><a href=\".instagram\" data-toggle=\"tab\"><i class=\"fa fa-instagram fa-lg\"></i> Instagram</a></li>
                <li><a href=\".pinterest\" data-toggle=\"tab\"><i class=\"fa fa-pinterest fa-lg\"></i> Pinterest</a></li>
              </ul>
              <div style=\"height: 20px;\"></div>
              <div class=\"row\">
                <div class=\"tab-content col-sm-10 col-sm-offset-1 social-content\">
                  <div class=\"tab-pane active twitter\">
                    <div class=\"row\">
                      <div class=\"col-sm-3 left\"><a href=\"#\"><i class=\"fa fa-twitter fa-5x\"></i></a></div>
                      <div class=\"col-sm-9 right\"><div class=\"inner-content\">Twitter</div></div>
                    </div>
                  </div>
                  <div class=\"tab-pane facebook\">
                    <div class=\"row\">
                      <div class=\"col-sm-3 left\"><a href=\"#\"><i class=\"fa fa-facebook fa-5x\"></i></a></div>
                      <div class=\"col-sm-9 right\"><div class=\"inner-content\">Facebook</div></div>
                    </div>
                  </div>
                  <div class=\"tab-pane instagram\">
                    <div class=\"row\">
                      <div class=\"col-sm-3 left\"><a href=\"#\"><i class=\"fa fa-instagram fa-5x\"></i></a></div>
                      <div class=\"col-sm-9 right\"><div class=\"inner-content\">Instagram</div></div>
                    </div>
                  </div>
                  <div class=\"tab-pane pinterest\">
                    <div class=\"row\">
                      <div class=\"col-sm-3 left\"><a href=\"#\"><i class=\"fa fa-pinterest fa-5x\"></i></a></div>
                      <div class=\"col-sm-9 right\"><div class=\"inner-content\">Pinterest</div></div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div> <!-- panel-body -->
      </div> <!-- colapse -->
    </div> <!-- panel -->
    
    <div id=\"local-five\" class=\"panel\">
      <div class=\"panel-heading container\">
        <div class=\"row\">
          <div class=\"panel-title\">
            <h1 class=\"text-center\"><a data-toggle=\"collapse\" data-parent=\"#accordion\" data-nav-active=\"NavFive\" href=\"#collapseFive\">Progress</a></h1>
          </div>
        </div>
      </div>
      <div id=\"collapseFive\" class=\"panel-collapse collapse\">   
        <div class=\"panel-body\">
          <div class=\"container\">
            <div style=\"height: 75px;\"></div>
            <div class=\"row\">
              <div class=\"col-xs-2\">
                <a href=\"javascript:void(0)\" onclick=\"progressDown('#progress_one', 10);\"><i class=\"fa fa-minus-circle fa-3x pull-right\"></i></a>
              </div>
              <div class=\"col-xs-8\">
                <div class=\"progress progress-lg\">
                  <div id=\"progress_one\" class=\"progress-bar progress-bar-success\" role=\"progressbar\" aria-valuenow=\"40\" aria-valuemin=\"0\" aria-valuemax=\"100\" aria-valuefull=\"100\" style=\"width: 40%\">
                    <span class=\"sr-only\">40% Complete (success)</span>
                  </div>
                </div>
              </div>
              <div class=\"col-xs-2\">
                <a href=\"javascript:void(0)\" onclick=\"progressUp('#progress_one', 10);\"><i class=\"fa fa-plus-circle fa-3x\"></i></a>
              </div>
            </div>
            
            <div style=\"height: 30px;\"></div>
            
            <div class=\"row\">
              <div class=\"col-xs-2\">
                <a href=\"javascript:void(0)\" onclick=\"progressDown('#progress_two', 30);\"><i class=\"fa fa-minus-circle fa-3x pull-right\"></i></a>
              </div>
              <div class=\"col-xs-8\">
                <div class=\"progress progress-striped progress-lg\">
                  <div id=\"progress_two\" class=\"progress-bar progress-bar-info\" role=\"progressbar\" aria-valuenow=\"50\" aria-valuemin=\"0\" aria-valuemax=\"200\" aria-valuefull=\"300\" style=\"width: 25%\">
                    <span class=\"sr-only\">30% Complete (success)</span>
                  </div>
                </div>
              </div>
              <div class=\"col-xs-2\">
                <a href=\"javascript:void(0)\" onclick=\"progressUp('#progress_two', 30);\"><i class=\"fa fa-plus-circle fa-3x\"></i></a>
              </div>
            </div>
            
            <div style=\"height: 30px;\"></div>
            
            <div class=\"row\">
              <div class=\"col-xs-2\">
                <a href=\"javascript:void(0)\" onclick=\"progressDown('#progress_three', 5);\"><i class=\"fa fa-minus-circle fa-3x pull-right\"></i></a>
              </div>
              <div class=\"col-xs-8\">
                <div class=\"progress progress-striped active progress-lg\">
                  <div id=\"progress_three\" class=\"progress-bar progress-bar-warning\" role=\"progressbar\" aria-valuenow=\"70\" aria-valuemin=\"0\" aria-valuemax=\"100\" aria-valuefull=\"100\" style=\"width: 70%\">
                    <span class=\"sr-only\">70% Complete (success)</span>
                  </div>
                </div>
              </div>
              <div class=\"col-xs-2\">
                <a href=\"javascript:void(0)\" onclick=\"progressUp('#progress_three', 5);\"><i class=\"fa fa-plus-circle fa-3x\"></i></a>
              </div>
            </div>
            
            <div style=\"height: 30px;\"></div>
            
            <div class=\"row\">
              <div class=\"col-xs-2\">
                <a href=\"javascript:void(0)\" onclick=\"progressDown('#progress_four', 5);\"><i class=\"fa fa-minus-circle fa-3x pull-right\"></i></a>
                <a href=\"javascript:void(0)\" onclick=\"progressDown('#progress_five', 5);\"><i class=\"fa fa-minus-circle fa-3x pull-right\"></i></a>
                <a href=\"javascript:void(0)\" onclick=\"progressDown('#progress_six', 5);\"><i class=\"fa fa-minus-circle fa-3x pull-right\"></i></a>
              </div>
              <div class=\"col-xs-8\">
                <div class=\"progress progress-lg\">
                  <div id=\"progress_four\" class=\"progress-bar progress-bar-success\" role=\"progressbar\" aria-valuenow=\"5\" aria-valuemin=\"0\" aria-valuemax=\"33\" aria-valuefull=\"100\" style=\"width: 5%\">
                    <span class=\"sr-only\">5% Complete (success)</span>
                  </div>
                  <div id=\"progress_five\" class=\"progress-bar progress-bar-warning\" role=\"progressbar\" aria-valuenow=\"25\" aria-valuemin=\"0\" aria-valuemax=\"34\" aria-valuefull=\"100\" style=\"width: 25%\">
                    <span class=\"sr-only\">10% Complete (success)</span>
                  </div>
                  <div id=\"progress_six\" class=\"progress-bar progress-bar-info\" role=\"progressbar\" aria-valuenow=\"10\" aria-valuemin=\"0\" aria-valuemax=\"33\" aria-valuefull=\"100\" style=\"width: 10%\">
                    <span class=\"sr-only\">5% Complete (success)</span>
                  </div>
                </div>
              </div>
              <div class=\"col-xs-2\">
                <a href=\"javascript:void(0)\" onclick=\"progressUp('#progress_four', 5);\"><i class=\"fa fa-plus-circle fa-3x\"></i></a>
                <a href=\"javascript:void(0)\" onclick=\"progressUp('#progress_five', 5);\"><i class=\"fa fa-plus-circle fa-3x\"></i></a>
                <a href=\"javascript:void(0)\" onclick=\"progressUp('#progress_six', 5);\"><i class=\"fa fa-plus-circle fa-3x\"></i></a>
              </div>
            </div>
          </div>
        </div> <!-- panel-body -->
      </div> <!-- colapse -->
    </div> <!-- panel -->
  </div> <!-- panel-group -->

</div> <!-- fog50 -->

";
    }

    public function getTemplateName()
    {
        return "default.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  31 => 3,  28 => 2,);
    }
}
