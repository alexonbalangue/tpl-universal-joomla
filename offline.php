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
$sitename = $apps->get('sitename');
$this->language  = $docs->language;
$this->direction = $docs->direction;

$this->_script = $this->_scripts = array();	

unset($docs->_scripts[JURI::root(true) . '/media/system/js/mootools-more.js']);
unset($docs->_scripts[JURI::root(true) . '/media/system/js/mootools-core.js']);
unset($docs->_scripts[JURI::root(true) . '/media/system/js/core.js']);
unset($docs->_scripts[JURI::root(true) . '/media/system/js/modal.js']);
unset($docs->_scripts[JURI::root(true) . '/media/system/js/caption.js']);
unset($docs->_scripts[JURI::root(true) . '/media/jui/js/jquery.min.js']);
unset($docs->_scripts[JURI::root(true) . '/media/jui/js/jquery-migrate.min.js']);
unset($docs->_scripts[JURI::root(true) . '/media/jui/js/jquery-noconflict.js']);
unset($docs->_scripts[JURI::root(true) . '/media/jui/js/bootstrap.min.js']);

require_once JPATH_ADMINISTRATOR . '/components/com_users/helpers/users.php';

$twofactormethods = UsersHelper::getTwoFactorMethods();
?>
<!DOCTYPE html>
<html lang="<?php echo $this->language; ?>" dir="<?php echo $this->direction; ?>">
[head]
	[meta charset="utf-8" /]
	[title]<?php echo $sitename.' - '.JText::_('JOFFLINE_MESSAGE'); ?>[/title]
	[begins tags='meta' more='name="viewport" content="width=device-width, initial-scale=1"' /]
	[begins tags='meta' more='name="robots" content="noindex,nofollow"' /]	
	[link rel="stylesheet" href="<?php echo $this->baseurl.'/templates/'.$this->template.'/assets/production/css/offline.min.css'; ?>" type="text/css" /]
	<?php if ($apps->get('debug_lang', '0') == '1' || $apps->get('debug', '0') == '1') : ?>
		[link rel="stylesheet" href="<?php echo $this->baseurl; ?>/media/cms/css/debug.css" type="text/css" /]
	<?php endif; ?>
	[link rel="shortcut icon" href="<?php echo $this->baseurl; ?>/templates/<?php echo $this->template; ?>/favicon.ico" type="image/vnd.microsoft.icon" /]
	[link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.min.css" type="text/css" /]
	[link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/css/bootstrap.min.css" type="text/css" /]
	[link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css" type="text/css" /]
	<link href="<?php echo $this->baseurl; ?>/templates/<?php echo $this->template; ?>/assets/css/style.blue.css" rel="stylesheet" id="theme-stylesheet">
	<!--<if lt IE 9>
		[script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.min.js" /]
	<!<endif>-->
[/head]
[begins tags="body" mdatatype="http://schema.org/WebPage" /]
<jdoc:include type="message" />
    [begins tags="div" id="all" /] 
        [header]

            [begins tags="div" class="navbar-affixed-top" data-spy="affix" data-offset-top="200" /] 

                [begins tags="div" class="navbar navbar-default yamm" role="navigation" id="navbar" /] 

                    [begins tags="div" class="container" /] 
                        [begins tags="div" class="navbar-header" /] 

                            <a class="navbar-brand home" href="index.html">
                                <img src="<?php echo $this->baseurl.'/templates/'.$this->template.'/assets/images/logo.png'; ?>" width="187" height="42" alt="<?php echo $sitename; ?>" class="hidden-xs hidden-sm">
                                <img src="<?php echo $this->baseurl.'/templates/'.$this->template.'/assets/images/logo-small.png'; ?>" width="110" height="47" alt="<?php echo $sitename; ?>" class="visible-xs visible-sm"><span class="sr-only"><?php echo $sitename; ?></span>
                            </a>
                            [begins tags="div" class="navbar-buttons" /] 
                                <button type="button" class="navbar-toggle btn-template-main" data-toggle="collapse" data-target="#navigation">
                                    <span class="sr-only">Toggle navigation</span>
                                    <i class="fa fa-align-justify"></i>
                                </button>
                            [ends tags="div" /] 
                        [ends tags="div" /] 
                    [ends tags="div" /] 
                [ends tags="div" /] 
            [ends tags="div" /] 
       [/header]

        [begins tags="div" class="modal fade" id="login-modal" tabindex="-1" role="dialog" aria-labelledby="Login" aria-hidden="true" /] 
            [begins tags="div" class="modal-dialog modal-sm" /] 

                [begins tags="div" class="modal-content" /] 
                    [begins tags="div" class="modal-header" /] 
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                        <h4 class="modal-title" id="Login">Sorry, Member team login only</h4>
                    [ends tags="div" /] 
                    [begins tags="div" class="modal-body" /] 
						[begins tags='form' more='action="<?php echo JRoute::_('index.php', true); ?>" method="post"' /]  
							[begins tags="div" class="form-group" /]  
								[begins tags='label' more='for="username"' /]<?php echo JText::_('JGLOBAL_USERNAME'); ?>[ends tags="label" /]
								[input name="username" id="username" type="text" class="form-control" placeholder="<?php echo JText::_('JGLOBAL_USERNAME'); ?>" /]
							[ends tags="div" /]  
							[begins tags="div" class="form-group" /] 
								[begins tags='label' more='for="passwd"' /]<?php echo JText::_('JGLOBAL_PASSWORD'); ?>[ends tags="label" /]
								[input type="password" name="password" class="form-control" placeholder="<?php echo JText::_('JGLOBAL_PASSWORD'); ?>" id="passwd" /]
							[ends tags="div" /]  
							<?php if (count($twofactormethods) > 1) : ?>
								[begins tags="div" class="form-group" /] 
									[begins tags='label' more='for="secretkey"' /]<?php echo JText::_('JGLOBAL_SECRETKEY'); ?>[ends tags="label" /]
									[input type="text" name="secretkey" class="form-control" placeholder="<?php echo JText::_('JGLOBAL_SECRETKEY'); ?>" id="secretkey" /]
								[ends tags="div" /]  
							<?php endif; ?>
							[input type="submit" name="Submit" class="btn btn-template-main" value="<?php echo JText::_('JLOGIN'); ?>" /]
							[input type="hidden" name="option" value="com_users" /]
							[input type="hidden" name="task" value="user.login" /]
							[input type="hidden" name="return" value="<?php echo base64_encode(JUri::base()); ?>" /]
							<?php echo JHtml::_('form.token'); ?>
						[ends tags="form" /]

                    [ends tags="div" /] 
                [ends tags="div" /] 
            [ends tags="div" /] 
        [ends tags="div" /] 
        [begins tags="div" id="content" /] 
            [begins tags="div" class="container" /] 

                [begins tags="div" class="col-sm-6 col-sm-offset-3" id="error-page" /] 

                    [begins tags="div" class="box" /] 

                        <p class="text-center">
                                <?php if ($apps->get('offline_image') && file_exists($apps->get('offline_image'))) : ?>
							<img width="350" height="200" itemprop="primaryImageOfPage" src="<?php echo $apps->get('offline_image'); ?>" alt="<?php echo $sitename.' - '.JText::_('JOFFLINE_MESSAGE'); ?>" class="img-responsive">
									<meta itemprop="image" content="<?php echo $apps->get('offline_image'); ?>">
					<?php endif; ?>
                        </p>

                        <h3><?php echo $sitename; ?></h3>
                        <h4 class="text-muted"><?php echo JText::_('JOFFLINE_MESSAGE'); ?></h4>
                        

                        <?php if ($apps->get('display_offline_message', 1) == 1 && str_replace(' ', '', $apps->get('offline_message')) != '') : ?>
							[begins tags="span" class="skills" /]<?php echo $apps->get('offline_message'); ?>[ends tags="span" /]
						<?php elseif ($apps->get('display_offline_message', 1) == 2 && str_replace(' ', '', JText::_('JOFFLINE_MESSAGE')) != '') : ?>
							[begins tags="span" class="skills" /]<?php echo JText::_('JOFFLINE_MESSAGE'); ?>[ends tags="span" /]
						<?php endif; ?>	
                    [ends tags="div" /] 


                [ends tags="div" /] 
            [ends tags="div" /] 
        [ends tags="div" /] 
						[ends tags="div" /] 

                        
                        </p>
                    [ends tags="div" /] 


                [ends tags="div" /] 
            [ends tags="div" /] 
        [ends tags="div" /] 
[begins tags="div" id="get-it" /] 
	[begins tags="div" class="container" /] 
		[begins tags="div" class="col-md-8 col-sm-12" /]  
			<h3>Un peut de patience, ne fait pas de mal et à bientôt!</h3> 
		[ends tags="div" /] 
		[begins tags="div" class="col-md-4 col-sm-12" /]  
			<a href="#" class="btn btn-template-transparent-primary" disabled>Prochainement</a> 
		[ends tags="div" /] 
	[ends tags="div" /] 
[ends tags="div" /] 

 [begins tags="footer" id="footer" /] 
	[begins tags="div" class="container" /]  
		[begins tags="div" class="col-md-12 col-sm-12" /] 
				<p class="text-center"><i class="fa fa-mobile fa-5x"></i> <i class="fa fa-tablet fa-5x"></i> <i class="fa fa-laptop fa-5x"></i> <i class="fa fa-desktop fa-5x"></i> <br>
					Nous sommes 100% amis avec les moteur de recherches et multiplateformes avec n'importe quelles choix de votre navigateur internet.<p>
		[ends tags="div" /] 
	[ends tags="div" /] 
[ends tags="footer" /] 

        [begins tags="div" id="copyright" /] 
            [begins tags="div" class="container" /] 
                [begins tags="div" class="col-md-12" /] 
                    <p class="pull-left">Copyright <span itemprop="copyrightHolder">&copy; <a href="<?php echo $this->baseurl; ?>"><?php echo $sitename; ?></a></span> - <span itemprop="copyrightYear"><?php echo date('Y'); ?></span> Toutes Droits Réservés.</p>
					<p class="pull-right">
					Conception par <a href="//www.AlexonBalangue.me" target="_top">www.AlexonBalangue.me</a> | Webdesigner par <a href="//www.bootstrapious.com" target="_top">www.Bootstrapious.com</a> </p>
				
                [ends tags="div" /] 
            [ends tags="div" /] 
        [ends tags="div" /] 
    [ends tags="div" /] 
		[script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/1.12.4/jquery.min.js" /] 
		[script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/js/bootstrap.min.js" /] 
		[script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-cookie/1.4.1/jquery.cookie.min.js" /] 
		[script src="https://cdnjs.cloudflare.com/ajax/libs/waypoints/4.0.1/jquery.waypoints.min.js" /] 
		[script src="https://cdnjs.cloudflare.com/ajax/libs/Counter-Up/1.0.0/jquery.counterup.min.js" /] 
		[script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-parallax/1.1.3/jquery-parallax-min.js" /] 
		[script src="<?php echo $this->baseurl; ?>/templates/<?php echo $this->template; ?>/assets/js/front.js" /] 

[ends tags="body" /]  

</html>