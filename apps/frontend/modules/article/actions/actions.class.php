<?php

/**
 * article actions.
 *
 * @package    news
 * @subpackage article
 * @author     Your name here
 * @version    SVN: $Id: actions.class.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class articleActions extends sfActions
{
  public function executeIndex(sfWebRequest $request)
  {
    $this->pager = new sfDoctrinePager(
       'XArticle',
        sfConfig::get('app_max_articles_on_homepage')
    );

    $this->pager->getQuery();

    $this->pager->setPage($this->getRequestParameter('page',1));

    $this->pager->init();
   
  }

  
}
