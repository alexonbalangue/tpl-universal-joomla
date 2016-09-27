<?php
/**
 * @package     Joomla.Site
 * @subpackage  Templates.coopceptor-universal
 *
 * @copyright   Copyright (C) 2016 Alexon Balangue. All rights reserved.
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 */

defined('_JEXEC') or die;

$apps             = JFactory::getApplication();
$docs             = JFactory::getDocument();
$users            = JFactory::getUser();
$this->language  = $docs->language;
$this->direction = $docs->direction;

// Getting params from template
$params = $apps->getTemplate(true)->params;
$sitename = $apps->get('sitename');
# If you use Analyrics intern - Piwik | With plugin https://www.yireo.com/software/joomla-extensions/piwik
#include_once JPATH_SITE . '/plugins/system/piwik/piwik.php';
#if (class_exists('PlgSystemPiwik')) {
#    PlgSystemPiwik::callPiwik();
#}
?>
<!DOCTYPE html>
<html <?php echo $params->get('ampHTML'); ?> lang="<?php echo $this->language; ?>" dir="<?php echo $this->direction; ?>">

<head>
    <meta charset="utf-8">
    <meta name="robots" content="noindex,nofollow">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title><?php echo $this->title; ?> <?php echo htmlspecialchars($this->error->getMessage(), ENT_QUOTES, 'UTF-8'); ?></title>

	<?php if ($apps->get('debug_lang', '0') == '1' || $apps->get('debug', '0') == '1') : ?>
		<link rel="stylesheet" href="<?php echo $this->baseurl; ?>/media/cms/css/debug.css" type="text/css">
	<?php endif; ?>

    <link href='http://fonts.googleapis.com/css?family=Roboto:400,100,100italic,300,300italic,500,700,800' rel='stylesheet' type='text/css'>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/css/bootstrap.min.css">

    <link href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css" rel="stylesheet">

    <link href="<?php echo $this->baseurl; ?>/templates/<?php echo $this->template; ?>/assets/css/style.green.css" rel="stylesheet" id="theme-stylesheet">

    <!-- Responsivity for older IE -->
    <!--[if lt IE 9]>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.min.js"></script>
	<![endif]-->

