<?php

/* user/consultProfil.html.twig */
class __TwigTemplate_e041a34019766c7a60b7f0b6be6f5efef956417cc5c423a03f71f470f888e69f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layout.html.twig", "user/consultProfil.html.twig", 1);
        $this->blocks = array(
            'content' => array($this, 'block_content'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_6b70c92ce75aecac654fd15ab07dcd189c9256b3065e4a821c1280460a235826 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6b70c92ce75aecac654fd15ab07dcd189c9256b3065e4a821c1280460a235826->enter($__internal_6b70c92ce75aecac654fd15ab07dcd189c9256b3065e4a821c1280460a235826_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "user/consultProfil.html.twig"));

        $__internal_ceeffa435f0163caf086ac247efe8277992a66023410b069f41858218bdeb3b2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ceeffa435f0163caf086ac247efe8277992a66023410b069f41858218bdeb3b2->enter($__internal_ceeffa435f0163caf086ac247efe8277992a66023410b069f41858218bdeb3b2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "user/consultProfil.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6b70c92ce75aecac654fd15ab07dcd189c9256b3065e4a821c1280460a235826->leave($__internal_6b70c92ce75aecac654fd15ab07dcd189c9256b3065e4a821c1280460a235826_prof);

        
        $__internal_ceeffa435f0163caf086ac247efe8277992a66023410b069f41858218bdeb3b2->leave($__internal_ceeffa435f0163caf086ac247efe8277992a66023410b069f41858218bdeb3b2_prof);

    }

    // line 2
    public function block_content($context, array $blocks = array())
    {
        $__internal_0068fd4c72196e356a3cd3e2335ef03d038313e0e230605f7421436a2390be83 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0068fd4c72196e356a3cd3e2335ef03d038313e0e230605f7421436a2390be83->enter($__internal_0068fd4c72196e356a3cd3e2335ef03d038313e0e230605f7421436a2390be83_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_2b29e42ee1246804ec3918facb39666ef628809f5eae6ac6afc0a01fedcfa493 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2b29e42ee1246804ec3918facb39666ef628809f5eae6ac6afc0a01fedcfa493->enter($__internal_2b29e42ee1246804ec3918facb39666ef628809f5eae6ac6afc0a01fedcfa493_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 3
        echo "                   

<section class=\"innercontent\">

    <div class=\"container\">

    \t
                   
      
       
   

        <div class=\"row\">

            <div class=\"col-md-8 col-lg-8\">

                <article class=\"post\">

             

                    <div class=\"author-info\">

                       <ul class=\"list-inline\">  

                        <li>

                            <div class=\"icon-box\"><img src=\"";
        // line 29
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/images/post/author_1.png "), "html", null, true);
        echo "\" class=\"img-responsive\" alt=\"image post\" /></div>

                            <div class=\"info\">

                            

                           <a href=\"author.html\">";
        // line 35
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 35, $this->getSourceContext()); })()), "name", array()), "html", null, true);
        echo " </a>

                            </div>    

                        </li>

                        <li>

                           

                            <div class=\"info\">

                            <p>Inscrit le :</p>
                                <strong>";
        // line 48
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 48, $this->getSourceContext()); })()), "date_create", array()), "html", null, true);
        echo " </strong></div>
                        </li>

                        

                         <li>

                             <div class=\"icon-box\"><i class=\"fa fa-comments-o\"></i></div>

                             <div class=\"info\">

                             <p>Note</p>
                                 <strong>4.5</strong></div>
                         </li>

                         <li>
                            <div class=\"info\">
                            <p>Annonces </p>
                                <strong>4289</strong></div>
                        </li>
                        
                        <li>
                            <div class=\"info\">
                            <p>Chroniques </p>
                                <strong>4289</strong></div>
                        </li>
                        
                         <li>
                            <div class=\"info\">
                            <p>News </p>
                                <strong>4289</strong></div>
                        </li>

                       </ul>

                    </div>
                        
             <div class=\"caption\">
                <div class=\"line-block\">

                    <ul class=\"list-inline tags\">

                       <li onclick=\"afficher_div('IdProfilBlockMessage');\"><a  href=\"#\">Envoyer message </a></li>

                        <li onclick=\"afficher_div('IdProfilBlockAnnonces');\"><a href=\"#\">Ses annonces</a></li>

                        <li onclick=\"afficher_div('IdProfilBlockChronique');\"><a href=\"#\">Ses chroniques</a></li>
                        
                        <li onclick=\"afficher_div('IdProfilBlockComments');\"><a href=\"#\">Ses commentaires</a></li>
                        
                        <li onclick=\"afficher_div('IdProfilBlockAvis');\"><a href=\"#\">Avis</a></li>

                  

                    </ul>

                </div></div>

           
             
                    <div id=\"IdProfilBlockAnnonces\" class=\"related-post\" >

                        <div class=\"row\">

                            <div class=\"col-md-12\"><h4></h4></div>

                            <div class=\"col-xs-12 col-sm-4 col-md-4 col-lg-4\">

                                <div class=\"thumbnail\">

                                  <a href=\"#\"><img src=\"";
        // line 118
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/images/post/related-post1.png "), "html", null, true);
        echo "\" alt=\"related post\"></a>

                                  <div class=\"caption\">

                                    <a href=\"#\">Cras sit amet nibh libero, in gravida nulla</a>

                                  </div>

                                </div>

                            </div>

                            <div class=\"col-xs-12 col-sm-4 col-md-4 col-lg-4\">

                                <div class=\"thumbnail\">

                                    <a href=\"#\"><img src=\"";
        // line 134
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/images/post/related-post2.png "), "html", null, true);
        echo "\" alt=\"related post\"></a>

                                  <div class=\"caption\">

                                    <a href=\"#\">Cras sit amet nibh libero, in gravida nulla</a>

                                  </div>

                                </div>

                            </div>

                            <div class=\"col-xs-12 col-sm-4 col-md-4 col-lg-4\">

                                <div class=\"thumbnail\">

                                    <a href=\"#\"><img src=\"";
        // line 150
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/images/post/related-post3.png "), "html", null, true);
        echo "\" alt=\"related post\"></a>

                                  <div class=\"caption\">

                                    <a href=\"#\">Cras sit amet nibh libero, in gravida nulla</a>

                                  </div>

                                </div>

                            </div>

                        </div>

                    </div>
                    
                                    
                    <div id=\"IdProfilBlockAvis\" class=\"comment-list \">
                        
