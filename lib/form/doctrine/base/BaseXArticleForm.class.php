<?php

/**
 * XArticle form base class.
 *
 * @method XArticle getObject() Returns the current form's model object
 *
 * @package    news
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BaseXArticleForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'         => new sfWidgetFormInputHidden(),
      'paper_id'   => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('XPaper'), 'add_empty' => true)),
      'title'      => new sfWidgetFormTextarea(),
      'url'        => new sfWidgetFormInputText(),
      'sumarry'    => new sfWidgetFormTextarea(),
      'created_at' => new sfWidgetFormDateTime(),
      'updated_at' => new sfWidgetFormDateTime(),
    ));

    $this->setValidators(array(
      'id'         => new sfValidatorChoice(array('choices' => array($this->getObject()->get('id')), 'empty_value' => $this->getObject()->get('id'), 'required' => false)),
      'paper_id'   => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('XPaper'), 'required' => false)),
      'title'      => new sfValidatorString(array('max_length' => 1000)),
      'url'        => new sfValidatorString(array('max_length' => 255)),
      'sumarry'    => new sfValidatorString(array('max_length' => 4000, 'required' => false)),
      'created_at' => new sfValidatorDateTime(),
      'updated_at' => new sfValidatorDateTime(),
    ));

    $this->widgetSchema->setNameFormat('x_article[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'XArticle';
  }

}
