<?php  defined('C5_EXECUTE') or die("Access Denied.");

class KansaiugDisplaydateBlockController extends BlockController {
	
	protected $btName = '作成日・公開日　表示';
	protected $btDescription = '作成日や公開日を表示';
	protected $btTable = 'btDCKansaiugDisplaydate';
	
	protected $btInterfaceWidth = "700";
	protected $btInterfaceHeight = "450";
	
	protected $btCacheBlockRecord = true;
	protected $btCacheBlockOutput = true;
	protected $btCacheBlockOutputOnPost = true;
	protected $btCacheBlockOutputForRegisteredUsers = false;
	protected $btCacheBlockOutputLifetime = CACHE_LIFETIME;
	

	public function view() {
		$c = Page::getCurrentPage();
		$this->set('modifieddate',$c->getCollectionDateLastModified());
		$this->set('publicdate', $c->getCollectionDatePublic());
	}
}