\t\t\t<div class=\"comment-count \">

\t\t\t\t<h4>32 Avis</h4>

\t\t\t\t<p><a href=\"#\">Sign in</a> to comment or comment as a guest.</p>

\t\t\t</div>
\t\t\t

\t\t\t<div class=\"media\">

\t\t\t\t<div class=\"media-left\">

\t\t\t\t\t<a href=\"#\">

\t\t\t\t\t\t<img class=\"media-object\" src=\"";
        // line 184
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/images/comment-thumbnail.png "), "html", null, true);
        echo "\" alt=\"placeholder image\">

\t\t\t\t\t</a>

\t\t\t\t</div>

\t\t\t\t<div class=\"media-body\">

\t\t\t\t\t<p>Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin commodo. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. </p>

\t\t\t\t\t  <ul class=\"list-inline\">

\t\t\t\t\t\t  <li><a class=\"media-heading\" href=\"#\">Anonymous</a></li>

\t\t\t\t\t\t  <li>3 hours ago</li>

\t\t\t\t\t\t  <li><a class=\"reply-btn\" href=\"#\">Post Reply</a></li>

\t\t\t\t\t\t</ul>

\t\t\t\t  

\t\t\t\t</div>

\t\t\t</div>


                    </div>
                                    
                    <div id=\"IdProfilBlockComments\" class=\"comment-list \">
                        
                        <div class=\"comment-count \">

                        <h4>32 Comments</h4>

                        <p><a href=\"#\">Sign in</a> to comment or comment as a guest.</p>

                        </div>

                        <div class=\"media\">

                          <div class=\"media-left\">

                            <a href=\"#\">

                              <img class=\"media-object\" src=\"";
        // line 229
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/images/comment-thumbnail.png "), "html", null, true);
        echo "\" alt=\"placeholder image\">

                            </a>

                          </div>

                          <div class=\"media-body\">

                            <p>Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin commodo. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. </p>

                              <ul class=\"list-inline\">

                                  <li><a class=\"media-heading\" href=\"#\">Anonymous</a></li>

                                  <li>3 hours ago</li>

                                  <li><a class=\"reply-btn\" href=\"#\">Post Reply</a></li>

                                </ul>

                              

                          </div>

                        </div>

                        <div class=\"media\">

                          <div class=\"media-left\">

                            <a href=\"#\">

                              <img class=\"media-object\" src=\"";
        // line 261
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/images/comment-thumbnail.png "), "html", null, true);
        echo "\" alt=\"placeholder image\">

                            </a>