</head>
<body itemscope itemtype="http://schema.org/WebPage">
<jdoc:include type="message" />
    <div id="all">
        <header>
            <div id="top">
                <div class="container">
                    <div class="row">
                        <div class="col-xs-5">
                            <div class="login">
                                <a href="https://panel.meetpeopleworld.com/profile/login.html"><i class="fa fa-sign-in"></i> <span class="hidden-xs text-uppercase">Se connecter</span></a>
                                <a href="https://panel.meetpeopleworld.com/profile/register.html"><i class="fa fa-user"></i> <span class="hidden-xs text-uppercase">S'inscrire</span></a>
                            </div>
                        </div>
                        <div class="col-xs-7">
                            <div class="social">
                                <a href="https://www.facebook.com/meetpeopleworld" class="external facebook" data-animate-hover="pulse"><i class="fa fa-facebook"></i></a>
                                <a href="https://plus.google.com/b/108719968837953676394/+Meetpeopleworld-com" class="external gplus" data-animate-hover="pulse"><i class="fa fa-google-plus"></i></a>
                                <a href="https://twitter.com/meetpeopleworld" class="external twitter" data-animate-hover="pulse"><i class="fa fa-twitter"></i></a>
                                <a href="https://www.meetpeopleworld.com/contact/team.html" class="email" data-animate-hover="pulse"><i class="fa fa-envelope"></i></a>
                            </div>

                        </div>
                    </div>
                </div>
            </div>

            <div class="navbar-affixed-top" data-spy="affix" data-offset-top="200">

                <div class="navbar navbar-default yamm" role="navigation" id="navbar">

                    <div class="container">
                        <div class="navbar-header">

                            <a class="navbar-brand home" href="index.html">
                                <img src="<?php echo $this->baseurl.'/templates/'.$this->template.'/assets/images/logo.png'; ?>" width="187" height="42" alt="<?php echo $sitename; ?>" class="hidden-xs hidden-sm">
                                <img src="<?php echo $this->baseurl.'/templates/'.$this->template.'/assets/images/logo.png'; ?>" width="110" height="47" alt="<?php echo $sitename; ?>" class="visible-xs visible-sm"><span class="sr-only"><?php echo $sitename; ?></span>

                            </a>
							<meta itemprop="image" content="<?php echo $this->baseurl.'/templates/'.$this->template.'/assets/images/logo.png'; ?>">
							<meta itemprop="name" content="<?php echo $sitename; ?>">
							<meta itemprop="description" content="<?php echo $sitename; ?> <?php echo htmlspecialchars($this->error->getMessage(), ENT_QUOTES, 'UTF-8'); ?>">
                            <div class="navbar-buttons">
                                <button type="button" class="navbar-toggle btn-template-main" data-toggle="collapse" data-target="#navigation">
                                    <span class="sr-only">Toggle navigation</span>
                                    <i class="fa fa-align-justify"></i>
                                </button>
                            </div>
                        </div>
						<div class="navbar-collapse collapse" id="navigation"> 
							<ul class="nav navbar-nav navbar-right"> 
								<li class="active"> <a href="javascript: void(0)"><i class="fa fa-home fa-2x"></i></a> </li>
								<li> <a href="https://docs.meetpeopleworld.com/">Docs</a> </li>
								<li> <a href="https://jobs.meetpeopleworld.com/">Jobs</a> </li>
								<li> <a href="https://media.meetpeopleworld.com/">Média</a> </li>
								<li> <a href="https://booking.meetpeopleworld.com/">Réserver</a> </li>
								<li> <a href="https://sites.meetpeopleworld.com/">Sites</a> </li>
								<li> <a href="https://marketplace.meetpeopleworld.com/">Marché</a> </li>
								<li> <a href="https://social.meetpeopleworld.com/">RDV</a> </li>
							</ul> 
						</div>

                    </div>


                </div>
            </div>
        </header>

        <div id="content">
            <div class="container">
                <div class="col-sm-6 col-sm-offset-3" id="error-page">
                    <div class="box">
                        <h1><?php echo JText::_('JERROR_LAYOUT_PAGE_NOT_FOUND'); ?></h1>
                        <div class="container-fluid">
				<div class="row">
				<div class="col-xs-12 co-md-12 col-lg-12">
					<div class="well">
						<div class="row">
							<div class="col-xs-12 co-md-6 col-lg-6">
								<p><strong><?php echo JText::_('JERROR_LAYOUT_ERROR_HAS_OCCURRED_WHILE_PROCESSING_YOUR_REQUEST'); ?></strong></p>
								<p><?php echo JText::_('JERROR_LAYOUT_NOT_ABLE_TO_VISIT'); ?></p>
								<ul>
									<li><?php echo JText::_('JERROR_LAYOUT_AN_OUT_OF_DATE_BOOKMARK_FAVOURITE'); ?></li>
									<li><?php echo JText::_('JERROR_LAYOUT_MIS_TYPED_ADDRESS'); ?></li>
									<li><?php echo JText::_('JERROR_LAYOUT_SEARCH_ENGINE_OUT_OF_DATE_LISTING'); ?></li>
									<li><?php echo JText::_('JERROR_LAYOUT_YOU_HAVE_NO_ACCESS_TO_THIS_PAGE'); ?></li>
								</ul>
							</div>
							<div class="col-xs-12 co-md-6 col-lg-6">
								<?php if (JModuleHelper::getModule('search')) : ?>
									<p><strong><?php echo JText::_('JERROR_LAYOUT_SEARCH'); ?></strong></p>
									<p><?php echo JText::_('JERROR_LAYOUT_SEARCH_PAGE'); ?></p>
									<?php echo $docs->getBuffer('module', 'search'); ?>
								<?php endif; ?>
								<p><?php echo JText::_('JERROR_LAYOUT_GO_TO_THE_HOME_PAGE'); ?></p>
								<p class="buttons"><a href="<?php echo $this->baseurl; ?>" class="btn btn-template-main"><i class="fa fa-home"></i> <?php echo JText::_('JERROR_LAYOUT_HOME_PAGE'); ?></a>
							</div>
						</div>
						<hr>
						<p><?php echo JText::_('JERROR_LAYOUT_PLEASE_CONTACT_THE_SYSTEM_ADMINISTRATOR'); ?></p>
						<blockquote>
							<span class="label label-danger"><?php echo $this->error->getCode(); ?></span> <?php echo htmlspecialchars($this->error->getMessage(), ENT_QUOTES, 'UTF-8');?>
						</blockquote>
						<?php if ($this->debug) : ?>
							<?php echo $this->renderBacktrace(); ?>
						<?php endif; ?>
					</div>
				</div>
            </div>
						</div>

                        
                        </p>
                    </div>


                </div>
            </div>
        </div>
