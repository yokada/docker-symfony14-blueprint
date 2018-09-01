<?php

/**
 * content actions.
 * http://jobeet.local/frontend.php/content/show
 *
 * @package    apps
 * @subpackage content
 * @author     Your name here
 * @version    SVN: $Id: actions.class.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class contentActions extends sfActions
{
 /**
  * Executes index action
  *
  * @param sfRequest $request A request object
  */
  public function executeIndex(sfWebRequest $request)
  {
    $this->forward('default', 'module');
  }

  public function executeShow(sfWebRequest $request)
  {
    // カスタムビューを呼び出すには、つぎのように終わらせます:
    //return 'MyResult';

    // 呼び出すビューが存在しない場合、たとえばバッチプロセスのなかで実行されたアクションの場合、アクションはつぎのように終わります:
    //return sfView::NONE;

    // 404 エラー
    //if ($check404) {
    //  $this->forward404();
    //}

    // レイアウト変更
    //$this->setTemplate('myCustomTemplate');

    return sfView::SUCCESS;
  }
}