</div>

                          <div class=\"media-body\">

                            

                            <p>Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin commodo. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. </p>

                              <ul class=\"list-inline\">

                                  <li><a class=\"media-heading\" href=\"#\">Anonymous</a></li>

                                  <li>3 hours ago</li>

                                  <li><a class=\"reply-btn\" href=\"#\">Post Reply</a></li>

                                </ul>

                            <div class=\"media nested-first\">

                              <div class=\"media-left\">

                                <a href=\"#\">

                                  <img class=\"media-object\" src=\"";
        // line 289
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/images/comment-thumbnail.png "), "html", null, true);
        echo "\" alt=\"placeholder image\">

                                </a>

                              </div>

                              <div class=\"media-body\">

                                

                               <p> Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin commodo.</p>

                                  <ul class=\"list-inline\">

                                  <li><a class=\"media-heading\" href=\"#\">Anonymous</a></li>

                                  <li>3 hours ago</li>

                                </ul>

                              </div>

</div>

                            <div class=\"media\">

                              <div class=\"media-left\">

                                <a href=\"#\">

                                  <img class=\"media-object\" src=\"";
        // line 319
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/images/comment-thumbnail.png "), "html", null, true);
        echo "\" alt=\"placeholder image\">

                                </a>

                              </div>

                              <div class=\"media-body\">

                               <p> Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin commodo.</p>

                                  <ul class=\"list-inline\">

                                  <li><a class=\"media-heading\" href=\"#\">Anonymous</a></li>

                                  <li>3 hours ago</li>

                                </ul>

                              </div>

</div>

</div>

                        </div>

                    </div>

                    <div id=\"IdProfilBlockMessage\" class=\"comment-form consultProfilBlocMessageInterne\">

                        <h4>Enntrez votre Message</h4>

                        <form role=\"form\" action=\"#\" method=\"post\" novalidate id=\"comment-form\">

                            <div class=\"row\">

                                <div class=\"col-md-6 col-lg-5\">

                           <div class=\"form-group\">

                             <input type=\"text\" class=\"form-control\" name=\"name\" autocomplete=\"off\" placeholder=\"Nom:\">

                           </div>

                                    </div>

                            </div>


                            <div class=\"row\">

                                <div class=\"col-md-6 col-lg-5\">

                            <div class=\"form-group\">

                            <input type=\"text\" class=\"form-control\" placeholder=\"Sujet :\">

                          </div>

                            </div>

                                    </div>

                            <div class=\"form-group\">

                                <textarea class=\"form-control\" name=\"message\" placeholder=\"Message:\" rows=\"3\"></textarea>

                          </div>

                          <button type=\"submit\" class=\"btn btn-default\">Envoyer</button>

                        </form>

                    </div>

                   

                </article>

            <div class=\"clearfix\"></div>

            </div>

            <aside class=\"col-md-4 col-lg-4\">

            \t

                <div class=\"row\">

                <div class=\"col-sm-6 col-md-12 col-lg-12\">

                <div class=\"panel panel-default theme-panel\">

                  <div class=\"panel-heading\">Donner une note</div>

                    <div class=\"panel-body\">

                      <form action=\"#\" method=\"post\">

                      <div class=\"form-group\">

                          <select id=\"role\" class=\"form-control \" name=\"note\"> 
                                <option  value=\"\" class=\"disabled selected hidden\" name=\"text\">Donner une note</option> 
                                <option  class=\"form-control \" value=\"1\" >1</option>
                                <option  class=\"form-control \" value=\"2\" >2</option>
                                <option  class=\"form-control \" value=\"3\" >3</option>
                                <option  class=\"form-control \" value=\"4\" >4</option>
                                <option  class=\"form-control \" value=\"5\" >5</option>
                                

                            </select>

                        </div>

                        <div class=\"form-group\">

                        \t<button class=\"btn btn-default btn-lg pull-right\" type=\"button\">Envoyer</button>

                        </div>

                        </form>

                    </div>

                </div>

               </div>

                 
            </aside>

           </div>

       

      </div>

    </section>

    
