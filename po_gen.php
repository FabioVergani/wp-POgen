<?php 

private $Po=[];

			private function _t($s,$c=''){
				$k=empty($c);
				if(false){
					$instance=$this;
					$t=$instance->Flag;
					if($t->PoGuidelines && $t->DebugMe){
					 $n=PHP_EOL;
					 $e=debug_backtrace()[0];
					 $m=$e['args'];
					 array_push($instance->Po,('#: '.(array_pop(explode('/',$e['file']))).':'.$e['line'].($k!==true?($n.'msgctxt "'.$c.'"'):'').$n.'msgid "'.$m[0].'"'.$n.'msgstr ""'.$n));
					};
				};
				$t=CustomPost::TextDomain;
				return $k?translate($s,$t):translate_with_gettext_context($s,$c,$t);	
			}
