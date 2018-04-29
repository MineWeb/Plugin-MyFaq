<?php
class Faq extends AppModel{

    public $useTable = "myfaq__faq";

    public function afterSave($created, $options=[]){
        if($created)
            $this->getEventManager()->dispatch(new CakeEvent('afterFaqSave', $this));
    }

}