";
        
        $__internal_2b29e42ee1246804ec3918facb39666ef628809f5eae6ac6afc0a01fedcfa493->leave($__internal_2b29e42ee1246804ec3918facb39666ef628809f5eae6ac6afc0a01fedcfa493_prof);

        
        $__internal_0068fd4c72196e356a3cd3e2335ef03d038313e0e230605f7421436a2390be83->leave($__internal_0068fd4c72196e356a3cd3e2335ef03d038313e0e230605f7421436a2390be83_prof);

    }

    // line 461
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_90cc96bbe70548f7ccfb101e4260db874ce92c3be349e42ad31235448eeca03f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_90cc96bbe70548f7ccfb101e4260db874ce92c3be349e42ad31235448eeca03f->enter($__internal_90cc96bbe70548f7ccfb101e4260db874ce92c3be349e42ad31235448eeca03f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_d50acc266865f96f584f792d0a2fc0aecdaa5b887d16cbe07a4041a0d6f1ff14 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d50acc266865f96f584f792d0a2fc0aecdaa5b887d16cbe07a4041a0d6f1ff14->enter($__internal_d50acc266865f96f584f792d0a2fc0aecdaa5b887d16cbe07a4041a0d6f1ff14_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 462
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
    
        <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js\"></script>
        <script type=\"text/javascript\" src=\"http://ajax.microsoft.com/ajax/jquery.ui/1.8.10/jquery-ui.js\"></script>
        <link rel=\"Stylesheet\" type=\"text/css\" href=\"http://ajax.googleapis.com/ajax/libs/jqueryui/1.8.9/themes/base/jquery-ui.css\" />
\t 
        <script type=\"text/javascript\">
            function afficher_div(id)
            {
                 console.log(id);
                 // #IdProfilBlockComments, #IdProfilBlockAnnonces, #IdProfilBlockMessage, #IdProfilBlockAvis,  #IdProfilBlockChronique     
                 id1 = 'IdProfilBlockComments';id2 = 'IdProfilBlockMessage';id3 = 'IdProfilBlockAvis';id4 = 'IdProfilBlockChronique';;
                       \$('#IdProfilBlockAnnonces').hide(); \$('#id1').hide(); \$('#id2').hide(); \$('#id3').hide(); \$('#id4').hide();
                       
                
                       
                        
                if (id === 'IdProfilBlockAnnonces') 
                    {    console.log('coucou0');
                        id1 = 'IdProfilBlockComments';id2 = 'IdProfilBlockMessage';id3 = 'IdProfilBlockAvis';id4 = 'IdProfilBlockChronique'; id='IdProfilBlockAnnonces'; }
                    
                if (id == 'IdProfilBlockComments') 
                    {    console.log('coucou1');
                        id1 = 'IdProfilBlockAnnonces';id2 = 'IdProfilBlockMessage';id3 = 'IdProfilBlockAvis';id4 = 'IdProfilBlockChronique';id='IdProfilBlockComments'; }
                    
                if (id == 'IdProfilBlockMessage') {
                     console.log('coucou2');
                    id1 = 'IdProfilBlockComments';id2 = 'IdProfilBlockAnnonces';id3 = 'IdProfilBlockAvis';id4 = 'IdProfilBlockChronique';id='IdProfilBlockMessage'; }
                    
                if (id == 'IdProfilBlockAvis') 
                {    console.log('coucou3');
                        id1 = 'IdProfilBlockComments';id2 = 'IdProfilBlockAnnonces';id3 = 'IdProfilBlockMessage';id4 = 'IdProfilBlockChronique';id='IdProfilBlockAvis'; }
                    
                if (id == 'IdProfilBlockChronique') 
                    {    console.log('coucou4');
                        id1 = 'IdProfilBlockComments';id2 = 'IdProfilBlockAnnonces';id3 = 'IdProfilBlockMessage';id4 = 'IdProfilBlockAvis';id='IdProfilBlockChronique'; }
                     console.log(id);
                      document.getElementById(id).style.display = 'block';
                      document.getElementById(id1).style.display = 'none';
                       document.getElementById(id2).style.display = 'none';
                        document.getElementById(id3).style.display = 'none';
                         document.getElementById(id4).style.display = 'none';
                         
              
                      
                       console.log('fin');
           
           
            }
                  /*
                   * 
                   * 
                   if (document.getElementById(id).style.display == 'none')
                  {
                       document.getElementById(id).style.display = 'block';
                  }
                  else
                  {
                       document.getElementById(id).style.display = 'none';
                  }
                }
                 */
           
\t</script>
";
        
        $__internal_d50acc266865f96f584f792d0a2fc0aecdaa5b887d16cbe07a4041a0d6f1ff14->leave($__internal_d50acc266865f96f584f792d0a2fc0aecdaa5b887d16cbe07a4041a0d6f1ff14_prof);

        
        $__internal_90cc96bbe70548f7ccfb101e4260db874ce92c3be349e42ad31235448eeca03f->leave($__internal_90cc96bbe70548f7ccfb101e4260db874ce92c3be349e42ad31235448eeca03f_prof);

    }

    public function getTemplateName()
    {
        return "user/consultProfil.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  558 => 462,  549 => 461,  398 => 319,  365 => 289,  334 => 261,  299 => 229,  251 => 184,  214 => 150,  195 => 134,  176 => 118,  103 => 48,  87 => 35,  78 => 29,  50 => 3,  41 => 2,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"layout.html.twig\" %}
{% block content %}
                   

<section class=\"innercontent\">

    <div class=\"container\">

    \t
                   
      
       
   

        <div class=\"row\">

            <div class=\"col-md-8 col-lg-8\">

                <article class=\"post\">

             

                    <div class=\"author-info\">

                       <ul class=\"list-inline\">  

                        <li>

                            <div class=\"icon-box\"><img src=\"{{ asset('assets/images/post/author_1.png ') }}\" class=\"img-responsive\" alt=\"image post\" /></div>

                            <div class=\"info\">

                            

                           <a href=\"author.html\">{{user.name}} </a>

                            </div>    

                        </li>

                        <li>

                           

                            <div class=\"info\">

                            <p>Inscrit le :</p>
                                <strong>{{user.date_create}} </strong></div>
                        </li>

                        

                         <li>

                             <div class=\"icon-box\"><i class=\"fa fa-comments-o\"></i></div>

                             <div class=\"info\">

                             <p>Note</p>
                                 <strong>4.5</strong></div>
                         </li>

                         <li>
                            <div class=\"info\">
                            <p>Annonces </p>
                                <strong>4289</strong></div>
                        </li>
                        
                        <li>
                            <div class=\"info\">
                            <p>Chroniques </p>
                                <strong>4289</strong></div>
                        </li>
                        
                         <li>
                            <div class=\"info\">
                            <p>News </p>
                                <strong>4289</strong></div>
                        </li>

                       </ul>

                    </div>
                        
             <div class=\"caption\">
                <div class=\"line-block\">

                    <ul class=\"list-inline tags\">

                       <li onclick=\"afficher_div('IdProfilBlockMessage');\"><a  href=\"#\">Envoyer message </a></li>

                        <li onclick=\"afficher_div('IdProfilBlockAnnonces');\"><a href=\"#\">Ses annonces</a></li>

                        <li onclick=\"afficher_div('IdProfilBlockChronique');\"><a href=\"#\">Ses chroniques</a></li>
                        
                        <li onclick=\"afficher_div('IdProfilBlockComments');\"><a href=\"#\">Ses commentaires</a></li>
                        
                        <li onclick=\"afficher_div('IdProfilBlockAvis');\"><a href=\"#\">Avis</a></li>

                  

                    </ul>

                </div></div>

           
             
                    <div id=\"IdProfilBlockAnnonces\" class=\"related-post\" >

                        <div class=\"row\">

                            <div class=\"col-md-12\"><h4></h4></div>

                            <div class=\"col-xs-12 col-sm-4 col-md-4 col-lg-4\">

                                <div class=\"thumbnail\">

                                  <a href=\"#\"><img src=\"{{ asset('assets/images/post/related-post1.png ') }}\" alt=\"related post\"></a>

                                  <div class=\"caption\">

                                    <a href=\"#\">Cras sit amet nibh libero, in gravida nulla</a>

                                  </div>

                                </div>

                            </div>

                            <div class=\"col-xs-12 col-sm-4 col-md-4 col-lg-4\">

                                <div class=\"thumbnail\">

                                    <a href=\"#\"><img src=\"{{ asset('assets/images/post/related-post2.png ') }}\" alt=\"related post\"></a>

                                  <div class=\"caption\">

                                    <a href=\"#\">Cras sit amet nibh libero, in gravida nulla</a>

                                  </div>

                                </div>

                            </div>

                            <div class=\"col-xs-12 col-sm-4 col-md-4 col-lg-4\">

                                <div class=\"thumbnail\">

                                    <a href=\"#\"><img src=\"{{ asset('assets/images/post/related-post3.png ') }}\" alt=\"related post\"></a>

                                  <div class=\"caption\">

                                    <a href=\"#\">Cras sit amet nibh libero, in gravida nulla</a>

                                  </div>

                                </div>

                            </div>

                        </div>

                    </div>
                    
                                    
                    <div id=\"IdProfilBlockAvis\" class=\"comment-list \">
                        
\t\t\t<div class=\"comment-count \">

\t\t\t\t<h4>32 Avis</h4>

\t\t\t\t<p><a href=\"#\">Sign in</a> to comment or comment as a guest.</p>

\t\t\t</div>
\t\t\t

\t\t\t<div class=\"media\">

\t\t\t\t<div class=\"media-left\">

\t\t\t\t\t<a href=\"#\">

\t\t\t\t\t\t<img class=\"media-object\" src=\"{{ asset('assets/images/comment-thumbnail.png ') }}\" alt=\"placeholder image\">

\t\t\t\t\t</a>

\t\t\t\t</div>

\t\t\t\t<div class=\"media-body\">

\t\t\t\t\t<p>Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin commodo. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. </p>

\t\t\t\t\t  <ul class=\"list-inline\">

\t\t\t\t\t\t  <li><a class=\"media-heading\" href=\"#\">Anonymous</a></li>

\t\t\t\t\t\t  <li>3 hours ago</li>

\t\t\t\t\t\t  <li><a class=\"reply-btn\" href=\"#\">Post Reply</a></li>

\t\t\t\t\t\t</ul>

\t\t\t\t  

\t\t\t\t</div>

\t\t\t</div>


                    </div>
                                    
                    <div id=\"IdProfilBlockComments\" class=\"comment-list \">
                        
                        <div class=\"comment-count \">

                        <h4>32 Comments</h4>

                        <p><a href=\"#\">Sign in</a> to comment or comment as a guest.</p>

                        </div>

                        <div class=\"media\">

                          <div class=\"media-left\">

                            <a href=\"#\">

                              <img class=\"media-object\" src=\"{{ asset('assets/images/comment-thumbnail.png ') }}\" alt=\"placeholder image\">

                            </a>

                          </div>

                          <div class=\"media-body\">

                            <p>Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin commodo. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. </p>

                              <ul class=\"list-inline\">

                                  <li><a class=\"media-heading\" href=\"#\">Anonymous</a></li>

                                  <li>3 hours ago</li>

                                  <li><a class=\"reply-btn\" href=\"#\">Post Reply</a></li>

                                </ul>

                              

                          </div>

                        </div>

                        <div class=\"media\">

                          <div class=\"media-left\">

                            <a href=\"#\">

                              <img class=\"media-object\" src=\"{{ asset('assets/images/comment-thumbnail.png ') }}\" alt=\"placeholder image\">

                            </a>

</div>

                          <div class=\"media-body\">

                            

                            <p>Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin commodo. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. </p>

                              <ul class=\"list-inline\">

                                  <li><a class=\"media-heading\" href=\"#\">Anonymous</a></li>

                                  <li>3 hours ago</li>

                                  <li><a class=\"reply-btn\" href=\"#\">Post Reply</a></li>

                                </ul>

                            <div class=\"media nested-first\">

                              <div class=\"media-left\">

                                <a href=\"#\">

                                  <img class=\"media-object\" src=\"{{ asset('assets/images/comment-thumbnail.png ') }}\" alt=\"placeholder image\">

                                </a>

                              </div>

                              <div class=\"media-body\">

                                

                               <p> Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin commodo.</p>

                                  <ul class=\"list-inline\">

                                  <li><a class=\"media-heading\" href=\"#\">Anonymous</a></li>

                                  <li>3 hours ago</li>

                                </ul>

                              </div>

</div>

                            <div class=\"media\">

                              <div class=\"media-left\">

                                <a href=\"#\">

                                  <img class=\"media-object\" src=\"{{ asset('assets/images/comment-thumbnail.png ') }}\" alt=\"placeholder image\">

                                </a>

                              </div>

                              <div class=\"media-body\">

                               <p> Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin commodo.</p>

                                  <ul class=\"list-inline\">

                                  <li><a class=\"media-heading\" href=\"#\">Anonymous</a></li>

                                  <li>3 hours ago</li>

                                </ul>

                              </div>

</div>

</div>

                        </div>

                    </div>

                    <div id=\"IdProfilBlockMessage\" class=\"comment-form consultProfilBlocMessageInterne\">

                        <h4>Enntrez votre Message</h4>

                        <form role=\"form\" action=\"#\" method=\"post\" novalidate id=\"comment-form\">

                            <div class=\"row\">

                                <div class=\"col-md-6 col-lg-5\">

                           <div class=\"form-group\">

                             <input type=\"text\" class=\"form-control\" name=\"name\" autocomplete=\"off\" placeholder=\"Nom:\">

                           </div>

                                    </div>

                            </div>


                            <div class=\"row\">

                                <div class=\"col-md-6 col-lg-5\">

                            <div class=\"form-group\">

                            <input type=\"text\" class=\"form-control\" placeholder=\"Sujet :\">

                          </div>

                            </div>

                                    </div>

                            <div class=\"form-group\">

                                <textarea class=\"form-control\" name=\"message\" placeholder=\"Message:\" rows=\"3\"></textarea>

                          </div>

                          <button type=\"submit\" class=\"btn btn-default\">Envoyer</button>

                        </form>

                    </div>

                   

                </article>

            <div class=\"clearfix\"></div>

            </div>

            <aside class=\"col-md-4 col-lg-4\">

            \t

                <div class=\"row\">

                <div class=\"col-sm-6 col-md-12 col-lg-12\">

                <div class=\"panel panel-default theme-panel\">

                  <div class=\"panel-heading\">Donner une note</div>

                    <div class=\"panel-body\">

                      <form action=\"#\" method=\"post\">

                      <div class=\"form-group\">

                          <select id=\"role\" class=\"form-control \" name=\"note\"> 
                                <option  value=\"\" class=\"disabled selected hidden\" name=\"text\">Donner une note</option> 
                                <option  class=\"form-control \" value=\"1\" >1</option>
                                <option  class=\"form-control \" value=\"2\" >2</option>
                                <option  class=\"form-control \" value=\"3\" >3</option>
                                <option  class=\"form-control \" value=\"4\" >4</option>
                                <option  class=\"form-control \" value=\"5\" >5</option>
                                

                            </select>

                        </div>

                        <div class=\"form-group\">

                        \t<button class=\"btn btn-default btn-lg pull-right\" type=\"button\">Envoyer</button>

                        </div>

                        </form>

                    </div>

                </div>

               </div>

                 
            </aside>

           </div>

       

      </div>

    </section>

    
{% endblock %}

{% block javascripts %}
    {{ parent() }}
    
        <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js\"></script>
        <script type=\"text/javascript\" src=\"http://ajax.microsoft.com/ajax/jquery.ui/1.8.10/jquery-ui.js\"></script>
        <link rel=\"Stylesheet\" type=\"text/css\" href=\"http://ajax.googleapis.com/ajax/libs/jqueryui/1.8.9/themes/base/jquery-ui.css\" />
\t 
        <script type=\"text/javascript\">
            function afficher_div(id)
            {
                 console.log(id);
                 // #IdProfilBlockComments, #IdProfilBlockAnnonces, #IdProfilBlockMessage, #IdProfilBlockAvis,  #IdProfilBlockChronique     
                 id1 = 'IdProfilBlockComments';id2 = 'IdProfilBlockMessage';id3 = 'IdProfilBlockAvis';id4 = 'IdProfilBlockChronique';;
                       \$('#IdProfilBlockAnnonces').hide(); \$('#id1').hide(); \$('#id2').hide(); \$('#id3').hide(); \$('#id4').hide();
                       
                
                       
                        
                if (id === 'IdProfilBlockAnnonces') 
                    {    console.log('coucou0');
                        id1 = 'IdProfilBlockComments';id2 = 'IdProfilBlockMessage';id3 = 'IdProfilBlockAvis';id4 = 'IdProfilBlockChronique'; id='IdProfilBlockAnnonces'; }
                    
                if (id == 'IdProfilBlockComments') 
                    {    console.log('coucou1');
                        id1 = 'IdProfilBlockAnnonces';id2 = 'IdProfilBlockMessage';id3 = 'IdProfilBlockAvis';id4 = 'IdProfilBlockChronique';id='IdProfilBlockComments'; }
                    
                if (id == 'IdProfilBlockMessage') {
                     console.log('coucou2');
                    id1 = 'IdProfilBlockComments';id2 = 'IdProfilBlockAnnonces';id3 = 'IdProfilBlockAvis';id4 = 'IdProfilBlockChronique';id='IdProfilBlockMessage'; }
                    
                if (id == 'IdProfilBlockAvis') 
                {    console.log('coucou3');
                        id1 = 'IdProfilBlockComments';id2 = 'IdProfilBlockAnnonces';id3 = 'IdProfilBlockMessage';id4 = 'IdProfilBlockChronique';id='IdProfilBlockAvis'; }
                    
                if (id == 'IdProfilBlockChronique') 
                    {    console.log('coucou4');
                        id1 = 'IdProfilBlockComments';id2 = 'IdProfilBlockAnnonces';id3 = 'IdProfilBlockMessage';id4 = 'IdProfilBlockAvis';id='IdProfilBlockChronique'; }
                     console.log(id);
                      document.getElementById(id).style.display = 'block';
                      document.getElementById(id1).style.display = 'none';
                       document.getElementById(id2).style.display = 'none';
                        document.getElementById(id3).style.display = 'none';
                         document.getElementById(id4).style.display = 'none';
                         
              
                      
                       console.log('fin');
           
           
            }
                  /*
                   * 
                   * 
                   if (document.getElementById(id).style.display == 'none')
                  {
                       document.getElementById(id).style.display = 'block';
                  }
                  else
                  {
                       document.getElementById(id).style.display = 'none';
                  }
                }
                 */
           
\t</script>
{% endblock %}", "user/consultProfil.html.twig", "C:\\xampp\\htdocs\\projet-wf3\\templates\\user\\consultProfil.html.twig");
    }
}