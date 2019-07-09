<?php

use Phalcon\Mvc\Controller; 

class IndexController extends Controller
{
    public function indexAction()
    { 
 echo '<h1>Hello!</h1>';
 }

 public function addAction()
    { 
  

$catalog = new Catalog();

        // Store and check for errors
        $success = $catalog->save(
            $this->request->getPost(),
            [
                "catalogid",
                "journal",
                "publisher",
                "edition",
                "title",
                "author",
            ]
        );

        if ($success) {
            echo "Catalog Entry added";
        } else {
            echo "Catalog entry could not be added: ";

            $messages = $catalog->getMessages();

            foreach ($messages as $message) {
                echo $message->getMessage(), "<br/>";
            }
        }

        $this->view->disable();
    }
     
}

?>