<div id="get-it"> 
	<div class="container"> 
		<div class="col-md-8 col-sm-12"> 
			<h3>On a tous des problèmes, utiliser notre plateforme peut vous aidez!</h3> 
		</div>
		<div class="col-md-4 col-sm-12"> 
			<a href="https://panel.meetpeopleworld.com/" class="btn btn-template-transparent-primary">S'inscrire</a> 
		</div>
	</div>
</div>

<footer id="footer"> 
	<div class="container"> 
		<div class="col-md-3 col-sm-6"> 
			<h4>Être informer</h4> 
			<p><a href="https://www.meetpeopleworld.com/information/abouts.html">A propos de nous</a> - <a href="https://www.meetpeopleworld.com/information/notice-legal.html">Mention Légale</a> - <a href="https://www.alexonbalangue.me/information/roadmap.html" target="_blank">Feuille de route</a> - <a href="https://www.meetpeopleworld.com/information/terms-of-use.html">Condition Général d'Utilisation</a> - <a href="https://www.meetpeopleworld.com/information/terms-sell.html">Condition Général de Ventes</a> - <a href="https://www.meetpeopleworld.com/information/privacy-policy.html">Politique de confidentialité</a></p><hr class="hidden-md hidden-lg hidden-sm"> 
		</div>
		<div class="col-md-3 col-sm-6"> 
		<h4>Nos services</h4> 
		<p><a href="https://www.meetpeopleworld.com/information.html">Information</a> - <a href="https://docs.meetpeopleworld.com/">Documentation</a> - <a href="https://www.alexonbalangue.me/portfolio/meetpeopleworld.html">Applications &amp; Logiciels</a> - <a href="https://search.meetpeopleworld.com/">Moteur de recherche</a> - <a href="#" onclick="window.external.AddSearchProvider('https://www.meetpeopleworld.com/opensearch.xml');">Ajouter OpenSearch</a></p><hr class="hidden-md hidden-lg hidden-sm"> </div>
		<div class="col-md-3 col-sm-6"> 
		<h4>Site maintenue</h4> 
		<p><i class="fa fa-html5 fa-4x"></i> <i class="fa fa-css3 fa-4x"></i></p><hr class="hidden-md hidden-lg hidden-sm"> 
		</div>
		<div class="col-md-3 col-sm-6"> 
		<h4>Actualités</h4> 
		<p><a href="#"><i class="fa fa-sitemap fa-4x"></i></a> <a href="#"><i class="fa fa-rss fa-4x"></i></a></p><hr class="hidden-md hidden-lg hidden-sm"> 
		</div>
	</div>
</footer>

        <div id="copyright">
            <div class="container">
                <div class="col-md-12">
						<p class="text-center"><i class="fa fa-mobile fa-5x"></i> <i class="fa fa-tablet fa-5x"></i> <i class="fa fa-laptop fa-5x"></i> <i class="fa fa-desktop fa-5x"></i> <br>
					Nous sommes 100% amis avec les moteur de recherches et multiplateformes avec n'importe quelles choix de votre navigateur internet.<p>
                    <p class="pull-left"><span itemprop="copyrightHolder">&copy; <a href="<?php echo $this->baseurl; ?>"><?php echo $sitename; ?></a></span> - <span itemprop="copyrightYear"><?php echo date('Y'); ?></span> </p><p class="pull-right">
					Conception by <a href="//www.AlexonBalangue.me" target="_top">www.AlexonBalangue.me</a> <br>Webdesigner by <a href="//www.bootstrapious.com" target="_top">www.Bootstrapious.com</a>
					<br />Toute reproduction interdite sans l'autorisation de l'auteur. </p>
				
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/js/bootstrap.min.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-cookie/1.4.1/jquery.cookie.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/waypoints/4.0.1/jquery.waypoints.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Counter-Up/1.0.0/jquery.counterup.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-parallax/1.1.3/jquery-parallax-min.js"></script>
    <script src="<?php echo $this->baseurl; ?>/templates/<?php echo $this->template; ?>/assets/js/front.js"></script>

    <?php echo $docs->getBuffer('modules', 'debug', array('style' => 'none')); ?>



</body>

</html>