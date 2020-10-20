<?php
    namespace App;

    class Article{

        public function getURL(){
            return 'index.php?action=article&id_plat='.$this->id_plat;
        }

        public function getExtrait(){
            $description = strip_tags($this->description);
            if(preg_match('#(\w+\W+){20}\w+#s',$description,$out)){
                $html = "<div>".$out[0]."...<a href='".$this->getURL()."'>voir la suite</a></div>";
            }else{
                $html = "<div>".$description."</div>";
            }

            return $html;

        }



    }



?>